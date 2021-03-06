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
      <li><a href="/cloud/index.php/admin/stu/stuIndex">学生站点</a></li>
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
<!doctype html>
<html lang="zh">
</head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>小组成员</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="stylesheet" type="text/css" href="<?php echo (URL); ?>css/htmleaf-demo.css"> -->
<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo (URL); ?>css/htmleaf-demo-style.css"> -->

<link rel="stylesheet" href="<?php echo (URL); ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo (URL); ?>public.css">
<link rel="stylesheet" href="<?php echo (URL); ?>css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo (URL); ?>css/material-cards.css">



<!--For Plugins external css-->
<link rel="stylesheet" href="<?php echo (URL); ?>css/plugins.css" />

<style type="text/css">


    body {
        background-color: #ECEFF1;
        color: #37474F;
        font-family: 'Raleway', sans-serif;
        overflow-x: hidden;
    }
    .separator {
        width: 10px;
        height: 10px;
        background: #e74c3c;
        position: relative;
        margin: 20px auto;
        display: inline-block;
        border-radius: 50%;
        margin:15px;
    }
    .head_title{
        clear: both;
        min-height: 110px;
        height: 110px;
        overflow: hidden;
    }
    .head_title h2{
        height: 40px;
    }

	.team-member{
		margin:0 auto;
		display: flex;
		flex-flow: row wrap;
		justify-content: center;
	}
	.team-member dl{
		max-width: 300px;
		margin: 1vh 2vw;
		border: 1px solid gray;
		box-shadow: 0 0 10px black;
	}
	.team-member dd{
		height: 290px;
	}
	.team-member dd img{
        width: 285px;
		padding: 10px;
		margin-left: -0.5vw;
		height: 290px;
	}
	.team-member dt{
		font-size: 2rem;
		font-weight: bold;
		text-align: center;
		padding: 5px;
		border-top: 2px solid gray;
	}
	.ours_team{
		display: flex;
		flex-flow: row wrap;
		justify-content: center;
	}
 	.ours_team>div{
        height: 420px;
		max-width: 350px;
        overflow: hidden;
 	}
 	.ours_team .mc-description{
 		font-size: 1.4rem;
 		line-height: 1.5rem;
 		min-height: 240px;
 		word-break: break-all;
 	}
 	@media screen and (max-width: 960px){
		.mc-description{
			font-size: 1.5rem;
			line-height: 2rem;
		}
 	}
 	@media screen and (max-width: 768px){
 	    .separator {
 	        margin:10px;
 	    }
 	}
 	@media screen and (max-width: 480px){
		.mc-description{
			font-size: 1rem;
			line-height: 2rem;
			min-height: 30px;
		}
 	}

</style>
</head>
<body>


