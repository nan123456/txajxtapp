<?php
    require("../conn.php");
	$id = $_POST["id"];//获取一连串风险项id
//	$id="501/503/518/560,566/614";
	$a = explode('/',$id); //分割违章条目
	$b=array();
	for($i=0;$i<count($a)-1;$i++) {
		if($i<count($a)-2){
			$b[$i]=$a[$i];
		}else{
			$b[$i]=$a[$i];
		}
	}	
	$c=implode("','", $b);
	$d="('".$c."')";
	$sqldate = ""; 
	$sql = "select distinct 二级风险项,风险等级 from 风险分类 where id  in ".$d."";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$sqldate = $sqldate.'{"内容":"'.$row["风险等级"]."级：".$row["二级风险项"].'"},';
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