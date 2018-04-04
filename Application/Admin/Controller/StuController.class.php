<?php
namespace Admin\Controller;
use Think\Controller;
require("./Public/function/image.func.php");
class StuController extends CommonController {

	public function persInfo(){
		$User = M('User');
		$r = $User->where("username='{$_SESSION['username']}'")->field('netname,netdescribt,stu_number,phnumber,qq,perdescribt,cre_time')->find();
		$this->assign('r',$r);
		$this->display();
	}


	public function servAppl(){

		$User = M('User');
		$vsphere = M('vsphere');
		$openstack = M('openstack');
		$svn = M('svn');
		$db = M('db');
		$Score = M('Score');
		//取出个人信息
		$r = $User->where("username='{$_SESSION['username']}'")->field('id,phnumber,qq,perdescribt,stu_number,level,cre_time')->find();
		//取出个人成绩
		$r['score'] = $Score->where("to_id={$r['id']}")->field('one_score,two_score,three_score,term_score,name')->find();
		//取出服务器资源申请情况
		$r['vsphere'] = $vsphere->where("applicant='{$_SESSION['username']}'")->find();
		$r['openstack'] = $openstack->where("applicant='{$_SESSION['username']}'")->find();
		$r['svn'] = $svn->where("applicant='{$_SESSION['username']}'")->find();
		$r['db'] = $db->where("db_user='{$_SESSION['stu_number']}'")->find();
		$this->assign('r',$r);
		$this->display();

	}

//销毁申请
	public function del(){
		$table = $_POST['table'];
		$post['del_why'] = I('post.del_why');
		$post['del_state'] = '申请中';
		$post['del_time'] = time();
		$table = M("$table");
		$r = $table->where("username='{$_SESSION['username']}'")->save($post);
		if($r){
			echo '销毁申请提交成功';
		}else{
			echo '提交失败';
		}


	}

//申请openstack
	public function openstack(){
		$openstack = M('openstack');
		$r = $openstack->where("applicant='{$_SESSION['username']}'")->find();
		//var_dump($r);
		//判断是否已申请过
		if($r!=null){
			echo '申请审核中或您已申请过!!!';
		}else{
			$post = I('post.');
			$post['addtime'] = time();
			$post['applicant'] = $_SESSION['username']; 
			$result = $openstack->data($post)->add();
			echo '申请已提交，请耐心等待管理员审批';
		}
	}

//申请vSphere
	public function vsphere(){
		$Vsphere = M('vsphere');
		$r = $Vsphere->where("applicant='{$_SESSION['username']}'")->find();
		//var_dump($r);
		//判断是否已申请过
		if($r!=null){
			echo '申请审核中或您已申请过!!!';
		}else{
			$post = I('post.');
			$post['addtime'] = time();
			$post['applicant'] = $_SESSION['username']; 
			$result = $Vsphere->data($post)->add();
			echo '申请已提交，请耐心等待管理员的审批!谢谢!';
		}

	}
//申请SVN
	public function svn(){
		$svn = M('svn');
		$r = $svn->where("applicant='{$_SESSION['username']}'")->find();
		//var_dump($r);
		//判断是否已申请过
		if($r!=null){
			echo '申请审核中或您已申请过!!!';
		}else{
			$post = I('post.');
			$post['addtime'] = time();
			$post['applicant'] = $_SESSION['username']; 
			$result = $svn->data($post)->add();
			echo '申请已提交，请耐心等待管理员审批';
		}
	}

//申请数据库
	public function mysql(){
		$post = I('post.');
		$post['db_user'] = $_SESSION['stu_number'];
		$post['applicant'] = $_SESSION['username'];
		$post['addtime'] = time();
		//判断是否已经创建过数据库
		$db = M('db');
		$r = $db->where("db_user='{$post['db_user']}'")->find();
		if($r){
			echo '您已经创建过数据库了，请勿创建多个';return;
		}

		$r = $db->where("db='{$dbname}'")->find();	
		//后台再次检测，是否已有同名数据库的存在
		$r = $this->check($post['db']);
		 if($r==0){
		 	echo '数据库名已存在';return;
		 	//密码为空的话，设置为平台登录密码
		 }else{
		 	if(empty($post['db_pass'])){
		 		$post['db_pass'] = $_SESSION['password'];
		 	}
		 	$Model = M();
		 	//创建mysql用户		 	
		 	$sql = "insert into mysql.user(Host,User,Password) values('%','{$post['db_user']}',password('{$post['db_pass']}'))";
		 	$r = $Model->execute($sql);
		 	if($r){
				//为用户创建一个数据库
				$sql = "create database {$post['db']}";
				$r = $Model->execute($sql);
				if($r){
					//刷新权限
					$sql = "flush privileges";
					$Model->execute($sql);
					//授予用户拥有的权限
					$sql = "grant create,insert,update,delete,drop,select on {$post['db']}.* to '{$post['db_user']}'@'%'";
					$r = $Model->execute($sql);
					//刷新权限
					$sql = "flush privileges";
					$Model->execute($sql);
					//把该用户创建好的数据库登录信息，写入表中。
					 $db = M('db');
					 $r = $db->add($post);
					 if($r){
					 	echo '数据库创建成功';
					 }else{
					 	echo '用户信息写库失败';
					 }
					

				}else{
					echo '创建数据库失败';
				}

		 	}else{
		 		echo '创建mysql用户失败';
		 	}
		 	
			
		 }

	}

//ajax检查是否数据库名已存在
	public function checkdb(){
		$post['db'] = I('post.db');
		$db = M('db');
		$r = $db->where("db='{$post['db']}'")->find();
		if(empty($r)){
			echo 1;
		}else{
			echo 0;
		}
	}

//后台检查是否数据库名已存在
	public function check($dbname){
		$db = M('db');
		$r = $db->where("db='{$dbname}'")->find();
		if(empty($r)){
			return 1;
		}else{
			return 0;
		}
	}

