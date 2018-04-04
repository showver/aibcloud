<?php if (!defined('THINK_PATH')) exit();?><div style="margin:0;padding:0;"><nav class="navbar navbar-default my-nav" role="navigation">
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
        <img src="<?php echo (URL); ?>img/logo.png"  alt="AIB-云平台">
      </a>
  </div>
  <div class="col-md-1"></div>
  <div class="collapse navbar-collapse nav-content col-md-9" id="example-navbar-collapse">
      <ul class="nav navbar-nav">
          <li><a href="/cloud/index.php">首页</a></li>
          <li class="dropdown" id="hoverdown-1">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" >
                  云计算小组 <b class="caret"></b>
              </a>
          </li>
          <li class="dropdown" id="hoverdown-2">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  AIB云平台 <b class="caret"></b>
              </a>
          </li>
          <li class="dropdown" id="hoverdown-3">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  服务与支持 <b class="caret"></b>
              </a>
          </li>
          <li><a href="/cloud/index.php/admin/develop/deveProg">开发历程</a></li>
          <li><a href="/cloud/index.php/admin/TouchUs/touchUs">联系我们</a></li>
          <li>
            <div class="input-group" style="cursor: pointer;margin:10px 20px; width:12vw;">
                <input type="text" class="form-control" style="height:25px;">
                <span class="input-group-addon" style="height:25px; font-size: 8px; padding:0 8px;">搜索</span>
            </div>
          </li>
   <?php if(empty($_SESSION['username'])): ?><li><a href="/cloud/index.php/admin/login/login" class="login">登陆</a></li>
        <li><a href="/cloud/index.php/admin/login/register" class="login">注册</a></li>
     
 <?php else: ?>
            <li class="dropdown" style="width:80px;">
                    <?php if($_SESSION['level']!=='0'): ?><div  class="dropdown-toggle" data-toggle="dropdown">
                       <img src="/cloud/application/admin/public/uploadImg/<?php echo (session('username')); ?>.png" class="img-circle" style="width:36px; height:36px;  margin: 5px 10px; cursor: pointer;">
                    </div><?php endif; ?>
          <?php if($_SESSION['level']==2): ?><ul class="dropdown-menu">
                       <li><a href="/cloud/index.php/admin/stu/servAppl" class="login">个人中心</a></li>
                       <li><a href="/cloud/index.php/admin/stu/stuMessage" class="login">个人网站</a></li>
                       <li><a href="/cloud/index.php/admin/stu/persInfo" class="login">修改资料</a></li>
                       <li><a href="/cloud/index.php/admin/login/end" class="login" id="over">退出</a></li>
                   </ul>
          <?php elseif($_SESSION['level']==1): ?>
                     <ul class="dropdown-menu">
                       <li><a href="/cloud/index.php/admin/tea/servAppl" class="login">个人中心</a></li>
                       <li><a href="/cloud/index.php/admin/tea/teaCenter" class="login">作业评分</a></li>
                       <li><a href="/cloud/index.php/admin/tea/persInfo" class="login">修改资料</a></li>
                       <li><a href="/cloud/index.php/admin/login/end" class="login" id="over">退出</a></li>
                   </ul><?php endif; ?>
                </li><?php endif; ?>

      </ul>
      <div class="back" style="height: 3px; background-color: #0CF;  position: absolute; bottom: 1.8px; left:15px; width:65px;"></div>
  </div>

  </div>



  <section id="showdown-1">
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

  <section id="showdown-2">
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

  <section id="showdown-3">
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
    position: absolute;top:53px;min-width:200px;min-height: 200px;transform:translateX(-50%);left:50%;display: flex;justify-content: center;color: white;background: rgba(0, 0, 0, 0.8);font-size: 1.5rem;padding:20px;visibility: hidden;
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
    padding-top: 3px;
    list-style: none;
  }
  nav section ul li:nth-child(2){
    margin-top: 5px;
  }
</style>

</div>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>AIB云平台</title>
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
    .pers_info>ul{
        box-shadow: 0 0 6px gray;
        background: white;
        margin-left: -15px;
    }
    .pers_info>ul>li{
        margin:10px;
        padding: 10px;
    }
    .pers_info>ul>li img{
        width: 100px;
        height: 100px;
        float: left;
    }
    .pers_info>ul>li div{
        height: 100px;
        display: table-cell;
        padding-left: 10px;
        vertical-align: middle;
    }
    .pers_info .info_list{
        font-size: 1.6rem;
    }
    .pers_info .info_list li{
        cursor: pointer;
        padding: 10px;
        margin-top: 2px;
    }
    .pers_info .info_list li:hover{
        background: lightgrey;
    }
    .pers_info .info_list li i{
        margin: 0 20px;
    }

    .pers_content{
        height: 500px;
        background: white;
        margin: 10px 0;
        padding: 20px; 
        border: 1px solid lightgray;
    }
    .pers_content section{
        margin: 20px 10px;


    }
    .pers_content section h4{
        position: absolute;
        top: -12px;
        left: 10px;
        background: white;
    }
    .pers_content section div{
        position: relative;
    }
    .pers_content section div span{
        position: absolute;
        right:1.6vw;
        top:32px;
    }



