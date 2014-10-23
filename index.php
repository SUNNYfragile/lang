<?php

//定义应用目录
define('APP_PATH','mpjh/');
//开启调试模式
define('DEVENV', true);

if(DEVENV){
	define('APP_DEBUG', true);
}

require('ThinkPHP/ThinkPHP.php');