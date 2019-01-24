<?php
//  print_r($_POST);
//  print_r($_FILES);
    require('../../conn.php');
    require('upload_plan.php');
    $flag = $_POST['flag'];
    $cs = $_POST['chs'];
//  echo $flag;
//  $data['status'] = 'error';
    $lc = $_POST['lc'];
    
    $lc2 = explode(',',$lc);
//  echo count($lc2);
//  echo $lc2;
    $ImgData = getimagesize($_FILES['Img']['tmp_name']);
//  echo $ImgData[0];
    $Che = new upload('Img');
    $UrlData = $Che->uploadFile();
    if(isset($UrlData)){
        $data['status'] = 'success';
        $data['url'] = $UrlData;
    }
    $sql = "select max(id) from 我的工程";
    $result = $conn -> query($sql);
    if($result){
    	$row = $result -> fetch_assoc();
    	$gcid = $row["max(id)"]+1;
    	$sql2 ="select 工程id from 工程附件 where 工程id='$gcid'";
    	$result2=$conn->query($sql2);
    	$row2 = $result2 -> fetch_assoc();
    	if(count($row2["工程id"])>0){
    		$sql3="delete from 工程附件 where 工程id = '$gcid'";
    		$conn->query($sql3);
    		for($i=0;$i<count($lc2);$i++){
    		$sql = "INSERT INTO 工程附件 (工程id,图片路径,层数) VALUES('".$gcid."','".$UrlData."','".$lc2[$i]."')";
//  	    echo $sql;
    	    $conn->query($sql);
    	}
    	}else{
    		for($i=0;$i<count($lc2);$i++){
    		$sql = "INSERT INTO 工程附件 (工程id,图片路径,层数) VALUES('".$gcid."','".$UrlData."','".$lc2[$i]."')";
//  	    echo $sql;
    	    $conn->query($sql);
    	}
    	}
    	
    	
    }
    
    $json = json_encode($data);
    echo $json;
?>