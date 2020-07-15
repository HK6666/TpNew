<?php
namespace app\index\controller;
use think\Controller;
class PList extends Controller
{
    public function pList(){
        return $this->fetch("./view/product_list.html");
    }
}