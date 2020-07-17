<?php

namespace app\index\server;
use app\index\model\ProductModel;
use think\Loader;

class PInfoServer
{
    /*
     * 查询指定商品
     */
    public function getProduct($id){
        $product = Loader::model("ProductModel");
        $product = $product::get($id);
        $product = $product->toArray();
        return $product;
    }
    /*
     * 查询所有商品
     */
    public function getAllProduct(){
        $product = Loader::model("ProductModel");
        $product = $product::get([1,2,3]);
        return $product;
    }
}