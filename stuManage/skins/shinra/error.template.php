<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/error.template.php begin -->

				<script type="text/javascript" src="<?php echo $net2ftp_globals["application_rootdir_url"]; ?>/modules/edit/edit.js"></script>

				<!-- Posts -->
				<div id="posts">

					<!-- post -->
					<div class="post">

						<h1>
<?php							printTitleIcon(); ?>
<?php 						echo "登陆发生错误"; ?>
						</h1>

						<p class="error-box">
							<?php echo $net2ftp_result["errormessage"]; ?><br />
							<a href="<?php echo $net2ftp_globals["application_rootdir_url"]; ?>/index.php?state=clearcookies"><?php echo "回到登陆界面"; ?></a></p><br />
						</p>
						
						
					</div>
				</div>



<!-- Template /skins/shinra/error.template.php end -->
