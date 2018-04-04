<?php
namespace Admin\Controller;
use Think\Controller;
class TouchUsController extends Controller {
   public function touchUs(){
      // layout('newlayout');
   		if(!empty($_POST)){
   			$post = I('post.');
   			$post['addtime'] = time();
   			$Touchus = M('touchus');
   			$r = $Touchus->add($post);
   			if($r){
   				echo '留言成功';
   			}else{
   				echo '留言失败';
   			}
   			return;
   		}
		$this->display();
   }




}