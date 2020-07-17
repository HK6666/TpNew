<?php

namespace app\index\model;
use think\Model;

class ProductModel extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $name = 'product';
    // 模型初始化
    protected static function init()
    {

    }
    /*
     * 查询所有产品
     */
    public static function showAbout(){
        return ProductModule::all();
    }

}
