<?php
	require ("../conn.php");
	$wxylbcx =$_POST["wxylbcx"];
	$gcmc =$_POST["gcmc"];
	$sql = "select * from 危险源   where  `危险源类型` = '$wxylbcx' AND `工程名称` ='$gcmc'";
	$result = $conn->query($sql);
	$data_arr["id"][0] = 0;
//  $row = $result->fetch_assoc();
    $i = 0;
    while($row = $result->fetch_assoc()){
    	    $data_arr["id"][$i] = $row["id"];
			$data_arr["危险源类型"][$i] = $row["危险源类型"];
			$data_arr["风险项个数"][$i] = $row["风险项个数"];
			$data_arr["风险等级"][$i] = $row["风险等级"];
			$data_arr["登记日期"][$i] = $row["登记日期"];
			$data_arr["使用状态"][$i] = $row["使用状态"];
			$data_arr["危险源状态"][$i] = $row["危险源状态"];
			$data_arr["责任人"][$i] = $row["责任人"];
			$data_arr["责任人联系电话"][$i] = $row["责任人联系电话"];
			$data_arr["危险源名称"][$i] = $row["危险源名称"];
			$data_arr["标注部位"][$i] = $row["标注部位"];
			$data_arr["开始日期"][$i] = $row["开始日期"];
			$data_arr["结束日期"][$i] = $row["结束日期"];
			$data_arr["经纬度"][$i] = $row["经纬度"];
			$i++;
//			$data_json = json_encode($data_arr);
//		    echo $data_json;
    }
    $data_json = json_encode($data_arr);
		    echo $data_json;

?>