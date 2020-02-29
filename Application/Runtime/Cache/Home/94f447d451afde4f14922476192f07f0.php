<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="/1/Public/js/jquery.js"></script>
	<title>主页面</title>
</head>
<body>
	<center>
	<button><a href="<?php echo U('Login/login') ?>">退出</a></button>
		<table border="1">
			<tr>
				<td>
				<?php if(is_array($usernodes)): foreach($usernodes as $key=>$usernode): ?><ul>
						<li class="t"><button><?php echo ($usernode["n_name"]); ?></button></li>
						<ul>
						    <?php if(is_array($usernode['child'])): foreach($usernode['child'] as $key=>$v): ?><li><a href="<?php echo U($v['n_controller'].'/'.$v['n_action']) ?>"><?php echo ($v["n_name"]); ?></a></li><?php endforeach; endif; ?>	
						</ul>
					</ul><?php endforeach; endif; ?>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>

<script type="text/javascript">
	$(function(){
		$(".t").click(function(){
			$(this).next().toggle();
		})
	})
</script>