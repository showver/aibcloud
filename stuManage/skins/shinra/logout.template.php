<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/logout.php begin -->

	<!-- WRAPPER -->
	<div id="wrapper">
			
		<!-- HEADER -->
		<div id="header">

<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/google_ad_top.template.php"); ?>

			<img style="margin-top:-25px; margin-left:240px;" id="logo" src="skins/shinra/img/logo.png" alt="学生站点" />

		</div>
		<!-- ENDS HEADER -->
			
		<!-- MAIN -->
		<div id="main">

			<!-- content -->
			<div id="content">
				
				<!-- title -->
				<div id="page-title">
					<span class="title"><?php echo "退出"; ?></span>
				</div>
				<!-- ENDS title -->

				<!-- Posts -->
				<div id="posts">

					<!-- post -->
					<div class="post">
						<p><?php echo "您已经退出！！"?><a href="<?php echo $net2ftp_globals["application_rootdir_url"]; ?>/index.php?state=clearcookies"></p>
						<p><?php echo "回到登陆界面"; ?></a></p>
						<p><a href="http://aibcloud.org/platform-enter/stu-index.php">回到学生站点</a></p>
						<p><a href="http://aibcloud.org">回到AIB云平台</a></p>
					</div>
					<!-- ENDS post -->
			
				</div>
				<!-- ENDS Posts -->

<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/google_ad_bottom.template.php"); ?>


<!-- Template /skins/shinra/logout.php end -->