</style>

</head>

<body>


    <div class="container" style="height:100vh;">
        <section class="col-sm-4 pers_info">
            <ul>
                <li class="row">
                    <img src="/cloud/application/admin/public/uploadImg/<?php echo (session('username')); ?>.png" class="img-circle">
                    <div>
                        <!-- <i class="icon icon-edit"> -->
                        <h4><?php echo (session('username')); ?></h4>
                        <p class="text-muted">加入时间&nbsp;<?php echo (date("Y年m月d日",$r['cre_time'])); ?></p>
                    </div>
                </li>
                <ul class="info_list">
                    <a href="./servAppl"><li>
                        <i class="icon icon-cog"></i>个人中心
                    </li></a>
                    
                    <li style="background: lightgrey;">
                        <i class="icon icon-user"></i>修改资料
                    </li>
                    <li>
                        <i class="icon icon-lock"></i>修改密码
                    </li>
                    <li>
                        <i class="icon icon-github-alt"></i>修改头像
                    </li>
                </ul>

            </ul>
        </section>
        <section class="col-sm-8 pers_content">
            <section>

            </section>
            <section >
                <h4>修改资料</h4>
                <form id="fm2">
                    <div class="form-group">
                        <label for="hm">手机号码</label>
                        <input type="text" class="form-control" name="phnumber" value="<?php echo ($r['phnumber']); ?>" placeholder="更改你的联系方式" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="qq">QQ</label>
                        <input type="text" class="form-control" name="qq" value="<?php echo ($r['qq']); ?>" placeholder="请输入你的QQ">
                    </div>
                    <div class="form-group">
                        <label for="ms">个人描述</label>
                        <textarea class="form-control" name="perdescribt" placeholder="输入你的描述" style="resize: none;"><?php echo ($r['perdescribt']); ?></textarea>
                    </div>
                </form>
                <button class="btn btn-success" type="button" onclick="send('./upInfo','fm2');">提交</button>
            </section>


            <section style="display: none;">
                <h4>修改密码</h4>
                <form id="fm3">
                    <div class="form-group">
                        <label for="mm">原密码</label>
                        <input type="password" class="form-control" name="mm" placeholder="输入你的原密码" required>
                    </div>
                    <div class="form-group">
                        <label for="cmm">新密码</label>
                        <input type="password" class="form-control" name="cmm" placeholder="新密码不能与原密码相同">
                    </div>
                    <div class="form-group">
                        <label for="rmm">确认密码</label>
                        <input type="password" class="form-control" name="rmm" placeholder="确认密码与新密码保持一致">
                    </div>
                </form>
                <button class="btn btn-success" type="button">提交</button>
            </section>


            <section style="display: none;">
                <h4>修改头像</h4>
                <form id="fm4">
                    <div class="form-group">
                        <label>个人头像</label>
                        <div>
                            <img class="img img-circle" id="preview2" src="/cloud/application/admin/public/uploadImg/<?php echo (session('username')); ?>.png" style="width:150px;height: 150px;float: left;">
                            <div style="height:15vw; padding-top: 2vh; padding-left: 1vw; display: flex; flex-flow: column; align-content: center;color: red">
                                <p><b> Tips：</b></p>
                                <p>上传的图片只能是jpg,png,jpeg,gif </p>
                                <p>图片大小最大为2MB</p>
                                <input type="file" id="f2" name="tx" style="float: left;width: 15vw;" onchange="change('preview2', 'f2')">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="button" onclick="send('./uploadImg','fm4');">更改</button>
                    </div>
                </form>
            </section>

        </section>
    </div>


<script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
<script src="<?php echo (URL); ?>js/public.js"></script>
<script src="<?php echo (URL); ?>js/send.js"></script>
<script type="text/javascript">
 
    $(document).ready(function(){
    /*-----  pers_content  -----*/
        $('.info_list li').click(function(){
            var index = $(this).index();
            $(this).css('background','lightgrey');
            $(this).siblings('li').css('background','');
            $('.pers_content section').eq(index).show();
            $('.pers_content section').eq(index).siblings('section').hide();
        });


        //   验证手机号
        zzyz('input[name="phnumber"]', /^1[34578]\d{9}$/, '验证成功', '请输入合法的手机号码');

        // 验证第二次输入的密码
        zzyz('input[name="rmm"]', 'input[name="mm"]', '验证成功', '与上次密码不一致');

        $('.pers_content section button').click(function(){
            // alert($('input[name="tx"]').val());

            if( reg == true ){
                $(this).submit();
                alert("提交成功");
            }else if( reg == false ){
                alert("请检查你的输入是否正确");
                return false;
            }
        })



    });
</script>
</body>

</html>

<footer style="position: relative;">
    <span>Builder：<a href="">AIB云计算小组</a></span>
    <span>Copyright © 2017 <a href="">AIB云计算小组</a></span>
</footer>