<?php
	require ("../conn.php");
	
	//定义变量获取POST方法的值
	$zt = $_POST["zt"];
	$gcid = $_POST["gcid"];
	
	//去掉字符串最后一个字符
	$newstr = substr($gcid,0,strlen($gcid)-1);
	$gcidNew = explode(',',$newstr);
	$connection = "";
	for($index=0;$index<count($gcidNew);$index++){
		$sqldate = "";
		$sql = "select * from 危险源 where 危险源状态 = '".$zt."' and 工程id='".$gcidNew[$index]."'";
		$result = $conn->query($sql);
		$student = mysqli_num_rows($result); 
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			 $sqldate= $sqldate.'{"危险源类型":"'. $row["危险源类型"].'","危险源类型":"'. $row["危险源类型"].'"},';
			}
		} else { 
	
		}
		$connection=$connection.$sqldate;
	}
	$jsonresult = 'success';
	$otherdate = '{"result":"'.$jsonresult.'"
				}'; 
	$json = '['.$connection.$otherdate.']';
	echo $json;
	$conn->close();
?>