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
</style></div>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>服务申请</title>
<link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo (URL); ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo (URL); ?>public.css">

<style type="text/css">
    ul,li{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .container{
        width: 80vw;
        margin: 0 auto;
        background: whitesmoke;
    }
    .pers_info ul{
        box-shadow: 0 0 6px gray;
        background: white;
        /* margin-left: -15px; */
    }
    .pers_info ul li{
        margin:10px;
        padding: 10px;
    }
    .pers_info li:first-child img{
        width: 100px;
        height: 100px;
        float: left;
    }
    .pers_info li:first-child div{
        height: 100px;
        display: table-cell;
        padding-left: 10px;
        vertical-align: middle;
    }
    .pers_info li:nth-child(2) i{
        margin:0 10px;
    }

    .tabs{
        margin: 10px auto;
    }
    .active{
        color:#FA9143;
    }
    .tabs ul{
        display: flex;
        justify-content: space-around;
        /* border-bottom: 1px solid gray; */
        padding: 12px 0;
        position: relative;
    }
    .tabs ul li{
        cursor: pointer;
        color: gray;
        float: left;
        font-size: 1.4rem;
        position: relative;
    }
    /*
    .tabs ul li:first-child{
        color: #FA9143;
    }
    */
    .tabs section{
        margin-top: 15px;
        min-height: 420px;
        height: 85vh;
        padding: 5px 0;
        background: white;
        position: relative;
    }
    .tabs section  i{
        position: absolute;
        left: 30px;
        top: 25px;
    }
    .tabs section  i:hover{
        color: green;
        cursor: pointer;
    }
    .tabs section h3{
        padding-bottom: 25px;
    }
    .tabs #section-0 p,#section-1 p,#section-2 p,#section-3 p,#section-4 p{
        font-size: 1.3rem;
        font-weight: bold;
        margin:15px 10px 10px 10px;
        height: 40px;
        clear: both;
    }
    .tabs #section-0 p a,#section-1 p a,#section-2 p a,#section-3 p a,#section-4 p a{
        float: left;
        color: white;
        margin-left: 5px;
        margin-bottom: 15px;
        text-decoration: none;
        background: #3ac984;
        padding: 10px 45px;
        border-radius: 40px;
    }
    .tabs #section-0 p a:hover,#section-1 p a:hover,#section-2 p a:hover,#section-3 p a:hover,#section-4 p a:hover{
        text-decoration: underline;
        cursor: pointer;
    }
    .tabs #section-1 p span,#section-2 p span,#section-3 p span,#section-4 p span{
        font-size: 1.3rem;
        margin: 20px;
    }
    .tabs #section-1 p span mark,#section-2 p span mark,#section-3 p span mark{
        color: red;
    }
    .tabs #section-0 div,#section-1 div,#section-2 div,#section-3 div{
        margin: 18px;
        font-size: 1.3rem;
        line-height: 25px;
        clear: both;
    }

    .tabs #section-1-c div{
        margin: 18px;
        font-size: 1.8rem;
        line-height: 38px;
    }
    .tabs #section-3 div ul,#section-4 div ul{
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
        border: none;
        margin: -20px 0;
    }
    .tabs #section-3 div ul li a,#section-4 div ul li a{
        font-size: 1.5rem;

    }
    
    #section-0-b form{
        display: flex;
        flex-flow: column wrap;
        justify-content: center;
        align-items: center;
    }
    #section-0-b input{
        width: 30px;
        margin-top: 5px;
    }
    #section-4 ul{
        width: inherit;
        display: flex;
        flex-flow: column wrap;
        align-content: flex-start;
        border: none;
    }
    #section-4 li{
        width: inherit;
        margin:  10px;
        font-size: 1.4rem;
        color: black;
    }
    #section-4 li div:first-child{
        width: 48vw;
        min-width: inherit;
        margin: 5px 0;
        position: relative;
    }
    #section-4 li div:first-child i{
        position: absolute;
        top: 0;
        left: 10px;
        padding: 0;
    }
    #section-4 li div:first-child span{
        margin-left: 40px;
    }
    #section-4 li div:last-child{
        margin-top: 10px;
        text-indent: 2.8rem;
        margin-left: 40px;
        line-height: 25px;
        overflow: hidden;
    }
    #section-4 td:nth-child(3){
        max-width: 120px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        letter-spacing: 2px;

    }
    

</style>

</head>

