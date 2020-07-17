<?php


namespace app\admin\server;
use app\admin\model\UserModel;
use think\Loader;

class UserServer
{
    public function addUser(){

    }
    public function showUser(){
        $user = Loader::model("UserModel");
        $user = UserModel::get(1);
        if($user == null){
            $user['title']           = "数据库null";
            $user['people']          = "数据库null";
            $user['text']            = "数据库null";
            $user['update_time']     = "数据库null";
        }
        return $user;
    }
    public function Delete($data){
        $user = Loader::model("UserModel");
        $user = $user::get($data);
        $user->delete();
        return "删除成功";
    }
    public function saveUser($post){
        $users               =      Loader::model("UserModel");
        $users->username     =      $post['username'];
        $users->password     =      $post['password'];
        $users->update_time  =      $post['update_time'];
        $users->reg_ip       =      $post['reg_ip'];
        $users->save();
        return "添加成功" ;
    }
}