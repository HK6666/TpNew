<?php
namespace app\admin\controller;
use app\admin\server\NewsServer;
use think\Controller;
use think\Request;

class NewsE extends Controller
{
    public function newsE(){
        return $this->fetch("./view/admin/news_edit.html");
    }
    public function addArticle(){
        dump("添加");
        $value = session('username');
        $request = Request::instance();
        $method = $request->method();//获取上传方式
        $request->param();//获取所有参数，最全
        $post = $request->post();
        dump($post);
        $news = new NewsServer();
        $post['people']=$value;
        $newsStatus = $news->addArticle($post);
        dump($newsStatus);
    }
}