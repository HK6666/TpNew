<?php
namespace app\index\controller;
use app\index\server\PInfoServer;
use think\Controller;
class PInfo extends Controller
{
    /*
     * 展示具体商品信息的操作
     */
    public function pInfo(){
        $id = $_GET['id'];
        $product = new PInfoServer();
        $product = $product ->getProduct($id);
        $name = $product['name'];
        $info = $product['info'];
        $this->assign("name",$name);
        $this->assign("info",$info);
        return $this->fetch("./view/product_info.html");
    }

}