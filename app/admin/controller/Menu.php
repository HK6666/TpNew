<?php
namespace app\admin\controller;
use think\Controller;
class Menu extends Controller
{
    public function menu(){
        return $this->fetch("./view/admin/menu.html");
    }
}