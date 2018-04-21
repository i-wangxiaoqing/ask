<?php
namespace Admin\Controller;//命名空间
use Think\Controller;
class UserController extends Controller {
// 	// http://localhost/php/0901/thinkphp-3.2/index.php?m=admin&c=index&a=test
// 	// m:模块   c:控制器    a:方法
    public function UserList(){
    	$User=M('question');
    	$result=$User->where(1)->select();
    	//统计数据的条数
    	$count=$User->count();
    	$this->assign("adminCount",$count);
    	//管理员的登录名
    	$this->assign("userInfor",$result); 

        $this->display("user-list");
    }

    
   //添加界面操作
    public function UserAdd(){
   

    	$this->display("user-add");
    }

    //删除操作
    public function UserDel(){
    	$array=[];
    	if (isset($_POST['del_id'])) {
    		$del_id=$_POST['del_id'];
    		$User=M("question");
    		$array['user_id']=$del_id;
    	    $result=$User->where($array)->delete();
    	    if ($result==1) {
    	    	$array['state']=1;
    	    	$array['msg']="删除成功";
    	    }else{
    	    	$array['state']=0;
    	    	$array['msg']="删除失败";
    	    }
    	}else{
    		$array['state']=-1;
    	    $array['msg']="参数错误";
    	}
    	echo json_encode($array);
    }

    //添加管理员的操作
    public function addUser(){
    	$array=[];
    	if (isset($_POST['adminName'])&&isset($_POST['password'])) {
    		$array['user_name']=$_POST['adminName'];
	    	$array['user_pass']=$_POST['password'];
             $array['user_phone']=$_POST['phone'];
	    	$User=M("user");
	        $result=$User->data($array)->add();
	        if ($result) {
	        	$array['state']=1;
    	    	$array['msg']="添加成功";
	        }else{
	        	$array['state']=0;
    	    	$array['msg']="添加失败";
	        }
      		
    	}else{
    		$array['state']=-1;
    	    $array['msg']="参数错误";
    	}
    	echo json_encode($array);
    }

    //查询管理员信息
        public function searchUser(){
	    	$array=[];
	    	if (isset($_POST['inputname'])) {
	    		$inputname=$_POST['inputname'];
	    		$array['user_name']=array('LIKE','%'.$inputname.'%');
		    	$User=M("user");
		        $result=$User->where($array)->select();
		        $this->assign("userInfor",$result);
		        $this->display("user-list");
		    }
    }

    //修改管理员界面信息
    public function UserEdit(){
    	$array=[];
        $edit_id=$_GET['edit_id'];
        // var_dump($edit_id);
        $User=M("user");
        $array['user_id']=$edit_id;
        $result=$User->where($array)->select();
        $this->assign("userInfo",$result);
    	$this->display("user-update");

    }
    //修改管理员信息
    public function updateUser(){
    	$id=$_POST['adminId'];
    	$us=$_POST['adminName'];
        $pass=$_POST['adminPass'];
         $phone=$_POST['adminPhone'];

    	$array=[];
    	$User=M("user");
    	$array['user_id']=$id;
    	$array['user_name']=$us;
        $array['user_pass']=$pass;
        $array['user_phone']=$phone;
    	$result=$User->save($array);
    	echo $result;
    }

}