<?php
namespace Admin\Controller;//命名空间
use Think\Controller;
class LoginController extends Controller {
	//实现登录界面的加载
   public function login(){

   	//m控制器的名字+
   		$this->display("login");//不要加html
   }

   //检查用户的用户名和密码
   public function checkus(){
   		if (isset($_POST['us'])) {
   			$us=$_POST['us'];
   			$ps=$_POST['ps'];
            // $ver=$_POST['verify'];
            // echo $ver;
            // if ($this->check_verify($ver)) {
               $User=M("admin");
               $array=[];
               //通过数组进行sql查询
               $array['admin_name']=$us;
               $array['admin_password']=$ps;
               $result=$User->where($array)->select();
               if ($result) {
                  session_start();
                  $_SESSION['rootname']=$us;
                  $this->success("登录成功","http://localhost:8081/hongsanzu/ask/thinkphp-3.2/admin/index/index");
               }else{
                  $this->error("登陆失败,请重新输入账号密码");
               }
            // }else{
            //    // $this->error("验证码有误");
            //    $this->success("验证码错误");
            //    exit();
            // }
   		}
   }

  
     
}