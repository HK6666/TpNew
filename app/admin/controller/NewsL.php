<?php
namespace app\admin\controller;
use app\admin\server\NewsServer;
use app\admin\server\NewsServer as news;
use think\Controller;
use think\Request;
use think\Session;

class NewsL extends Controller
{
    public function newsL(){
        if (Session::has('username')) {
            $articleS = new news();
            $article = $articleS -> getArticle();
            $title = $article['title'];
            $people = $article['people'];
            $text = $article['text'];
            $time = $article['update_time'];
            $this->assign('title',$title);
            $this->assign('people',$people);
            $this->assign('text',$text);
            $this->assign('time',$time);
            return $this->fetch("./view/admin/news_list.html");
        }else{

            return $this->fetch("./view/admin/login.html");
        }
        return $this->fetch("./view/admin/login.html");

    }
    public function delete(){
        dump("删除");
        $request = Request::instance();
        $method = $request->method();//获取上传方式
        $request->param();//获取所有参数，最全
        $post = $request->post();
        dump($post);
        $news = new NewsServer();
        $newsStatus = $news->Delete($post['listNumber']);
        dump($newsStatus);
        }

}