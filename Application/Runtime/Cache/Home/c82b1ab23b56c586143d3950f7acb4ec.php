<?php if (!defined('THINK_PATH')) exit();?><nav class="navbar navbar-default my-nav" role="navigation" style="z-index: 999;">
    <div class="container-fluid">
    <div class="navbar-header nav-header col-md-2">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target="#example-navbar-collapse">
          <span class="sr-only">切换导航</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a href="/cloud/index.php" style="cursor: pointer;">
        <img src="<?php echo (URL); ?>img/logo.png"  alt="网络工作室云平台">
      </a>
    </div>

    <div class="col-md-1"></div>

    <div class="collapse navbar-collapse nav-content col-md-9" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="/cloud/index.php">首页</a></li>
          <li class="dropdown" id="hoverdown-1">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  云计算小组 <b class="caret"></b>
              </a>
              <ul class="dropdown-menu hidden-md hidden-lg">
                  <li>小组介绍</li>
                  <li class="text-muted"><a href="/cloud/index.php/Home/team/teamInfo">团队介绍</a></li>
                  <li><a href="/cloud/index.php/Home/team/joinus">加入我们</a></li>
                  <li>团队Team</li>
                  <li><a href="/cloud/index.php/Home/team/team">指导老师</a></li>
                  <li><a href="/cloud/index.php/Home/team/team">小组成员</a></li>
              </ul>
          </li>
          <li class="dropdown" id="hoverdown-2">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  云平台 <b class="caret"></b>
              </a>
              <ul class="dropdown-menu hidden-md hidden-lg">
                  <a href="/cloud/index.php/Home/platform/platform">
                    <li>平台入口</li>
                  </a>
                  <li><a href="/cloud/index.php/admin/openstack/openstack">OpenStack</a></li>
                  <li><a href="/cloud/index.php/admin/vsphere/vsphere">vSphere</a></li>
                  <li><a href="/cloud/index.php/admin/Docker/docker">Docker</a></li>
                  <li><a href="/cloud/index.php/admin/mirrors/mirrors">CentOS</a></li>
                  <li><a href="/cloud/index.php/admin/SVN/subversion">SVN</a></li>
                  <li><a href="/cloud/index.php/admin/lanDisk/onlineDisk">内网云盘</a></li>
                  <li><a href="/cloud/index.php/admin/Mail/mail">邮件系统</a></li>
                  <li><a href="/cloud/index.php/admin/stu/stuIndex">学生站点</a></li>
                  <li><span>微信小程序</span></li> 
              </ul>
              <ul class="dropdown-menu hidden-md hidden-lg">
                <li>平台架构</li>
                <li><a href="/cloud/index.php/Home/platform/platformFrame">底层硬件架构</a></li>
              </ul>
          </li>
          <li class="dropdown" id="hoverdown-3">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  服务与支持 <b class="caret"></b>
              </a>
              <ul class="dropdown-menu hidden-md hidden-lg">
                <li>用户服务</li>
                <li><a href="/cloud/index.php/Admin/ServerHelp/notice">服务公告</a></li>
              </ul>
              <ul class="dropdown-menu hidden-md hidden-lg">
                <li>帮助中心</li>
                <li><a href="/cloud/index.php/Admin/ServerHelp/document">文档</a></li>
              </ul>
          </li>
          <li class="hidden-xs hidden-sm"><a href="/cloud/index.php/admin/develop/deveProg">开发历程</a></li>
          <li><a href="/cloud/index.php/admin/TouchUs/touchUs">联系我们</a></li>
          <li class="hidden-xs hidden-sm">
            <div class="input-group" style="cursor: pointer;margin:10px 20px; width:12vw;">
                <input type="text" class="form-control" style="height:25px;">
                <span class="input-group-addon" style="height:25px; font-size: 8px; padding:0 8px;">搜索</span>
            </div>
          </li>
   <?php if(empty($_SESSION['username'])): ?><li><a href="/cloud/index.php/admin/login/login" class="login">登陆</a></li>
        <li><a href="/cloud/index.php/admin/login/register" class="login">注册</a></li>
     
 <?php else: ?>
            <li class="dropdown" style="width:80px;">
                    <div  class="dropdown-toggle" data-toggle="dropdown">
                       <img  src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$_SESSION['username'].".png"))?"/cloud/application/admin/public/uploadImg/".$_SESSION['username'].".png":'/cloud/application/admin/public/uploadImg/0.png'; ?>" class="img-circle">
                    </div>
          <?php if($_SESSION['level']==2 or $_SESSION['level']==3): ?><ul class="dropdown-menu">
                       <li><a href="/cloud/index.php/admin/stu/servAppl" class="login">个人中心</a></li>
                       <li><a href="/cloud/index.php/home/stu/stuMessage" class="login">个人网站</a></li>
                       <li><a href="/cloud/index.php/admin/stu/persInfo" class="login">修改资料</a></li>
                       <li><a href="/cloud/index.php/admin/login/end" class="login" id="over">退出</a></li>
                   </ul>
          <?php elseif($_SESSION['level']==1): ?>
                     <ul class="dropdown-menu">
                       <li><a href="/cloud/index.php/admin/tea/teaCenter" class="login">作业评分</a></li>
                       <li><a href="/cloud/index.php/admin/stu/servAppl" class="login">个人中心</a></li>
                       <li><a href="/cloud/index.php/admin/stu/persInfo" class="login">修改资料</a></li>
                       <li><a href="/cloud/index.php/admin/login/end" class="login" id="over">退出</a></li>
                   </ul>
          <?php elseif($_SESSION['level']==0): ?>
                      <ul class="dropdown-menu">
                           <li><a href="/cloud/index.php/admin/admin/index" class="login" id="over">后台管理</a></li>
                           <li><a href="/cloud/index.php/admin/login/end" class="login" id="over">退出</a></li>
                      </ul><?php endif; ?>
                </li><?php endif; ?>

      </ul>

      <div class="back hidden-xs hidden-sm" style="width:65px; height:3px; background-color: #0CF;  position: absolute; bottom: 0; left:15px; "></div>

    </div>
  </div>





  <section id="showdown-1" class="hidden-xs hidden-sm">
    <ul>
      <li class="lead">小组介绍</li>
      <li><a href="/cloud/index.php/Home/team/teamInfo">团队介绍</a></li>
      <li><a href="/cloud/index.php/Home/team/joinus">加入我们</a></li>
    </ul>

    <ul>
      <li class="lead">团队Team</li>
      <li><a href="/cloud/index.php/Home/team/team">指导老师</a></li>
      <li><a href="/cloud/index.php/Home/team/team">小组成员</a></li>
    </ul>
  </section>
  
  <section id="showdown-2" class="hidden-xs hidden-sm">
    <ul>
      <a href="/cloud/index.php/Home/platform/platform">
        <li class="lead">平台入口</li>
      </a>
      <li><a href="/cloud/index.php/admin/openstack/openstack">OpenStack</a></li>
      <li><a href="/cloud/index.php/admin/vsphere/vsphere">vSphere</a></li>
      <li><a href="/cloud/index.php/admin/Docker/docker">Docker</a></li>
      <li><a href="/cloud/index.php/admin/mirrors/mirrors">CentOS</a></li>
      <li><a href="/cloud/index.php/admin/SVN/subversion">SVN</a></li>
      <li><a href="/cloud/index.php/admin/lanDisk/onlineDisk">内网云盘</a></li>
      <li><a href="/cloud/index.php/admin/Mail/mail">邮件系统</a></li>
      <li><a href="/cloud/index.php/home/stu/stuIndex">学生站点</a></li>
      <li>微信小程序</li>
    </ul>

    <ul>
      <li class="lead">平台架构</li>
      <li><a href="/cloud/index.php/Home/platform/platformFrame">底层硬件架构</a></li>
    </ul>
  </section>

  <section id="showdown-3" class="hidden-xs hidden-sm">
    <ul>
      <li class="lead">用户服务</li>
      <li><a href="/cloud/index.php/Admin/ServerHelp/notice">服务公告</a></li>
    </ul>

    <ul>
      <li class="lead">帮助中心</li>
      <li><a href="/cloud/index.php/Admin/ServerHelp/document">文档</a></li>
    </ul>
  </section>


