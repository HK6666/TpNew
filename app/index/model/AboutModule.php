<?php

namespace app\index\model;
use think\Model;

class AboutModule extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $name = 'friend';
    // 模型初始化
    protected static function init()
    {

    }
    public static function showAbout(){
        return AboutModule::select();
    }

}
