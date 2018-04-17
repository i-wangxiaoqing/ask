<?php
namespace Admin\Controller;//命名空间
use Think\Controller;
class AdminManageController extends Controller {
// 	// http://localhost/php/0901/thinkphp-3.2/index.php?m=admin&c=index&a=test
// 	// m:模块   c:控制器    a:方法
    public function adminList(){
    	$User=M('admin');
    	$result=$User->where(1)->select();
    	//统计数据的条数
    	$count=$User->count();
    	$this->assign("adminCount",$count);
    	//管理员的登录名
    	$this->assign("userInfor",$result); 

        $this->display("admin-list");
    }

    
   //添加界面操作
    public function manageAdd(){
    	$this->display("admin-add");
    }

    // 删除操作
    public function manageDel(){
    	$array=[];
    	if (isset($_POST['del_id'])) {
    		$del_id=$_POST['del_id'];
    		$User=M("admin");
    		$array['admin_id']=$del_id;
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
    public function addManage(){
    	$array=[];
    	if (isset($_POST['adminName'])&&isset($_POST['password'])) {
    		$array['admin_name']=$_POST['adminName'];
	    	$array['admin_pass']=$_POST['password'];
            $array['admin_account']=$_POST['adminAccount'];
	    	$User=M("admin");
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
        public function searchManage(){
	    	$array=[];
	    	if (isset($_POST['inputname'])) {
	    		$inputname=$_POST['inputname'];
	    		$array['admin_name']=array('LIKE','%'.$inputname.'%');
		    	$User=M("admin");
		        $result=$User->where($array)->select();
		        $this->assign("userInfor",$result);
		        $this->display("admin-list");
		    }
    }

    //修改管理员界面信息
    public function manageEdit(){
    	$array=[];
        $edit_id=$_GET['edit_id'];
        // var_dump($edit_id);
        $User=M("admin");
        $array['admin_id']=$edit_id;
        $result=$User->where($array)->select();
        $this->assign("userInfo",$result);
    	$this->display("admin-update");
    }
    //修改管理员信息
    public function updateManage(){
    	$id=$_POST['adminId'];
    	$us=$_POST['adminName'];
        $account=$_POST['adminAccount'];
    	$array=[];
    	$User=M("admin");
    	$array['admin_id']=$id;
    	$array['admin_name']=$us;
        $array['admin_account']=$account;
    	$result=$User->save($array);
    	echo $result;
    }
    //批量删除
    public function allDel(){
        $array=[];
        if (isset($_POST['checkArray'])) {
            $checkArray=$_POST['checkArray'];
            $User=M('admin');
            //foreach键值对
            foreach ($checkArray as $value) {
                $array['admin_id']=$value;
                $result=$User->where($array)->delete();
            }
            if ($result) {
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
}