</nav>




<style type="text/css">
  

  nav section{
    position: absolute;top:50px;min-width:200px;min-height: 200px;transform:translateX(-50%);left:50%;display: flex;justify-content: center;color: white;background: rgba(0, 0, 0, 0.8);font-size: 1.5rem;padding:20px;visibility: hidden;
  }
  nav section ul{
    float: left;width:150px;margin-left:7vw; padding:0;color: rgba(255,255,255,0.6);
  }
  nav section ul:last-child{
    margin-right: 7vw;
  }
  nav section ul .lead{
    font-size: 1.5rem !important;margin:0 !important;font-weight: bold; border-bottom:1px solid rgba(255,255,255,0.6);color: white;padding-bottom: 5px;
  }
  nav section ul a .lead:hover{
    color: red;
    cursor: pointer;
  }
  nav section ul a{
    color: rgba(255,255,255,0.6);
  }
  nav section ul a:hover{
    color: red;
    cursor: pointer;
    text-decoration: none;
  }
  nav section ul li{
    margin: 0;
    padding-top: px;
    list-style: none;
  }
  nav section ul li:nth-child(2){
    margin-top: 5px;
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>学生个人中心</title>
<link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo (URL); ?>public.css">
<link rel="stylesheet" href="<?php echo (URL); ?>css/popModal.min.css">
<style>

	body{
		background: none;
		overflow-y: auto;
		overflow-x: hidden;
	}
	ul,h1,h2,p{
		margin: 0;
		padding: 0;
	}
	ul li{
		list-style: none;
	}
	.container{
		width: 80vw;
		margin: 0 auto;
	}

	h3{
		display: inline-block;
		font-size: 25px;
		width: 25vw;
		border-bottom: 2px solid green;
	}
	.web_info{
		text-align: center;
		position: relative;
	}
	.web_info_l img{
		display: inline-block;
		text-align: left;
		width: 20vw;
		height: 20vw;
		margin: 1vw 4vw;
	}
	.web_info_r{
		font-size: 20px;
	}
	.web_info_r img{
		margin-left: 1vw;
		width: 5vw;
		height: 5vw;
	}
	.web_info_r span{
		margin: 1vh 2vw;
	}
	.web_info_r p{
		word-break: break-all;
		margin:0 1vw;
		min-height: 25vh;
	}

	.web_info_r button{
		margin: 0 30px;
		background-color: #4CAF50; /* Green */
	    border: 1px solid black;
	    border-radius: 10px;
	    color: white;
	    padding: 10px 20px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 18px;
		transition: all .7s ease-in;
	}
	.web_info_r button:hover{
		background-color:#2165F2;
	}
	.web_info_r a{
		text-decoration: none;
		color: white;
	}
	.web_info_r a:hover{
		text-decoration: underline;
	}



	.mess_sub {
		width: 78vw;
		margin: 0 auto;
		position: relative;
	}
	.mess_sub textarea{
		width: 97%;
		height: 200px;
		margin: 10px 1%;
		resize: none;
	}
	.mess_sub button{
		position: absolute;
		bottom: 5.5%;
		right: 1.5%;
		background-color: #4CAF50; /* Green */
	    border: 1px solid black;
	    border-radius: 10px;
	    color: white;
	    padding: 10px 20px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 15px;
	    transition: all 0.7s ease-in;
	}
	.mess_sub button:hover{
		background-color:#2165F2;
	}

	.mess_show{
		width: 70vw;
		margin: 0 auto;
	}
	.mess_show a,button{
		margin-left: 1vw;
		padding: 0;
	}
	.mess_show p{
		width: 60vw;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}
	#user_name{
		font-weight: bold;
	}
	.mess_show>ul{
		width: 70vw;
		margin-top: 4vh;
	}
	.mess_show>ul>li{
		padding-top: 2vh;
		clear: both;
	}
	.mess_show>ul>li>img{
		width: 5vw;
		max-width: 80px;
		height: 5vw;
		max-height: 80px;
		border:1px solid;
		float:left;
	}
	.mess_show>ul>li>div{

		height: 80px;
		max-height: 80px;
		padding: 15px 0;
		/*padding-top: -100px;*/
		/*clear:both;*/
		/*margin-top: 0px;*/
		margin-left: 6vw;
		/*border:1px solid;*/
	}
	.mess_show .m_s_d{
		width: 70vw;
		margin-top: 10px;
		margin-left: 6vw;
	}
	.mess_show .m_s_d li{
		margin-top: 1vh;
	}
	.mess_show .m_s_d img{
		width: 4vw;
		max-width: 60px;
		height: 4vw;
		max-height: 60px;
		float: left;
	}
	.mess_show .m_s_d div{
		height: 60px;
		max-height: 80px;
		padding-top: 8px;
		margin-left: 5vw;
	}
	

	

