<?php
namespace Admin\Controller;
use Think\Controller;
class ServerHelpController extends Controller {
   public function document(){
	   $document = M('document');
	   //*******document分页*********
			$count = $document->count();// 查询满足要求的总记录数
			$Page = getpage($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list = $document->order('did')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('page',$show);// 赋值分页输出
			$this->assign('list',$list);
			//*******document分页********
		$this->display();
   }

   public function notice(){
   		$notice = M('notice');
   		$r = $notice->order('addtime desc')->limit(1)->find();
   		$this->assign('r',$r);
		$this->display();
   }

}