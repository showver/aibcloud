<?php if (!defined('THINK_PATH')) exit();?><div style="margin:0;padding:0;"><nav class="navbar navbar-default my-nav" role="navigation" style="z-index: 999;">
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
        <img src="<?php echo (URL); ?>img/logo.jpg"  alt="XXXXX-云平台">
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
                  <li>指导老师</li>
                  <li><a href="/cloud/index.php/Home/team/team">小组成员</a></li>
              </ul>
          </li>
          <li class="dropdown" id="hoverdown-2">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  XXXXX云平台 <b class="caret"></b>
              </a>
              <ul class="dropdown-menu hidden-md hidden-lg">
                  <a href="/cloud/index.php/Home/platform/platform">
                    <li>平台入口</li>
                  </a>
                  <li><a href="/cloud/index.php/admin/openstack/openstack">OpenStack</a></li>
                  <li><a href="/cloud/index.php/admin/vsphere/vsphere">vSphere</a></li>
                  <li style="display: none;"><a href="/cloud/index.php/admin/Docker/docker">Docker</a></li>
                  <li><a href="/cloud/index.php/admin/mirrors/mirrors">CentOS</a></li>
                  <li><a href="/cloud/index.php/admin/SVN/subversion">SVN</a></li>
                  <li><a href="/cloud/index.php/admin/lanDisk/onlineDisk">内网云盘</a></li>
                  <li style="display: none;"><a href="/cloud/index.php/admin/Mail/mail">邮件系统</a></li>
                  <li><a href="/cloud/index.php/admin/stu/stuIndex">学生站点</a></li>
                  <li style="display: none;"><span>微信小程序</span></li> 
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
                       <li><a href="/cloud/index.php/admin/stu/stuMessage" class="login">个人网站</a></li>
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
      <li>指导老师</li>
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
      <li style="display: none;"><a href="/cloud/index.php/admin/Docker/docker">Docker</a></li>
      <li><a href="/cloud/index.php/admin/mirrors/mirrors">CentOS</a></li>
      <li><a href="/cloud/index.php/admin/SVN/subversion">SVN</a></li>
      <li><a href="/cloud/index.php/admin/lanDisk/onlineDisk">内网云盘</a></li>
      <li style="display: none;"><a href="/cloud/index.php/admin/Mail/mail">邮件系统</a></li>
      <li><a href="/cloud/index.php/admin/stu/stuIndex">学生站点</a></li>
      <li style="display: none;">微信小程序</li>
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
</style></div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>教师个人中心</title>
	<link rel="stylesheet" href="<?php echo (URL); ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo (URL); ?>public.css">
	<script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo (URL); ?>js/public.js"></script>
	<script src="<?php echo (URL); ?>js/send.js"></script>
