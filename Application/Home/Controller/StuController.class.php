<?php
namespace Home\Controller;
use Think\Controller;
class StuController extends Controller {
	public function stuIndex(){
		$User = M('User');
		$Comment = M('Comment');
		//取出优秀同学信息
		$youxiu = $User->where("excellent=1")->field('id,username,netname,view')->select();
		foreach($youxiu as $k=>$y){
			$comment = $Comment->where("comment_to={$y['id']}")->count();
			if($comment!=null){
				$youxiu[$k]['comment'] = $comment;
			}
		}

		$this->assign('youxiu',$youxiu);

		//取出一班的信息
		if($_GET['flag']==NULL||$_GET['flag']==1){
			//*******分页*********
			$count = $User->where("class='1'")->count();// 查询满足要求的总记录数
			$Page = getpage($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list = $User->where("class='1'")->field('id,username,netname,view')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('page',$show);// 赋值分页输出
			//*******分页********
			foreach($list as $k=>$l){
				$comment = $Comment->where("comment_to={$l['id']}")->count();
			if($comment!=null){
				$list[$k]['comment'] = $comment;
			}
		}
			$this->assign('list',$list);


		//取出二班的信息
		}else if($_GET['flag']==2){
			//*******分页*********
			$count = $User->where("class='2'")->count();// 查询满足要求的总记录数
			$Page = getpage($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list = $User->where("class='2'")->field('id,username,netname,view')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('page',$show);// 赋值分页输出
			//*******分页********
			//循环添加评论信息
			foreach($list as $k=>$l){
				$comment = $Comment->where("comment_to={$l['id']}")->count();
				if($comment!=null){
					$list[$k]['comment'] = $comment;
				}
			}
			$this->assign('list',$list);

		}
		
		$this->display();

	}


	public function stuMessage(){
		$User = M('User');
		$Comment = M('Comment');
		$Reply = M('Reply');
		$id = I('get.id');
		//判断flag是否有值，有则执行评论回复的写库操作
		if($_GET['flag']!=null){
			
			$post = I('post.');
			$post['reply_btime'] = time();
			$result = $Reply->data($post)->add();
			echo '回复成功';
			return;
		}
		//判断id是否有值，有则表示访问别人的网站主页
		if($id!=null){
			//判断post是否为空，有则进行评论的写库操作
			if(!empty($_POST)){
				if(empty($_SESSION['username'])){
					echo '请先登录再进行评论！';return;
				}
				$post = I('post.');
				$post['comment_btime'] = time();
				$result = $Comment->data($post)->add();
				echo '评论成功';
				return;
			}
			//记录点击访问量
			$User->where("id=$id")->setInc('view');
			//获取数据库相关数据
			$r = $User->where("id=$id")->field('id,username,netname,stu_number,netdescribt')->find();
			$list = $Comment->where("comment_to=$id")->select();
			foreach($list as $k=>$l){
				$reply = $Reply->where("reply_to={$l['cid']}")->select();
				if($reply!=null){
					$list[$k][$k] = $reply;
				}
			}

			$this->assign('list',$list);
			$this->assign('r',$r);
		}else{
			//表示访问自己的网站主页
			$r = $User->where("username='{$_SESSION['username']}'")->field('id,username,netname,stu_number,netdescribt')->find();
			$list = $Comment->where("comment_to={$r['id']}")->select();
			foreach($list as $k=>$l){
				$reply = $Reply->where("reply_to={$l['cid']}")->select();
				if($reply!=null){
					$list[$k][$k] = $reply;
				}
			}
			$this->assign('r',$r);
			$this->assign('list',$list);
		}

		$this->display();
	}
	


}