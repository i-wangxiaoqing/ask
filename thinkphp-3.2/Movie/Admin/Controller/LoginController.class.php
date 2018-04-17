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
               $array['admin_pass']=$ps;
               $result=$User->where($array)->select();
               if ($result) {
                  session_start();
                  $_SESSION['rootname']=$us;
                  $this->success("登录成功","http://localhost:8081/hongsanzu/thinkphp-3.2/admin/index/index");
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

   //生成验证码
   // public function createVerify(){
   //    $config =    array(
   //        'fontSize'    =>    90,    // 验证码字体大小
   //        'length'      =>    1,     // 验证码位数
   //        'useNoise'    =>    false, // 关闭验证码杂点
   //    );
   //    $Verify = new \Think\Verify($config);
   //    // $Verify->fontSize=30;
   //    // $Verify->useImgBg = true; //使用背景图片
   //    $Verify->entry();
   // }

   //    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
   //    // 后端实现验证
   //    // private function check_verify($code){
   //    //     $verify = new \Think\Verify();
   //    //     return $verify->check($code);//返回true和false
   //    // }


   //    //验证码实现ajax验证
   //    public function check_verifyWeb(){
   //       $array=[];
   //       if ($_POST['verify']) {
   //           $verify = new \Think\Verify();
   //           $result=$verify->check($_POST['verify']);
   //           if ($result) {
   //              $array['state']=1;
   //              $array['msg']="验证码正确";
   //           }else{
   //              $array['state']=0;
   //              $array['msg']="验证码错误";
   //           }
   //       }else{
   //          $array['state']=-1;
   //          $array['msg']="参数错误";
   //       }
   //        echo json_encode($array);
   //    }
     
}