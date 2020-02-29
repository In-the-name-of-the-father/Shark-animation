<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<table>
		   <form action="/1/index.php/Home/Index/save" method="post">


			<tr align="center">
				<td>用户名<input type="text" name="name" value="<?php echo ($res["name"]); ?>"></td>
				<td>密码<input type="text" name="pwd" value="<?php echo ($res["pwd"]); ?>"></td>
				<input type="hidden" name="id" value="<?php echo ($res["id"]); ?>">
			</tr>


			<td>
				<td><input type="submit" value="修改"></td>
			</td>


		</form>
		</table>
	</center>
</body>
</html>