<body>


    <div class="container">
        <section class="col-sm-12 col-md-4 pers_info">
            <ul>
                <li class="row">
                    <img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$_SESSION['username'].".png"))?"/cloud/application/admin/public/uploadImg/".$_SESSION['username'].".png":'/cloud/application/admin/public/uploadImg/0.png'; ?>" class="img-circle">
                    <div>
                        <!-- <i class="icon icon-edit"> -->
                        <h4><strong><?php echo (session('username')); ?></strong></h4>
                        <p>QQ：<?php echo ($r["qq"]); ?></p>
                        <p>手机：<?php echo ($r["phnumber"]); ?></p>
                    </div>
                </li>
                <li>
                    <p class="text-muted"><i class="icon icon-calendar"></i>加入于&nbsp;<?php echo (date("Y-m-d",$r["cre_time"])); ?></p>
                    <p class="text-muted"><i class="icon icon-edit"></i>个人描述：<?php echo ($r["perdescribt"]); ?></p>
                </li>
                <li>
                    <a href="./persInfo" class="btn btn-block btn-success">
                        <i class="icon icon-user"></i>&nbsp;&nbsp;&nbsp;修改资料
                    </a>
                </li>
            </ul>
        </section>

        <section class="col-sm-12 col-md-8 tabs" id="tabs">

            <ul>
            <?php if($_SESSION['level']== 2): ?><li style="color:#FA9143" class="active">
            <?php else: ?>
                <li style="color:#FA9143;display:none;" class="active"><?php endif; ?>
                    <i class="icon icon-cloud hidden-xs hidden-sm"></i>  我的站点  </li>
                <li>
                    <i class="icon icon-cloud hidden-xs hidden-sm" id="1"></i>  OpenStack  </li>
                <li>
                    <i class="icon icon-cloud hidden-xs hidden-sm" id="2"></i>  vSphere  </li>
                <li>
                    <i class="icon icon-tasks hidden-xs hidden-sm" id="3"></i>  SVN  </li>
                <li>
                <i class="icon icon-exclamation-sign hidden-xs hidden-sm"></i>  数据库  </li>
                <li>
                    <i class="icon icon-exclamation-sign hidden-xs hidden-sm"></i>  通知  </li>
            </ul>
            <div id="back" style="height:3px; width:80px; background: #FA9143; position: absolute; top:40px; left:50px;"></div>
            
                

        
        <?php if($_SESSION['level']== 2): ?><section id="section-0" style="display: ;">
        <?php else: ?>
            <section id="section-0" style="display:none ;"><?php endif; ?>
                <p>
                    <a id="my-score">我的成绩</a>
                    <a href="/cloud/index.php/home/stu/stuIndex" target="_black">站点列表</a>
                    <a href="/cloud/stu-data/<?php echo ($r["stu_number"]); ?>" target="_black">进入网站</a>
                    <a href="/cloud/stuManage/index.php" target="_black">管理后台</a></p>
                

                <div class="text-muted">
                    温馨提示：<br>
                    1、您的站点默认是已经开通的，可直接点击“进入网站”查看！<br>
                    2、您还可以通过“管理后台”在线修改你网站的代码！<br>
                    3、网站底层使用的是FTP技术，你也可以使用FTP客户端登陆到您的站点！<br>
                    <a href="<?php echo (URL); ?>download/download.php?filename=8uftp_V3.8.2.0.zip">8UFTP下载</a><br>
                    4、使用过程中若有任何问题请联系管理员：685135<br>

                    </div>
            </section>
            <section id="section-0-b" style="display: none;">
                <i class="icon-arrow-left icon-2x"></i>
                <h3 class="text-center">我的成绩</h3>
                <!-- <form action="" class="form-horizontal">
                    <div class="form-group" >
                        <label class=" control-label" for="cj1">第一次成绩：</label>
                        <span><?php echo ($r["score"]["one_score"]); ?></span>
                    </div>
                    <div class="form-group" >
                        <label class="control-label" for="cj1">第二次成绩：</label>
                         <span><?php echo ($r["score"]["two_score"]); ?></span>
                    </div>
                    <div class="form-group" >
                        <label class="control-label" for="cj1">第三次成绩：</label>
                        <span><?php echo ($r["score"]["three_score"]); ?></span>
                    </div>
                    <div class="form-group" >
                        <label class="control-label" for="cj1">期末成绩：</label>
                        <span><?php echo ($r["score"]["term_score"]); ?></span>
                    </div>
                </form> -->
                <table class="table table-striped table-condensed table-hover table-bordered text-center" style="font-size: 1rem;">
                
                    <tr>
                        <td></td>
                        <td>作业名称</td>
                        <td>成绩</td>
                        <td>备注</td>
                    </tr>
                    <tr>
                        <td>第一次作业：</td>
                        <td><?php echo ($r["score"]["name"]); ?></td>
                        <td><?php echo ($r["score"]["one_score"]); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>第二次作业：</td>
                        <td><?php echo ($r["score"]["name"]); ?></td>
                        <td><?php echo ($r["score"]["two_score"]); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>第三次作业：</td>
                        <td><?php echo ($r["score"]["name"]); ?></td>
                        <td><?php echo ($r["score"]["three_score"]); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>期末作业：</td>
                        <td><?php echo ($r["score"]["name"]); ?></td>
                        <td><?php echo ($r["score"]["term_score"]); ?></td>
                        <td></td>
                    </tr>
               
            </table>
            </section>


        <?php if($_SESSION['level']== 2): ?><section id="section-1" style="display: none;">
        <?php else: ?>
            <section id="section-1" style="display:block;"><?php endif; ?>
                <p>
                    <a id="appl-serv-1"  target="_black">申请OpenStack</a>
                    <?php if($r['openstack']['state'] == '已通过'): ?><!-- <a href="http://10.21.63.150/dashboard" target="_blank" >管理后台</a> -->
                    <a href="/cloud/index.php/home/OpenStack/OpenStack" target="_blank" >管理后台</a>
                    <a href="" data-toggle="modal" data-target="#myModal">申请销毁云服务器</a></p><?php endif; ?>
                <p>
                    <span>申请进展：<mark><?php if(isset($r['openstack']['state'])): echo ($r["openstack"]["state"]); else: ?>您还未申请<?php endif; ?></mark>
            <?php if(isset($r['openstack']['state'])): ?><div class="table-responsive" style="margin:0;">
                    <table class="table table-striped table-condensed table-hover table-bordered text-center" style="font-size: 1rem;">
                        <thead>
                            <tr>
                                <th class="text-center">序号</th>
                                <th class="text-center">系统</th>
                                <th class="text-center">cpu核数</th>
                                <th class="text-center">内存</th>
                                <th class="text-center">附加云盘</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo ($r["openstack"]["oid"]); ?></td>
                                <td><?php echo ($r["openstack"]["system"]); ?></td>
                                <td><?php echo ($r["openstack"]["cpu"]); ?></td>
                                <td><?php echo ($r["openstack"]["memory"]); ?></td>
                                <td><?php echo ($r["openstack"]["disk"]); ?></td>
                            </tr>
                        </tbody>
                    </table></div><?php endif; ?>
                <div class="text-muted">
                    温馨提示：<br>
                    1、审核需要一定时间，请耐心等待管理员对服务器的调度！敬请留意您的邮箱或手机短信通知！<br>
                    2、由于服务器资源有限，每位同学仅能申请一台云服务器且配置统一。若同一用户通过注册多个账号来“刷资源”，一经查到，将冻结相关账号，请理解！<br>
                    3、使用过程中若有任何问题请联系管理员：685135。<br></div>
            </section>
            <section id="section-1-b" style="display: none;">
                <i class="icon-arrow-left icon-2x"></i>
                <h3 class="text-center">OpenStack服务器申请</h3>
                <form id="openstack" class="form-horizontal">
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="system">操作系统:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="system" id="sysSele">
                                <option>Windows</option>
                                <option>Linux</option>
                            </select>
                        </div>
                        <div class="col-sm-5 text-danger bg-danger">温馨提示：选择的系统已经自带系统盘</div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="system">系统类型:</label>
                        <div class="col-sm-4" id="sysType">
                            <select class="form-control" name="system">
                                <option value="Server2008x64">Server2008x64</option>
                                <option value="Server2012x64">Server2012x64</option>
                                <option value="Windows7x86">Windows7x86</option>
                                <option value="Windows7x64">Windows7x64</option>
                            </select>
                            <select class="form-control" name="system" style="display: none;">
                                <option value="CentOS6.8">CentOS6.8</option>
                                <option value="CentOS6.8（集成LAMP）">CentOS6.8（集成LAMP）</option>
                                <option value="CentOS7.2">CentOS7.2</option>
                                <option value="CentOS7.2（集成LAMP）">CentOS7.2（集成LAMP）</option>
                                <option value="Ubuntu14.04">Ubuntu14.04</option>
                                <option value="Ubuntu16.04">Ubuntu16.04</option>
                            </select>
                        </div>
                        <div class="col-sm-5 text-danger bg-danger">温馨提示：请先选择操作系统。</div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="cpu">CPU核数:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="cpu">
                                <option value="1个"> 1个 </option>
                                <option value="2个"> 2个 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="memory">内存大小:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="memory">
                                <option value="512MB"> 512MB </option>
                                <option value="1024MB"> 1024MB </option>
                                <option value="2048MB"> 2048MB </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="disk">附加云盘:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="disk">
                                <option value="10GB"> 10GB </option>
                                <option value="30GB"> 30GB </option>
                                <option value="50GB"> 50GB </option>
                                <option value="100GB"> 100GB </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="application">申请用途:</label>
                        <div class="col-sm-9">
                            <textarea style="resize: none;" class="form-control" name="application"></textarea>
                        </div>
                    </div>
                    <div class="form-group" >
                        <div id="appl-serv-sub-1" class="col-sm-offset-4 col-sm-4 btn btn-success" onclick="send('./openstack','openstack');">提交</div></div>
                </form>
            </section>
            <section id="section-1-c" style="display: none;">
                <i class="icon-arrow-left icon-2x"></i>
                <h3 class="text-center">OpenStack服务器申请</h3>
                <p class="text-center text-success" style="font-size: 1.6rem; font-weight: bold;">
                    <span>您的申请已提交，请耐心等待管理员审核，谢谢！</span></p>
                <div class="text-muted">
                    温馨提示：<br>
                    1、审核需要一定时间，请耐心等待管理员对服务器的调度！敬请留意您的邮箱或手机短信通知！<br>
                    2、由于服务器资源有限，每位同学仅能申请一台云服务器且配置统一。若同一用户通过注册多个账号来“刷资源”，一经查到，将冻结相关账号，请理解！<br>
                    3、使用过程中若有任何问题请联系管理员：685135。<br></div>
            </section>



            <section id="section-2" style="display: none;">
                <p>
                    <a id="appl-serv-2" target="_black">申请vSphere</a>
                    <?php if($r['vsphere']['state'] == '已通过'): ?><a href="" target="_black">管理后台</a>
                    <a href="" data-toggle="modal" data-target="#myModal2">申请销毁云服务器</a></p><?php endif; ?>
                <p>
                    <span>申请进展：<mark><?php if(isset($r['vsphere']['state'])): echo ($r["vsphere"]["state"]); else: ?>您还未申请</mark><?php endif; ?></span></p>
            <?php if(isset($r['vsphere']['state'])): ?><div class="table-responsive" style="margin:0;">
                    <table class="table table-striped table-condensed table-hover table-bordered text-center" style="margin:0; padding:0;font-size: 1rem;">
                        <thead>
                            <tr>
                                <th class="text-center">序号</th>
                                <th class="text-center">系统</th>
                                <th class="text-center">cpu核数</th>
                                <th class="text-center">内存</th>
                                <th class="text-center">附加云盘</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo ($r["vsphere"]["vid"]); ?></td>
                                <td><?php echo ($r["vsphere"]["system"]); ?></td>
                                <td><?php echo ($r["vsphere"]["cpu"]); ?></td>
                                <td><?php echo ($r["vsphere"]["memory"]); ?></td>
                                <td><?php echo ($r["vsphere"]["disk"]); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div><?php endif; ?>
                <div class="text-muted">
                    温馨提示：<br>
                    1、审核需要一定时间，请耐心等待管理员对服务器的调度！敬请留意您的邮箱或手机短信通知！<br>
                    2、由于服务器资源有限，每位同学仅能申请一台云服务器且配置统一。若同一用户通过注册多个账号来“刷资源”，一经查到，将冻结相关账号，请理解！<br>
                    3、使用过程中若有任何问题请联系管理员：685135。<br></div>
            </section>
            <section id="section-2-b" style="display: none;">
                <i class="icon-arrow-left icon-2x"></i>
                <h3 class="text-center">vSphere服务器申请</h3>
                <form id="vsphere" class="form-horizontal">
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="xt">操作系统:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="system">
                                <option value="Server2008x64">Server2008x64</option>
                                <option value="Server2012x64">Server2012x64</option>
                                <option value="Windows7x86">Windows7x86</option>
                                <option value="Windows7x64">Windows7x64</option>
                                <option value="CentOS6.8">CentOS6.8</option>
                                <option value="CentOS6.8（集成LAMP）">CentOS6.8（集成LAMP）</option>
                                <option value="CentOS7.2">CentOS7.2</option>
                                <option value="CentOS7.2（集成LAMP）">CentOS7.2（集成LAMP）</option>
                                <option value="Ubuntu14.04">Ubuntu14.04</option>
                                <option value="Ubuntu16.04">Ubuntu16.04</option>
                            </select>
                        </div>
                        <span class="col-sm-5">温馨提示：选择的系统已经自带系统盘</span>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="cpu">CPU核数:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="cpu">
                                <option value="1个">1个</option>
                                <option value="2个">2个</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="nc">内存大小:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="memory">
                                <option value="512M">512M</option>
                                <option value="1024M">1024M</option>
                                <option value="2048M">2048M</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="yp">云端硬盘:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="disk">
                                <option value="10GB">10GB</option>
                                <option value="30GB">30GB</option>
                                <option value="50GB">50GB</option>
                                <option value="100GB">100GB</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="yt">申请用途:</label>
                        <div class="col-sm-9">
                            <textarea style="resize: none;" class="form-control" name="application"></textarea>
                        </div>
                    </div>
                    <div class="form-group" >
                        <div id="appl-serv-sub-2" class="col-sm-offset-4 col-sm-4 btn btn-success" onclick="send('./vsphere','vsphere');">提交</div></div>
                </form>
            </section>
            <section id="section-2-c" style="display: none;">
                <i class="icon-arrow-left icon-2x"></i>
                <h3 class="text-center">vSphere服务器申请</h3>
                <p class="text-center text-success" style="font-size: 1.6rem; font-weight: bold;">
                    <span>您的申请已提交，请耐心等待管理员审核，谢谢！</span></p>
                <div class="text-muted">
                    温馨提示：<br>
                    1、审核需要一定时间，请耐心等待管理员对服务器的调度！敬请留意您的邮箱或手机短信通知！<br>
                    2、由于服务器资源有限，每位同学仅能申请一台云服务器且配置统一。若同一用户通过注册多个账号来“刷资源”，一经查到，将冻结相关账号，请理解！<br>
                    3、使用过程中若有任何问题请联系管理员：685135。<br></div>
            </section>

            <section id="section-3" style="display: none;">
                <p>
                    <a id="appl-serv-3" target="_black">SVN代码托管库申请</a>
                    <?php if($r['svn']['state'] == '已通过'): ?><a href="" data-toggle="modal" data-target="#myModal3" >申请销毁SVN</a><?php endif; ?></p>
                <p>
                    <span>您团队的SVN代码库：<mark><?php if(isset($r['svn']['state'])): echo ($r["svn"]["state"]); else: ?>您还未申请</mark><?php endif; ?></span><br>
                    <span>使用方法：（参考SVN平台入口）</span></p>
            <?php if(isset($r['svn']['state'])): ?><table class="table table-striped table-bordered text-center" style="font-size: 1rem;">
                    <tr>
                        <td>项目名称：</td>
                        <td><?php echo ($r["svn"]["project_name"]); ?></td>
                    </tr>
                    <tr>
                        <td>项目成员1：</td>
                        <td><?php echo ($r["svn"]["applicant"]); ?></td>
                    </tr>
                    <tr>
                        <td>项目成员2：</td>
                        <td><?php echo ($r["svn"]["one_member"]); ?></td>
                    </tr>
                    <tr>
                        <td>项目成员3：</td>
                        <td><?php echo ($r["svn"]["two_member"]); ?></td>
                    </tr>
                    <tr>
                        <td>项目描述：</td>
                        <td><?php echo ($r["svn"]["project_describt"]); ?></td>
                    </tr>
                </table><?php endif; ?>
                <div>
                    <h5>软件下载：</h5>
                    <ul >
                        <li><a href="<?php echo (URL); ?>download/download.php?filename=TortoiseSVN_1.9.5.27581_win32.msi">TortoiseSVN_32bit</a></li>
                        <li><a href="<?php echo (URL); ?>download/download.php?filename=TortoiseSVN-1.9.7.27907-x64-svn-1.9.7.msi">TortoiseSVN_364bit</a></li>
                    </ul></div>
                <div class="text-muted">
                    温馨提示：<br>
                    1、同一个团队的成员只需要其中一个账号申请SVN代码库即可。<br>2、使用过程中若有任何问题请联系管理员：685135</div>
            </section>
            <section id="section-3-b" style="display: none;">
                <i class="icon-arrow-left icon-2x"></i>
                <h3 class="text-center">SVN代码托管库申请</h3>
                <p class="text-center" style="font-size: 1.4rem; color: red;">注意：项目名称、成员账号一旦申请，就不可更改，只能删除！</p>
                <form id="svn" class="form-horizontal">
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="project_name">项目名称:</label>
                        <div class="col-sm-4">
                            <input type="text" name="project_name" class="form-control">
                        </div>
                        <span class="col-sm-5">仅支持英文、下划线命名</span>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="one_member">成员1:</label>
                        <div class="col-sm-4">
                            <input type="text" name="one_member" class="form-control">
                        </div>
                        <span class="col-sm-5">仅支持英文、下划线命名</span>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="two_member">成员2:</label>
                        <div class="col-sm-4">
                            <input type="text" name="two_member" class="form-control">
                        </div>
                        <span class="col-sm-5">仅支持英文、下划线命名</span>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-2 control-label" for="project_describt">项目描述:</label>
                        <div class="col-sm-9">
                            <textarea style="resize: none;" class="form-contwsshyaErol" rows="5" cols="35" name="project_describt"></textarea>
                        </div>
                    </div>
                    <div class="form-group" >
                        <div id="appl-serv-sub-3" class="col-sm-offset-4 col-sm-4 btn btn-success" onclick="send('./svn','svn');">提交</div></div>
                </form>
            </section>
            <section id="section-3-c" style="display: none;">
                <i class="icon-arrow-left icon-2x"></i>
                <h3 class="text-center">SVN代码托管库申请</h3>
                <p class="text-center text-success" style="font-size: 1.6rem; font-weight: bold;">
                    <span>您的代码托管项目已成功申请！</span></p>
                <div class="text-muted">
                    温馨提示：<br>
                    1、同一个团队的成员只需要其中一个账号申请SVN代码库即可！<br>
                    2、使用过程中若有任何问题请联系管理员：685135。<br></div>
            </section>


            <section id="section-4" style="display: none;">
            <?php if($r['db']['id'] == null): ?><form id="dbform" class="form-horizontal" >
                    <p class="text-center" style="font-size: 1.4rem; color:red">提示：数据库登录用户名为学号，不可更改，用户可通过数据库管理后台操作数据库</p>
                    <div class="form-group" >
                        <label class="col-sm-offset-3 col-sm-2 control-label" for="db">数据库名称:</label>
                        <input class="form-control"  type="text" name= 'db' value='test4' style="width:200px; margin-left:20px;">
                        <p id="dbnotice" class="text-center" style="display:none;font-size: 1.4rem; color:red">数据库已经存在</p>
                    </div>
                    <div class="form-group" >                   
                        <label class="col-sm-offset-3 col-sm-2 control-label" for="db_pass">数据库密码:</label>
                        <input class="form-control"  type="password" name= 'db_pass' style="width:200px; margin-left:20px;">
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-offset-3 col-sm-2 control-label" for="redbpass">确认密码:</label>
                        <input class="form-control"  type="password" name= 'redbpass' style="width:200px; margin-left:20px;">
                    </div>
                    <p class="text-center" style="font-size: 1.4rem; color:red">提示：密码不填即为平台登录密码</p>
                    <div id="db_submit" class="form-group" >
                        <div  class="col-sm-offset-4 col-sm-4 btn btn-success text-center hidden-xs hidden-sm" style="width:200px;">提交</div>
                        <div  class="col-sm-offset-4 col-sm-4 btn btn-success hidden-md hidden-lg" style="width:200px; margin-left:20px;">提交</div>
                    </div>
                </form>
            <?php else: ?>
                <div>
                    <p>
                        <a id="appl-serv-4" href="/phpmyadmin/" target="_black">管理后台</a>
                        <a href="" data-toggle="modal" data-target="#myModal3" >销毁数据库</a>
                    </p>
                    <table class="table table-striped table-bordered text-center" style="font-size: 1rem;">
                        <tr>
                            <td>数据库名称：</td>
                            <td><?php echo ($r["db"]["db_user"]); ?></td>
                        </tr>
                        <tr>
                            <td>数据库服务器地址：</td>
                            <td>119.28.177.181</td>
                        </tr>
                    </table>
                    <div>
                        <h5>软件下载：</h5>
                        <ul>
                            <li><a href="">TortoiseSVN_32bit</a></li>
                            <li><a href="">TortoiseSVN_364bit</a></li>
                        </ul>
                    </div>
                    <div class="text-muted">
                        温馨提示：<br>
                        1、同一个团队的成员只需要其中一个账号申请SVN代码库即可。<br>2、使用过程中若有任何问题请联系管理员：685135
                    </div>
                </div><?php endif; ?>
            </section>
            

            <section id="section-5" style="display: none;">
                <table class="table table-striped text-center" style="font-size: 1.4rem;letter-spacing: 2px;">
                    <thead>
                        <tr>
                            <th class="text-center"><input type="checkbox"></th>
                            <th class="text-center hidden-xs hidden-sm" style="">序号</th>
                            <th class="text-center hidden-md hidden-lg" style="width:13vw;">序号</th>
                            <th class="text-center">通知内容</th>
                            <th class="text-center">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td class="text-left">您的OpenStack服务器即将过期，如不想被撤销，请再次申请。。。</td>
                            <td><button class="btn btn-primary btn-xs">删除</button></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>2</td>
                            <td class="text-left">您的vSphere服务器即将过期，如不想被撤销，请再次申请。。。</td>
                            <td><button class="btn btn-primary btn-xs">删除</button></td>
                        </tr>
                    </tbody>
                </table>
            </section>


            
        </section>
    </div>


