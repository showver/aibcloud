<?php
namespace Admin\Controller;
use Think\Controller;
include "./application/Common/email.php";
class AdminController extends Controller {
   public function _initialize(){

		if($_SESSION['level']!=='0'){
			$this->redirect('Home/index/index');
		}
	}

   public function index(){
	    layout(false);
	    $vsphere = M('vsphere');
	    $svn = M('svn');
	    $openstack = M('openstack');
	    $touchus = M('touchus');
	    $document = M('document');
	    $develop = M('develop');
	    $notice = M('notice');
	    	//*******openstack分页*********
			$count = $openstack->count();// 查询满足要求的总记录数
			$Page2 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show2 = $Page2->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list2 = $openstack->order('oid')->limit($Page2->firstRow.','.$Page2->listRows)->select();
			$this->assign('page2',$show2);// 赋值分页输出
			$this->assign('list2',$list2);
			//*******openstack分页********
			 //openstack销毁展示
			 $count = $openstack->where("del_state!=''")->count();// 查询满足要求的总记录数
			 $Page22 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			 $show22 = $Page22->show();// 分页显示输出// 进行分页数据查询
			 $list22 = $openstack->where("del_state!=''")->order('oid')->limit($Page22->firstRow.','.$Page22->listRows)->select();
			 $this->assign('page22',$show22);// 赋值分页输出
			$this->assign('list22',$list22);
			//openstack销毁展示




	    	//*******vsphere分页*********
			$count = $vsphere->count();// 查询满足要求的总记录数
			$Page1 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show1 = $Page1->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list1 = $vsphere->order('vid')->limit($Page1->firstRow.','.$Page1->listRows)->select();
			$this->assign('page1',$show1);// 赋值分页输出
			$this->assign('list1',$list1);
			//*******vsphere分页********
			

			 //vsphere销毁展示
			 $count = $vsphere->where("del_state!=''")->count();// 查询满足要求的总记录数
			 $Page11 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			 $show11 = $Page11->show();// 分页显示输出// 进行分页数据查询
			 $list11 = $vsphere->where("del_state!=''")->order('vid')->limit($Page11->firstRow.','.$Page11->listRows)->select();
			 $this->assign('page11',$show11);// 赋值分页输出
			$this->assign('list11',$list11);
			//vsphere销毁展示


			 //*******SVN分页*********
			$count = $svn->count();// 查询满足要求的总记录数
			$Page = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list = $svn->order('sid')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('page',$show);// 赋值分页输出
			$this->assign('list',$list);
			//*******SVN分页********
			
			 //svn销毁展示
			 $count = $svn->where("del_state!=''")->count();// 查询满足要求的总记录数
			 $Page0 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			 $show0 = $Page0->show();// 分页显示输出// 进行分页数据查询
			 $list0 = $svn->where("del_state!=''")->order('sid')->limit($Page0->firstRow.','.$Page0->listRows)->select();
			 $this->assign('page0',$show0);// 赋值分页输出
			$this->assign('list0',$list0);
			//svn销毁展示
	
			
			//*******历程发布分页*********
			$count = $develop->count();// 查询满足要求的总记录数
			$Page4 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show4 = $Page4->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			  $list4 = $develop->order('did')->limit($Page4->firstRow.','.$Page4->listRows)->select();
			$this->assign('page4',$show4);// 赋值分页输出
			$this->assign('list4',$list4);
			//*******历程发布分页*********
			
			//*******通知发布分页*********
			$count = $notice->count();// 查询满足要求的总记录数
			$Page3 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show3 = $Page3->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			  $list3 = $notice->order('nid')->limit($Page3->firstRow.','.$Page3->listRows)->select();
			$this->assign('page3',$show3);// 赋值分页输出
			$this->assign('list3',$list3);
			//*******通知发布分页*********
	
			//*******文档发布分页*********
			$count = $document->count();// 查询满足要求的总记录数
			$Page5 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show5 = $Page5->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			  $list5 = $document->order('did')->limit($Page5->firstRow.','.$Page5->listRows)->select();
			$this->assign('page5',$show5);// 赋值分页输出
			$this->assign('list5',$list5);
			//*******文档发布分页*********
			

			//*******联系我们分页*********
			$count = $touchus->count();// 查询满足要求的总记录数
			$Page6 = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show6 = $Page6->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list6 = $touchus->order('tid')->limit($Page6->firstRow.','.$Page6->listRows)->select();
			$this->assign('page6',$show6);// 赋值分页输出
			$this->assign('list6',$list6);
			//*******联系我们分页********
			// echo '<pre>';
			// var_dump($res);
			// echo '</pre>';
			


			$this->display();			
		
   }
   //OpenStack 销毁
   public function os_del(){
   		layout(false);
	   	if($_GET['flag']==1){
	   		$openstack = M('openstack');
	   		$data['del_state'] = "已确认销毁";
	   		$rs = $openstack->where("oid={$_GET['id']}")->save($data);
	   		if($rs){
	   			echo "已成功确认销毁";
	   		}else{
	   			echo '确认失败';
	   		}
	   		return;
   		}
   		$this->display();
   }

