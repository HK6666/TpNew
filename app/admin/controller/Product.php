<?php
namespace app\admin\controller;
use think\Controller;
class Product extends Controller
{
    public function product(){
        return $this->fetch("./view/admin/product_list.html");
    }
}