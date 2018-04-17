<?php
namespace Admin\Controller;
use Think\Controller;
class WordController extends Controller {
    //显示评论
    public function wordShow(){
      	$User=M('word as a');
      	//多表联查
      	$result=$User->join('left join user as b on a.user_id=b.user_id')->join('left join movie as c on a.movie_id=c.movie_id')->where(1)->select();
      	// echo $result;
    	// $result=$User->where(1)->select();
    	//统计数据的条数
    	$count=$User->count();
    	$this->assign("wordCount",$count);
    	//管理员的登录名
    	$this->assign("wordInfor",$result);
        $this->display("feedback-list");
    }

    //删除操作
    public function wordDel(){
    	$array=[];
    	if (isset($_POST['del_id'])) {
    		$del_id=$_POST['del_id'];
    		// var_dump($del_id);
    		$User=M("word");
    		$array['word_id']=$del_id;
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

         //查询操作
         public function wordSearch(){
            $array=[];
            if (isset($_POST['input'])) {
                $input=$_POST['input'];
                $array['message']=array('LIKE','%'.$input.'%');
                $array['movie_name']=array('LIKE','%'.$input.'%');
                $array['user_name']=array('LIKE','%'.$input.'%');
                $array['_logic'] = 'OR';//实现查询条件的或
                $User=M('word as a');
                 //多表联查
                $result=$User->join('left join user as b on a.user_id=b.user_id')->join('left join movie as c on a.movie_id=c.movie_id')->where($array)->select();
                $this->assign("wordInfor",$result);
                $this->display("feedback-list");
            }
    }
   
    //修改评论界面信息
    public function wordEdit(){
        $array=[];
        $edit_id=$_GET['edit_id'];
        // var_dump($edit_id);
        $User=M('word as a');
        $array['word_id']=$edit_id;
        //多表联查
        $result=$User->join('left join user as b on a.user_id=b.user_id')->join('left join movie as c on a.movie_id=c.movie_id')->where($array)->select();
        $this->assign("wordInfo",$result);
        $this->display("feedback-update");
    }
    // 修改管理员信息
    public function updateWord(){
        $id=$_POST['id'];
        $userName=$_POST['userName'];
        $movieName=$_POST['movieName'];
        $date=$_POST['date'];
        $msg=$_POST['msg'];
        $array=[];
        $User=M("word");
        $array['word_id']=$id;
        $array['message']=$msg;
        $array['word_date']=$date;
        $result=$User->save($array);
        echo $result;
    }
    //批量删除
    public function allDel(){
        $array=[];
        if (isset($_POST['checkArray'])) {
            $checkArray=$_POST['checkArray'];
            $User=M('word');
            //foreach键值对
            foreach ($checkArray as $value) {
                $array['word_id']=$value;
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