<!-- openstack销毁申请模态框 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center" id="myModalLabel">
               openstack销毁申请</h4>
         </div>
         <div class="modal-body">
            <span>销毁原因：</span>
            <form id="fodel" >
            <input type="hidden" name="table" value="openstack">
            <textarea name="del_why" style="resize:none;" rows="5" cols="78"></textarea>
            </form>       
        </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" onclick="warning('./del','fodel');">提交申请</button>
         </div>
      </div>
    </div>
    </div>
<!-- openstack销毁申请模态框 -->

<!-- vsphere销毁申请模态框 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" 
   aria-labelledby="Modal2" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center" id="Modal2">
               vsphere销毁申请</h4>
         </div>
         <div class="modal-body">
            <form id="fvdel" >
            <span>销毁原因：</span>
            <input type="hidden" name="table" value="vsphere">
            <textarea name="del_why" style="resize:none;" rows="5" cols="78"></textarea>
            </form>       
        </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" onclick="warning('./del','fvdel');">提交申请</button>
         </div>
      </div>
    </div>
  </div>
<!-- vsphere销毁申请模态框 -->

<!-- svn销毁申请模态框 -->
<div>
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel3" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center" id="myModalLabel3">
               svn销毁申请</h4>
         </div>
         <div class="modal-body">
            <form id="fsdel" >
            <span>销毁原因：</span>
            <input type="hidden" name="table" value="svn">
            <textarea name="del_why" style="resize:none;" rows="5" cols="78"></textarea> 
            </form>      
        </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" onClick="warning('./del','fsdel');">提交申请</button>
         </div>
      </div>
    </div>
