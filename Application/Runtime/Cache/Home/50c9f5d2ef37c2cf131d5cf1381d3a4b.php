<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<center>
		<form action="/1/index.php/Home/Login/dologin" method="post">
			<table border="1">
				<tr>
					<td>
						用户名：<input type="text" name="u_name">
						密码：<input type="text" name="u_pwd">
						<input type="submit" value="登陆">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>