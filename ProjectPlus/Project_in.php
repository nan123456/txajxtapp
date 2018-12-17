<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>同欣企业有限公司项目质量安全检查管理系统</title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/docs.css"/>
    <!-- Custom styles for this template -->
    <link href="../css/theme.css" rel="stylesheet">
    
    <!-- Custom styles for bootstrap-table -->
    <link href="../css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../css/mycss.css" rel="stylesheet">
		 <style type="text/css">
			#code{margin-top:30px;
			margin-left:300px}
		</style>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  
  </head>

  <body>
  	<!-- 头部导航条 -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          	<?php
	   						require("../conn.php");
								$yhid=$_GET["yhid"];
	   						$sql = "select * from 用户信息   where id='$yhid'";
	   						$result = $conn->query($sql);
	   						while($row = $result->fetch_assoc()) {
   					?>
          <a class="navbar-brand" href="../index.php?yhzh=<?php echo $row["账号"];?>">同欣</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../index.php?yhzh=<?php echo $row["账号"];?>">项目管理</a></li>
            <li><a href="../seclect.php?yhid=<?php echo $row["id"];?>">综合查询</a></li>
            <li><a href="../system.php?yhid=<?php echo $row["id"];?>">系统管理</a></li>
            <?php
								}
								$conn->close();		
						 ?>
          </ul>
        </div>
      </div>
    </nav>
    <div id="container" class="container">
    	<div class="row">
    		<!--左侧导航菜单 -->
    									<?php
//										echo $_GET["id"];
										  $id=$_GET["id"];
										  require("../conn.php");
											$sql = "select * from 我的工程 where id='$id' ";
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                         					
                     ?>
    		<!--左侧导航菜单 -->
    		<div class="col-md-2">
    			<div class="bs-docs-sidebar affix" role="complementary">
    				<ul class="nav bs-docs-sidenav">
    					<li  class="active" ><a href="Project_in.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">项目登记</a>
    					</li>    					
    					<li>
    						<a href="aqxc.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">项目管理</a>
    						<ul class="nav">
    							<li  ><a href="aqxc.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">危险源管理</a></li>
    							<li><a href="ryqd.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">人员签到</a></li>
    							<li><a href="sbgl.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">设备管理</a></li>
    							<li><a href="xczg.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">巡查整改</a></li>
    							<li ><a href="zlsc.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">质量实测</a></li>
    							<li><a href="tz_table.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">台账报表</a></li>
    						</ul>
    					</li>    					
    					<li>
    						<a href="cxfx.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">查询分析</a>
    						<ul class="nav">
									<li><a href="wxycxfx.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">危险源</a></li>
									<li><a href="cxfx.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid;?>">隐患通知单</a></li>
									<li ><a href="wzcxfx.php?id=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>">违章大类查询</a></li>
    						</ul>
    					</li>	   				
    				</ul>
    			</div>    			
    		</div><!--左侧导航菜单 -->
    		
    		<!--div class="col-md-2">
    			<div class="bs-docs-sidebar affix" role="complementary">
    				<ul class="nav bs-docs-sidenav">
    					<li class="active"><a href="Project_in.html">项目登记</a></li>
    					<li><a href="aqxc.html">项目管理</a>
    						
    					</li>
    					<li><a href="cxfx.html">查询分析</a></li>
    				</ul>
    			</div>    			
    		</div><!--左侧导航菜单 -->
    		
    		<!-- 内容区域 -->
    		<div class="col-md-10">
    			<div id="xmdj" class="panel panel-info">
						<div class="panel-heading">

							<h3 class="panel-title">项目信息-<?php echo $row["工程名称"];?></h3>
							<?php
												}
												$conn->close();
																							
											?>
						</div>
						<div class="panel-body">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#jbxx" role="tab" data-toggle="tab">基本信息</a></li>
								<li role="presentation"><a href="#zrr" role="tab" data-toggle="tab">责任人</a></li>
								<li role="presentation"><a href="#glry" role="tab" data-toggle="tab">管理人员</a></li>
								<li role="presentation"><a href="#gjzl" role="tab" data-toggle="tab">备案资料</a></li>
								<li role="presentation"><a href="#xxjd" role="tab" data-toggle="tab">形象进度</a></li>
								<li role="presentation"><a href="#ewm" role="tab" data-toggle="tab">二维码管理</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="jbxx">
									<p></p>
									<form id="xmdjform" action="xg1.php" method="post" class="form-horizontal cmxform" role="form">
										<div class="form-group hidden">
					                      <label for="sjc" class="control-label col-lg-2">时间戳：</label>
					                        <div class="col-lg-6">
					                           <input id="sjc" name="sjc" class="form-control"  size="16" type="text" value="" />
					                        </div>
					                    </div>
					                    <div class="form-group hidden">
					                      <label for="sqlflag" class="control-label col-lg-2">sqlflag：</label>
					                        <div class="col-lg-6">
					                          <input id="sqlflag" name="sqlflag" class="form-control"  size="16" type="text" value="insert" />
					                        </div>
					                    </div>
										<div class="form-group">
											<?php
