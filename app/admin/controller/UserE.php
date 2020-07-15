<?php
namespace app\admin\controller;
use think\Controller;
class UserE extends Controller
{
    public function userE(){
        return $this->fetch("./view/admin/user_edit.html");
    }
}