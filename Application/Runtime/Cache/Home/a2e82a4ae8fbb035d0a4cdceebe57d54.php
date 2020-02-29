<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<table border="1">
		<form action="/1/index.php/Home/Curd/save" method="post">
			<tr>
				<td>
				    <input type="hidden" value="<?php echo ($res["id"]); ?>" name="id">
				    <input type="text" name="name" value="<?php echo ($res["name"]); ?>">
				    <input type="submit" value="修改">
				</td>
			</tr>
		</form>
		</table>
	</center>
</body>
</html>