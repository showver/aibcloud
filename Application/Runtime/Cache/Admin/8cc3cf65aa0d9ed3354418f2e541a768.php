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
    <title>网络教学云平台 - vSphere</title>
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

    <div id="wrapper" >
        <div id="header" style=" height:80px;">
            <h2 style="font-size: 25px;">网络教学云平台 - <b>vSphere</b></h2>
            <a href="" title="一个业界领先且最可靠的虚拟化平台">一个业界领先且最可靠的虚拟化平台</a>
        </div>
        <div id="main">
            <div id="content">
                <h2 style="font-size: 20px; font-weight: normal; padding:0; height: 49px;" class="file-list"><i class="icon-file-alt icon-large" style="margin:0 10px; color: black;"></i>什么是vSphere？</h2>
                <table>
                    <thead align="left">
						<div>
							<div>
								<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vSphere</b>是什么？百度上说：vSphere是VMware公司推出的一套服务器虚拟化解决方案。官方授课的解释：VMware vSphere是实施以下任务的基础架构虚拟化套件：</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、提供虚拟化、管理、资源优化、应用程序可用性和操作自动化等功能。</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、汇聚物理硬件资源，并为数据中心提供虚拟资源。</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总结一下：vSphere是一种实现虚拟化的一种方法，而这个方法涉及了两个服务六个方面。</p>
								<p><b>两个服务：</b>应用程序服务，基础架构服务。</p>
								<p><b>六个方面：</b>可用性，安全性，可扩展性，计算，存储，网络。其中前三个属于应用程序服务，后三个属于基础架构服务。</p>
							</div>
						</div>
						<div>
							<p><b>vSphere名字的由来</b></p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最初它的命名是IV(基础虚拟化)，但随后创始人觉得这个名字不够cool，就又开始讨论起个什么样的名字合适。大家第一次使用VMware Workstation时，是不是觉得很神奇，一个操作系统任由自己操控，玩坏了还能利用快照还原。是不是有种我是主宰的感觉。<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;基于这种感觉，他们联想到水晶球，这个神奇而又神秘的东西。它能预测未来，回顾过去，看透人心...种种功能突出了它的魅力。之后经过讨论，Sphere这个名字被确定下来。<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;但是只是这个水晶球Sphere明显不符合他们虚拟化的实际特点，于是就在Sphere前面加个v表示虚拟化的水晶球，至此vSphere名字正式被使用。
							</p>
						</div>
						<p><b>vSphere架构图</b></p>
						<tr>
							<td><img src="<?php echo (URL); ?>img/vsphere-jiagou.jpg" alt="Docker" width="600" height="600"/>
							<p><font color="red"><b>更多具体介绍可见：<a href="./vsphere.docx">什么是vSphere</a></b></font></p>
							</td>
						</tr>

                    </thead>
                </table>
				<h2 style="font-size: 20px; font-weight: normal; padding:0; height: 49px;" class="file-list"><i class="icon-bell icon-large" style="margin:0 10px; color: black;"></i>vSphere管理后台操作演示</h2>
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
					<p align="center">账号：<b><font color="red">test@vsphere.local</font></b><br />密码：<b><font color="red">Test@123</font></b></p>
					<span>（建议使用火狐浏览器打开，并安装了最新的Flash插件。）<br /></span>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、有兴趣的同学可到603交流，如若需要虚拟主机测试，请到<a href="<?php echo (URL); ?>contact/index.php">服务器申请</a>页面填写表单。<br /></span>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、下面提供演示视频，供大家对平台内容的了解。<br /></span>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4、温馨提示：请勿对平台进行渗透扫描破坏，如若发现，可通过系统日志查找到攻击源，后果自负！</span>
				</div>
				<div align="right">AIB云计算小组<br /> 2017.6.15</div>
				<h4 style="font-weight: normal;"><i class="icon-link icon-large" style="margin:0 10px 0 30px; color: black;"></i>功能切换</h4>
				<!-- <p><a href="" target="_black">管理后台</a></p> -->
				<p><a href="/cloud/index.php/home/OpenStack/vSphere" target="_black">管理后台</a></p>
				<p><a href="/cloud/index.php/Admin/stu/servAppl?for=2" target="_black">申请服务器</a></p>
				<h4 style="font-weight: normal;"><i class="icon-link icon-large" style="margin:0 10px 0 30px; color: black;"></i>友情链接</h4>
				<ul>
					<li><a href="www.miecu.net">觅库</a></li>
					<li><a href="www.gdaib.edu.cn">GDAIB</a></li>
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