//										echo $_GET["id"];
										  $id=$_GET["id"];
										  require("../conn.php");
											$sql = "select id,工程名称 from 我的工程 where id='$id' ";
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                         					
                     ?>
										
											
											<label for="gcmc" class="col-sm-2 control-label">工程名称：</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="gcmc1"  name="gcmc1" value="<?php echo $row["工程名称"];?>" placeholder="工程名称">
												<input type="text" class="form-control hidden" id="gcmc"  name="gcmc" value="<?php echo $row["工程名称"];?>" placeholder="工程名称">
											</div>
											
											<?php
												}
												$conn->close();
																							
											?>
										</div>
										 <?php
//										echo $_GET["id"];
										  $id=$_GET["id"];
										  require("../conn.php");
											$sql = "select * from 我的工程 where id='$id' ";
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                         					
                     ?>
										<div class="form-group">
											<label for="xmlb" class="col-sm-2 control-label">工程类别：</label>
										<div class="col-sm-3">
											<select id="xmlb" name="xmlb" class="form-control">
												<option><?php echo $row["项目类别"];?></option>
												<option>建筑工程</option>
												<option>市政工程</option>
												<option>装修工程</option>
												<option>维修加固工程</option>
											</select>
										</div>
										<label for="ssgs" class="col-sm-2 control-label">所属公司：</label>
										<div class="col-sm-3">
											<select id="ssgs" name="ssgs" class="form-control">
												<!--<option><?php echo $row["所属公司"];?></option>-->
												<?php
														}
														$conn->close();	
													 ?>
													<?php
						                   require("../conn.php");
						                   $sql = "select * from 公司部门  ";
						                   $result = $conn->query($sql);
						                   while($row = $result->fetch_assoc()) {    					
						               ?>
													<option><?php echo $row["部门"];?></option>
													 <?php
														}
														$conn->close();	
													 ?>
												</select>
											</div>
										</div>
										<?php
			                   require("../conn.php");
							   				 $yhid=$_GET["yhid"];
			                   $sql = "select * from 用户信息  where id='$yhid'";
			                   $result = $conn->query($sql);
											   
											 	 
			                   while($row = $result->fetch_assoc()) {
			                   	   $yhbm = $row["部门"]; 					
			               ?> 
			               <!--<?php echo $yhbm; ?>-->
			               	<?php
												}
												$conn->close();	
										  ?>
										<?php
