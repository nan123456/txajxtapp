<?php
       //print_r($_POST);
      require('../../conn.php');
	   $dete = $_POST["dete"];
//	   echo $ckid;
	   $sql = "select max(id) from 我的工程";
       $result = $conn -> query($sql);
	   $row = $result -> fetch_assoc();
	   $gcid = $row["max(id)"]+1;
	   $sql2 = "DELETE from 工程附件  WHERE `工程id` = '$gcid' AND `层数` = '$dete' ";
	   $result2 = $conn -> query($sql2);

?>