</div>
<!-- svn销毁申请模态框 -->

<script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
<script src="<?php echo (URL); ?>js/public.js"></script>
<script src="<?php echo (URL); ?>js/send.js"></script>
<script type="text/javascript">
    /*-----  获取地址栏参数  ------*/
        function GetQueryString(name){
             var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
             var r = window.location.search.substr(1).match(reg);
             if(r!=null)return  unescape(r[2]); return null;
        }



    $(document).ready(function(){


    /*-----  跳转到申请的某个模块   -----*/
        var mana_model=GetQueryString("for");
        if(mana_model !=null && mana_model.toString().length>0){
            $('.tabs>ul>li:nth-child('+mana_model+')').click(function(){  
                var sIndex = parseInt(mana_model)+1;
                $('.tabs>ul>li:nth-child('+sIndex+')').css('color','#FA9143');
                $('.tabs>ul>li:nth-child('+sIndex+')').siblings('li').css('color','');
                $('#section-'+mana_model).show();
                $('#section-'+mana_model).siblings('section').hide();

                var wid = parseInt($('.tabs>ul>li:nth-child('+sIndex+')').css('width'))+15+'px';
                var left = parseInt($('.tabs>ul>li:nth-child('+sIndex+')').position().left)+10+'px';
                $('#back').stop(true,true).animate({width:wid, left:left}, "fast");
            });
            $('.tabs>ul>li:nth-child('+mana_model+')').click();
        }else{
            <?php if($_SESSION['level']== 2): ?>var mana_model = 0;
                var sIndex = 1;
            <?php else: ?>
                var mana_model = 1;
                var sIndex = 2;<?php endif; ?>
            $('.tabs>ul>li:nth-child('+sIndex+')').css('color','#FA9143');
            $('.tabs>ul>li:nth-child('+sIndex+')').siblings('li').css('color','');
            $('#section-'+mana_model).show();
            $('#section-'+mana_model).siblings('section').hide();

            var wid = parseInt($('.tabs>ul>li:nth-child('+sIndex+')').css('width'))+15+'px';
            var left = parseInt($('.tabs>ul>li:nth-child('+sIndex+')').position().left)+10+'px';
            $('#back').stop(true,true).animate({width:wid, left:left}, "fast");
        }

    /*-----  tabs  -----*/
        $('.tabs>ul>li').click(function(){
            var sIndex = $(this).index();
            $(this).css('color','#FA9143');
            $(this).siblings('li').css('color','');
            $('#section-'+sIndex).show();
            $('#section-'+sIndex).siblings('section').hide();
        });

    /*-----  tabs-hover  -----*/
        $('.tabs>ul>li').mouseenter(function(){
            var wid = parseInt($(this).css('width'))+15+'px';
            var left = parseInt($(this).position().left)+10+'px';
            $('#back').stop(true,true).animate({width:wid, left:left}, "fast");


        })

    /*----- apply-service  -----*/
        $('#my-score,#appl-serv-1,#appl-serv-2,#appl-serv-3').click(function(){
            $(this).closest('section').fadeOut();
            var name = $(this).closest('section').attr("id")+'-b';
            $('#'+name).fadeIn();
        });

        $('#tabs section i').click(function(){
            $(this).parent().fadeOut();
            var name = $(this).parent().attr("id").substring(9,0);
            $('#'+name).fadeIn();
        });

        // $('#appl-serv-sub-1,#appl-serv-sub-2,#appl-serv-sub-3').click(function(){
        //     $(this).closest('section').hide();
        //     var name = $(this).closest('section').attr("id").substring(9,0)+'-c';
        //     $('#'+name).show();
        // })

    /*-----  system-select-type  -----*/
        $('#sysSele').change(function() {
            $('#sysType select').eq(0).toggle();
            $('#sysType select').eq(1).toggle();
        });
/*----- db  -----*/
        check = new Array();
        $("input[name='redbpass']").blur(function(){
    
            check['redbpass'] = checkpass();
        
        }); 
        $("input[name='db']").blur(function(){
            var db = $("input[name='db']").val();
            if(db.length>30){
                alert('数据库名称不得超过30位');
                check['dbname'] = false;return;
            }
            $.ajax({
                type:"post",
                cache:false,
                url:"./checkdb",
                data:{
                    'db':$("input[name='db']").val()
                },
                success:function (data){
                    if(data==1){
                        $('#dbnotice').css('display','none');
                        check['dbname']=true;   
                    }else{
                        $('#dbnotice').css('display','block');
                        check['dbname']=false;
                    }                },
            });
            // alert('数据库名称不建议修改，修改后数据将清空，操作不可逆，请做好备份');
        })
/*----- db  -----*/
/*----- 点击提交时  -----*/
        $("#db_submit").click(function(){
            if($("input[name='db']").val()==''){
                alert('数据库名称不能为空');
                return ;
            }
            var go = 0;
            for(key in check){
                if(!check[key]){
                    go = 1;
                }
            }
            if(!go){
                send('./mysql','dbform',1);
            }else{
                return false;
            }
        })
/*----- 点击提交时  -----*/

    /*-----  section-4 text-show-hide  -----*/
        $('#section-4 li div:last-child').click(function(){
            $(this).toggleClass('show-text hide-text');
        });

    });
