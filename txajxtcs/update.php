<?php
	$appid="H5527B850";
	$version="2018.03.12.13";	//app版本号
	$note="同欣巡检";	//app描述
	//$appurl="http://192.168.155.1:80/hxajxt/release/hxajxt.apk";	//app下载地址
	$appurl="http://112.74.34.150:888/txajxtapp/txajxtcs/release/txajxt.apk";
	$json = '{"appid":"'.$appid.'",
				"version":"'.$version.'",
				"note":"'.$note.'",
				"appurl":"'.$appurl.'"
			}';
	
	echo $json;

?>