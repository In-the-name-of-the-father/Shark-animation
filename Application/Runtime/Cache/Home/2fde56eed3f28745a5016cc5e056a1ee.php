<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
	      <form action="/1/index.php/Home/Index/curd" method="post">
				<input type="text" name="keywords" value="<?php echo ($keywords); ?>">
				<input type="submit" value="搜索">
	      </form>
		<table border="1">
			<tr align="center">
				<td>ID</td>
				<td>用户名</td>
				<td>密码</td>
				<td>操作</td>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["name"]); ?></td>
					<td><?php echo ($v["pwd"]); ?></td>
					<td><a href="<?php echo U('Index/add') ?>">添加</a></td>
					<td><a href="/1/index.php/Home/Index/del/id/<?php echo ($v["id"]); ?>">删除</a></td>
					<td><a href="/1/index.php/Home/Index/up/id/<?php echo ($v["id"]); ?>">修改</a></td>
					<td><a href="/1/index.php/Home/Index/down/id/<?php echo ($v["id"]); ?>">下载</a></td>

				</tr><?php endforeach; endif; ?>
		</table>
		<?php echo ($page); ?>
	</center>
</body>
</html>