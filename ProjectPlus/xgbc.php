<?php
	require("../conn.php");
    $ww=$_POST["ww"];   //id
	$sjc = time();
	$gcmc=$_POST["gcmc"];
	$gcid=$_POST["gcid"];
//	echo $ww;
	$select_wxy = $_POST["select_wxy"];//风险项个数
	$watch_wxy=$_POST["xuanzhong"];//风险项id
//	$watch_wxy="503/512/516/580/613";//风险项id
    $kwsd=$_POST["kwsd"];//工作状态
 	$zrr=$_POST["zrr"];//责任人
 	$lxdh=$_POST["lxdh"];//联系电话
 	$jwd = $_POST["jwd"];
   	$wxylx = $_POST["wxylx"];
 	
    $startdata=$_POST["startdata"];//开始日期
    $enddata=$_POST["enddata"];//结束日期
    $djtime=$_POST["djtime"];//登记日期
    $mc=$_POST["wxymc"];//危险源名称
    $bzbw=$_POST["bzbw"];
    $fxdj=$_POST["fxdj"];
    $wxyzt=$_POST["wxyzt"];//危险源状态
//  $wxylx = "脚手架工程,基坑工程,模板工程";
    $watch_wxy = substr($watch_wxy,0,strlen($watch_wxy)-1);//去掉最后面的一根“/”
	
	$sql = "UPDATE `危险源`  SET `风险项个数` = '$select_wxy',风险项id = '$watch_wxy',经纬度 = '$jwd', 风险等级 = '$fxdj',`登记日期` = '$djtime',使用状态 = '$kwsd',危险源状态 = '$wxyzt',责任人 = '$zrr',责任人联系电话  = '$lxdh',危险源名称 = '$mc' ,标注部位 = '$bzbw' ,开始日期 = '$startdata',结束日期 = '$enddata' WHERE id = '$ww'" ;
	$conn->query($sql);
	echo $sql;
	
?>