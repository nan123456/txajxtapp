<?php
    require("../conn.php");
	$gcid = $_POST["gcid"];
	$wxyid = $_POST["wxyid"];
//		echo $wxyfb;
	$sqldate = ""; 
//	$gcid = 707;
//	$wxyid =709;

	$sql = "select a.风险等级,a.风险项个数,a.id,b.危险源id,b.时间戳,b.检查日期,b.通知单状态 from 危险源 a,通知单 b where a.id=b.危险源id and a.id like '%".$wxyid."%' and a.工程id=b.工程id and b.工程id like '%".$gcid."%'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$sqldate = $sqldate.'{"id":"'. $row["id"].'","时间戳":"'. $row["时间戳"].'","巡查日期":"'. $row["检查日期"].'","风险等级":"'. $row["风险等级"].'","风险项数":"'. $row["风险项个数"].'","整改情况":"'. $row["通知单状态"].'"},';
		}
	}
	$jsonresult = 'success';
	$otherdate = '{"result":"'.$jsonresult.'"
				}';
	$json = '['.$sqldate.$otherdate.']';
//	}	
	echo $json;
	$conn->close();		
?>