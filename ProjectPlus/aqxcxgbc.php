<?php
	//引入连接数据库文件
	require("../conn.php");
	    $id=$_POST["id"];
//	    $flag=$_POST["flag"];	    
//		echo $flag;
			
	
	$sql ="select * from 危险源 where id ='$id' ";
	//$result = $conn->query($sql);
	//$sql = "update 通知单 set 工程名称='$gcmc',检查层级='$jccj',巡查类别='$xclb',通知单编号='$tzdbh',检查单位='$jcdw',检查对象='$jcdx',检查类型='$jclx',违章大类='$wzdl',检查日期='$jcrq',违章状态='$wzzt'";

	//$sql = "select * from 组员信息 where 时间戳 = '".$timestamp."'";
	$result = $conn->query($sql);
			

		while($row = $result->fetch_assoc()){
			$data_arr["id"] = $row["id"];
			$data_arr["危险源类型"] = $row["危险源类型"];
			$data_arr["风险项个数"] = $row["风险项个数"];
			$data_arr["风险等级"] = $row["风险等级"];
			$data_arr["登记日期"] = $row["登记日期"];
			$data_arr["使用状态"] = $row["使用状态"];
			$data_arr["危险源状态"] = $row["危险源状态"];
			$data_arr["责任人"] = $row["责任人"];
			$data_arr["责任人联系电话"] = $row["责任人联系电话"];
			$data_arr["危险源名称"] = $row["危险源名称"];
			$data_arr["标注部位"] = $row["标注部位"];
			$data_arr["开始日期"] = $row["开始日期"];
			$data_arr["结束日期"] = $row["结束日期"];
			$data_arr["经纬度"] = $row["经纬度"];
			$data_json = json_encode($data_arr);
		    echo $data_json;
		}
		





$conn->close();		
?>