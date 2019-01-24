<?php
	require("../conn.php"); 
	$fxid = $_POST["fxid"];
	
	
	$sql = "select 风险项id from 危险源 where id = '$fxid'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $data_arr["风险项id"] = $row["风险项id"];

    $data_json = json_encode($data_arr);
	echo $data_json;
?>