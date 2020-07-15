<?php
namespace app\admin\controller;
use think\Controller;
class UserL extends Controller
{
    public function userL(){
        return $this->fetch("./view/admin/user_list.html");
    }
}