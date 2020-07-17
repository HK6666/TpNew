<?php
namespace app\admin\model;
use think\Model;
class LoginModel extends Model
{
    protected $name = 'user';
    public function saveData($post){
        $db = new LoginModel();
        $db->username = $post['username'];
        $db->password  = $post['password'];
        $db->save();
    }
    public function getUserData($post)
    {
        $user = new LoginModel();
        $username = $post['username'];
        $password = $post['password'];
        $check    = $user::get(['username'=>$username]);
        if(is_null($check['username']) )
        {
            return "账号或密码不正确";
        }
        else{
            dump($check['username']);
            if($password == $check['password']){
                return "账号密码正确";
            }
            else{
                return "密码不正确";
            }
            }


    }
}