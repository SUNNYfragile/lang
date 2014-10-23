<?php
return array(
	//'配置项'=>'配置值'
    /* 默认配置 */
	'MODULE_ALLOW_LIST' => array('Home','Admin'),
	'DEFAULT_MODEL' => 'Home',
    'URL_PARAMS_BIND'       =>  true,
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'lang',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'lang_',    // 数据库表前缀
    
);