   //vSphere 销毁
   public function vs_del(){
   		layout(false);
   			if($_GET['flag']==1){
	   		$vsphere = M('vsphere');
	   		$data['del_state'] = "已确认销毁";
	   		$rs = $vsphere->where("vid={$_GET['id']}")->save($data);
	   		if($rs){
	   			echo "已成功确认销毁";
	   		}else{
	   			echo '确认失败';
	   		}
	   		return;
   		}
   		$this->display();
   }

    //SVN 销毁
   public function svn_del(){
   		layout(false);
   			if($_GET['flag']==1){
	   		$svn = M('svn');
	   		$data['del_state'] = "已确认销毁";
	   		$rs = $svn->where("sid={$_GET['id']}")->save($data);
	   		if($rs){
	   			echo "已成功确认销毁";
	   		}else{
	   			echo '确认失败';
	   		}
	   		return;
   		}
   		$this->display();
   }



   //OpenStack
   public function openstack(){
   		layout(false);
   		$openstack = M('openstack');
   		$User = M('User');
   		$app = I('get.app');
   		$rs = $openstack->where("applicant='{$app}'")->find();
   		$rs['user'] = $User->where("username='{$rs['applicant']}'")->field('email,qq,phnumber')->find();
   		//空为申请资源详情页面展示，
   		if(empty($_GET['flag'])){
	   		//判断审核状态，显示不同操作
	   		if($rs['state']=='审核中'){
	   			$shenhe ="<input type='button' value='已通过' class='a_btn' onClick=\"auditing(this.value,'openstack','$app')\"> | <input type='button' value='未通过' class='a_btn' onClick=\"auditing(this.value,'openstack','$app')\"></i>";
	   		}else if($rs['state']=='未通过'){
	   			$shenhe = "<p style='width: 100%;display: block;'><span class='bold'>审核处理备注：　</span><span>{$rs['postil']}</span></p>";

	   		}else if($rs['state']=='已通过'){
	   			$shenhe = "<p style='width: 100%;display: block;'><span class='bold'>审核处理备注：　</span><span>{$rs['postil']}</span></p>";

	   		}

	   		//判断通知状态，显示不同操作
	   		if($rs['email_state']=='未通知'){
	   			$tongzhi ="<i style='margin-left: 145px;'><input type='button' value='发通知' class='a_btn' onClick=\"eMail('".$rs['user']['email']."','openstack','".$rs['applicant']."',0)\"></i></p>";
	   		}else if($rs['email_state']=='已通知'){
	   			$tongzhi = "<i style='display: block;'><p style='width: 100%;padding-left: 2em;'>主题： 关于{$rs['applicant']}的OpenStack代码库申请结果通知</p><p style='width: 100%;padding-left: 2em;'>时间：".date($rs['email_time'],'Y年m月d日 H:i')."</p></i></form></div></div>";
	   		}
	   		echo "<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='check_detail'><a href='javascript:;' onClick='option(11)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>OpenStack云服务器申请</p></div><div class='checkDetail'><form action='?act=search' method='post'><p><span class='bold'>配置信息：</span></p><p><span class='bold'>申请者：</span></p><p><span>操作系统：　</span>win7 旗舰版</p><p><span>姓名：　</span>{$rs['applicant']}</p><p><span>CPU核数：　</span>{$rs['cpu']}</p><p><span>电话：　</span>{$rs['user']['phnumber']}</p><p><span>内存大小：　</span>{$rs['memory']}</p><p><span>邮箱：　</span>{$rs['user']['email']}</p><p><span>云端硬盘：　</span>{$rs['disk']}</p><p><span>QQ：　</span>{$rs['user']['qq']}</p><p style='width: 100%'><span style='float: left;height: 100px;'>申请用途：　</span>{$rs['application']}</p><p style='width: 100%;'><span class='bold'>审核状态：　</span><span style='color: red;'>{$rs['state']}</span>".$shenhe."<p style='color: red;width: 100%;'><span class='bold'>邮件通知主题、时间：　</span><span style='color: red;'>{$rs['email_state']}</span>".$tongzhi;
	   	//不空为销毁详情展示
	   	}else{
	   		if($rs['del_state']=='申请中'){
	   			$xiaohui = "<i style='display: block;'><input type='button' value='确认销毁' class='a_btn' onClick='osAuditing({$rs['oid']})'></i>";
	   		}else{
	   			$xiaohui = "";
	   		}

	   		if($rs['del_notice']=='未通知'){
	   			$tongzhi = "<i style='display: block;'><input type='button' value='发通知' class='a_btn' onClick=\"eMail('".$rs['user']['email']."','openstack','".$rs['applicant']."','del')\"></i></p><i style='display: block;'>";
	   		}else{
	   			$tongzhi = "<p style='width: 100%;padding-left: 2em;'>主题： 关于{$rs['applicant']}的云服务器销毁申请结果通知</p><p style='width: 100%;padding-left: 2em;'>时间： 2017年9月18日 13:25</p></i></form></div></div>";
	   		}

	   		echo "<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='check_detail'><a href='javascript:;' onClick='option(12)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>OpenStack云服务器销毁申请</p></div><div class='checkDetail'><form action='?act=search' method='post'><p><span class='bold'>配置信息：</span></p><p><span class='bold'>申请者：</span></p><p><span>操作系统：　</span>win7 旗舰版</p><p><span>姓名：　</span>{$rs['applicant']}</p><p><span>CPU核数：　</span>{$rs['cpu']}</p><p><span>电话：　</span>{$rs['user']['phnumber']}</p><p><span>内存大小：　</span>{$rs['memory']}</p><p><span>邮箱：　</span>{$rs['user']['email']}</p><p><span>云端硬盘：　</span>{$rs['disk']}</p><p><span>QQ：　</span>{$rs['user']['qq']}</p><p style='width: 100%'><span style='float: left;height: 100px;'>销毁原因：　</span>{$rs['del_why']}</p><p style='width: 100%;'><span class='bold'>销毁状态：　</span><span style='color: red;'>{$rs['del_state']}</span></p>".$xiaohui."<p style='color: red;width: 100%;'><span class='bold'>邮件通知状态：　</span><span style='color: red;'>{$rs['del_notice']}</span>".$tongzhi;


	   	}
	   	

   }

