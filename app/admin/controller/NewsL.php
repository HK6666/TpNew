<?php
namespace app\admin\controller;
use think\Controller;
class NewsL extends Controller
{
    public function newsL(){
        return $this->fetch("./view/admin/news_list.html");
    }
}