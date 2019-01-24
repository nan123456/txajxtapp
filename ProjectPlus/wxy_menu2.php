<?php
	require("../conn.php"); 
	$wxylxInput = $_POST["wxylxInput"];
//	$fxid = $_POST["fxid"];
	$i = 0;
	$sql = "select id,分项工程,风险项,风险等级,二级风险项 from 风险分类 where 分项工程 = '$wxylxInput' ORDER BY 风险等级";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
//  	    $data_arr["id"] = $row["id"];
			$data_arr[$i]["id"] = $row["id"];
			$data_arr[$i]["分项工程"] = $row["分项工程"];
			$data_arr[$i]["风险项"] = $row["风险项"];
			$data_arr[$i]["风险等级"] = $row["风险等级"];
			$data_arr[$i]["二级风险项"] = $row["二级风险项"];
            
		   $i++;
    }
    
//  $sql2 = "select 风险项id from 危险源 where id = '$fxid'";
//  $result = $conn->query($sql2);
//  $row = $result->fetch_assoc();
//  $data_arr["风险项id"] = $row["风险项id"];
    
    
    $data_json = json_encode($data_arr);
	echo $data_json;
//  
//  $sql2 = "select 风险项id from 危险源 where id = '$fxid'";
//  $result = $conn->query($sql2);
//  $data_json = json_encode($data_arr);
//	echo $data_json;
?>