</style>


</head>
<body>
   	<div class="container">
   		<h3><?php echo ($r['username']); ?>的网站</h3>
   	</div>
   	
	<div class="container" style="clear: both;">
			
			<section class="row web_info">
				<div class="col-md-4 web_info_l">
					<img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$_SESSION['username']."w.png"))?"/cloud/application/admin/public/uploadImg/".$_SESSION['username']."w.png":'/cloud/application/admin/public/uploadImg/0w.png'; ?>">
				</div>
				<div class="col-md-8 web_info_r">
					<div class="form-group">
						<img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$_SESSION['username'].".png"))?"/cloud/application/admin/public/uploadImg/".$_SESSION['username'].".png":'/cloud/application/admin/public/uploadImg/0.png'; ?>" class="img-circle">
						<span>姓名：<?php echo ($r['username']); ?></span>
						<span>网站名称：<?php echo ($r['netname']); ?></span>
					</div>
		            <p>描述：<?php echo ($r['netdescribt']); ?></p>
		            <div class="form-group">
		            	<a href="/cloud/index.php/Home/Stu/stuIndex"><button>学生站点列表</button></a>
		            	<a href="/cloud/stu-data/<?php echo ($r["stu_number"]); ?>"><button>进入网站</button></a>
		            </div>
				</div>
			</section>
			<section class="row" style="margin-bottom: 10vh;">
				<article class="mess_sub">
					<form id="fm1" >
					<input type="hidden" name="comment_bauthor" value="<?php echo (session('username')); ?>" />
					<input type="hidden" name="comment_to" value="<?php echo ($r["id"]); ?>" />
					<textarea name="comment_content"></textarea>
					<button type="button" >给他留言</button>
					</form>
				</article>
				<div class="row mess_show">
					<ul class="m_s_c">
					<?php if(is_array($list)): foreach($list as $key=>$res): ?><li class="repeat-con">
							<img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$res['comment_bauthor'].".png"))?"/cloud/application/admin/public/uploadImg/".$res['comment_bauthor'].".png":'/cloud/application/admin/public/uploadImg/0.png'; ?>" alt="" class="img-circle">
							<div>
							    <p>
							    	<span id="user_name"><?php echo ($res["comment_bauthor"]); ?>：</span><?php echo ($res["comment_content"]); ?>
							    </p><?php echo ($res['3']['rid']); ?>
								<p>
									<?php echo (date('Y-m-d H:i:s',$res["comment_btime"])); ?> 
									<?php if($r["username"] ==$_SESSION['username'] and $res["comment_bauthor"] !=$_SESSION['username']): ?><a href="">查看</a><button class="repeat" value="<?php echo ($res["comment_bauthor"]); ?>" data-cid="<?php echo ($res["cid"]); ?>" >回复</button><?php endif; ?>
								</p>								
							</div>
							<?php if(is_array($res[$key])): ?><ul class="m_s_d">
							<?php if(is_array($res[$key])): foreach($res[$key] as $key=>$reply): ?><li>
									<img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$reply['reply_bauthor'].".png"))?"/cloud/application/admin/public/uploadImg/".$reply['reply_bauthor'].".png":'/cloud/application/admin/public/uploadImg/0.png'; ?>" alt="" class="img-circle">
									<div>
								    	<p>
									    <span id="user_name"><?php echo ($r["username"]); ?> </span>回复给<span id="user_name"> <?php echo ($res["comment_bauthor"]); ?> ：</span><?php echo ($reply["reply_content"]); ?>
									    </p>
									    <p><?php echo (date("Y-m-d H:i:s",$reply["reply_btime"])); ?></p>
									</div>
								</li><?php endforeach; endif; ?>
							</ul><?php endif; ?>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
			<!-- 点击回复弹出框 -->
				<div class="modal fade" id="mdreply" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<textarea style="resize: none;" cols="78" rows="10"></textarea>
							</div>
							<div class="modal-footer">
				                <button type="button" class="btn btn-default modal-close" data-dismiss="modal">关闭</button>
				                <button type="button" class="btn btn-primary mdreply_sub" data-dismiss="modal">提交</button>
				            </div>
						</div>
					</div>
				</div>

				
			</section>

		<div id="page" style="margin-top:-1500px;">
		    <div id="dialog_content" class="dialog_content" style="display:none">
		        <div class="dialogModal_header text-center">请输入留言信息</div>
		        <form id="fm2">
		        <div class="dialogModal_content">
		        	<input type="hidden" name="reply_bauthor" value="<?php echo ($r["username"]); ?>" >
		        	<input id="to" type="hidden" name="reply_to" value="" >
		            <textarea style="resize: none;" name="reply_content" form="fm2" id="modal-text" cols="84" rows="10"></textarea>
		        </div>
		        </form>
		        <div class="dialogModal_footer">
		            <button type="button" data-dialogModalBut="cancel">关闭</button>
		            <button type="button"  data-dialogModalBut="ok">留言</button>
		        </div>
		    </div>
		</div>

		<div style="height: 100px;">
			
		</div>
	</div>