   //vSphere
   public function vsphere(){
   		layout(false);
   		$vsphere = M('vsphere');
   		$User = M('User');
   		$app = I('get.app');
   		$rs = $vsphere->where("applicant='{$app}'")->find();
   		$rs['user'] = $User->where("username='{$rs['applicant']}'")->field('email,qq,phnumber')->find();
	   		
	   		//空为vsphere申请资源详情页面展示，
   		if(empty($_GET['flag'])){
	   		//判断审核状态，显示不同操作
	   		if($rs['state']=='审核中'){
	   			$shenhe ="<input type='button' value='已通过' class='a_btn' onClick=\"auditing(this.value,'vsphere','$app')\"> | <input type='button' value='未通过' class='a_btn' onClick=\"auditing(this.value,'vsphere','$app')\"></i>";
	   		}else if($rs['state']=='未通过'){
	   			$shenhe = "<p style='width: 100%;display: block;'><span class='bold'>审核处理备注：　</span><span>{$rs['postil']}</span></p>";

	   		}else if($rs['state']=='已通过'){
	   			$shenhe = "<p style='width: 100%;display: block;'><span class='bold'>审核处理备注：　</span><span>{$rs['postil']}</span></p>";

	   		}

	   		//判断通知状态，显示不同操作
	   		if($rs['email_state']=='未通知'){
	   			$tongzhi ="<p><i style='margin-left: 145px;'><input type='button' value='发通知' class='a_btn' onClick=\"eMail('".$rs['user']['email']."','vsphere','".$rs['applicant']."',0)\"></i></p>";
	   		}else if($rs['email_state']=='已通知'){
	   			$tongzhi = "<i style='display: block;'><p style='width: 100%;padding-left: 2em;'>主题： 关于{$rs['applicant']}的vsphere代码库申请结果通知</p><p style='width: 100%;padding-left: 2em;'>时间：".date($rs['email_time'],'Y年m月d日 H:i')."</p></i></form></div></div>";

	   		}
	   		 
	   		 echo "<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='check_detail'><a href='javascript:;' onClick='option(21)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>vSpere申请</p></div><div class='checkDetail'><form action='?act=search' method='post'><p><span class='bold'>配置信息：</span></p><p><span class='bold'>申请者：</span></p><p><span>操作系统：　</span>win7 旗舰版</p><p><span>姓名：　</span>{$rs['applicant']}</p><p><span>CPU核数：　</span>{$rs['cpu']}</p><p><span>电话：　</span>{$rs['user']['phnumber']}</p><p><span>内存大小：　</span>{$rs['memory']}</p><p><span>邮箱：　</span>{$rs['user']['email']}</p><p><span>云端硬盘：　</span>{$rs['disk']}</p><p><span>QQ：　</span>{$rs['user']['qq']}</p><p style='width: 100%'><span style='float: left;height: 100px;'>申请用途：　</span>{$rs['application']}</p><p style='width: 100%;'><span class='bold'>审核状态：　</span><span style='color: red;'>{$rs['state']}</span></p>".$shenhe."<p style='color: red;width: 100%;'><span class='bold'>邮件通知主题、时间：　</span><span style='color: red;'>{$rs['email_state']}</span>".$tongzhi;
	   //不为空则显示vsphere销毁详情页面
	   	}else{

	   		if($rs['del_state']=='申请中'){
	   			$xiaohui = "<i style='display: block;'><input type='button' value='确认销毁' class='a_btn' onClick='vsAuditing({$rs['vid']})'></i>";
	   		}else{
	   			$xiaohui = "";
	   		}

	   		if($rs['del_notice']=='未通知'){
	   			$tongzhi = "<i style='display: block;'><input type='button' value='发通知' class='a_btn' onClick=\"eMail('".$rs['user']['email']."','vsphere','".$rs['applicant']."','del')\"></i></p><i style='display: block;'>";
	   		}else{
	   			$tongzhi = "<p style='width: 100%;padding-left: 2em;'>主题： 关于{$rs['applicant']}的vSphere销毁申请结果通知</p><p style='width: 100%;padding-left: 2em;'>时间： 2017年9月18日 13:25</p></i></form></div></div>";
	   		}

	   		echo "<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='check_detail'><a href='javascript:;' onClick='option(22)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>vSpere销毁申请</p></div><div class='checkDetail'><form action='?act=search' method='post'><p><span class='bold'>配置信息：</span></p><p><span class='bold'>申请者：</span></p><p><span>操作系统：　</span>win7 旗舰版</p><p><span>姓名：　</span>{$rs['applicant']}</p><p><span>CPU核数：　</span>{$rs['cpu']}</p><p><span>电话：　</span>{$rs['user']['phnumber']}</p><p><span>内存大小：　</span>{$rs['memory']}</p><p><span>邮箱：　</span>{$rs['user']['email']}</p><p><span>云端硬盘：　</span>{$rs['disk']}</p><p><span>QQ：　</span>{$rs['user']['qq']}</p><p style='width: 100%'><span style='float: left;height: 100px;'>销毁原因：　</span>{$rs['del_why']}</p><p style='width: 100%;'><span class='bold'>销毁状态：　</span><span style='color: red;'>{$rs['del_state']}</span>".$xiaohui."<p style='color: red;width: 100%;'><span class='bold'>邮件通知主题、时间：　</span><span style='color: red;'>{$rs['del_notice']}</span>".$tongzhi;

	   	}
  	
   }

