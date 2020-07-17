<?php

namespace app\index\controller;
use think\Controller;
use think\Loader;
use app\index\model\AboutModule;
class About extends Controller
{
    /*
    * 方法介绍
    * about方法用户获取本公司的介绍内容
    */
    public function aboutALl(){
        $about = Loader::model("AboutModule");
        $res = AboutModule::get();
        $res = $res->toArray();
        $introduce = $res['introduce'];
        $this->assign('introduce',$introduce);
        return $this->fetch("./view/about_us.html");
    }
    /*
    * 方法介绍
    * friend方法用户获取友情链接客户的url，名称以及介绍
    */
    public function friend(){
        $id = $_GET['id'];
        $res = AboutModule::get($id);
        $res = $res->toArray();
        $name = $res['name'];
        $introduce= $res['introduce'];
        $this->assign('introduce',$introduce);
        $this->assign('name',$name);
        return $this->fetch("./view/about_us.html");

    }
    /*
    * 方法介绍
    * friend方法用户获取最新的url，名称以及介绍
    */
    public function getPublic(){
        $id = $_GET['id'];
        $res = AboutModule::get($id);
        $res = $res->toArray();
        $name = $res['name'];
        $introduce= $res['introduce'];
        $this->assign('introduce',$introduce);
        $this->assign('name',$name);
        return $this->fetch("./view/about_us.html");

    }

}