<style type="text/css">
	body{
	    flex-direction: rtl;
	    background-color: #ECEFF1;
	}

	ul,
	li {
	    margin: 0;
	    padding: 0;
	    list-style: none;
	}
	.header{
		width: 100%;
	}
	.title_section{
	    width: 25vw;
	    height: 15vh;
	    display: flex;
	    float: left;
	    flex-flow: row nowrap;
	    justify-content: center;
	    align-items: center;
	    color: #F67C0A;
	    font-size: 25px;
	}
	.text-center{
		float: right;
		margin-top: 60px;
		margin-right: 120px;
	}
	.wrap{
		width: 80vw;
		margin: 0px auto;
		clear: both;
		position: relative;
	}
	article{
		width: 84vw;
		min-height: 80vh;
		display: flex;
		flex-flow: row wrap;
		justify-content: flex-start;
		align-content: flex-start;
		background: #FFF;
		padding: 2vh 0;
		margin: 2vh 8vw;
	}

	article .art_title{
		width: 24vw;
		height: 4vh;
		margin-left: 1vw;
		position: relative
	}
	.art_title h3{
		font-size: 20px; 
		padding-bottom: 1vh;
		color: black;
		font-size: 20px;
		border-bottom: 2px solid #F67C0A;
	}
	.art_title .form-group{
		position: absolute;
		top: 2.4vh;
		left: 5vw;
		margin-left: 5vw;
	}
	article .art_conten{
		margin: 2vw;
		width: 80vw;
		display: flex;
		flex-flow: row wrap;
		justify-content: flex-start;
		align-content: flex-start;
	}
	.art_conten_item{
		margin: 1vw 1.7vw;
		border: 1px solid #F67C0A;
		max-height: 150px;
		width: 270px;
	}
	.art_conten_item div{
		text-align: center;
		position: relative;
		padding-right: 5vw;
		border: 1px solid #F67C0A;
		border-radius: 0 0 25px 25px;
	}
	.art_conten_item div i{
		position: absolute;
		right: 3vw;
		top: -2px;
		cursor: pointer;
	}
	.art_conten_item div a{
		text-decoration: none;
	}
	.art_conten_item div a:hover{
		text-decoration: underline;
	}
	.art_conten_item div mark{
		background: none;
		color: #000;
		font-size: 17px;
		font-weight: bold;
		margin-left: 2px;
	}
	.art_conten_item ul{
		text-indent: 2em;
	}
	.art_conten_item ul li{
		margin-top: 2px;
	}
	.art_conten_item ul input{
		width: 2vw;
		margin-right: 1vw;
		text-align: center;
	}
	.art_conten_item ul span{
		margin-right: 1vw;
		color: #F67C0A;
		cursor: pointer;
	}
	.art_conten_item ul span:hover{
		text-decoration: underline;
	}
	/***************/ 
        .pages a,  
        .pages span {  
            display: inline-block;  
            padding: 2px 5px;  
            margin: 0 1px;  
            border: 1px solid #f0f0f0;  
            -webkit-border-radius: 3px;  
            -moz-border-radius: 3px;  
            border-radius: 3px;  
        }  
          
        .pages a,  
        .pages li {  
            display: inline-block;  
            list-style: none;  
            text-decoration: none;  
            color: #58A0D3;  
        }  
          
        .pages a.first,  
        .pages a.prev,  
        .pages a.next,  
        .pages a.end {  
            margin: 0;  
        }  
          
        .pages a:hover {  
            border-color: #50A8E6;  
        }  
          
        .pages span.current {  
            background: #50A8E6;  
            color: #FFF;  
            font-weight: 700;  
            border-color: #50A8E6;  
        }  
     /*********************/	




    .nav-tabs{
     	position: relative;
     	
     	border-bottom: none;
     }
    .nav-tabs li{
    	float: left;
     	text-align: center;
     	margin-right: 20px;
     }
    .nav-tabs li a{
     	display: block;
     	font-size: 16px;
     	font-weight: 600;
     	color: #444;
     	padding: 10px 15px;
     	text-decoration: none;
     	background: transparent;
     	margin-right: 0;
     	border: none;
     	border-radius: 0;
     	overflow: hidden;
     	position: relative;
     	z-index: 1;
     	transition: all 0.5s ease 0s;
     }
    .nav-tabs li a:before{
     	content: "";
     	width: 100%;
     	height: 3px;
     	background: #de7921;
     	position: absolute;
     	top: 92%;
     	left: 0;
     	transition: all 0.3s ease 0s;
     }
    .nav-tabs li a:hover:before,
    .nav-tabs li.active a:before,
    .nav-tabs li.active a:hover:before{
     	top: 0;
     }
    .nav-tabs li a:after{
     	content: "";
     	width: 100%;
     	height: 100%;
     	background: #fff;
     	position: absolute;
     	top: 100%;
     	left: 0;
     	z-index: -1;
     	transition: all 0.3s ease 0s;
     }
    .nav-tabs li a:hover:after,
    .nav-tabs li.active a:after,
    .nav-tabs li.active a:hover:after{
     	top: 0;
     }
     .nav-tabs li.active a,
     .nav-tabs li.active a:focus,
     .nav-tabs li.active a:hover,
     .nav-tabs li a:hover{
     	border: none;
     }

    .tab-content{
		padding: 30px 15px 20px;
		background: #fff;
		font-size: 14px;
		color: #555;
		line-height: 26px;
	}
	.tab-content h3{
		font-size: 24px;
		margin-top: 0;
	}


	.appl_enter{
		position: absolute;
		top: -10px;
		right: 0;
	}
	.appl_enter li{
		float: left;
	}
</style>
<script type="text/javascript">
	jQuery(document).ready(function() {
		
		// $('.tabs span').click(function(){
		// 	$(this).addClass('on');
		// 	$(this).siblings('span').removeClass('on');
		// });

		$('.art_conten_item div i').click(function(){
			var id = $(this).attr('data-id');
			if( $(this).css('color')=='rgb(0, 128, 0)' ){
				$(this).css('color', 'red');
				 $.post('/cloud/index.php/admin/tea/excellent',{id:id},function(data){
				 	alert(data);
				 });
			}else{
				$(this).css('color', 'green');
				 $.post('/cloud/index.php/admin/tea/excellent',{id:id},function(data){
				 	alert(data);
				 });
			}
		})

		$('#search').click(function(){
			var sear_condition=$('input[name="sear_content"]').val();
		// 	$(location).prop('href',"tec-center.php?search="+sear_condition);
		});
		$('.art_conten_item input').blur(function(){
			var valu = $(this).val();
			if(isNaN(valu)||(valu>100||valu<-1)){
				alert('输出的值有误');
				$(this).focus();
			}
		})
		/*$('.art_conten_item li span').click(function(){
			 $(this).prev().css('color','black');
			var userid = $('#userid').attr('name');
			var s_firstgrade = $(this).prev().val();
			$.post('Controller/tec_centerinsert.php',{ userid:userid,s_firstgrade:s_firstgrade},function(data){
			});
		})*/
	});	

	function warning(s,id){
		//alert(id);
		if(window.confirm("您确认要提交吗？提交后不可更改！！！")){
			send("/cloud/index.php/Admin/tea/updateScore/score/"+s+"/id/"+id,'fm'+id);
		}else{
			return;
		}
	}
