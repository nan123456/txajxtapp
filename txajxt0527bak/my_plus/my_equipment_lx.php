<?php
	require("../conn.php");
	$sblx = $_POST["sblx"];
	$sbzt = $_POST["sbzt"];
	$gcmc = $_POST["gcmc"];
	$gcid = $_POST["gcid"];
	
	$sqldate="";
	if($sbzt=='全部' or $sbzt=='quanbu' or $sbzt=='' ){
		$sql = "select * from 设备管理 where 工程id='".$gcid."' and 工程名称='".$gcmc."' and 设备类型='".$sblx."' ";
		$result = $conn->query($sql);
		$count=mysqli_num_rows($result);	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$sqldate= $sqldate.'{"id":"'.$row["id"].'","时间戳":"'.$row["时间戳"].'","工程id":"'.$row["工程id"].'","工程名称":"'.$row["工程名称"].'","设备类型":"'.$row["设备类型"].'","安装单位":"'.$row["安装单位名称"].'","安装部位":"'.$row["安装部位"].'","计划安装日期":"'.$row["计划安装日期"].'","实际安装日期":"'.$row["实际安装日期"].'","安装验收日期":"'.$row["安装验收日期"].'","设备状态":"'.$row["设备状态"].'","设备类别":"'.$row["设备类别"].'","起重机械名称":"'.$row["起重机械名称"].'","规格型号":"'.$row["规格型号"].'","类型":"'.$row["类型"].'"},';
			}
		}
	
		$jsonresult='success';
		$otherdate = '{"result":"'.$jsonresult.'",
					"count":"'.$count.'"
					}';
				
		$json = '['.$sqldate.$otherdate.']';
	} else if($sbzt!='全部' and $sbzt!='quanbu'){
		$sql = "select * from 设备管理 where 工程id='".$gcid."' and 工程名称='".$gcmc."' and 设备类型='".$sblx."' and 设备状态='".$sbzt."' ";
		$result = $conn->query($sql);
		$count=mysqli_num_rows($result);	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$sqldate= $sqldate.'{"id":"'.$row["id"].'","时间戳":"'.$row["时间戳"].'","工程id":"'.$row["工程id"].'","工程名称":"'.$row["工程名称"].'","设备类型":"'.$row["设备类型"].'","安装单位":"'.$row["安装单位名称"].'","安装部位":"'.$row["安装部位"].'","计划安装日期":"'.$row["计划安装日期"].'","实际安装日期":"'.$row["实际安装日期"].'","安装验收日期":"'.$row["安装验收日期"].'","设备状态":"'.$row["设备状态"].'","设备类别":"'.$row["设备类别"].'","起重机械名称":"'.$row["起重机械名称"].'","规格型号":"'.$row["规格型号"].'","类型":"'.$row["类型"].'"},';
			}
		}
	
		$jsonresult='success';
		$otherdate = '{"result":"'.$jsonresult.'",
					"count":"'.$count.'"
					}';
				
		$json = '['.$sqldate.$otherdate.']';
	} else {
		
	} 	
	echo $json;
	$conn->close();	
?>