//										echo $_GET["id"];
										  $id=$_GET["id"];
										  require("../conn.php");
											$sql = "select * from 我的工程 where id='$id' ";
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                      $gcdsjc =	$row["时间戳"];	
											$shzda =	$row["审核"];
                     ?>
                     
                    <div class="form-group">
											<label for="province5" class="col-sm-2 control-label">地区省：</label>
											<div class="col-sm-3">
												
												<input type="text" class="form-control" id="province5" name="province5" value="<?php echo $row["地区省"];?>" >							
											</div>
											<label for="city5" class="col-sm-2 control-label">地区市：</label>
											<div class="col-sm-3">
												
												<input type="text" class="form-control" id="city5" name="city5" value="<?php echo $row["地区市"];?>" >							
											</div>
										</div>
										<div class="form-group">
											<label for="gcwz" class="col-sm-2 control-label">工程位置：</label>
											<div class="col-sm-8">
												
												<input type="text" class="form-control" id="gcwz" name="gcwz" value="<?php echo $row["工程位置"];?>" placeholder="工程位置">							
											</div>
										</div>
										<div class="form-group">
											<label for="jwd" class="col-sm-2 control-label">经纬度：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="jwd" name="jwd" value="<?php echo $row["经纬度"];?>" placeholder="点击下方地图获取" >
												<p class="help-block">注：本数据作为签到区域圆心</p>
											</div>
											
											<label for="wcfw" class="col-sm-2 control-label">误差范围(km)：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="wcfw" name="wcfw" value="<?php echo $row["误差范围"];?>" placeholder="误差范围">
												<p class="help-block">注：本数据作为签到区域半径</p>
											</div>
										</div>
										<div class="form-group">
											<label for="jzmj" class="col-sm-2 control-label">建筑面积（㎡）：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="jzmj" name="jzmj" value="<?php echo $row["建筑面积"];?>" placeholder="建筑面积">
												<input type="text" id="shjgkk" name="shjgkk" value="<?php echo $row["审核"];?>" class="hidden">
											</div>
											
											<label for="cs" class="col-sm-2 control-label">层数(层)：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="cs" name="cs" value="<?php echo $row["层数"];?>" placeholder="层数">
											</div>
										</div>
										<div class="form-group">
											<label for="gd" class="col-sm-2 control-label">高度(m)：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="gd" name="gd" value="<?php echo $row["高度"];?>" placeholder="高度">
											</div>
											
											<label for="jksd" class="col-sm-2 control-label">基坑深度(m)：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="jksd" name="jksd" value="<?php echo $row["基坑深度"];?>"  placeholder="基坑深度">
											</div>
										</div> 
										<div class="form-group">
											<label for="kgday" class="col-sm-2 control-label">开工日期：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="kgday" name="kgday" value="<?php echo $row["开工日期"];?>" placeholder="xxxx/xx/xx">
											</div>
											
											<label for="jgday" class="col-sm-2 control-label">竣工日期：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="jgday" name="jgday" value="<?php echo $row["竣工日期"];?>"  placeholder="xxxx/xx/xx">
											</div>
										</div>
										<div class="form-group">
											<label for="ds" class="col-sm-2 control-label">栋数：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="ds" name="ds" value="<?php echo $row["栋数"];?>" placeholder="栋数">
											</div>
											<label for="gcjwd" class="col-sm-2 control-label">工程模型：</label>
											<div class="col-sm-3">
												<input type="button" value="点击绘制工程模型" class="form-control" onclick="window.open('map.php')"/>
												<input type="text" id="jwd1" name="jwd1" value="" class="hidden"/>
											</div>
										</div>
										<!--<div class="form-group">-->
												
											<?php
											
											if ($shzda=='1' & $yhbm == '总公司'){
											?>
											<button type="button" class="btn btn-primary col-sm-offset-9" id="<?php echo $row["id"];?>" name="0" onclick="tijiao(this.id,this.name)">撤销</button>
											<?php 
											} 
											else if ($shzda!='1')
											{
											?>
											<!--<button type="button" class="btn btn-primary col-sm-offset-9" id="<?php echo $row["id"];?>" name="1" onclick="tijiao(this.id,this.name)">提交</button>-->
											<input id="save" type="submit" name="save" value="修改" onclick="dothis(this)" class="btn btn-primary col-sm-offset-9">
											<?php } ?>
										<!--</div>-->
									</form>
									<div id="allmap"></div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="glry">
									<p></p>
									<form id="xmdjform3" action="xg3.php" class="form-horizontal" role="form"  method="post">
										<div class="panel-heading">
										<h3 class="panel-title label label-info">项目部</h3>
										</div>
												<div class="form-group">
													<label for="xmjl" class="col-sm-2 control-label">项目经理：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="xmjl" name="xmjl" value="<?php echo $row["项目经理"];?>" placeholder="项目经理">
															<input type="text" class="form-control hidden" id="gcmc"  name="gcmc" value="<?php echo $row["工程名称"];?>" placeholder="工程名称">
													</div>
													<label for="glcall1" class="col-sm-2 control-label">联系方式：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="glcall1" name="glcall1" value="<?php echo $row["项目经理手机"];?>" placeholder="手机">
													</div>
												</div>
												<div class="form-group">
													<label for="aqzg" class="col-sm-2 control-label">安全总监：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="aqzg" name="aqzg" value="<?php echo $row["安全主管"];?>" placeholder="安全总监">
													</div>
													<label for="glcall2" class="col-sm-2 control-label">联系方式：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="glcall2" name="glcall2" value="<?php echo $row["安全主管手机"];?>" placeholder="手机">
													</div>
												</div>
												<div class="form-group">
													<label for="scjl" class="col-sm-2 control-label">生产经理：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="scjl" name="scjl" placeholder="生产经理" value="<?php echo $row["生产经理"];?>">
													</div>
													<label for="scjllxfs" class="col-sm-2 control-label">联系方式：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="scjllxfs" name="scjllxfs" placeholder="生产经理手机" value="<?php echo $row["生产经理手机"];?>">
													</div>
												</div>
												<div class="form-group">
													<label for="aqy" class="col-sm-2 control-label">安全员：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="aqy" name="aqy" value="<?php echo $row["安全员"];?>" placeholder="安全员">
													</div>
													<label for="glcall3" class="col-sm-2 control-label">联系方式：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="glcall3" name="glcall3" value="<?php echo $row["安全员手机"];?>" placeholder="手机">
													</div>
												</div>
												<div class="form-group">
													<label for="jjgly" class="col-sm-2 control-label">机械管理员：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="jjgly" name="jjgly" value="<?php echo $row["机械管理员"];?>" placeholder="机械管理员">
													</div>
													<label for="glcall4" class="col-sm-2 control-label">联系方式：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="glcall4" name="glcall4" value="<?php echo $row["机械管理员手机"];?>" placeholder="手机">
													</div>
												</div>
												<div class="form-group">
													<label for="zlya" class="col-sm-2 control-label">质量员：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="zlya" name="zlya" placeholder="质量员" value="<?php echo $row["质量员"];?>">
													</div>
													<label for="scjllxfs" class="col-sm-2 control-label">联系方式：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="zlyasj" name="zlyasj" placeholder="质量员手机" value="<?php echo $row["质量员手机"];?>">
													</div>
												</div>
										<div class="panel-heading">
										<h3 class="panel-title label label-info">分公司</h3>
										</div>
											<div class="form-group">
												<label for="bmA" class="col-sm-2 control-label">分管领导：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="bmA" name="bmA" value="<?php echo $row["部门负责人A"];?>" placeholder="分管领导">
												</div>
												<label for="bmAc" class="col-sm-2 control-label">联系方式：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="bmAc" name="bmAc" value="<?php echo $row["部门负责人A手机"];?>" placeholder="分管领导手机">
												</div>
											</div>
											<div class="form-group">
												<label for="bmB" class="col-sm-2 control-label">工程部部长：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="bmB" name="bmB" value="<?php echo $row["部门负责人B"];?>" placeholder="工程部部长">
												</div>
												<label for="bmBc" class="col-sm-2 control-label">联系方式：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="bmBc" name="bmBc" value="<?php echo $row["部门负责人B手机"];?>" placeholder="工程部部长手机">
												</div>
											</div>
											<div class="form-group">
												<label for="bmC" class="col-sm-2 control-label">巡查员：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="bmC" name="bmC" value="<?php echo $row["部门负责人C"];?>" placeholder="巡查员">
												</div>
												<label for="bmCc" class="col-sm-2 control-label">联系方式：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="bmCc" name="bmCc" value="<?php echo $row["部门负责人C手机"];?>" placeholder="巡查员手机">
												</div>
											</div>
									<div class="panel-heading">
										<h3 class="panel-title label label-info">总公司</h3>
									</div>
											<div class="form-group">
												<label for="zgA" class="col-sm-2 control-label">安全监管部部长：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="zgA" name="zgA" value="<?php echo $row["总公司负责人A"];?>" placeholder="安全监管部部长">
												</div>
												<label for="zgAc" class="col-sm-2 control-label">联系方式：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="zgAc" name="zgAc" value="<?php echo $row["总公司负责人A手机"];?>" placeholder="安全监管部部长手机">
												</div>
											</div>
											<div class="form-group">
												<label for="zgB" class="col-sm-2 control-label">安全主管：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="zgB" name="zgB" value="<?php echo $row["总公司负责人B"];?>" placeholder="安全主管">
												</div>
												<label for="zgBc" class="col-sm-2 control-label">联系方式：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="zgBc" name="zgBc" value="<?php echo $row["总公司负责人B手机"];?>" placeholder="安全主管手机">
												</div>
											</div>
												<div class="form-group" >
													<label for="zcy" class="col-sm-2 control-label">巡查员：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="zcy" name="zcy" placeholder="巡查员" value="<?php echo $row["总部巡查员"];?>">
													</div>
													<label for="zcysj" class="col-sm-2 control-label">联系方式：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="zcysj" name="zcysj" placeholder="巡查员手机" value="<?php echo $row["总部巡查员手机"];?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="zgC" class="col-sm-2 control-label">设备管理员：</label>
													<div class="col-sm-3">
													<input type="text" class="form-control" id="zgC" name="zgC" value="<?php echo $row["总公司负责人C"];?>" placeholder="设备管理员">
													</div>
													<label for="zgCc" class="col-sm-2 control-label">联系方式：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="zgCc" name="zgCc" value="<?php echo $row["总公司负责人C手机"];?>" placeholder="设备管理员手机">
												</div>
											</div>
											<div class="form-group hidden">
													<label for="shijianchuo" class="col-sm-2 control-label">时间戳：</label>
													<div class="col-sm-3">
													<input type="text" class="form-control" id="shijianchuo" name="shijianchuo" value="<?php echo $row["时间戳"];?>" placeholder="时间戳">
													</div>
											</div>
											<div class="panel-heading">
										<h3 class="panel-title label label-info">新增人员</h3>
									</div>
												<?php
												}
												$conn->close();
																							
											?>
												<?php
