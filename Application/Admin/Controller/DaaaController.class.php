<?php
namespace Admin\Controller;
use Think\Controller;
class DevelopController extends Controller {
   public function deveProg(){
   		$develop = M('develop');
   		$list = $develop->order('addtime')->select();
   		$this->assign('list',$list);
		$this->display();
   }




}