<div class="htmleaf-container">
	<div class="head_title text-center">
        <h2 style="display: flex; justify-content: center;">指导老师</h2>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
    </div><!-- End off Head_title -->
    <div class="container">
    <!-- Team member structure start -->
    	<div class="team-member row">
            <dl class="col-sm-6 col-xs-12">
           	<dd><img src="<?php echo (URL); ?>img/team/teach1.jpg" alt=""></dd>
           	<dt>罗剑高老师</dt>
            </dl>
            <dl class="col-sm-6 col-xs-12">
             	<dd><img src="<?php echo (URL); ?>img/team/teach2.jpg" alt=""></dd>
             	<dt>李振军老师</dt>
            </dl>

        </div>
    <!-- Team member structure start -->
    </div>
	<div class="head_title text-center">
        <h2 style="display: flex; justify-content: center;">我们的团队</h2>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
    </div><!-- End off Head_title -->

	<section class="container row" style="margin: 0 auto;">

		<div class="active-with-click ours_team" >
			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="material-card Red">
					<h2>
						<span>叶桂东</span>
						<strong>
							<i class="fa fa-fw fa-star"></i>
                            <i>目标：</i>
							后端工程师
						</strong>
					</h2>
					<div class="mc-content">
						<div class="img-container">
							<img class="img-responsive" src="<?php echo (URL); ?>img/team/team1.jpg"  width="300" height="300">
						</div>
						<div class="mc-description">
							AIB云计算小组成员之一，负责后台架构设计和开发。主要使用后台语言PHP,数据库Mysql,web服务器Apache,基于ThinkPHP框架下开发。曾个人使用Bootstrap3+JS+PHP+Mysql+Apache开发过响应式Ydd个人博客系统。

						</div>
					</div>
					<a class="mc-btn-action">
						<i class="fa fa-bars"></i>
					</a>
					<div class="mc-footer" style="padding:0;display:flex;justify-content: center;">
						<a class="fa fa-fw fa-qq"></a>
						<a class="fa fa-fw fa-weixin"></a>
						<a class="fa fa-fw fa-phone-square"></a>
						<a class="fa fa-fw fa-envelope-o"></a>
					</div>
				</article>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="material-card Pink">
					<h2>
						<span>刘立凡</span>
						<strong>
							<!-- <i class="fa fa-fw fa-star"></i> -->
                            <i>目标：</i>
							系统架构师
						</strong>
					</h2>
					<div class="mc-content">
						<div class="img-container">
							<img class="img-responsive" src="<?php echo (URL); ?>img/team/team2.png" width="300" height="300">
						</div>
						<div class="mc-description">
							AIB云计算小组成员之一，负责整个云平台的总体规划与设计。如：平台底层软硬件的架构、OpenStack、vSphere、Ceph、Docker高可用的部署。组织云计算小组对项目中各子平台网络应用的设计与开发。
						</div>
					</div>
					<a class="mc-btn-action">
						<i class="fa fa-bars"></i>
					</a>
					<div class="mc-footer" style="padding:0;display:flex;justify-content: center;">
						<a class="fa fa-fw fa-qq"></a>
						<a class="fa fa-fw fa-weixin"></a>
						<a class="fa fa-fw fa-phone-square"></a>
						<a class="fa fa-fw fa-envelope-o"></a>
					</div>
				</article>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="material-card Purple">
					<h2>
						<span>余晓威</span>
						<strong>
							<!-- <i class="fa fa-fw fa-star"></i> -->
                            <i>目标：</i>
							前端工程师
						</strong>
					</h2>
					<div class="mc-content">
						<div class="img-container">
							<img class="img-responsive" src="<?php echo (URL); ?>img/team/team3.jpg" width="300" height="300">
						</div>
						<div class="mc-description">
							AIB云计算小组成员之一，负责前端页面设计和开发。能运用当下热门框架html5、css3、jQuery开发网站，并结合图标插件、动画库美化网页，对使用bootstrap开发响应式布局有一定理解，曾带领团队获得校内三等奖。
						</div>
					</div>
					<a class="mc-btn-action">
						<i class="fa fa-bars"></i>
					</a>
					<div class="mc-footer" style="padding:0;display:flex;justify-content: center;">
						<a class="fa fa-fw fa-qq"></a>
						<a class="fa fa-fw fa-weixin"></a>
						<a class="fa fa-fw fa-phone-square"></a>
						<a class="fa fa-fw fa-envelope-o"></a>
					</div>
				</article>
			</div>
		<!--</div>-->
		<!--<div class="row active-with-hover">-->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="material-card Deep-Purple">
					<h2>
						<span>夏耿楠</span>
						<strong>
							<!-- <i class="fa fa-fw fa-star"></i> -->
                            <i>目标：</i>
							后台设计师
						</strong>
					</h2>
					<div class="mc-content">
						<div class="img-container">
							<img class="img-responsive" src="<?php echo (URL); ?>img/team/team4.png" width="300" height="300">
						</div>
						<div class="mc-description">
							AIB云计算小组成员之一，负责网站数据库和后台架构设计和开发。熟练使用PHP语言、MySQL数据优化，掌握OB缓存和memcached等缓存技术，熟悉ThinkPHP框架和前端开发语言js，jq语言。
						</div>
					</div>
					<a class="mc-btn-action">
						<i class="fa fa-bars"></i>
					</a>
					<div class="mc-footer" style="padding:0;display:flex;justify-content: center;">
						<a class="fa fa-fw fa-qq"></a>
						<a class="fa fa-fw fa-weixin"></a>
						<a class="fa fa-fw fa-phone-square"></a>
						<a class="fa fa-fw fa-envelope-o"></a>
					</div>
				</article>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="material-card Indigo">
					<h2>
						<span>陈贤</span>
						<strong>
							<!-- <i class="fa fa-fw fa-star"></i> -->
                            <i>目标：</i>
							全栈工程师
						</strong>
					</h2>
					<div class="mc-content">
						<div class="img-container">
							<img class="img-responsive" src="<?php echo (URL); ?>img/team/team5.jpg" width="300" height="300">
						</div>
						<div class="mc-description">
						AIB云计算小组成员之一，负责后台管理界面设计。主要运用html，css，jquery技术开发网站。
						</div>
					</div>
					<a class="mc-btn-action">
						<i class="fa fa-bars"></i>
					</a>
					<div class="mc-footer" style="padding:0;display:flex;justify-content: center;">
						<a class="fa fa-fw fa-qq"></a>
						<a class="fa fa-fw fa-weixin"></a>
						<a class="fa fa-fw fa-phone-square"></a>
						<a class="fa fa-fw fa-envelope-o"></a>
					</div>
				</article>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="material-card Blue">
					<h2>
						<span>？？？？？</span>
						<strong>
							<!-- <i class="fa fa-fw fa-star"></i> -->
                            <i>目标：</i>
							期待你的加入！！！
						</strong>
					</h2>
					<div class="mc-content">
						<div class="img-container">
							<img class="img-responsive" src="<?php echo (URL); ?>img/team/thumb-clint-eastwood.jpg" width="300" height="300">
						</div>
						<div class="mc-description">
							期待你的加入！！！
						</div>
					</div>
					<a class="mc-btn-action">
						<i class="fa fa-bars"></i>
					</a>
					<div class="mc-footer" style="padding:0;display:flex;justify-content: center;">
						<a class="fa fa-fw fa-qq"></a>
						<a class="fa fa-fw fa-weixin"></a>
						<a class="fa fa-fw fa-phone-square"></a>
						<a class="fa fa-fw fa-envelope-o"></a>
					</div>
				</article>
			</div>
		</div>
	</section>
</div>



<script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
<script src="<?php echo (URL); ?>js/jquery.material-cards.min.js"></script>
<script src="<?php echo (URL); ?>js/public.js"></script>
<script>
	$(function() {

		$('.material-card').materialCard({
			icon_close: 'fa-chevron-left',
			icon_open: 'fa-list',
			icon_spin: 'fa-spin-fast',
			card_activator: 'click'
		});

		$('.material-card').on('shown.material-card show.material-card hide.material-card hidden.material-card', function (event) {
			console.log(event.type, event.namespace, $(this));
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