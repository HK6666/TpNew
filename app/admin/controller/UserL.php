<?php
namespace app\admin\controller;
use app\admin\server\NewsServer;
use app\admin\server\UserServer as users;
use think\Controller;
use think\Request;
use think\Session;

class UserL extends Controller
{
    public function userL(){
        if (Session::has('username')) {
            $users = new users();
            $user = $users -> showUser();
            $username = $user['username'];
            $password = $user['password'];
            $update_time = $user['update_time'];
            $reg_ip = $user['reg_ip'];
            $this->assign('username',$username);
            $this->assign('password',$password);
            $this->assign('update_time',$update_time);
            $this->assign('reg_ip',$reg_ip);
            return $this->fetch("./view/admin/user_list.html");
        }else{

            return $this->fetch("./view/admin/login.html");
        }
        return $this->fetch("./view/admin/login.html");

    }
    public function delete(){
        dump("删除");
        $request = Request::instance();
        $method = $request->method();//获取上传方式
        $request->param();//获取所有参数，最全
        $post = $request->post();
        dump($post);
        $news = new users();
       $UserStatus = $news->Delete($post['Listnumber']);
        dump($UserStatus);

    }
    public function add(){
        dump("新增用户");
        $request = Request::instance();
        $method = $request->method();//获取上传方式
        $request->param();//获取所有参数，最全
        $post = $request->post();
        $post['update_time'] = date("Y-m-d");
        $post['reg_ip'] = "127.0.0.1";
        dump($post);
        $news = new users();
        $UserStatus = $news->saveUser($post);
//        dump($UserStatus);
        return $this->fetch("./view/admin/user_list.html");

    }

}