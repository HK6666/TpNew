<?php

namespace app\index\controller;
use think\Controller;
use app\index\server\NewsServer as news;
class Article extends Controller
{
    public function article(){
        $articleS = new news();
        $article = $articleS -> getArticle();
        $title = $article['title'];
        $people = $article['people'];
        $text = $article['text'];
        $time = $article['time'];
        $this->assign('title',$title);
        $this->assign('people',$people);
        $this->assign('text',$text);
        $this->assign('time',$time);

        return $this->fetch("./view/article.html");
    }
}