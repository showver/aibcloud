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
</style></div>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>学生个人中心</title>
<link rel="stylesheet" href="<?php echo (URL); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo (URL); ?>public.css">
<script src="<?php echo (URL); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo (URL); ?>js/bootstrap.min.js"></script>
<script src="<?php echo (URL); ?>js/public.js"></script>
<style>
	img,
	body {
	    overflow: hidden;
	    margin: 0;
	}
	article{
		width: 80vw; 
		margin: 0 auto;
		position: relative;
	}
	article div{
		overflow: auto;
	}
	article h3{
		font-size: 2.4rem;
		height: 40px;
		margin: 0;
		margin-top: 5vh;
		display:inline-block;
		min-width: 150px;
		border-bottom: 2px solid green;
	}
	article nav{
		margin-top: 5vh;
	}
	article nav div{
		height: 40px;
	}
	article nav button{
		font-size: 1.5rem;
	}
	article nav span{
		margin-left: 2vw;
		cursor: pointer;
		/* color: #E29920; */
		border: 1px solid #E29920;
		padding: 5px;
		font-size: 1.5rem;
	}
	article nav span:hover{
		border: 1px solid #E29920;
		border-radius: 8px;
	}
	.on{
		/* margin-top: -10px; */
		border: 1px solid green;
		font-weight: bold;
		color: green;
	}
	article .stu_i_container{
		width: 80vw;
		overflow: hidden;
	}
	article .stu_i_container:nth-child(2){
		height: 40vh;
		display: flex;
		flex-flow: row nowrap;
	}
	.stu_i_container .stu_i_item{
		min-width: 18vw;
		height: inherit;
		margin: 4vh 1vw;
		float: left;
	}
	.stu_i_item img{
		width: 18vw;
		height: 150px;
		display: flex;
    	justify-content: space-around;

	}
	.stu_i_item h4{
		font-size: 16px;
		margin: 0;
		text-align: center;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	.stu_i_item div{
		display: flex;
		flex-flow: row nowrap;
		justify-content: space-around;
		background: #D4D4D4;
		opacity: 1;
		transition: all 0.5s ease-in-out;
		overflow: hidden;
	}
	.stu_i_item:hover div{
		opacity: 0;
	}
	.stu_i_item div span:last-child::before{
		content: url('<?php echo (URL); ?>img/dialogue.png');
	}
	.stu_i_item div span:first-child::before{
		content: url('<?php echo (URL); ?>img/eye.png');
	}
	@media screen and (max-width: 768px){
		.stu_i_container .stu_i_item{
			width: 24vw;
			height: inherit;
			margin: 2vh 1vw;
			float: left;
		}
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
		border: none;
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
</style>

</head>
<body style="background: none; overflow-y: auto;overflow-x: hidden;">

	<article>
		<h3 class="col-md-2">优秀作品</h3>
		<div class="stu_i_container good_job">
		<?php if(is_array($youxiu)): foreach($youxiu as $key=>$y): ?><a href="/cloud/index.php/Admin/stuMessage/id/<?php echo ($y["id"]); ?>"><div class='stu_i_item' name='userid'><img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$y['username']."w.png"))?"/cloud/application/admin/public/uploadImg/".$y['username']."w.png":'/cloud/application/admin/public/uploadImg/0w.png'; ?>"><h4><?php echo ($y["username"]); ?>—<?php echo ($y["netname"]); ?></h4><div><span>访问次数(<?php echo ($y["view"]); ?>)</span><span>留言次数(<?php echo ($y["comment"]); ?>)</span></div></div></a><?php endforeach; endif; ?>
		</div>
	</article>
	<article class="stu_article">
		<h3 class="col-md-2">学生作品</h3>
		<nav class="col-md-10">
			<div class="form-group col-md-5">
				<input type="text" id="sear_condition">
				<button id="search">搜索</button>
			</div>
			<ul class="nav nav-tabs">
				<li class="active"><a href="/cloud/index.php/Admin/Stu/stuIndex/flag/1">网络1班</a></li>
				<li><a href="/cloud/index.php/Admin/Stu/stuIndex/flag/2">网络2班</a></li>
				<li><a href="#" title="">其他</a></li>
			</ul>
			
		</nav>
		<div class="stu_i_container stu_job_gra1">
			<?php if(is_array($list)): foreach($list as $key=>$res): ?><a href="/cloud/index.php/Admin/stuMessage/id/<?php echo ($res["id"]); ?>"><div class='stu_i_item' name='userid'><img src="<?php echo file_exists(iconv('UTF-8','GB2312',"./application/admin/public/uploadImg/".$res['username']."w.png"))?"/cloud/application/admin/public/uploadImg/".$res['username']."w.png":'/cloud/application/admin/public/uploadImg/0w.png'; ?>"/><h4><?php echo ($res["username"]); ?>—<?php echo ($res["netname"]); ?></h4><div><span>点击次数(<?php echo ($res["view"]); ?>)</span><span>留言次数(<?php echo ($res["comment"]); ?>)</span></div></div></a><?php endforeach; endif; ?>
		</div>
		<ul id='paging' class="pagination pagination-lg" style="display: flex; justify-content: center;">
		</ul>
	</article>

<div class="pages text-center"> <?php echo ($page); ?> </div>


<div style="height:50px;"></div>
    </div>
    
	<script type="text/javascript">

	/*-----  判断内容是否为空  ------*/
		function isEmpty($name,$text){
			var eleCont = $($name).text().trim();
			if( eleCont == "" ){
			var temp = '<div style="text-align:center; font-size:2rem; letter-spacing:10px;margin:7vh 0;" class="text-muted">'+
				$text+
				'</div>';
			$($name).html(temp);
			}
		}
	/*-----  无缝滚动  ------*/
		var mq = window.matchMedia('@media all and (max-width: 768px)');
		if(mq.matches) {
		    // 浏览器宽度大于768
		    var timer;
		    function scroll(wid){
		    	$('.good_job .stu_i_item:eq(0)').animate({"margin-left":"-18vw"},function(){
		    		$('.stu_i_item').eq(0).appendTo('.stu_i_container:eq(0)');
		    		$('.stu_i_item').css({"margin-left":"1vw"});
		    	})
		    }
		    timer=setInterval(scroll,2000);
		} else {
		    var timer;
		    function scroll(){
		    	$('.good_job  .stu_i_item:eq(0)').animate({"margin-left":"-24vw"},function(){
		    		$('.stu_i_item').eq(0).appendTo('.stu_i_container:eq(0)');
		    		$('.stu_i_item').css({"margin-left":"1vw"});
		    	})
		    }
		    timer=setInterval(scroll,2500);
		}
		/*----- 开始js操作  -----*/
		$(document).ready(function(){

			/*-----  判断滚动  -----*/
				$('.stu_i_container:eq(0)').on({
					mouseover:function(){
						clearInterval(timer);
					},
					mouseout:function(){
						timer=setInterval(scroll,2000);
					}
				})
			/*-----  点击显示不同分类的学生作品  -----*/
				$('.stu_article nav span').click(function(){
					$(this).addClass("on").siblings('span').removeClass("on");
					var index=$(this).index();
					$('.stu_article>div').eq(index).show().siblings("div").hide();
				//点击搜索
			});
		})
	</script>
</body>
</html>
<script>
$(function(){
    document.children[0].children[1].firstChild.parentNode.removeChild(document.children[0].children[1].firstChild);
})
</script>
<footer style="position: fixed; z-index: 999;">
    <span>Builder：<a href="">AIB云计算小组</a></span>
    <span>Copyright © 2017 <a href="">AIB云计算小组</a></span>
</footer>