   //SVN
   public function svn(){
   		layout(false);
   		$svn = M('svn');
   		$User = M('User');
   		$app = I('get.app');
   		$rs = $svn->where("applicant='{$app}'")->find();
   		$rs['user'] = $User->where("username='{$rs['applicant']}'")->field('email,qq,phnumber')->find();

   		//空为svn申请资源详情页面展示，
   		if(empty($_GET['flag'])){
	   		//判断审核状态，显示不同操作
	   		if($rs['state']=='审核中'){
	   			$shenhe ="<input type='button' value='已通过' class='a_btn' onClick=\"auditing(this.value,'svn','$app')\"> | <input type='button' value='未通过' class='a_btn' onClick=\"auditing(this.value,'svn','$app')\"></i>";
	   		}else if($rs['state']=='未通过'){
	   			$shenhe = "<p style='width: 100%;display: block;'><span class='bold'>审核处理备注：　</span><span>{$rs['postil']}</span></p>";

	   		}else if($rs['state']=='已通过'){
	   			$shenhe = "<p style='width: 100%;display: block;'><span class='bold'>审核处理备注：　</span><span>{$rs['postil']}</span></p>";

	   		}

	   		//判断通知状态，显示不同操作
	   		if($rs['email_state']=='未通知'){
	   			$tongzhi ="<i style='margin-left: 145px;'><input type='button' value='发通知' class='a_btn' onClick=\"eMail('".$rs['user']['email']."','svn','".$rs['applicant']."',0)\"></i></p>";
	   		}else if($rs['email_state']=='已通知'){
	   			$tongzhi = "<i style='display: block;'><p style='width: 100%;padding-left: 2em;'>主题： 关于{$rs['applicant']}的SVN代码库申请结果通知</p><p style='width: 100%;padding-left: 2em;'>时间：".date($rs['email_time'],'Y年m月d日 H:i')."</p></i></form></div></div>";

	   		}
	   		 
	   		 echo "<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='check_detail'><a href='javascript:;' onClick='option(31)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>SVN代码库申请</p></div><div class='checkDetail'><form action='?act=search' method='post'><p><span class='bold'>项目信息：</span></p><p><span class='bold'>申请者(负责人)：</span></p><p><span>项目名称：</span>{$rs['project_name']}</p><p><span>姓名：　</span>{$rs['applicant']}</p><p><span>成员1：　</span>{$rs['one_member']}</p><p><span>电话：　</span>{$rs['user']['phnumber']}</p><p><span>成员2：　</span>{$rs['two_member']}</p><p><span>邮箱：　</span>{$rs['user']['email']}</p><p><span>成员3：　</span>xiaohong</p><p><span>QQ：　</span>{$rs['user']['qq']}</p><p style='width: 100%'><span style='float: left;height: 100px;'>项目描述：</span>{$rs['project_describt']}</p><p style='width: 100%;'><span class='bold'>审核状态：　</span><span style='color: red;'>{$rs['state']}</span><i style='display:block;margin-left: 75px;'></p>".$shenhe."<p style='color: red;width: 100%;'><span class='bold'>邮件通知主题、时间：　</span><span style='color: red;'>{$rs['email_state']}</span>".$tongzhi;
	   	//不为空则显示svn销毁的详情页面
   		}else{

   			if($rs['del_state']=='申请中'){
	   			$xiaohui = "<i style='display: block;'><input type='button' value='确认销毁' class='a_btn' onClick='svnAuditing({$rs['sid']})'></i>";
	   		}else{
	   			$xiaohui = "";
	   		}

	   		if($rs['del_notice']=='未通知'){
	   			$tongzhi = "<i style='display: block;'><input type='button' value='发通知' class='a_btn' onClick=\"eMail('".$rs['user']['email']."','svn','".$rs['applicant']."','del')\"></i></p><i style='display: block;'>";
	   		}else{
	   			$tongzhi = "<p style='width: 100%;padding-left: 2em;'>主题： 关于{$rs['applicant']}的SVN销毁申请结果通知</p><p style='width: 100%;padding-left: 2em;'>时间： 2017年9月18日 13:25</p></i></form></div></div>";
	   		}


   			echo "<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='check_detail'><a href='javascript:;' onClick='option(32)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>SVN代码库销毁申请</p></div><div class='checkDetail'><form action='?act=search' method='post'><p><span class='bold'>项目信息：</span></p><p><span class='bold'>申请者(负责人)：</span></p><p><span>项目名称：</span>快递系统</p><p><span>姓名：　</span>{$rs['applicant']}</p><p><span>成员1：　</span>{$rs['one_member']}</p><p><span>电话：　</span>{$rs['user']['phnumber']}</p><p><span>成员2：　</span>{$rs['two_member']}</p><p><span>邮箱：　</span>{$rs['user']['email']}</p><p><span>成员3：　</span>xiaohong</p><p><span>QQ：　</span>{$rs['user']['qq']}</p><p style='width: 100%'><span style='float: left;height: 100px;'>销毁原因：</span>{$rs['del_why']}</p><p style='width: 100%;'><span class='bold'>审核状态：　</span><span style='color: red;'>{$rs['del_state']}</span>".$xiaohui."</p><p style='color: red;width: 100%;'><span class='bold'>邮件通知主题、时间：　</span><span style='color: red;'>{$rs['del_notice']}</span>".$tongzhi;
   		}
   }

