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
<html>
<head name="header">

<!-- /.website title -->
<title>忘记密码</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSS Files -->
<link href="<?php echo (URL); ?>css/animate.min.css" rel="stylesheet">
<link href="<?php echo (URL); ?>css/login.css" rel="stylesheet">
<link href="<?php echo (URL); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo (URL); ?>public.css" rel="stylesheet" >
<style type="text/css" media="screen">
	.btn-default {
		font-size: 17px;
		margin: 30px 0 10px;
		margin-right: 10px;
		line-height: 20px;
		padding: 15px 35px;
		height: 50px;
		border: 2px solid #3eb0f7;
		background: transparent;
		transition: all 0.4s;
		color: #3eb0f7;
		border-radius: 100px;
	}
	.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
		border: 2px solid #3eb0f7;
		background: #3eb0f7;
		color: white;
	}
	.btn-primary {
		font-size: 17px;
		margin: 30px 0 10px;
		margin-right: 10px;
		line-height: 20px;
		padding: 15px 35px;
		height: 50px;
		border: 2px solid #3eb0f7;
		background: #3eb0f7;
		transition: all 0.4s;
		color: white;
		border-radius: 100px;
	}
	.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
		border: 2px solid #3eb0f7;
		background: transparent;
		color: #3eb0f7;
	}
</style>
<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" /> -->
</head>

<body data-spy="scroll" style="height:100vh;" data-target="#navbar-scroll">


<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-image:url('<?php echo (URL); ?>img/bg.jpg'); width:100vw; height:90vh;margin:-20px 0;display: flex; align-items: center; transform: translateY(-2%);" data-img-width="2000" data-img-height="1333" data-diff="100">
	
	<!-- <div class="overlay"> -->
		<div class="container">
			<div class="row">
				<div class="col-md-7 hidden-xs hidden-sm">
				
					<h2 class="wow fadeInLeft" style="margin-top: 20vh;">
						XXXXX网络工作室云平台简介
					</h2>

					<!-- /.header paragraph -->
					<div class="landing-text wow fadeInUp">
						<p>XXXXX网络工作室云平台，是由XXX,XXX老师领导，学生设计完成的一个课题项目。目前平台底层硬件是由20多台高性能PC组成的服务器集群，通过多台Cisco、TP-Link千兆交换机连接，从而实现数据的高速传输，服务器的负载均衡以及应用的高可用。</p>
					</div>				  

					<!-- /.header button -->
					<div class="head-btn wow fadeInLeft">
						<a href="/cloud/index.php/Home/team/teamInfo" class="btn-primary">更多介绍</a>
						<a href="/cloud/index.php/Home/team/joinus" class="btn-default">加入我们</a>
					</div>
	
		  

				</div> 
				
				



				<div class="col-md-offset-1 col-md-3" style=" margin-bottom: 100px; margin-top:150px; border: 1px solid gray; box-shadow: 0 0 40px white;background: rgba(0,0,0,0.5);">

					<!-- Start Sign In Form -->
					<form action="Controller/loginController.php" class="fh5co-form animate-box" data-animate-effect="fadeIn" method="POST">
						<h2 align="center" style="margin-top: 15px">忘记密码</h2>
						<div class="form-group wow fadeInUp">
							<div class="alert alert-success" style="display: none;" role="alert">已发送至邮箱，登录邮箱查看。</div>
						</div>
						<div class="form-group wow fadeInUp">
							<label for="email" class="sr-only">邮箱</label>
							<input type="email" class="form-control" id="email" placeholder="请输入邮箱" autocomplete="off">
						</div>
						<div class="form-group text-center wow fadeInUp" style="padding:10px; font-size: 1em;">
							<p><a href="login.html" style="color:yellow !important;">登录</a> or <a href="register.html" style="color:yellow !important;">注册</a></p>
						</div>
						<div class="form-group wow fadeInUp" style="margin-top: -50px">
							<input type="submit" value="发送至邮箱" class=" btn-default1 wow fadeInUp" style="width:100%; "> 
						</div>

					</form>
					<!-- END Sign In Form -->

				</div>





			</div>
		</div> 

</div>


 
	
	<!-- /.javascript files -->
    <script src="<?php echo (URL); ?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo (URL); ?>js/login-js/custom.js"></script> -->
    <script src="<?php echo (URL); ?>js/login-js/jquery.sticky.js"></script>
	<script src="<?php echo (URL); ?>js/login-js/wow.min.js"></script>
	<script src="<?php echo (URL); ?>js/login-js/owl.carousel.min.js"></script>
	<script src="<?php echo (URL); ?>js/public.js"></script>
	<script>
		new WOW().init();
	</script>
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