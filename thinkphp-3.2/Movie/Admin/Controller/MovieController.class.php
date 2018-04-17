<?php
namespace Admin\Controller;//命名空间
use Think\Controller;
class MovieController extends Controller {
// 	// http://localhost/php/0901/thinkphp-3.2/index.php?m=admin&c=index&a=test
// 	// m:模块   c:控制器    a:方法
    public function MovieList(){
    	$User=M('movie');
    	$result=$User->where(1)->select();
    	//统计数据的条数
    	$count=$User->count();
    	$this->assign("adminCount",$count);
    	//管理员的登录名
    	$this->assign("userInfor",$result); 

        $this->display("movie-list");
    }

    
   //添加界面操作
    public function MovieAdd(){
        // echo  111111111;
   $this->display("movie-add");
   // $this->display("movie-update");
            // echo 111;
    
    }

    //删除操作
    public function MovieDel(){
    	$array=[];
    	if (isset($_POST['del_id'])) {
    		$del_id=$_POST['del_id'];
    		$User=M("movie");
    		$array['movie_id']=$del_id;
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
    public function addMovie(){
    	$array=[];
        $User=M("movie");
         $id=$_POST['num'];
         $name=$_POST['name'];
          $type=$_POST['type'];
         $introduce=$_POST['introduce'];
         $date=$_POST['date'];
         $palcetype=$_POST['palcetype'];
         $upload = new \Think\Upload();// 实例化上传类
         $upload->maxSize   =     3145728 ;// 设置附件上传大小
         $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->rootPath  =     'Public/images/';    // 设置附件上传根目录
         $upload->savePath  =     '';         // 设置附件上传（子）目录
         $upload->autoSub = false;
         $info   =   $upload->upload();
         if(!$info) {
            $this->error($upload->getError());
         }else{
             foreach($info as $file){
             $array['palcetype']=$palcetype;
                   $array['movie_name']=$name;
                   $array['movie_photo']=$file['savepath'].$file['savename'];
                 $array['movie_type']=$type;
                    $array['movie_introduce']=$introduce;
                     $array['movie_date']=$date;
                   $result=$User->data($array)->add();
                   echo "<script>function refresh(){
                                       var index = parent.layer.getFrameIndex(window.name

                   );
                                       parent.$('.btn-refresh').click();
                                       parent.layer.close(index);
                                       };
                                       refresh();</script>";

             }
         }
    }

    //查询管理员信息
        public function searchMovie(){
	    	$array=[];
	    	if (isset($_POST['inputname'])) {
	    		$inputname=$_POST['inputname'];
	    		$array['movie_name']=array('LIKE','%'.$inputname.'%');
		    	$User=M("movie");
		        $result=$User->where($array)->select();
		        $this->assign("userInfor",$result);
		        $this->display("movie-list");
		    }
    }

    //修改管理员界面信息
    public function MovieEdit(){
    	$array=[];
        $edit_id=$_GET['edit_id'];
        // var_dump($edit_id);
        $User=M("movie");
        $array['movie_id']=$edit_id;
        $result=$User->where($array)->select();
        $this->assign("userInfo",$result);
    	$this->display("movie-update");

    }
    //修改管理员信息
    public function updateMovie(){
    	

    	$array=[];
    	$User=M("movie");
    	 $id=$_POST['num'];
         $name=$_POST['name'];
        $palcetype=$_POST['palcetype'];
         $introduce=$_POST['introduce'];
         $date=$_POST['date'];
          $type=$_POST['type'];

         $upload = new \Think\Upload();// 实例化上传类
         $upload->maxSize   =     3145728 ;// 设置附件上传大小
         $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->rootPath  =     'Public/images/';    // 设置附件上传根目录
         $upload->savePath  =     '';         // 设置附件上传（子）目录
         $upload->autoSub = false;
         $info   =   $upload->upload();
         if(!$info) {
            $this->error($upload->getError());
         }else{
             foreach($info as $file){
                   $array['movie_name']=$name;
                   $array['movie_photo']=$file['savepath'].$file['savename'];
                   $array['movie_type']=$type;
                    $array['palcetype']=$palcetype;
                    $array['movie_introduce']=$introduce;
                     $array['movie_date']=$date;
                   $result=$User->where('movie_id='.$id.'')->save($array);
                   echo "<script>function refresh(){
                                       var index = parent.layer.getFrameIndex(window.name

                   );
                                       parent.$('.btn-refresh').click();
                                       parent.layer.close(index);
                                       };
                                       refresh();</script>";

             }
         }
    }

}