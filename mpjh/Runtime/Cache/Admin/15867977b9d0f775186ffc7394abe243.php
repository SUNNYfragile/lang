<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加banner</title>
</head>
<body>
	<form action="/index.php/Admin/Banners/doadd" enctype="multipart/form-data" method="post">
		<input type="hidden" name='id' value="<?php echo ($banner["id"]); ?>">
		Banner图名称：<input type="text" name="name" value="<?php echo ($banner["name"]); ?>"><br/><br/><br/>
		Banner图片：<input type="file" name="picurl" ><br/><br/><br/>
		Banner图片排序：<input type="text" name="sort" value="<?php echo ($banner["sort"]); ?>"><br/><br/><br/>
		Banner图描述：<textarea name="describe" rows="5" cols="5"><?php echo ($banner["describe"]); ?></textarea><br/><br/>
		<input type="submit" name="submit" value="提交">
	</form>
	<script type='text/javascript'>
		
	</script>
</body>
</html>