<?php

namespace app\index\server;
use think\Loader;
use app\index\model\NewsModule;
class NewsServer
{
    public function getArticle(){
       $article = Loader::model("NewsModule");
       $article = NewsModule::get(1);
       $article = $article->toArray();
        return $article;
    }
}