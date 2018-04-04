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
        <img src="<?php echo (URL); ?>img/bisailogo.png"  alt="XXXXX-云平台">
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
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>网络教学云平台 - OpenStack</title>
    <link rel="stylesheet" href="<?php echo (URL); ?>css/platform-enter.css">
    <link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo (URL); ?>public.css">
    <script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo (URL); ?>js/public.js"></script>
    <link rel="stylesheet" href="<?php echo (URL); ?>css/font-awesome.min.css">
    <style type="text/css">
        #siderbar p a{
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
            font-weight: bold;
            background: #3ac984;
            padding: 10px 60px;
            border-radius: 40px;
            margin-top: 2vw;
        }
        #siderbar p a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body style="color: black; overflow-x: hidden;">

    <div id="wrapper" style="height: 90vh;">
        <div id="header" style=" height:80px;">
            <h2 style="font-size: 25px;">网络教学云平台 - <b>OpenStack</b></h2>
            <a href="" title="一个开源的云计算管理平台项目">一个开源的云计算管理平台项目</a>
        </div>
        <div id="main">
            <div id="content">
                <h2 style="font-size: 20px; font-weight: normal; padding:0; height: 49px;" class="file-list"><i class="icon-file-alt icon-large" style="margin:0 10px; color: black;"></i>什么是OpenStack？</h2>
                <table>
                    <thead align="left">
						<div>
							<div>
								<p><b>OpenStack</b>是什么？为了更好的理解，我们首先来说一下<b>云计算的类型</b>。根据所提供服务的类型，云计算有以下三种落地方式：</p>

<p>1、<b>IaaS(基础架构即服务)</b>，用户能从中申请到硬件或虚拟硬件，包括裸机或虚拟机，然后在上边安装操作系统或其他应用程序。
如一些大的IaaS公司包括Amazon, Microsoft, VMWare, Rackspace和Red Hat，它们可以在“云端”为你提供虚拟服务器。
</p>

<p>2、<b>PaaS(平台即服务)</b>，用户能从中申请到一个安装了操作系统以及支撑应用程序运行所需要的运行库等软件的物理机或虚拟机，然后在上边安装其他应用程序，但不能修改已经预装好的操作系统和运行环境。
如一些大的PaaS提供者有Google App Engine，Microsoft Azure，开发人员可以利用他们提供的环境直接编程，省去自己在服务器上重新部署环境的时间。
</p>

<p>3、<b>SaaS(软件即服务)</b>，用户可以通过网络以租赁的方式来使用一些软件，而不是购买，比较常见的模式是提供一组账号密码。
典型的例子，我们在电脑上使用的OFFICE办公软件，这些都是需要在本地安装才能使用的，但有了SaaS，如GoogleDocs、MicrosoftOfficeOnline等应用，我们无需在本机安装，只要打开浏览器，注册帐号，即可以随时随地通过网络来使用这些软件编辑、保存、阅读自己的文档。对于用户只需要自由自在地使用，不需要自己去升级软件、维护软件等操作。
百度网盘也是一种SaaS应用。
</p>

<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenStack</b>就是一套IaaS（基础设施），大家也可以将其简单理解为“云”。它是一套开源云操作系统，由Python语言编写而成且负责通过命令行界面(简称CLI)或者基于Web的仪表板实
现对计算、存储以及网络资源池的管理工作。<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenStack可运行在各类常见Linux平台之上，具体包括RHEL、SUSE以及Ubuntu等等。它能够创建出一套环境，从而提供按需增加或者降低的资源分配机制。大数据、Web服务以及网络功能虚拟化(简称NFV)等面向服务供应商的功能都是OpenStack发挥作用的良好舞台。<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenStack的核心组件包括计算、存储与网络三大类。这些组件在OpenStack当中被称为核心服务，每个服务中又由多个组件构成。</p>
							</div>
						</div>
						<p><b>OpenStack架构图</b></p>
						<tr>
							<td><img src="<?php echo (URL); ?>img/openstack-jiagou.jpg" alt="Docker" width="660" height="500"/>
							<p><font color="red"><b>更多具体介绍可见：<a href="./openstack.docx">OpenStack的架构及组件介绍</a></b></font></p>
							</td>
						</tr>

                    </thead>
                </table>
				<h2 style="font-size: 20px; font-weight: normal; padding:0; height: 49px;" class="file-list"><i class="icon-bell icon-large" style="margin:0 10px; color: black;"></i>OpenStack管理后台操作演示</h2>
				<table>
                    <thead align="left">
						<div style="margin-bottom:10px;">
							<video width="650" height="400" src="/cloud/Public/1.mp4" controls="yes"></video>
						</div>
                    </thead>
                </table>
            </div>
            <div id="siderbar">
				<h4 style="font-weight: normal;" class="mirror-help"><i class="icon-lightbulb icon-large" style="margin:0 10px 0 0; color: black;"></i>公告</h4>
				<div>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、目前平台正处于测试阶段，若您想了解OpenStack仪表盘的管理界面，请使用下面的测试账号进行登陆。<br /></span>
					<p align="center">域：<b><font color="red">default</font></b> 账号：<b><font color="red">test</font></b> 密码：<b><font color="red">test</font></b><br /></p>
					<span>（建议使用火狐浏览器打开，并安装了最新的Flash插件。）<br /></span>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、有兴趣的同学可到603交流，如若需要虚拟主机测试，请到<a href="<?php echo (URL); ?>contact/index.php">服务器申请</a>页面填写表单。<br /></span>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、下面提供演示视频，供大家对平台内容的了解。<br /></span>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4、温馨提示：请勿对平台进行渗透扫描破坏，如若发现，可通过系统日志查找到攻击源，后果自负！</span>
				</div>
				<div align="right">AIB云计算小组<br /> 2017.6.15</div>
				<h4 style="font-weight: normal;"><i class="icon-link icon-large" style="margin:0 10px 0 30px; color: black;"></i>功能切换</h4>
				<!-- <p><a href="http://10.21.63.150/dashboard" target="_black">管理后台</a></p> -->
                <p><a href="/cloud/index.php/home/OpenStack/OpenStack" target="_black">管理后台</a></p>
				<p><a href="/cloud/index.php/Admin/stu/servAppl?for=1" target="_black">申请服务器</a></p>
				<h4 style="font-weight: normal;"><i class="icon-link icon-large" style="margin:0 10px 0 30px; color: black;"></i>友情链接</h4>
				<ul>
					<li><a href="http://www.miecu.net" target="_black">觅库</a></li>
					<li><a href="http://www.gdaib.edu.cn" target="_black">GDAIB</a></li>
				</ul>
			</div>
		</div>
	</div>

    <div style="height:70px;clear:both;">
        
    </div>

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