//										echo $_GET["id"];
										  $id=$_GET["id"];
										  require("../conn.php");
//										  echo "$gcdsjc";
											$sql = "select * from 工程管理人员  where 工程时间戳  ='$gcdsjc' ";
//											echo $gcdsjc;
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                     ?>	
                     <div class="form-group">
                     	<label for="glrybmgs" class="col-sm-2 control-label">部门归属：</label>
                     	<div class="col-sm-2">
                     		<input type="text" class="form-control hidden" id="gcdsjc" name="gcdsjc"  value="<?php echo $gcdsjc;?>">
                     		<input type="text" class="form-control" id="bMen" name="bMen" placeholder="部门" value="<?php echo $row["部门"];?>">
                     		<!--<select id="glrybmgs'+ FieldCount +'" name="glrybmgs[]" class="form-control">
                     			<option>项目部</option>
                     			<option>分公司</option>
                     			<option>总公司</option>
                     	  </select>-->
                     	</div>
                     	<div class="col-sm-2">
                     		<input type="text" class="form-control" id="gWei" name="gWei" placeholder="岗位" value="<?php echo $row["岗位"];?>">
                     	</div>
                     	<div class="col-sm-2">
                     		<input type="text" class="form-control" id="gLry" name="gLry" placeholder="管理人员" value="<?php echo $row["姓名"];?>">
                     	</div>
                     	<div class="col-sm-2">
                     		<input type="text" class="form-control" id="lXi" name="lXi" placeholder="联系方式" value="<?php echo $row["联系方式"];?>">
                     	</div>
                     	<button id="<?php echo $row["id"].'*|'.$row["工程时间戳"].'*|,'.$row["联系方式"];?>" onclick="dianji(this.id);" type="button" class="btn btn-default">删除</button>
                    </div>
                    
                     <?php
												}
												$conn->close();
																							
											?>
											<div  id="dtcja">
											</div>
                    <div id="ziDong"></div>
										<a href="#" id="AddMoreFileBox" class="btn btn-primary col-sm-offset-2">增加管理人员</a></span></p>
										<?php