   //开发历程
   public function develop(){
 		layout(false);
   		$id = I('get.id');
   		if(!empty($id)){
   			$develop = M('develop');
   			$r = $develop->where("did='{$id}'")->find();

   			echo "<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='journey_title'><a href='javascript:;' onClick='option(41)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>历程内容</p></div><div class='message_board'><p><span>历程标题：</span>{$r['title']}</p><p><span class='content'>具体内容：</span>{$r['content']}</p><input type='button' value='删除' class='a_btn' onclick=\"Del('./delete/flag/del/table/develop/id/{$id}');\"></div></div>";
   		}else{
   			$post = I('post.');
	  		if(empty($post)){
	   			return;
	   		}
	   		$develop = M('develop');
	   		$post['addtime'] = time();
	   		$r = $develop->add($post);
	   		if($r){
	   			echo '发布成功';
	   		}else{
	   			echo '发布失败';
	   		}

	   	}

   }

   //通知公告
   public function notice(){
   		$post = I('post.');
  		if(empty($post)){
   			return;
   		}
   		$notice = M('notice');
   		$post['addtime'] = time();
   		$r = $notice->add($post);
   		if($r){
   			echo '发布成功';
   		}else{
   			echo '发布失败';
   		}

   }

   //文档发布
   public function docPush(){
   		$post = I('post.');
  		if(empty($post)){
   			return;
   		}
   		$document = M('document');
   		$post['addtime'] = time();
   		$r = $document->add($post);
   		if($r){
   			echo '发布成功';
   		}else{
   			echo '发布失败';
   		}

   }

