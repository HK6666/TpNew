<?php
namespace app\admin\controller;
use think\Controller;
class Top extends Controller
{
    public function top(){
        return $this->fetch("./view/admin/top.html");
    }
    public function logout(){
        session(null); // 清空当前的session
        $this->success('退出成功，跳转中...',U('admin/Login/index'));
    }


}