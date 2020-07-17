<?php


namespace app\index\model;


use think\Model;

class Friend extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $name = 'friend';
    protected static function init()
    {

    }
    /*
     * 查询所有友链
     */
    public static function searchAll(){
        return User::select();
    }
}