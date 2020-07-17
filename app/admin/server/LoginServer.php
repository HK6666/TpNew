<?php

namespace app\admin\server;
use app\admin\model\LoginModel;
class LoginServer
{
    public function check($id){
        if($id=='8914')
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function setSession($post){}
    public function checkU($post){
        $login = new LoginModel();
        $post = $login->getUserData($post);
        dump($post);
        return($post);
    }
}