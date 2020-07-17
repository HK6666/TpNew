<?php

 namespace app\index\model;
 use think\Model;

 class User extends Model
 {
     protected $autoWriteTimestamp = 'datetime';
     protected $pk = 'uid';
     // 模型初始化
     protected static function init()
     {

     }
     public static function searchUser(){
         return User::select();
     }

 }
