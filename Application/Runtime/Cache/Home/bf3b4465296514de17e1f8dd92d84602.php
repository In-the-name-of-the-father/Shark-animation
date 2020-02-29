<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<table border="1">
			<tr align="center">
				<td>ID</td>
				<td>用户名</td>
				<td>密码</td>
			</tr>
			<?php if(is_array($res)): foreach($res as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["name"]); ?></td>
					<td><?php echo ($v["pwd"]); ?></td>
				</tr><?php endforeach; endif; ?>
		</table>
	</center>
</body>
</html>