//										echo $_GET["id"];
										  $id=$_GET["id"];
										  require("../conn.php");
											$sql = "select * from 我的工程 where id='$id' ";
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                      
                     ?>
										<?php
											if ($shzda!='1'){
											?>
										<input id="save3" type="submit" name="save3" value="修改" onclick="dothis(this)" class="btn btn-primary col-sm-offset-9">
											<!--<input id="ceshi" name="ceshi" value="ceshi" class="btn btn-primary col-sm-offset-9">-->
										<?php }?>	
									</form>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="zrr">
									<p></p>
									<form id="xmdjform2" action="xg2.php" class="form-horizontal" role="form"  method="post">
										<div class="form-group">
											<label for="zrrxx" class="col-sm-2 control-label">责任人：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="zrrxx" name="zrrxx" value="<?php echo $row["责任人"];?>" placeholder="责任人名字">
													<input type="text" class="form-control hidden" id="gcmc"  name="gcmc" value="<?php echo $row["工程名称"];?>" placeholder="工程名称">
											</div>
											<label for="lxfs" class="col-sm-2 control-label">联系方式：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="lxfs" name="lxfs" value="<?php echo $row["联系方式"];?>" placeholder="手机">
											</div>
										<?php
												}
												$conn->close();
																							
											?>
										
										</div>
										<?php
											if ($shzda!='1'){
											?>
										<input id="save2" type="submit" name="save2" value="修改" onclick="dothis(this)" class="btn btn-primary col-sm-offset-9">
										<?php }?>	
									</form>
								</div>
								<?php
