<?php
    
    require('../../conn.php');
    require('upload_plan.php');
    $flag = $_POST['flag'];
    $data['status'] = 'error';
    $lc = $_POST['lc'];
    $ImgData = getimagesize($_FILES['Img']['tmp_name']);
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
    	$sql2="select 工程id,`层数` from 工程附件 where 工程id='$gcid' AND `层数`='$lc'";
    	$result2 = $conn -> query($sql2);
    	$row2 = $result2 -> fetch_assoc();
    	if(count($row2)>0){
    		$sql3 = "UPDATE 工程附件 SET `图片路径` = '$UrlData' WHERE `工程id` ='$gcid' AND `层数`='$lc'";
    		$conn->query($sql3);
    	}else{
    		$sql = "INSERT INTO 工程附件 (工程id,图片路径,层数) VALUES('".$gcid."','".$UrlData."','".$lc."')";
    	    $conn->query($sql);
    	}
    	
    }
    
    $json = json_encode($data);
    echo $json;
?>