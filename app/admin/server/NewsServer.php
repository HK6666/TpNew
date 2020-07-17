<?php


namespace app\admin\server;


use app\admin\model\NewsModel;
use think\Loader;

class NewsServer
{
    public function getArticle(){
        $article = Loader::model("NewsModel");
        $article = NewsModel::get(1);
        if($article == null){
            $article['title'] = "数据库无文章";
            $article['people'] = "数据库无文章";
            $article['text'] = "数据库无文章";
            $article['update_time'] = "数据库无文章";
        }
        return $article;
    }
    public function Delete($data){
        $article = Loader::model("NewsModel");
        $article = NewsModel::get($data);
        $article->delete();
        return "删除成功";
    }
    public function addArticle($post){
        $article        = Loader::model("NewsModel");
        $article->title = $post['title'];
        $article->people= $post['people'];
        $article->text = $post['text'];
        $article->save();
        return "添加成功" ;



    }
}