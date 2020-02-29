<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<table>
		   <form action="/1/index.php/Home/Index/useradd" method="post" enctype="multipart/form-data">


			<tr align="center">
				<td>用户名<input type="text" name="name" value=""></td>
				<td>密码<input type="text" name="pwd" value=""></td>
			</tr>


			<td>
				<td><input type="submit" value="添加"></td>
			</td>
		</form>
		</table>
	</center>
</body>
</html>