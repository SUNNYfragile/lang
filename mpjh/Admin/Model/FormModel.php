<?php
namespace Admin\Model;
use TinkPHP\Model;

class FormModel extends Model
{
	protected $_validate = array(
			array('title','require','不能为空'),
			array('picurl','require','不能为空'),
			array('desc','require','不能为空'),
		);
	
}
?>