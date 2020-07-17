<?php


namespace app\admin\model;


use app\index\model\GuestBookModule;
use think\Loader;
use think\Model;
use think\Request;

class ContactModel extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $name = 'guestbook';
    public function saveData($post,$user){
        $db = new ContactModel();
        $db->text = $post['text'];
        $db->uid  = $user;
        $db->save();

    }
}