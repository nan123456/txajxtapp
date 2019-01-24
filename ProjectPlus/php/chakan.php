<?php
       //print_r($_POST);
      require('../../conn.php');
	   $ckid = $_POST["obj"];
//	   echo $ckid;
	   $sql = "select max(id) from 我的工程";
       $result = $conn -> query($sql);
	   $row = $result -> fetch_assoc();
	   $gcid = $row["max(id)"]+1;
	   $sql2 = "SELECT 图片路径,层数,工程id FROM 工程附件 WHERE `工程id` = '$gcid' AND `层数` = '$ckid' ";
	   $result2 = $conn -> query($sql2);
	   $row2 = $result2 -> fetch_assoc();
	   $data_arr["图片路径"] = $row2["图片路径"];
	   $data_arr["层数"] = $row2["层数"];
	   $data_arr["工程id"] = $row2["工程id"];
	   $data_json = json_encode($data_arr);
	   echo $data_json;
  
//     $conn->close();	
?>