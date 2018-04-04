<?php
namespace Admin\Controller;
use Think\Controller;
class TeaController extends CommonController {
   public function teaCenter(){

   		$User = M('User');
   		$Score = M('Score');
   		//一班的成绩
   		if($_GET['flag']==null||$_GET['flag']==1){
   			//*******分页*********
			$count = $User->where("class='1'")->count();// 查询满足要求的总记录数
			$Page = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list = $User->where("class='1'")->field('id,username,stu_number,view,excellent')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('page',$show);// 赋值分页输出
			//*******分页********
   			foreach($list as $k=>$l){
   				$s = $Score->where("to_id={$l['id']}")->find(); 
   				if($s){
   					$list[$k]['score'] = $s;
   				}
   			}
   
   		$this->assign('list',$list);
   		}
   		//二班的成绩
   		if($_GET['flag']==2){
   			//******分页**********
			$count = $User->where("class='2'")->count();// 查询满足要求的总记录数
			$Page = getpage($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			 $list = $User->where("class='2'")->field('id,username,stu_number,view,excellent')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('page',$show);// 赋值分页输出
			//*******分页********
   			foreach($list as $k=>$l){
   				$s = $Score->where("to_id={$l['id']}")->find(); 
   				if($s){
   					$list[$k]['score'] = $s;
   				}
   			}
   		$this->assign('list',$list);
   		}

		$this->display();
   }

   public function updateScore(){
   		$Score = M('Score');
   		$post = I('post.');
   		//判断$post['sid']是否有值，有则表示进行更新操作
   		if($post['sid']){
   			switch($_GET['score']){
   			//写入第一个分数
   			case 1:	
   				$Score->one_score = $post['one_score'];
   				$result = $Score->where("sid={$post['sid']}")->save();
   				if($result){
   					echo '提交成功';
   				}else{
   					echo '提交失败';
   				}
   			break;
   			//写入第二个分数
   			case 2:	
   				$Score->two_score = $post['two_score'];
   				$result = $Score->where("sid={$post['sid']}")->save();
   				if($result){
   					echo '提交成功';
   				}else{
   					echo '提交失败';
   				}
   			break;
   			//写入第三个分数
   			case 3: 
   				$Score->three_score = $post['three_score'];
   				$result = $Score->where("sid={$post['sid']}")->save();
   				if($result){
   					echo '提交成功';
   				}else{
   					echo '提交失败';
   				}
   			break;
   			//写入第四个分数
   			case 4: 
   				$Score->term_score = $post['term_score'];
   				$result = $Score->where("sid={$post['sid']}")->save();
   				if($result){
   					echo '提交成功';
   				}else{
   					echo '提交失败';
   				}
   			break;

   			}
   		//$post['sid']没有值则进行第一次写入操作
   		}else{ 	
   			$id = I('get.id');
   			$post['to_id'] = $id;		
   			$result = $Score->data($post)->add();
   			if($result){
   				echo '提交成功';
   			}else{
   				echo '提交失败';
   			}		
   		}
  
   	return;
   	}


//评优方法
      public function excellent(){
            $id = I('post.id');
            $User = M("User");
            $r = $User->where("id='{$id}'")->field('excellent')->find();
            if($r['excellent']==0){
               $data['excellent'] = 1;
                $r = $User->where("id='{$id}'")->save($data);
                  if($r){
                     echo '评优成功';
                  }else{
                     echo '评优失败';
                  }
            }else{
                $data['excellent'] = 0;
                  $r = $User->where("id='{$id}'")->save($data);
                  if($r){
                     echo '撤消评优成功';
                  }else{
                     echo '撤消评优失败';
                  }
            }
           
      }



}