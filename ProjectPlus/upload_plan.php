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
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/docs.css"/>
    <link href="../css/theme.css" rel="stylesheet">
    
    <link href="../css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../css/mycss.css" rel="stylesheet">
    <style>
    	img{
    		height: 360px;
    		width: 302px;
    	}
    	#tb1 tr td {
    		padding-bottom:5px;
    		padding-top:5px;
				text-align: center;
			}
			
			#previewimg2{
				width: 670px;
				height: 400px;
			}
    </style>

    <script src="js/ie-emulation-modes-warning.js"></script>

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
    <!--模态框（modal）-->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog" style="width: 700px;">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" onclick="mtk()"  data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">图片查看</h4>
    			</div>
    			<div class="modal-body">
    				<!--<div class="col-lg-4">-->
								<img id="previewimg2" src="../img/addimage.png" />
					 <!--</div>-->
    			</div>
    		</div>
    	</div>
    </div>
    
    <div id="container" class="container">
    	<div class="row">
    		
    		<!-- 内容区域 -->
    		<div class="col-md-10 col-lg-offset-1">
				 	<div id="xmdj" class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title "></h3>&nbsp;&nbsp;&nbsp;
							<input type="file" id="btn_file" onchange="upload2(this)" style="display: none;">
							 <button type="button" class="btn btn-primary" id="tysc" onclick="F_Open()">标准层选择</button>&nbsp;&nbsp;&nbsp;
							 <input id="shch" type="button" class="btn btn-primary" onclick="shangchuan2(this.id)" value="标准层上传"> &nbsp;&nbsp;&nbsp;
							 <button type="button" id="guanbi" name="guanbi" class="btn btn-primary" onclick="go()">保存</button>
						</div>
						<div class="panel-body">
							<div class="col-lg-8">
								<table class="col-lg-12" id="tb1" border="1">
									<thead>
										<!--<tr>
											<!--<td class="col-lg-6">栋</td>-->
											<!--<td class="col-lg-3"></td>
											<td class="col-lg-3"></td>-->
											<!--<td class="col-lg-3">操作</td>-->
										
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
							<div class="col-lg-4">
								<img id="previewimg" src="../img/addimage.png" />
							</div>
						</div>
					</div> 			
    		</div>
    		<!-- 内容区域 -->
    	</div>
    </div>
    

    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   	<script src="../js/bootstrap-table.min.js"></script>
   	<script src="../js/export/tableExport.js"></script>
   	<script src="../js/export/bootstrap-table-export.js"></script>
   	<script src="../js/bootstrap-table-zh-CN.min.js"></script>
   	<script language="javascript" src="../js/PCASClass.js"></script>
   
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
    	var cs = window.opener.document.getElementById("cs").value;
    	var ds = window.opener.document.getElementById("ds").value;
