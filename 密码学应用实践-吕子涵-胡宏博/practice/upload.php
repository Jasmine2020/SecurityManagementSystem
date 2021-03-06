<!DOCTYPE html>
<html>  
<head>  
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>  
	<title>Upload</title>  
	<style>
		*{
			margin:0;
			padding: 0;
			border:none;
		}
		body{
			background: url(16.png);
		}
		h1 a{
			color:#369a51;
			text-decoration: none;
		}
		h1 a:hover{
			color:green;
			text-decoration: underline;
		}
		span{
			color:#62ba6c;
			font-size:16px;
			font-weight: 700;
			font-family: 楷体;
		}	
		.box{
			float:left;
			width: 600px;
			height: 550px;
			/*background-color: pink;*/
			margin: 45px 350px;
		}
		.title{
			height: 100px;
			width: 209px;
			line-height: 100px;
			margin:20px auto;
			/*background-color: red;*/
		}
		.system{
			height: 400px;
			/*background-color: green;*/
		}
		.system table{
			/*background-color: red;*/
			margin:0 auto;
		}
		.system tr{
			height: 70px;
		}
		.system input[type="text"]{
			height: 30px;
			width: 165px;
			background-color:rgba(255,255,255,0.4);
			border: 1px solid #68ac6e;
		}
		.system textarea{
			background-color:rgba(255,255,255,0.4);
			border: 1px solid #68ac6e;
		}
		.system input[type="file"]
		{
			height: 30px;
			width: 250px;
		}
		.system input[type="submit"]
		{
			height: 50px;
			width: 100px;
			background-color: #57a460;
			border:3px solid #b6e1af;
			font-size:16px; 
		}
	</style>
</head>
<body>
	<div class="box">
		<div class="title">
			<h1><a href="index.php">文件上传页面</a></h1>
		</div>
		<div class="system">
			<form enctype="multipart/form-data" method="post" action="uploadprocess.php"> 
			<table>
				<tr>
					<td><span>请填写用户名：</span></td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td><span>请简单介绍该文件：</span></td>
					<td><textarea name="fileintro" rows="10" cols="50"></textarea></td>
				</tr>  
				<tr>
					<td><span>请选择你要上传文件：</span></td>
					<td><input type="file" name="file"/></td>
				</tr>  
				<tr>
					<td><input type="submit" value="上传文件"/></td>
				</tr>
			</table>
		</div>
	</div>
</body>	
</html>