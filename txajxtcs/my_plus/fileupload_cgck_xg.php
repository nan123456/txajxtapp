<?php
$nub=$_POST["nub"]; //上传的数量
$files =$_POST['files1'];  //获取base64数据流
$sjcNmae=time();
$strsShuzu = explode('︴',$files);
$length=count($strsShuzu)-1;
$filenames="";
for ($i= 0;$i< $length; $i++){
	$fengeOk=substr($strsShuzu[$i],1);
	$files1 = substr($fengeOk,22);  //百度一下就可以知道base64前面一段需要清除掉才能用。
	$tmp  = base64_decode($files1);  //解码
	$sjcNmae=time().$i;
	$s=dirname(dirname(__FILE__)); //获的服务器路劲
	$fp=$s."/upload/".$sjcNmae.".jpg";  //确定图片文件位置及名称
	$filenames=$filenames.$sjcNmae.".jpg"."~*^*~";
	//写文件
	file_put_contents( $fp, $tmp);     
}

require("cgxg_upload.php");
?> 