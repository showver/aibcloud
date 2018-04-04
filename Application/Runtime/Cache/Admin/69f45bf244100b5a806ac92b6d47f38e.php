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
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>AIB网络工作室 - 云平台 - 邮件系统</title>
    <link rel="stylesheet" href="<?php echo (URL); ?>css/platform-enter.css">
    <link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo (URL); ?>public.css">
    <script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo (URL); ?>js/public.js"></script>
    <link rel="stylesheet" href="<?php echo (URL); ?>css/font-awesome.min.css">
    <style type="text/css">
        #siderbar p a:nth-child(1){
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
            <h2 style="font-size: 25px;">AIB网络工作室 - 云平台 - <b>邮件系统</b></h2>
            <a href="" title="一个开源免费的邮件系统">一个开源免费的邮件系统</a>
        </div>
        <div id="main">
            <div id="content">
                <h2 style="font-size: 20px; font-weight: normal; padding:0; height: 49px;" class="file-list"><i class="icon-file-alt icon-large" style="margin:0 10px; color: black;"></i>关于Mail的知识</h2>
                <table>
                    <thead align="left">
                    <tr>
                        <td><b>SMTP</b></td>
                    </tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMTP全称是Simple Mail Transfer Protocol，直译过来就是简单邮件传输协议， 由RFC5321定义。</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主要的工作就是把邮件信息从发件人的邮件服务器中传送到接收人的邮件服务器中，偶尔我们使用MUA来发送邮件的话，
也承载传输用户邮件到发件服务器的功能，因而也称作推协议，顺带提一下，SMTP协议的出现是比HTTP还早的，最早
在1982年中发布第一版的RFC。
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;因而因为提出的年代久远，所以在当时有许多问题都考虑不全面并且也有这许多的限制，例如SMTP要求信息内容需要是
7位的ASCII来承载，因而我们在发送以及接受的时候，都需要将其编码解码。</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;另外，SMTP还存在一个问题就是没有对发送方进行一个身份验证，虽然在早期的互联网环境没有很大问题，但是在垃圾
邮件满天飞的今天，这却是一个明显的短板。因而衍生出了SPF， DKIM， DMARC等一系列用来验证发件人身份的方法。</td>
					<tr>
                        <td><b>POP3</b></td>
                    </tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;POP3，Post Office Protocol Version 3，直译就是邮局协议第三版，由RFC1939进行定义。这个协议的
主要服务于用户管理邮件服务器上面的电子邮件。</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;具体过程是:当外来邮件发送到收件人的邮件服务器
上时，收件人可以使用邮件客户端连接邮件服务器，把未阅读的邮件服务器以及部分信息拉取回本地进行
处理。</td>
					</tr>
					<tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在拉取的过程中，我们可以选择拉取完删除以及拉取完不删除两种方式，不过现在默认一般都是拉取
完不删除，方便我们在其他的地方也能对邮件进行阅读以及管理。</td>
                    </tr>
					<tr>
                        <td><b>IMAP</b></td>
                    </tr>
					<tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMAP，Internet Message Access Protocol， 直译过来就是网络信息访问协议，可能和现在主流
的翻译不太一致，不过能理解其意思就好。相对于pop3协议所有邮件的管理都需要下载下来进而管
理，IMAP提供了用户远程访问邮件服务器的途径，因而通过IMAP，用户可以直接管理邮件服务器上的邮件。</td>
                    </tr>
					<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更详细可参考简书：<a href="http://www.jianshu.com/p/610d9bf0ae8b">从零开始邮件服务器搭建</a></td></tr>
                    </thead>
                </table>
				<h2 style="font-size: 20px; font-weight: normal; padding:0; height: 49px;" class="file-list"><i class="icon-bell icon-large" style="margin:0 10px; color: black;"></i>电子邮件架构</h2>
				<table>
                    <thead align="left">
                    <tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>PTR</b>：反向域名解析，可以通过发件人的IP地址反向得知域名，也是一种用以判断发件人是tr否正常的方式。</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>MUA</b>：Mail User Agent。用户邮件代理，用户通过MUA接收发送邮件。例如Outlook， formail等。</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>MTA</b>：Mail Transfer Protocol。邮件传输代理，是SMTP的一种实现。常用的MTA有sendmail，Postfix。本例中使用Postfix。MTA仅仅负责邮件的传输，MDA负责把接收到的邮件保存在硬盘中。</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>MDA</b>：Mail Deliver Agent，邮件分发代理。负责将接收到的邮件保存在邮件服务器上。sendmail以及Postfix默认使用的MDA是procmail。</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>MRA</b>；Mail Receive Agent，邮件接收代理，用来实现IMAP，POP3协议，负责与MUA交互，将服务器上的邮件通过IMAP以及POP3传输给客户端。本例中使用的MRA是Dovecot。</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>LMTP</b>:Local Mail Transfer Protocol。本地邮件传输协议，是SMTP协议的扩展。</td>
					</tr>
					<tr><td><img src="<?php echo (URL); ?>img/mail-jiagou.png" alt="电子邮件架构" width="660" height="500"/></td></tr>
                    </thead>
                </table>
            </div>
            <div id="siderbar">
				<h4 style="font-weight: normal;" class="mirror-help"><i class="icon-lightbulb icon-large" style="margin:0 10px 0 0; color: black;"></i>温馨提示</h4>
				<p>
                目前AIB网络工作室邮件系统直接采用EwoMail应用，用于对云服务器、SVN版本控制库申请的邮件反馈通告。<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EwoMail是一款基于Linux的开源邮件服务器软件，集成了众多优秀稳定的组件，是一个快速部署、简单高效、多语言、安全稳定的邮件解决方案，帮助你提升运维效率，降低 IT 成本，兼容主流的邮件客户端，同时支持电脑和手机邮件客户端。详细见官网：<a href="http://www.fewomail.com/">EwoMail</a>
				</p>
				<h4 style="font-weight: normal;"><i class="icon-link icon-large" style="margin:0 10px 0 30px; color: black;"></i>功能切换</h4>
				<p><a href="" target="_black">用户登录</a></p>
				<p><a href="" target="_black">管理后台</a></p>
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