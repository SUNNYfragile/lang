<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        //$this->show('欢迎进入后台');
      $this->show('欢迎进入后台','utf-8');
    }
}