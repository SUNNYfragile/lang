<?php
namespace Admin\Controller;
use Think\Controller;

class BannersController extends Controller 
{

    public function index()
    {
        //$this->show('欢迎进入后台');
        $banners = D('Banners');
        $result = $banners->order('sort')->select();
        $this->assign('banners',$result);
        $this->display();
    }

    public function add()
    {
        $id = $_GET['id'];
        if(isset($id) && !empty($id))
        {
            $banner = D('banners')->find($id);
            if($banner)
            {
                $this->assign('banner',$banner);
            }
            else
            {
                $this->assign('title','修改Banner图');
                $this->redirect('index','',2,'没有这条记录...');
            }

        }
        else
        {
            $this->assign('title','添加Banner图');
        }
    	
    	$this->display();
    }

    public function doadd()
    {

        //文件上传
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './mpjhUploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        if(!file_exists($upload->rootPath))
        {
            @mkdir($upload->rootPath,0755);
        }
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }

// var_dump($info);
//         var_dump($info['picurl']['savepath'].$info['picurl']['savename']);die;

    	//实例化banners对象
    	$banners = D('Banners');
    	//创建数据对象
    	if(!$banners->create())
    	{
    		//创建失败即验证失败，输出错误提示
    		exit('error');
    	}
    	else
    	{
            $id = $_POST['id'];
            if(isset($id) && !empty($id))
            {

                if($banners->where("id=$id")->save())
                {
                    $this->redirect('index','',2,'修改成功...');
                }
                else
                {
                    $this->redirect('index','',2,'没有改动...');                } 
            }
            else
            {
               if($banners->add())
                {
                    $this->redirect('index','',2,'添加成功...');
                }
                else
                {
                    exit('sorry');
                } 
            }
    		
    	}    	

    }

    public function delete($id = 0)
    {
        $banner = D('Banners');
        if($banner->delete($id))
        {
            echo json_encode(array('code'=>200,'message'=>'删除成功',id=>$id));
        }
        else
        {
            echo json_encode(array('code'=>201,'message'=>'删除失败'));
        }
    }
}