</script>
</body>

</html>
<script>
$(function(){
    document.children[0].children[1].firstChild.parentNode.removeChild(document.children[0].children[1].firstChild);
});

 /*----- 检查数据库密码前后是否一致  -----*/
        function checkpass(){
            var dbpass = $("input[name='db_pass']").val();
            var redbpass = $("input[name='redbpass']").val();
            if(dbpass!=redbpass){
                alert('两次密码不一致');
                return false;
            }else{
                if(dbpass==''){
                    return true;
                }
                if(dbpass.length<6){
                    alert('密码长度不得小于6位');
                    return false;
                }
                return true;
            }
        }
    /*----- 检查数据库密码前后是否一致  -----*/

function warning(url,id){
    if(window.confirm("您确定要提交吗？提交后不可撤销！！！")){
        send(url,id);
    }
}

$('#myModal').on('hidden.bs.modal', function () {
   $(this).removeData("bs.modal");
  });
$('#myModal2').on('hidden.bs.modal', function () {
   $(this).removeData("bs.modal");
  });
$('#myModal3').on('hidden.bs.modal', function () {
   $(this).removeData("bs.modal");
  });
</script>
<footer style="position: fixed; z-index: 999;">
    <span>Builder：<a href="">AIB云计算小组</a></span>
    <span>Copyright © 2017 <a href="">AIB云计算小组</a></span>
</footer>