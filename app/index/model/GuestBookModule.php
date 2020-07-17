<?php

namespace app\index\model;
use think\Model;

class GuestBookModule extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $name = 'guestbook';
    // 模型初始化
    protected static function init()
    {

    }
    public function saveData($post){
        $db = new GuestBookModule();
        $db->text = $post['text'];
        $db->uid  = $post['input'];
        $db->save();

    }

}
