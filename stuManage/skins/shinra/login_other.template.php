<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/login_other.template.php begin -->
	<!-- WRAPPER -->
	<div id="wrapper">
			
		<!-- HEADER -->
		<div id="header">
			<img style="margin-top:-25px; margin-left:240px;" id="logo" src="skins/shinra/img/logo.png" alt="学生站点" />
		</div>
		<!-- ENDS HEADER -->
			
		<!-- MAIN -->
		<div id="main">

			<!-- content -->
			<div id="content">
				
				<!-- title -->
				<div id="page-title">
					<span class="title">登陆</span>
					<span class="subtitle">连接您的站点</span>
					<span class="subtitle"><a href="http://aibcloud/platform-enter/stu-index.php">回到学生站点</a></span>
				</div>
				<!-- ENDS title -->
				
				<!-- Posts -->
				<div id="posts" style="width:480px;">

					<!-- post -->
					<div class="post">

<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/loginform.template.php"); ?>

					</div>
					<!-- ENDS post -->
			
				</div>
				<!-- ENDS Posts -->

				<!-- sidebar -->
				<ul id="sidebar" style="margin:0;width:380px;" >
					<!-- init sidebar -->
					<li>
						<h6 align="center">特性</h6>		
						<ul>
							<li class="cat-item"><a>1、您可以对自己网站下的所有源码进行任何操作，支持在线更改、创建目录、文件。<br />2、当您需要关闭网站时，目前只能通过修改网站根目录下的index.html文件的权限来限制用户的访问，设置方法：<br />选中index.html或index.php文件，然后在菜单栏上选择“修改权限”，将权限设置为000即可。<br />3、若您有更好的想法，请告诉我们。</a></li>
							
						</ul>
					</li>
					<!-- ENDS init sidebar -->
				</ul>
				<!-- ENDS sidebar -->



<!-- Template /skins/shinra/login_other.template.php end -->
