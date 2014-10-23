<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加banner</title>
	<script type="text/javascript" src="/Public/js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<a href="/index.php/Admin/Banners/add" target="_blank">添加轮播图</a>
	<br/><br/><br/>
	<?php if($banners): ?>轮播图id-轮播图名称-轮播图地址-轮播图顺序<br/><br/><br/>
		<?php if(is_array($banners)): foreach($banners as $key=>$banner): ?><div class="b_<?php echo ($banner["id"]); ?>">
			<?php echo ($banner["id"]); ?>--
			<?php echo ($banner["name"]); ?>--
			<?php echo ($banner["picurl"]); ?>--
			<?php echo ($banner["sort"]); ?>--
			<a href="/index.php/Admin/Banners/add/id/<?php echo ($banner["id"]); ?>">修改</a>---
			<a href="javascript:;" bannerid="<?php echo ($banner["id"]); ?>" id="del" onclick="del($(this))">删除</a><br/><br/><br/>
		</div><?php endforeach; endif; ?>
	<?php else: ?>
		nothing to do<?php endif; ?>
	<script type="text/javascript">
		
		function del(obj)
		{
			var id = obj.attr('bannerid');
			
			$.ajax({
				url: '/index.php/Admin/Banners/delete/id/<?php echo ($banner["id"]); ?>',
				type: 'GET',
				dataType:"json",
				data: {id: id},
				success:function(data)
				{
					//alert(data);
					//var data = $.parseJSON('data');
					if(data.code==200)
					{

						$(".b_"+data.id).remove();
					}
					else
					{
						alert('删除失败!!!');
					}
				}
			});
			
		}
	</script>
</body>
</html>