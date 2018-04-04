<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>邮件发送</title>
	<link href="<?php echo (URL); ?>css/style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo (URL); ?>js/send.js"></script>

</head>
<body>
	<div class="mainbox">
		<div class="send_email">
			<p>邮箱通知</p>
		</div>
		<div class="sendEmail">
			<form id="fe">
				<input type="hidden" name="table" value="<?php echo ($_GET['table']); ?>">
				<input type="hidden" name="app" value="<?php echo ($_GET['app']); ?>">
				<input type="hidden" name="flag" value="<?php echo ($_GET['flag']); ?>">
				<p><span>收件人：</span><input type="text" name="to" value="<?php echo ($_GET['email']); ?>" /></p>
				<p><span>主题：</span><input type="text" name="title"/></p>
				<p><span style="float: left;">邮箱内容：</span><textarea name="content" cols="50" rows="6"></textarea></p>
				<input type="button" value="发送" class="a_btn" onClick="send('/cloud/index.php/Admin/Admin/e_mail/f/1','fe');">
			</form>
		</div>
	</div>
</body>
</html>