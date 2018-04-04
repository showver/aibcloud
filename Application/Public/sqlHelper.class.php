<?php

class SqlHelper{
	public $mysqli;
	public $host="localhost";
	public $user="anonymous";
	public $pwd="aibcloud";
	public $db="cloud";
	function __construct(){
		$this ->mysqli=new MYSQLi("$this->host","$this->user","$this->pwd","$this->db");
		if($this->mysqli->connect_error){
			die("连接失败".$this->mysqli->connect_error);
		}
		$this->mysqli->query("set names utf8");
	}
	function execute_dql($sql){
		$res=$this ->mysqli->query($sql) or die("操作sql".$this->mysqli->error);
		return $res;
	}
	function execute_dql2($sql){
		$arr=array();
		$res=$this ->mysqli->query($sql) or die("操作dql".$this->mysqli->error);
		while($row=$res->fetch_assoc()){
			$arr[]=$row;		
		} 
		$res->free();
		return $arr;
	}
	function execute_dml(){
		$res=$this->mysqli->query($sql) or die("操作dml".$rhis->mysqli->error);
		if(!$res){
			return 0; //表示失败
		}else{
			if($this->mysqli->affected_rows>0){
				return 1; //表示成功
			}else{
				return 2; //表示没有行受影响
			}
		}
	}
		function close_connect(){
		$this->mysqli->close();
  }
}
?>