//  	var cs = 12;
//  	var ds = 2;
//  	alert(cs+"  "+ds)
    	
    	var dNum=new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    	var i = 1;
    	var j = 0;
    	var index = 0;
    	for(j=0;j<ds;j++){
    		var d = dNum[j];
    		var str2 = '<tr><td>选择</td><td><button id="btun'+j+'" onclick = "btun(this.id)" type="button" class="btn btn-primary">'+d+'栋</button></td><td>选择图片</td><td>图片上传</td><td>操作</td></tr>';
    		$("#tb1").append(str2);
    		index++;
    		for(i=1;i<=cs;i++){
    			var floor = d + i;
    			var str = '<tr class="demo'+j+'" id="demo'+i+'" style="display:none" onclick = "btun(this)"><td><input type="checkbox" id="" name=""></td><td>'+floor+'</td><td><input type="file" id="ffile'+index+'" onchange="upload(this)"/></td><td><input type="button" name='+floor+' id="file'+index+'" value="图片上传" onclick="shangchuan(this)"/></td><td><button type="button" id="'+floor+'" data-toggle="modal" data-target="#myModal1"  class="btn btn-default" onclick="chak(this.id)">查看</button><button type="button" id="'+floor+'" onclick="dete(this.id)" class="btn btn-danger">删除</button></td></tr>'
//  			alert(floor);
    			$("#tb1").append(str);
    			index++;
    			
//  			$("#btun'+index+'").click(function(){
////  				alert(1)
//  			})
//function btun(value){
//  		alert(value)
////      $("#getid tr").each(function(){
////      	var tr_id = attr("id");
////      	id = tr_id.replace("tr","");
////      	alert(id)
////      })
//     $("#demo"+j+"").css("display","none");
//  	}
    	}
    	}
    	
    	
    	function btun(value){
//  		alert(value.length)
    		if(value.length<6){
    		var x = value.charAt(value.length - 1);
//  		alert(x)
    		var cs = 'demo'+x;
    		var display = $("."+cs+"");
//  		display.hide();
    		if(display.is(':hidden')){
    			display.show();
    		}else{
    			display.hide();
    		}
    		
    		}else{
    		var x = value.substr(value.length - 2);
//  		alert(x)
    		var cs = 'demo'+x;
//  		$("."+cs+"").css("display","none");
        var display = $("."+cs+"");
//  		display.hide();
    		if(display.is(':hidden')){
    			display.show();
    		}else{
    			display.hide();
    		}
    		}
    	
    		
//  		}
    		
//  		var vv = $(value).attr("name");
    	
//  		alert(vv);
//     var forEach =Array.prototype.forEach;
//     var divs = document.getElementsByTagName("tr");
//     for(var i=1;i<=cs;i++){
//     var firstDiv = divs[i];
//     forEach.call(firstDiv.childNodes,function(divChild){
//     divChild.parentNode.style.display ='none';
//     })
//     }
      
//     var demo = document.getElementsByName("demo0");
//     alert( demo)
//      $("#demo2").attr("demo2")
    	}
    	
    	
    	function upload(obj){
    		 	var img = document.getElementById("previewimg");
        	img.src = window.URL.createObjectURL(obj.files[0]);
    	}
    	
	 	function shangchuan(id){
	 				var xxx = "f"+id.id;
	 				var floor = id.name;
//					console.log(id.name)
        	var val = document.getElementById(xxx).files;
        	
		    	if(!val.length){
		        	alert('请选择文件后上传')
		        	return
		    	}else{
		    		//获取数据
				    fData = new FormData();
				    fData.append("flag",'addNew')
				    fData.append("Img",val[0])
				    fData.append("lc",floor)
				    $.ajax({
				        type:"post",
				        url:"php/Imgfile.php",
				        async:true,
				        dataType:'json',
				        data:fData,
				        processData:false,
				        contentType:false,
				        success:function(data){
				        	console.log(data)
				            alert("上传成功")
				            //刷新表格数据
		//			            tabMesSimple.ajax.reload();
				        },
				        error:function(s,e,t){
				            alert('出现错误，请及时联系管理员')
				        }
			    	});
			    }
      	}
      	
      	
      	
      	function F_Open(){
      		document.getElementById("btn_file").click();
      	}
      	function upload2(obj){
    		 	var img = document.getElementById("previewimg");
        	img.src = window.URL.createObjectURL(obj.files[0]);
    	}
      	function shangchuan2(value){
      		
//    		alert(value)
      		
      		var val2 = document.getElementById("btn_file").files;
      		if(!val2.length){
		        	alert('请选择文件后上传')
		        	return
		    	}else{
		    		
				    var i = 0;
    	      var j = 0;
    	      var arr = [];
      		  var dNum=new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
      		  for(var j=0;j<ds;j++){
      			var d = dNum[j];
//    			alert(d)
//          var i=0;
           var cs = window.opener.document.getElementById("cs").value;
//         alert(cs)
           var n=1;
      			while(cs>0){
      				arr[i] = d + n;
      				n++;
//    				alert(arr[i-1])
      				i++;
      				cs--;
      			}
      			}
      			  var cs = window.opener.document.getElementById("cs").value;
//    			   alert(cs)
      			  fData = new FormData();
				      fData.append("flag",'addNew2');
				      fData.append("Img",val2[0]);
				      fData.append("lc",arr);
				      fData.append("chs",cs);
//				      alert(cs)
				      
      			$.ajax({
              	type:"post",
              	url:"php/Imagefile2.php",
              	async:true,
              	dataType:'json',
              	data:fData,
              	processData:false,
              	contentType:false,
              	success:function(data){
              		console.log(data)
				            alert("上传成功")
              	},
              	error:function(x,s,t){
				            alert('出现错误，请及时联系管理员')
				            console.log(s+": "+t)
				        }
              });
//    			var ss = document.getElementById("demo"+i+"");
//    			console.log(ss)
//    		}
//		    		alert(1)
              
		    	}
      	}
      	
      function go(){
      	window.opener=null;window.open('','_self');window.close();
      }
      
      function chak(obj){
 	             var img = document.getElementById("previewimg2");
//             var obj = obj;
//             alert(obj)
               $.ajax({
               	type:"post",
               	url:"php/chakan.php",
               	async:true,
               	dataType:'json',
               	data:{
               		obj:obj
               	},
               	success:function(data){
//             		alert(data);
                  var tplj = data.图片路径;
                  if(tplj.length>0){
//                	alert(1)
                  	var tplj = tplj.slice(3);
                  	img.src =tplj ;
                  } 
               	}
//             	error:function(s,e,t){
//             		alert("请先上传图片");
//             	}
              });
      }
      //清空模态框
      function mtk(){
      	var img = document.getElementById("previewimg2");
      	img.src="";
      	
      }
      
     function dete(dete){
//    alert(dete)
      $.ajax({
      	type:"post",
      	url:"php/dete.php",
      	async:true,
//    	dataType:'json',
      	data:{
      		dete:dete
      	},
      	success:function(data){
      		alert("图片删除成功");
      	},
      	error:function(jqXHR, textStatus, errorThrown){
      		alert("删除失败！")
      	}
      }); 
     } 
    </script>
  </body>
</html>