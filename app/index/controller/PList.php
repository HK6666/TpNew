<?php
namespace app\index\controller;
use app\index\server\PInfoServer;
use think\Controller;
class PList extends Controller
{
    /*
     * 展示分类的方法，由于分页没做，所以没用上
     */
    public function pList(){
        $product = new PInfoServer();
        $product = $product ->getAllProduct();
        $name = $product['name'];
        $info = $product['info'];
        $this->assign("name",$name);
        $this->assign("info",$info);
        return $this->fetch("./view/product_list.html");
    }


}