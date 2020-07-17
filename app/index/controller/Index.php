<?php


namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\model\User;
use think\Loader;
class Index extends Controller
{
    public function index(){
//        return $this->fetch("./view/index.html");
//        $res = Db::query("SELECT * FROM Puser ;");
//        dump($res);

//        $user = Loader::model("User");
//        $res = User::get(123);
//        $res = $res->toArray();
//        $res = $res['uid'];
//        $this->assign('uid',$res);
//       $this->view->username = $res['username'];
        return $this->fetch("./view/indexg.html");
    }
    public function jump(){
        $id = $_GET['id'];
        if($id==1){
            header("location: http://www.baidu.com");
        }
        elseif ($id==2){
            return $this->redirect("www.jd.com");
        }else{
            return $this->redirect("www.xiecheng.com");
        }


    }

}