<?php
function image_thumb($src,$width,$height,$flag=''){
	$info = getimagesize($src);
	$type = image_type_to_extension($info[2],false);
	$fun = "imagecreatefrom{$type}";
	$image = $fun($src);

	$thumb = imagecreatetruecolor($width, $height);
	imagecopyresampled($thumb,$image,0,0,0,0,$width,$height,$info[0],$info[1]);
	imagedestroy($image);

	$fun = "imagepng";
	

	if($flag==1){
		$name = "./application/admin/public/uploadImg/".$_SESSION['username'].'w'.".png";
		$name = iconv("UTF-8","GB2312//IGNORE",$name); 
		$fun($thumb,$name);
		// $fun($thumb,"./application/admin/public/uploadImg/".$_SESSION['username'].'w'.".png");
	}else{
		$name = "./application/admin/public/uploadImg/".$_SESSION['username'].".png";
		$name = iconv("UTF-8","GB2312//IGNORE",$name); 
		$fun($thumb,$name);	
		// $fun($thumb,"./application/admin/public/uploadImg/".$_SESSION['username'].".png");
	}
	imagedestroy($thumb);
	return $fun;


}

?>