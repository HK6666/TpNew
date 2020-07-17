<?php

namespace app\index\model;
use think\Model;

class NewsModule extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $name = 'news';
    // 模型初始化
    protected static function init()
    {

    }
    /*
     * 查询所有news
     */
    public static function showAbout(){
        return NewsModule::select();
    }

}
