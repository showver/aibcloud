<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>审核结果</title>
	<link href="<?php echo (URL); ?>css/style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript">
		function eMail(){
		  window.open("/cloud/index.php/admin/admin/e_mail/","_self","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=470, height=400");
		}
	</script>
</head>
<body>
	<div class="mainbox">
		<div class="send_check" style="height: 50px;">
			<form action="?act=search" method="post">
				<p><?php echo ($_GET['result']); ?>！<input type="button" value="邮件通知" class="a_btn" onClick="eMail()" style="margin-left: 10px;"></p>
			</form>
		</div>
	</div>
</body>
</html>