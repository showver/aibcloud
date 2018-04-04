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
<title>云平台建设</title>
  <!--Google Fonts link-->
  <link rel="stylesheet" href="<?php echo (URL); ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo (URL); ?>public.css">

  <!--Theme custom css -->
  <!-- <link rel="stylesheet" href="css/style.css">         -->
  <!-- imagehover css-->
  <link rel="stylesheet" href="<?php echo (URL); ?>css/imagehover.min.css" />
  <!-- hover css-->
  <link rel="stylesheet" href="<?php echo (URL); ?>css/hover-min.css" />



  <style type="text/css">
    .head_title{
        position: relative;
    }
    .head_title h3{
        color:#413d4b;
    }
    .head_title .subtitle{

    }
    .separator {
        width: 10px;
        height: 10px;
        margin: 20px auto;
        background: #e74c3c;
        position: relative;
        display: inline-block;
        border-radius: 50%;
        margin:15px;
    }
    .effects{
        position: relative;
        display: flex;
        width: 80vw;
        margin: 0 auto;
        flex-flow: row wrap;
        justify-content: center;
    }
    .effects .demo{
        /* margin: 2vh auto; */
        margin: 20px auto;
        /* width: 20vw; */
        width: 15vw;
        /* min-width: 352px; */
        min-width: 330px;
        margin-bottom: 2vh;
    }
    .effects .demo:last-child{
        margin-bottom: 8vh;
    }
    figure>img{
        /* width: 20vw; */
        width: 15vw;
        /* min-width: 320px; */
        min-width: 300px;
        height: 20vw;
        /* min-height: 320px; */
        min-height: 300px;
        /* border: 1px solid gray; */
    }
    figure>a{
        /* width: 20vw; */
        width: 15vw;
        min-width: 320px;
        margin-top: 0em;
        color: blue;
        font-size: 2rem;
    }

    figcaption h3{ color: #FF0000; text-align: center; display: flex; justify-content: center;}
    figcaption h3 i{ color: #FFA500; }
    figcaption h3 span{ display: inline-block; text-align: left; color: #FFA500; font-size: 2.4rem;}
    /* figcaption p{ line-height: 25px; } */
    figcaption p{ line-height: 20px; }
    figcaption p span{ display:inline-block; text-indent: 3rem; font-size: 1.5rem; }

    @media screen and (max-width: 1366px){
        figcaption h3 span{ font-size: 2.4rem; }
        figcaption p span{ text-indent: 2.8rem; font-size: 1.4rem; }
    }
    @media screen and (max-width: 1300px){
        figcaption h3 span{ font-size: 1.5rem;}
        figcaption p span{ text-indent: 2.8rem; font-size: 1.4rem; }
    }



  </style>

</head>
<body style="overflow-x: hidden;background-color: #ECEFF1;">


  <div class="head_title text-center container">
      <h2 style="display: flex; justify-content: center;">平台入口</h2>
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


  <div class="effects container">

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-slide-down">
          <img src="<?php echo (URL); ?>img/stu.png" alt="example-image">
          <figcaption>
            <h3><i class="icon-group"></i><span>学生站点</span></h3>
            <p>
              <span>学生站点主要用于校园网内部学生的WEB作品展示以及教师的教学管理。</span><br/>
              <span>成功申请到空间后，学生可上传自己设计好的网页作品到自己的站点上，也可以在线编辑代码，同时学生之间还能对对方的作品进行评论。</span><br/>
              <span>教师通过该平台，可以实时掌握学生作品的完成情况，同时还可以对学生的每次作业情况进行点评、评优、评分、排行，提高教学、作业的批改效率。</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/home/stu/stuIndex" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative;">进入平台</a>
      </div>

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-slide-down">
          <img src="<?php echo (URL); ?>img/cunchu.jpg" alt="example-image" >
          <figcaption>
            <h3><i class="icon-link"></i><span>内网云盘</span></h3>
            <p>
              <span>用户可自行注册账号，通过网络将自己的资料上传到云盘中，可公开分享，也可指定分享。</span><br/>
              <span>公共云盘是文件共享站，主要分享常用系统软件、操作系统镜像、学习资料、视屏。</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/admin/lanDisk/onlineDisk" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative; ">进入平台</a>
      </div>

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-slide-down">
          <img src="<?php echo (URL); ?>img/openstack.png" alt="example-image" >
          <figcaption>
            <h3><i class="icon-cloud"></i><span>OpenStack</span></h3>
            <p>
              <span>OpenStack虚拟化平台实验中心，内置多类型、多版本系统，可通过镜像定制系统。</span><br/>
              <span>学生可在XXXXX云平台首页，根据需要选择操作系统、服务器配置，提交云服务器的申请，用于实验测试。</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/admin/openstack/openstack" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative; ">进入平台</a>
      </div>

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-slide-right">
          <img src="<?php echo (URL); ?>img/vsphere.png" alt="example-image" >
          <figcaption>
            <h3><i class="icon-cloud"></i><span>vSphere</span></h3>
            <p>
              <span>vSphere虚拟化平台实验中心，VMware公司推出的一套服务器虚拟化解决方案。</span>
              <span>目前只对内部开发人员提供实验测试环境，其他用户敬请期待！</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/admin/vsphere/vsphere" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative; ">进入平台</a>
      </div>

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-zoom-in">
          <img src="<?php echo (URL); ?>img/yum.png" alt="example-image" >
          <figcaption>
            <h3><i class="icon-briefcase"></i><span>Mirrors</span></h3>
            <p>
              <span>源，就相当于一个软件仓库，各种源就有各种软件仓库。</span>
              <span>目前XXXXX镜像站提供CentOS-7.2的yum源、epel源、OpenStack-N源、Ceph-H源，为内网用户提供大量的软件仓库，节省外网带宽，提高软件安装的效率。</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/admin/mirrors/mirrors" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative; ">进入平台</a>
      </div>

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-slide-left">
          <img src="<?php echo (URL); ?>img/svn.jpg" alt="example-image" >
          <figcaption>
            <h3><i class="icon-tasks"></i><span>SVN版本控制库</span></h3>
            <p>
              <span>SVN是一个版本管理工具，常用于软件开发项目中，实现代码、文档等的历史版本保存、共享和权限管理。</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/admin/svn/subversion" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative; ">进入平台</a>
      </div>

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-slide-up">
          <img src="<?php echo (URL); ?>img/docker.jpg" alt="example-image" >
          <figcaption>
            <h3><i class="icon-briefcase"></i><span>Docker镜像仓库</span></h3>
            <p>
              <span>Docker是一个开源的应用容器引擎，属于PASS级别的应用。通过Docker可以快速部署一个应用环境，大大提高开发的效率。</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/admin/Docker/docker" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative; ">进入平台</a>
      </div>

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-slide-up">
          <img src="<?php echo (URL); ?>img/mail.png" alt="example-image" >
          <figcaption>
            <h3><i class="icon-envelope"></i><span>邮件系统</span></h3>
            <p>
              <span>目前仅对内部人员开放并用于邮件通告！！！</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/admin/Mail/mail" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative; ">进入平台</a>
      </div>

      <div class="demo col-xs-offset-3 col-xs-6 col-sm-4 col-md-4">
        <figure class="imghvr-slide-up">
          <img src="<?php echo (URL); ?>img/jinqing.jpg" alt="example-image" >
          <figcaption>
            <h3><i class="icon-spinner"></i><span>敬请期待</span></h3>
            <p>
              <span>精彩内容，，敬请期待！！！</span>
            </p>
          </figcaption><a href="javascript:;"></a>
        </figure><br/>
        <a href="/cloud/index.php/Home/team/joinus" class="btn btn-block hvr-border-fade" onclick="this.focus();this.select()" readonly style="position: relative; ">进入平台</a>
      </div>
  </div>




  <script type="text/javascript">
    /*-----  无缝滚动  ------*/
      var timer;
      function scroll(){
        $('.gundong img').eq(0).animate({"margin-left":"-256px"},function(){
          $('.gundong img').eq(0).appendTo('.gundong');
          $('.gundong img').css({"margin-left":"6px"});
        })
      }
      timer=setInterval(scroll,2000);



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


        $('.gundong').on({
          mouseover:function(){
            clearInterval(timer);
          },
          mouseout:function(){
            timer=setInterval(scroll,2000);
          }

        })

      });


  </script>
  <script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
  <script src="<?php echo (URL); ?>js/public.js"></script>
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