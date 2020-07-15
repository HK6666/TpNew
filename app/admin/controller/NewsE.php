<?php
namespace app\admin\controller;
use think\Controller;
class NewsE extends Controller
{
    public function newsE(){
        return $this->fetch("./view/admin/news_edit.html");
    }
}