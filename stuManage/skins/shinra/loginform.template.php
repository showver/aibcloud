<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/loginform.php begin -->
						<div id="accordion" class="accordion">
<?php	// The height of the Basic form must be smaller than the height of the Advanced form, ?>
<?php	// for this to be possible, set "autoHeight:false" in /skins/shinra/js/jquery-ui-1.8.13.custom.min.js ?>

							<div>
								<form id="LoginForm1" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
									<fieldset class="dl">
<?php /* ----- FTP server ----- */ ?>
										<!-- <div>
											<label><?php echo "服务器IP"; ?></label>
										<?php											if ($ftpserver["inputType"] == "text") { ?>
												<input type="text" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" class="form-poshytip" title="<?php echo "提示"; ?>: 系统已经自动为您输入" />
										<?php											} elseif ($ftpserver["inputType"] == "select") { ?>
												<select name="ftpserver">
										<?php												for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
													<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
										<?php												} // end for ?>
												</select>
										<?php											} elseif ($ftpserver["inputType"] == "hidden") { ?>
												<input type="hidden" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
												<b><?php echo $ftpserver["list"][1]; ?></b>
										<?php											} ?>
										</div> -->
										<!--更改部分-->
										<div>
											<input type="hidden" name="ftpserver" value="119.28.177.181" />
										</div>
										<!--更改部分-->
<?php /* ----- Username ----- */ ?>
										<div>
											<label><?php echo "用 户"; ?></label>
											<input type="text" name="username" value="<?php 
											@session_start();
											if(isset($_SESSION['stu_number'])){
												echo $_SESSION['stu_number'];
											}
											?>" class="form-poshytip" title="请输入您的用户名" />
										</div>
<?php /* ----- Password ----- */ ?>
										<div>
											<label><?php echo "密 码"; ?></label>
											<input type="password" name="password" value="<?php 
											if(isset($_SESSION['password'])){
												echo $_SESSION['password'];
											}
											?>" class="form-poshytip" title="请输入您的密码" />
										</div>
<?php /* ----- Login button ----- */ ?>

										<input type="submit" id="LoginButton1" name="Login" value="<?php echo "登陆"; ?>" alt="<?php echo "登陆"; ?>" />

										<input type="reset" id="LoginButton1" class="LoginButton1" name="reset" value="<?php echo "重置"; ?>" alt="<?php echo "重置"; ?>" />
									</fieldset>
									<input type="hidden" name="state"     value="browse" />
									<input type="hidden" name="state2"    value="main" />
								</form>
							</div>
						</div>

<script type="text/javascript">



	document.forms['LoginForm1'].<?php echo $focus; ?>.focus();
	var oLogin=document.getElementByClassName="LoginButton1";
	var oLogin_name=document.getElementById="Login_name";
	var oLogin_pass=document.getElementById="Login_pass";
	oLogin.onclick=function(){
		oLogin_name.value='';
		oLogin_pass.value='';
	}
window.onload = function(){
	function autoClick(){
		var oFiel = document.getElementsByTagName('fieldset')[0];
		var oLittle = oFiel.getElementsByTagName('input')[3];
		oLittle.click();
	}
	autoClick();
}
</script>