   //联系我们
   public function touchUs(){
   		layout(false);
   		$touchus = M('touchus');
   		$u = I('get.u');
   		$r = $touchus->where("username='{$u}'")->find();

   		echo "<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='journey_title'><a href='javascript:;' onClick='option(71)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>{$r['username']}的留言</p></div><div class='message_board'><form action='?act=search' method='post'><p><span>姓名：</span>{$r['username']}</p><p><span>邮箱：</span>{$r['email']}</p><p><span class='content'>留言内容：</span>{$r['content']}</p><input type='submit' value='删除' class='a_btn' style='margin-left: 0;' onClick='courseDel()'></form></div></div>";

   }

   //平台监控
   public function platListen(){

   }

   //邮件通知
   public function e_mail(){
   		if($_GET['f']==1){
   			$post = I('post.');
   			$table = $post['table'];
   			$result = myemail($post['to'],$post['title'],$post['content']);
	          if($result){
	            echo '发送成功';
	            $table = M("$table");
	            if($post['flag']=='del'){
	            	$data['del_notice'] = '已通知';
	            }else{
	            	$data['email_state'] = '已通知';
	            }
	            $r = $table->where("applicant='{$post['app']}'")->save($data);

	          }else{
	            echo '发送失败';
	          }
	      return;
   		}
   		layout(false);
		$this->display();
   }

   //审核申请
   public function auditing(){
   		 layout(false);
   		 $flag = I('get.flag');
   		 $app  = I('get.app');
   		 $post = I('post.');
   		 if(!empty($flag) && !empty($post)){
   		 	$this->postil($flag,$app,$post);return;
   		 }

   		 $this->display();
   }
   //添加批注辅助函数
   protected function postil($flag,$app,$post){
   			$flag = M("$flag");
   		 	$r = $flag->where("applicant='{$app}'")->save($post);
   		 	if($r){
   		 		echo "提交成功";
   		 	}else{
   		 		echo "提交失败";
   		 	}

   }

   //通知结果
   public function auditing_result(){
   		 layout(false);
   		 $this->display();
   }



   //删除操作
   public function delete(){
   		$flag = I('get.flag');
   		//单条删除
   		if($flag=='del'){
   			$id = I('get.id');
   			$table = I('get.table');
   			$r = $this->del($table,$id);
   			echo $r;
   		//批量删除
   		}elseif ($flag=='del_num') {
   			$id = I('post.id');
   			if(empty($id)){
   				echo "请选择操作项";
   			}
   			$table = I('get.table');
   			$r = $this->del_num($table,$id);
   			echo $r;
   		}
   }

   //辅助函数删除操作
   protected function del($table,$id){
   		$table = M("$table");
   		$r = $table->delete("$id");
   		if($r){
   			return '删除成功';
   		}else{
   			return '删除失败';
   		}
   }

   //辅助函数批量删除操作
   protected function del_num($table,$id){

   		if(!empty($id)){
   			$id = implode(',',$id);
   			$table = M("$table");
   			$r = $table->delete("$id");
   			if($r){
   				return '删除成功';
   			}else{
   				return '删除失败';
   			}
	
   		}
   }

}
?>