//										echo $_GET["id"];
										  $id=$_GET["id"];
										  $yhid=$_GET["yhid"];
										  require("../conn.php");
											$sql = "select * from 我的工程 where id='$id' ";
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                         					
                     ?>
								<div role="tabpanel" class="tab-pane fade" id="gjzl">
									<p></p>
									<form id="xmdjform4" action="xg4.php" class="form-horizontal cmxform" enctype="multipart/form-data" role="form"  method="post">
										<div class="form-group">
											<label for="sgxkzqdqk" class="col-sm-3 control-label">施工许可证取得情况：</label>
											<div class="col-sm-7">
												<select id="sgxkzqdqk" name="sgxkzqdqk" value="<?php echo $row["施工许可证取得情况"];?>" class="form-control">
													<option>已取得</option>
													<option>备案中</option>
													<option>未备案</option>								
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="kgbg" class="col-sm-3 control-label">开工报告：</label>
											<div class="col-sm-7">
												<textarea class="form-control" rows="5" id="kgbg" value="<?php echo $row["开工报告"];?>" name="kgbg"><?php echo $row["开工报告"];?></textarea>
											</div>
										</div>
										<div class="form-group">						
											<div class="col-sm-offset-3 col-sm-7">
												<input name="urlid" hidden="hidden" value="<?php echo $id; ?>" />		
												<input name="urlyhid" hidden="hidden" value="<?php echo $yhid; ?>" />					
												<p class="help-block col-xs-12 col-md-6">开工报告附件上传</p>
											<!--	<input type="file" id="kgbgfjsc" name="kgbgfjsc" value="<?php echo $row["开工报告附件上传"];?>" class=" col-xs-12 col-md-6">-->
												  <input type="file" name="file" id="file" value=""><br>
													<input type="text" class="form-control hidden" id="gcmc"  name="gcmc" value="<?php echo $row["工程名称"];?>" placeholder="工程名称">
														<a href="upload/<?php echo $row["开工报告附件上传"];?>" target="_Blank">
															<img src="upload/<?php echo $row["开工报告附件上传"];?>" class="col-md-6" alt="郁金香" />
														</a>
											</div>
										</div>
										<?php
											if ($shzda!='1'){
											?>
										<input id="save4" type="submit" name="submit" value="修改"  class="btn btn-primary col-sm-offset-9"><!--保存</button>-->
										<?php }?>	
											<!--<input type="submit" id="save5" onclick="" class="btn btn-primary col-sm-offset-9" name="submit" value="保存">-->
									</form>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="xxjd">
									<p></p>
									<form  id="xmdjform5" action="xg5.php?id=<?php echo $id?>&yhid=<?php echo $yhid?>" class="form-horizontal" role="form"  method="post">
										<div class="form-group">
											<label for="gcxxjd" class="col-sm-2 control-label">形象进度：</label>
											<input type="text" class="form-control hidden" id="gcmc"  name="gcmc" value="<?php echo $row["工程名称"];?>" placeholder="工程名称">
											<div class="col-sm-3">
												<input type="text" readonly="readonly" class="form-control" value="<?php echo $row["形象进度"];?>"/>
												<select id="gcxxjd" name="gcxxjd" value="<?php echo $row["形象进度"];?>" class="form-control">
													  <option></option>
														<option>基础施工</option>
														<option>主体施工</option>
														<option>装饰装修</option>
														<option>收尾阶段</option>
														<option>竣工验收</option>
												</select>
											</div>
										</div>
										<?php
											if ($shzda!='1'){
											?>
										<input id="save5" type="submit" name="save5" value="修改" onclick="dothis(this)" class="btn btn-primary col-sm-offset-9"><!--完成</button>-->
										<?php }?>	
									<!--	<input type="submit"  value="提交">-->
									</form>
								</div>				
								<div role="tabpanel" class="tab-pane fade" id="ewm">
								<p></p>
								<form  class="form-horizontal" role="form">
									  <div class="form-group">
									    <label for="gcmc" class="col-sm-2 control-label">工程名称：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" readonly="readonly" id="gcmc1"  name="gcmc" value="<?php echo $row["工程名称"];?>" placeholder="工程名称">
											</div>
										</div>
										<div class="form-group">
											<label for="xmlb1" class="col-sm-2 control-label">工程类别：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="xmlb1"  name="xmlb" value="<?php echo $row["项目类别"];?>" readonly="readonly"  placeholder="项目类别">
											</div>
										</div>
										<div class="form-group">
											<label for="gcwz1" class="col-sm-2 control-label">工程位置：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="gcwz1" name="gcwz" value="<?php echo $row["工程位置"];?>" readonly="readonly" placeholder="工程位置">					
											</div>
										</div>
										<div class="form-group hidden">
											<label for="gcid1" class="col-sm-2 control-label">id：</label>
											<div class="col-sm-3">
												<input type="text" class="form-control " id="gcid1" name="gcid1" value="<?php echo $row["id"];?>" readonly="readonly" placeholder="">					
											</div>
										</div>
										</form>
											<?php
												}
												$conn->close();
																							
											?>
								<div> 
									<input type="button" id="sub_btn" class="btn btn-primary col-sm-offset-9" value="点击生成二维码">
								</div>
								<!--<div id="ele3">-->
								<div class="col-sm-offset-4" id="code"></div>
								<div><img class="img-responsive"></div>
								<!--<button class="print-link" onclick="jQuery.print('#code')">
               		 打印
                </button>-->
								<!--	</div>-->
									</div>
							</div>
						</div>
					</div> 
    		
    		</div><!-- 内容区域 -->
    	</div>
    </div>
    
    <footer class="bs-docs-footer" role="contentinfo"></footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <!--js of bootstrap-table -->
   <script src="../js/bootstrap-table.min.js"></script>
   <!--js of bootstrap-table—export -->
   <script src="../js/export/tableExport.js"></script>
   <script src="../js/export/bootstrap-table-export.js"></script>
   <script src="../js/bootstrap-table-zh-CN.min.js"></script>
   <script language="javascript" src="../js/PCASClass.js"></script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/mySidenav.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=p5qT2V6OajYx5sTtmqco3kARG2wQeuo8"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    	$("footer").load("../footer.html");
//  	$(".col-md-10").load("xmdj.php");
     });
    
//  //正则表达方法
// 	function getQueryString(name) {
// 			var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
//  		var r = window.location.search.substr(1).match(reg);
// 			if (r != null) return unescape(r[2]); return null;
//  }
//  
//  //调用函数
//  var id=getQueryString("id");
//  alert(id);    
//  
    </script>
    <script type="text/javascript" src="../js/jquery.qrcode.min.js"></script>
     <script type="text/javascript">
