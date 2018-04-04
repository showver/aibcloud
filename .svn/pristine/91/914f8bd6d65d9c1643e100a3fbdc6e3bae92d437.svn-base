<?php
include 'sqlHelper.class.php';
	class Paging{
		function getpagecount($pageSize){
			$sql="select count(*) from stu_info";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dql($sql);
			if($row=$res->fetch_row()){
				$pageCount=ceil($row[0]/$pageSize);
				return $pageCount;
			}
		}
		function getListByPage($pageNow,$pageSize){
			//$sql="select * from stu_info limit ".($pageNow-1)*$pageSize.",$pageSize";
			$sql="select s_webpath,s_userid,s_webname,s_view,s_nick from stu_info limit ".($pageNow-1)*$pageSize.",$pageSize";	
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dql2($sql);
			return $res;
		}
		function searchGetListByPage($search,$pageNow,$pageSize){
			$sql="select s_webpath,s_userid,s_webname,s_view,s_nick from stu_info where s_class = '$search' limit ".($pageNow-1)*$pageSize.",$pageSize";	
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dql2($sql);
			return $res;
		}
}
?>