<script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
<script src="<?php echo (URL); ?>js/popModal.min.js"></script>
<script src="<?php echo (URL); ?>js/public.js"></script>
<script src="<?php echo (URL); ?>js/send.js"></script>
<script type="text/javascript">
/*----- 开始js操作  -----*/
	$(document).ready(function() {
		$('body').on('click','.repeat',function () {
			//alert(55);
			var to = $(this).attr('value');
			$('.dialogModal_header').html('回复给：'+to);
			var cid = $(this).attr('data-cid');
			$('#to').val(cid);
			openModal($(this),'fir',to);
		});

		$('body').on('click','.repeat-sec',function () {
			openModal($(this),'sec',to='');
		});

		function openModal ($this,type,to) {
			var to=to;
			$('.dialog_content').dialogModal({

			    onOkBut: function() {
			        closeModalFn($this,type,to);
			    },

			    onCancelBut: function() {

			    },

			    onLoad: function() {

			    },

			    onClose: function() {

			    },
			});

		}
		function closeModalFn($this,type,to) {
			var $el = $('.dialogModal #modal-text');
			// console.log($el);
			// console.log($el.val());
			var val2 = $el.val();
			if(val2.trim() === ''){
				alert('请填写留言内容');
				return false;
			}
			send('./stuMessage/flag/1','fm2',1);
			var time = new Date().toLocaleString('chinese',{hour12:false});
			var time=time.replace(/\//g,'-');
			var temp2 = '<li>'+
					'<img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$r['username'].".png"))?"/cloud/application/admin/public/uploadImg/".$r['username'].".png":'/cloud/application/admin/public/uploadImg/0.png'; ?>" alt="" class="img-circle">'+
					'<div>'+
					'<p><span id="user_name"> <?php echo ($r["username"]); ?> </span>'+
					'回复<span id="user_name"> '+to+' ：</span>'+
					val2+
					'</p>'+
					'<p>'+time+
					// <button class="repeat-sec">回复</button>'+
					'</p>'+
					'</div>'+
					'</li>';
			var $msd = $this.closest('.repeat-con').find('.m_s_d');
			var $firstEl = $msd.find('li').eq(0);

			if(type === 'fir'){
				if(!$firstEl.length){
					$(temp2).appendTo($msd);
				}else{
					$(temp2).insertAfter($firstEl)
				}
			}else if(type === 'sec'){
				$this.closest('li').after(temp2);
			}

			$el.val('');
		}




	/*-----  点击提交  ------*/
		$('.mess_sub button').click(function() {
			var val = $('.mess_sub textarea').val();
			if(val.trim() === ''){
				alert('请填写留言内容');
				return ;
			}

			 var uname = "<?php echo $_SESSION['username']?>";
			 if(!uname){
			 	alert('请先登录再进行评论！');
			 	return ;
			 }
			send('/cloud/index.php/Home/Stu/stuMessage/id/<?php echo ($r["id"]); ?>','fm1',1);
			var time = new Date().toLocaleString('chinese',{hour12:false});
			var time=time.replace(/\//g,'-');
			var temp = '<li class="repeat-con">'+
					'<img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$_SESSION['username'].".png"))?"/cloud/application/admin/public/uploadImg/".$_SESSION['username'].".png":'/cloud/application/admin/public/uploadImg/0.png'; ?>" alt="" class="img-circle">'+
					'<div>'+
					'<p><span id="user_name"><?php echo (session('username')); ?>： </span>'+
					val+
					'</p>'+time+
					// '<p>'+time+'<a href="">查看</a><button class="repeat">回复</button>'+
					'</p>'+
					'</div>'+
					'<ul class="m_s_d"></ul>'+
					'</li>';
			$('.m_s_c').append(temp);
			//$('.mess_sub textarea').val('');
		});
	});


</script>




</body>
</html>
<script>
$(function(){
    document.children[0].children[1].firstChild.parentNode.removeChild(document.children[0].children[1].firstChild);
})
</script>





<footer style="position: fixed; z-index: 999;" id="foot">
    <span>Builder：<a href="">AIB云计算小组</a></span>
    <span>Copyright © 2017 <a href="">AIB云计算小组</a></span>
</footer>