<?php
namespace Admin\Controller;
use Think\Controller;
include "./application/Common/email.php";
class LoginController extends Controller {
   public function login(){
         // layout("newlayout");
   	    if(!empty($_POST)){
   			$post = I('post.');
   			$User = M('User');
   			$result = $User->where("(username='{$post['username']}' or stu_number='{$post['username']}') and password='{$post['password']}'")->field('username,stu_number,email,qq,level,password')->find();
   			//dump($result);
   			if($result!=null){
   				$_SESSION['username'] = $result['username'];
   				$_SESSION['level'] = $result['level'];
   				$_SESSION['password'] = $result['password'];
          $_SESSION['stu_number'] = $result['stu_number'];
          $_SESSION['email'] = $result['email'];
      //level的值为0,1,2,3，分别对应管理员，教师，学生，普通用户
   				if($result['level']==2){
 					//$this->success('哈哈','Stu/stuCenter');
   					//$this->redirect('Stu/persInfo',array('level'=>$result['level']),0,'11');
   					$this->redirect('Stu/servAppl');
   				}elseif ($result['level']==1) {
   					$this->redirect('Stu/servAppl');
   				}elseif ($result['level']==3) {
                  $this->redirect('Stu/servAppl');
               }elseif($result['level']==0){
                  $this->redirect('Admin/index');
               }
   			}
  

   		}

		$this->display();

		
   }

   public function end(){

   		unset($_SESSION['username']);
         unset($_SESSION['level']);
         unset($_SESSION['password']);
         unset( $_SESSION['stu_number']);
         unset($_SESSION['email']);
   		$this->redirect('login','',0,'');

   	//$this->redirect('/home/index','',0,'');

   }
   
   public function register(){
	 // layout("newlayout");
	 if(!empty($_POST)){
      var_dump($_POST);return;
      $post = I('post.');
      //验证验证码
      if($post['code']!=$_SESSION['code']){
         return "验证码错误";
      }

      $User = M('User');	
		$u = $User->where("username='{$post['username']}'")->field('id')->find();
		if($u['id']!=null){
			echo '用户名已被注册！';
			return;
		}else{
			$post['cre_time'] = time();
			$result = $User->data($post)->add();

			if($result!=0){
				echo '注册成功';return;
				//$this->redirect('login','',2,'注册成功');

			}else{
			echo '注册失败';return;
			}
		}
	}
			

	 $this->display();

  }

  //发送验证码
  public function sendCode(){
      $post['email'] = I('post.email');
      $User = M('User');
      $email = $User->where("email='{$post['email']}'")->find();
      if($email){
         echo '邮箱已被注册过';return;
      }else{
         //生成4位随机码
         for($i=0;$i<4;$i++){
            $data = 'abcdefghijklmnopqrstuvwxyz56789';
            $fontcontent = substr($data,mt_rand(0,strlen($data)-1),1);
            $code .= $fontcontent;
         }
         $_SESSION['code'] = $code;
         $to = $post['email'];
         $title = '欢迎注册AIB云平台';
         $content = '如非本人操作，请忽略此邮件，本次操作验证码为：'.$code;
         $result = myemail($to,$title,$content);
          if($result){
            echo '发送成功';
          }else{
            echo '发送失败';
          }
         //echo $code;return;

       }


  }

   public function forgot(){
		$this->display();
   }

   public function perInfo(){
		$this->display();
   }


}