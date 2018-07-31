<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Download</title>
	<style>
		*{
			margin:0;
			padding: 0;
			border:none;
		}
		body{
			background: url(13.png);
		}
		h1 a{
			color:#f5922b;
			text-decoration: none;
		}
		h1 a:hover{
			color:orange;
			text-decoration: underline;
		}
		span{
			color:#f5922b;
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
			border: 1px solid #feb354;
		}
		.system input[type="submit"]
		{
			height: 50px;
			width: 100px;
			background-color: #f68c25;
			border:3px solid #feb754;
			font-size:16px; 
		}
	</style>
</head>
<body>
	<div class="box">
		<div class="title">
			<h1><a href="index.php">文件下载页面</a></h1>
		</div>
		<div class="system">
			<form method="post" action="downloadprocess.php"> 
			<table>
				<tr>
					<td><span>请填写用户名：</span></td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td><span>请填写要下载的文件名：</span></td>
					<td><input type="text" name="file"></td>
				</tr> 
				<tr>
					<td><span>请填写下载到的目录路径：</span></td>
					<td><input type="text" name="path"></td>
				</tr> 
				<tr>
					<td><input type="submit" value="确定下载"/></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>