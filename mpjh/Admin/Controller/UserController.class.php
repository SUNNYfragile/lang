<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller {
	/**
	 * [index description]
	 * @method   index
	 * @return   [type]                   [description]
	 * @version  [version]
	 * @date     2014-10-21
	 * @datetime 2014-10-21T15:23:30+0800
	 * @author [wanghuan]
	 * 
	 * @changelog [Empty]
	 */
    public function index(){
        //$this->show('欢迎进入后台');
      	$this->show('欢迎进入后台','utf-8');
    }

    //@todo
}