//      alert("123");
			//时间戳
			//自动添加当前时间戳,作为这个新建任务的唯一标识存到数据库，附件上传时会用到
			//var sjc=document.getElementById('sjc'); //时间戳
			//var myDate=new Date();
			//var mytime=myDate.getTime();
			//sjc.value=mytime;
      
					$(function(){
						var str = "http://www.baidu.com";
						$('#code').qrcode(str);
						
						$("#sub_btn").click(function(){
							
							alert("55");
							
							$("#code").empty();
							
							var str1 = toUtf8(document.getElementById('gcmc1').value+","+document.getElementById('xmlb1').value+","+document.getElementById('gcid1').value+","+document.getElementById('gcwz1').value );
							
							var str =  str1 ;
					
							
							
							$("#code").qrcode({
								alert("88");
								render: "table",
								width: 200,
								height:200,
								text: str
							});
						});
					})
					function toUtf8(str) {   
					    var out, i, len, c;   
					    out = "";   
					    len = str.length;   
					    for(i = 0; i < len; i++) {   
					    	c = str.charCodeAt(i);   
					    	if ((c >= 0x0001) && (c <= 0x007F)) {   
					        	out += str.charAt(i);   
					    	} else if (c > 0x07FF) {   
					        	out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));   
					        	out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));   
					        	out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));   
					    	} else {   
					        	out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));   
					        	out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));   
					    	}   
					    }   
					    return out;   
					}  
					$(function(){
						$("#sub_btn").click();
					});
		</script>
		<!--        	描述：打印        -->
		<script type="text/javascript" src="../js/jquery.print.js"></script>
			
	  <script>
        window.jQuery || document.write('<script src="../js/jquery-1.10.2.min.js"><\/script>')
    </script>
    </script>
		<!--        	描述：打印        -->
    <script src="../js/ProjectPlus/xmdj.js"></script>
		<script src="../js/Other/baiduMap.js"></script>
		<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
		<script type="text/javascript">
		   function tijiao(aaid,shjgaa){
					$.ajax({
			        	url:'tjht.php',
			        	type:'post',
			        	dataType:'json',
			        	data:{
			        		aaid:aaid,
			        		shjgaa:shjgaa
			        	},
			        	success:function(data){
			        		if (data.result=='success') {
//			        			window.location.reload();
							    alert ('操作成功');
							    window.location.reload();
							
			            }
			         },
			         error:function(xhr,type,errorThrown){
			         	alert('ajax错误'+type);
			         }
            });
		};	
				var shjgkk = document.getElementById('shjgkk').value;