</script>
</head>
<body style="flex-direction: ltr; overflow-x: hidden; overflow-y:auto; ">
	<div class="header">
		<div class="title_section">
		    教师 —— 个人中心
		</div>
	</div>
	<div class="wrap">
		<ul class="nav nav-tabs pull-left">
			<li class="active"><a href="/cloud/index.php/Admin/Tea/teaCenter/flag/1" aria-controls="home" >网络1班</a></li>
			<li><a href="/cloud/index.php/Admin/Tea/teaCenter/flag/2" aria-controls="profile" >网络2班</a></li>
			<!-- <li><a href="/cloud/index.php/Admin/Tea/teaCenter/" aria-controls="messages" >其他</a></li> -->
			

		</ul>

					
		<form action="" class="form-inline pull-left" style="margin-top: 5px;">
			
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">搜索</button>
                </span>
            </div><!-- /input-group -->
                    
            
		</form>

        <ul class="nav pull-right appl_enter">
        	<li>
            	<a href="/cloud/stuManage/index.php"><button class="btn btn-lg">管理学生后台</button></a>
            </li>
			<li>
				<a href="/cloud/index.php/Admin/stu/stuIndex"><button class="btn btn-lg">回到学生站点</button></a>
			</li>
        </ul>
		
	</div>

	<article>
		<div class="art_title">
			<h3>学生作品</h3>
			
		</div>
		<!-- 网络一班 -->
		<div class='art_conten' style="display: flex; justify-content: center;">

			<?php if(is_array($list)): foreach($list as $key=>$res): ?><div class='art_conten_item'>
				<div>
					<a href="/cloud/stu-data/<?php echo ($res["stu_number"]); ?>">
						<mark><?php echo ($res["username"]); ?>—<?php echo (substr($res['stu_number'],-3)); ?></mark>
					</a>
					<br>
					<i id="userid" class="icon icon-thumbs-up icon-2x" style="color:<?php if($res['excellent']==1): ?>green<?php else: ?>red<?php endif; ?>;" data-id="<?php echo ($res["id"]); ?>"></i>
				</div>
				<ul>
					<form id="fm<?php echo ($res["id"]); ?>">
						<input type="hidden" name="sid" value="<?php echo ($res["score"]["sid"]); ?>">
				        <li>
				        	第一次作业：
				        	<input type='text' name="one_score" value="<?php echo ($res["score"]["one_score"]); ?>" />
				        	<span onclick="warning(1,<?php echo ($res["id"]); ?>);">确认</span>
				        </li>
				        <li>
				        	第二次作业：
				        	<input type='text' name="two_score" value="<?php echo ($res["score"]["two_score"]); ?>" />
							<span onclick="warning(2,<?php echo ($res["id"]); ?>);">确认</span>
				        </li>
				        <li>
				        	第三次作业：
				        	<input type='text' name="three_score" value="<?php echo ($res["score"]["three_score"]); ?>" />
							<span onclick="warning(3,<?php echo ($res["id"]); ?>);">确认</span>
				        </li>
				        <li>
				        	期 末 成 绩：
				        	<input type='text' name="term_score" value="<?php echo ($res["score"]["term_score"]); ?>" />
							<span onclick="warning(4,<?php echo ($res["id"]); ?>);">确认</span>
				        </li>
		        	</form>
		    	</ul> 
		    </div><?php endforeach; endif; ?>

			<div class="pages"> <ul><?php echo ($page); ?></ul> </div>
		</div>

	</article>
	

</body>
</html>
<script>
$(function(){
    document.children[0].children[1].firstChild.parentNode.removeChild(document.children[0].children[1].firstChild);
})
</script>
<footer style="position: fixed; z-index: 999;">
    <span>Builder：<a href="">XXXXX云计算小组</a></span>
    <span>Copyright © 2017 <a href="">XXXXX云计算小组</a></span>
</footer>