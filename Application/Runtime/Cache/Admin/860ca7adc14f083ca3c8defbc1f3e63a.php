<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>审核确认</title>
	<link href="<?php echo (URL); ?>css/style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo (URL); ?>js/send.js"></script> 
</head>
<body>
	<div class="mainbox">
		<div class="send_check">
			<p>审核失败/成功确认</p>
		</div>
		<div class="sendCheck">
			<form id="f1" >
				<p><span class="bold">审核状态：</span><span style="color: red;"><?php echo ($_GET['result']); ?></span></p>
				<input type="hidden" name="state" value="<?php echo ($_GET['result']); ?>" >
				<p><span class="bold">审核处理备注：</span><input type="text" class="text" name="postil" placehoder="云主机资源无法满足用户需求。"/></p>
				<input type="button" value="提交" class="a_btn" onClick="sendAuditing('<?php echo ($_GET['result']); ?>','<?php echo ($_GET['flag']); ?>','<?php echo ($_GET['app']); ?>')">
			</form>
		</div>
	</div>

	<script type="text/javascript">
		function sendAuditing(v,flag,app){
			send('./auditing/flag/'+flag+"/app/"+app,'f1');
			// alert("提交成功！");
			// window.open("/cloud/index.php/admin/admin/auditing_result/result/"+v,"_self","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=470, height=400");
		}
	</script>
</body>
</html>