	//上传头像
	public function uploadImg(){

			if($_FILES['tx']['tmp_name']!=""){
		 		if(!@getimagesize($_FILES['tx']['tmp_name'])){
		  		echo '不是真实的图片';return;
	  			}
	
				image_thumb($_FILES['tx']['tmp_name'],150,150);
				echo '修改成功';return;
			}else{
				echo '请选择要修改的图片';return;
			}
	}

	public function upPwd(){
		$post = I('post.');
		if($post['mm']==$_SESSION['password']){
			$User = M('User');
			$User->password = $post['password'];
			$r = $User->where("username='{$_SESSION['username']}'")->save();
			if($r){
				echo '修改成功';
			}else{
				echo '修改失败';
			}
		}else{
			echo '原密码错误！';
		}

	}

//更新个人信息
	public function upInfo(){
		$post = I('post.');
		$User = M('User');
		$r = $User->where("username='{$_SESSION['username']}'")->save($post);
		if($r){
			echo '修改成功';
		}

	}

//上传网站缩略图和修改网站信息
	public function upNet(){
			$post = I('post.');
			$User = M('User');
			$res = $User->where("username='{$_SESSION['username']}'")->field('netname,netdescribt')->find();
			if($res['netname']==$post['netname'] && $res['netdescribt']==$post['netdescribt']){
				//判断是否有选择图片
					if($_FILES['slt']['tmp_name']==""){
						echo '请选择要修改的图片';return;
					}else{

						if(!@getimagesize($_FILES['slt']['tmp_name'])){
							echo '不是真实的图片';return;
						}
						image_thumb($_FILES['slt']['tmp_name'],200,250,1);
						echo '修改成功';return;	
					}

			}else{
				$r = $User->where("username='{$_SESSION['username']}'")->save($post);
				//判断信息是否写成功
				if($r){
					//判断是否有选择图片
					if($_FILES['slt']['tmp_name']==""){
						echo '请选择要修改的图片';return;
					}else{
						if(!@getimagesize($_FILES['slt']['tmp_name'])){
							echo '不是真实的图片';return;
						}
						image_thumb($_FILES['slt']['tmp_name'],200,250,1);
						echo '修改成功';return;			
					}

				}else{
					echo '修改失败';
				}
				


			}
			
			

		
	}










}