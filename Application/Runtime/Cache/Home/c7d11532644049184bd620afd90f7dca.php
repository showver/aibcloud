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
</style>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OpenStack</title>
  <link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo (URL); ?>public.css">

  <script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
  <!-- <script src="js/main.js"></script> -->
<!-- fancybox -->
  <script type="text/javascript" src="<?php echo (URL); ?>plugin/fancyBox/lib/jquery-1.8.2.min.js"></script>
  <script src="<?php echo (URL); ?>js/public.js"></script>
  <script type="text/javascript" src="<?php echo (URL); ?>plugin/fancyBox/source/jquery.fancybox.js?v=2.1.3"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo (URL); ?>plugin/fancyBox/source/jquery.fancybox.css?v=2.1.2" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo (URL); ?>plugin/fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="<?php echo (URL); ?>plugin/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <style type="text/css">
    html {
      overflow-y: scroll;
    }
    :root {
      overflow-y: auto;
      overflow-x: hidden;
    }
    :root body {
      position: absolute;
    }

    body{
      position: relative;
    }


    .list {
      display: flex;
      justify-content: center;
    }
    .list li{
      float: left;
      list-style: none;
      margin: 0 10px;
    }
    .list li img{
      width: 250px;
      height: 180px;
    }
  </style>

</head>
<body style="overflow-x: hidden;width:100vw;background-color: #ECEFF1;position: relative;">


    <ul class="list" style="position: absolute; top:50%;left:50%;transform: translate(-50%,-50%);">
      <li>
        <a class="fancybox" href="<?php echo (URL); ?>img/yum2/OpenStackLogin.png" data-fancybox-group="gallery" title="OpenStack登录"><img class="img-rounded" src="<?php echo (URL); ?>img/yum2/OpenStackLogin.png" alt="" /></a>
      </li>
      <li>
        <a class="fancybox" href="<?php echo (URL); ?>img/yum2/OpenStack.png" data-fancybox-group="gallery" title="OpenStack"><img class="img-rounded" src="<?php echo (URL); ?>img/yum2/OpenStack.png" alt="" /></a>
      </li>
      <li>
        <a class="fancybox" href="<?php echo (URL); ?>img/yum2/OpenStack2.png" data-fancybox-group="gallery" title="OpenStack"><img class="img-rounded" src="<?php echo (URL); ?>img/yum2/OpenStack2.png" alt="" /></a>
      </li>
    </ul>
      
      
      
    


  <script type="text/javascript">
    


    /*--------------------------------------------------*/
      $(document).ready(function() {

      /*----- plugin fancybox ------*/
        $('.fancybox').fancybox({
          openEffect : 'elastic',
          openSpeed  : 150,
          closeEffect : 'elastic',
          closeSpeed  : 150,
          helpers : {
            title : {
              type : 'over'
            }
          }
        });
        $('.fancybox-thumbs').fancybox({
          prevEffect : 'none',
          nextEffect : 'none',
          closeBtn  : false,
          arrows    : false,
          nextClick : true,
          helpers : {
            thumbs : {
              width  : 50,
              height : 50
            }
          }
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
    <span>Builder：<a href="">XXXXX云计算小组</a></span>
    <span>Copyright © 2017 <a href="">XXXXX云计算小组</a></span>
</footer>