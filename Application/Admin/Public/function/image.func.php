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

		$fun($thumb,"./uploadImg/".$name.'w'.".png");
	}else{
		$name = $_SESSION['username'];
		iconv("UTF-8","gbk",$name);echo 666;exit;
		$fun($thumb,"./uploadImg/".$name.".png");
	}
	imagedestroy($thumb);
	return $fun;


}

?>