//				alert (shjgkk);
				if (shjgkk=='1'){
					document.getElementById("save3").readOnly="readonly";
					document.getElementById("save").readOnly="readonly";
					document.getElementByIdx("save").disabled=true;
//					document.getElementById("gcmc").readOnly="readonly";
//					document.getElementById("xmlb").readOnly="readonly";
//					document.getElementById("gcwz").readOnly="readonly";
//					document.getElementById("jwd").readOnly="readonly";
//					document.getElementById("wcfw").readOnly="readonly";	
//					document.getElementById("jzmj").readOnly="readonly";
//					document.getElementById("cs").readOnly="readonly";
//					document.getElementById("gd").readOnly="readonly";
//					document.getElementById("jksd").readOnly="readonly";
//					document.getElementById("xmjl").readOnly="readonly";
//					document.getElementById("aqzg").readOnly="readonly";
//					document.getElementById("aqy").readOnly="readonly";
//					document.getElementById("jjgly").readOnly="readonly";
//					document.getElementById("zrrxx").readOnly="readonly";
//					document.getElementById("lxfs").readOnly="readonly";
//					document.getElementById("sgxkzqdqk").readOnly="readonly";
//					document.getElementById("kgbg").readOnly="readonly";
//					document.getElementById("kgbgfjsc").readOnly="readonly";
//					document.getElementById("gcxxjd").readOnly="readonly";
//					document.getElementById("ssgs").readOnly="readonly";	
//					document.getElementById("glcall1").readOnly="readonly";
//					document.getElementById("glcall2").readOnly="readonly";
//					document.getElementById("glcall3").readOnly="readonly";
//					document.getElementById("glcall4").readOnly="readonly";
//					document.getElementById("bmA").readOnly="readonly";
//					document.getElementById("bmAc").readOnly="readonly";
//					document.getElementById("bmB").readOnly="readonly";
//					document.getElementById("bmBc").readOnly="readonly";
//					document.getElementById("bmC").readOnly="readonly";
//					document.getElementById("bmCc").readOnly="readonly";
//					
//					document.getElementById("zgA").readOnly="readonly";
//					document.getElementById("zgAc").readOnly="readonly";
//					document.getElementById("zgB").readOnly="readonly";
//					document.getElementById("zgBc").readOnly="readonly";
//					document.getElementById("zgC").readOnly="readonly";
//					document.getElementById("zgCc").readOnly="readonly";
//					
//					document.getElementById("zcy").readOnly="readonly";
//					document.getElementById("zcysj").readOnly="readonly";
//					document.getElementById("scjl").readOnly="readonly";
//					document.getElementById("scjllxfs").readOnly="readonly";
//					document.getElementById("province5").readOnly="readonly";
//					document.getElementById("city5").readOnly="readonly";
				}
		
		</script>
		<script language="javascript" defer> 
				new PCAS("province5","city5","请选择省份","请选择市区");
		</script>
		<script>  
			$(document).ready(function() {  
			 var save3=document.getElementById("save3"); 
//			 var ceshi=document.getElementById("ceshi"); 
			var MaxInputs       = 8; //maximum input boxes allowed  
			var dtcja   = $("#dtcja"); //Input boxes wrapper ID 
			var ziDong   = $("#ziDong"); //Input boxes wrapper ID  
			var AddButton  = $("#AddMoreFileBox"); //Add button ID  
			  
//			var x = dtcja.length; //initlal text box count
			var x = ziDong.length; //initlal text box count  
			var FieldCount=1; //to keep track of text box added  
			  
			$(AddButton).click(function (e)  //on add input button click  
			{  
			        if(x <= MaxInputs) //max input box allowed  
			        {  
			            FieldCount++; //text box added increment  
			            //add input box  
			            $(ziDong).append('<div><div class="form-group"><label for="glrybmgs" class="col-sm-2 control-label">部门归属：</label><div class="col-sm-2"><select id="glrybmgs'+ FieldCount +'" name="glrybmgs[]" class="form-control"><option>项目部</option><option>分公司</option><option>总公司</option></select></div><div class="col-sm-2"><input type="text" class="form-control" id="glrygw'+ FieldCount +'" name="glrygw[]" placeholder="岗位"></div><div class="col-sm-2"><input type="text" class="form-control" id="zgc'+ FieldCount +'" name="zgc[]" placeholder="管理人员"></div><div class="col-sm-3"><input type="text" class="form-control" id="zgcc'+ FieldCount +'" name="zgcc[]" placeholder="联系方式"></div></div><a href="#"class="removeclass">×</a></div>');  
			            x++; //text box increment  
			        }  
			return false;  
			});  
			  
			$("body").on("click",".removeclass", function(e){ //user click on remove text  
			        if( x > 1 ) {  
			                $(this).parent('div').remove(); //remove text box  
			                x--; //decrement textbox  
			        }  
			return false;  
			})   
			  
			  
			  var shijianchuo=document.getElementById("shijianchuo");
			  var shijianc=shijianchuo.value;
			  
			  save3.addEventListener('click',function(){
			  	//alert("测试");
			  	var ziDong=document.getElementById("ziDong");
			  	var inputArray=ziDong.getElementsByTagName("input");
			  	var selectArray=ziDong.getElementsByTagName("select");
			  	//alert(selectArray.length);
			  	var selectConnectString=""; //初始化存放存放结合元素字符串
			  	var inputConnectString="";
			  	
			  	for(var i=0;i<inputArray.length;i++){
			  		var strs1=inputArray[i].value;
			  		inputConnectString+=strs1+"//";
			  	}
			  	for(var j=0;j<selectArray.length;j++){
			  		var strs2=selectArray[j].value;
			  		selectConnectString+=strs2+"//";
			  	}
			  	//alert(selectConnectString);
			  	$.ajax({
			        	url:'bc5.php',
			        	type:'post',
			        	dataType:'json',
			        	data:{
			        		selectConnectString:selectConnectString,
							    inputConnectString:inputConnectString,
							    sjc:shijianc
			        	},
			        	success:function(data){
			        		
			        		if (data.result=='success') {
//			        			alert ('保存成功');

                      window.location.reload();
//                    self.location=document.referrer;
			            }
			         },
			         error:function(xhr,type,errorThrown){
//			         	alert('ajax错误'+type);
                  window.location.reload();
//											self.location=document.referrer;
			         }
	        });
			  	//将  inputConnectString  和   selectConnectString
			  });
			  
//			  ceshi.addEventListener('click',function(){
//			  	alert(shijianc);
//			  });
			}); 
			function dianji(id){
//							alert(id);
//            alert(id);
							$.ajax({
				                cache: true,
				                type: "POST",
				                url:'zidong.php',
				                data:{
				                	gcid2:id
				                },// 你的formid
				                async: false,
				                error: function(request) {
				                    alert("Connection error");
				                },
				                success: function(data) {
				                    alert("删除成功");
				                    window.location.reload();
				                }
				            }); 
						};		 
</script>
  </body>
</html>
