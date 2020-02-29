<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
	   <h3>花卉列表展示</h3>
		<table border="1">
   
                <form action="__Curd/index" method="post">
					<input type="text" name="keywords"><input type="submit" value="搜索">	                	
                </form>			
				
			
			<tr>
				<td><input type="checkbox"></td>
				<td>编号</td>
				<td>花卉名称</td>
				<td align="center">操作</td>
			</tr>
			<?php if(is_array($res)): foreach($res as $key=>$v): ?><tr>
					<td><input type="checkbox"></td>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["name"]); ?></td>
					<td>
					    <a href="/1/index.php/Home/Curd/del/id/<?php echo ($v["id"]); ?>">del</a>&nbsp;
					    <a href="<?php echo U('Curd/add') ?>">add</a>&nbsp;
					    <a href="/1/index.php/Home/Curd/up/id/<?php echo ($v["id"]); ?>">up</a></td>
				</tr><?php endforeach; endif; ?>
		</table>
	</center>
</body>
</html>