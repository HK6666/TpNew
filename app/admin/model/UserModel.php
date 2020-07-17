<?php


namespace app\admin\model;


use think\Model;

class UserModel extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $name = 'user';
    protected static function init()
    {

    }

}