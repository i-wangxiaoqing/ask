<?php
namespace Stage\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//轮播图
    	$Banner=M('movie');
    	$result=$Banner->where('palcetype=1')->select();
    	$this->assign('banner',$result);
    	//最新热门
     	$News=M('movie');
    	$result=$News->where('palcetype=2')->select();
    	$this->assign('news',$result);   
    	        //分类
        //显示不同电影类型,第4块
        $movie=M('movie');
        //纪录片
        $data1=[];
        $data1['palcetype']="4";
        $data1['movie_type']="1";
        $result1=$movie->where($data1)->select();
        $this->assign('banner1',$result1);
        //科幻片
        $data2=[];
        $data2['palcetype']="4";
        $data2['movie_type']="2";
        $result2=$movie->where($data2)->select();
        $this->assign('banner2',$result2);
        //偶像剧
        $data3=[];
        $data3['palcetype']="4";
        $data3['movie_type']="3";
        $result3=$movie->where($data3)->select();
        $this->assign('banner3',$result3);
        //战争片
        $data4=[];
        $data4['palcetype']="4";
        $data4['movie_type']="4";
        $result4=$movie->where($data4)->select();
        $this->assign('banner4',$result4);
        //第五块

        $tv1=[];
        $tv1['palcetype']="5";
        $res=$movie->where($tv1)->select();
        $this->assign('tvs',$res);
        
        //第六块
        $tv2=[];
        $tv2['palcetype']="5";
        $res2=$movie->where($tv2)->select();
        $this->assign('tvs2',$res2);

    	//导航分类
    	$Type=M('type');
    	$result=$Type->where('1=1')->select();
    	$this->assign('op',$result); 

        session_start();
        $result1=$_SESSION['us'];
        $this->assign('rootname',$result1); 

    	$this->display("index");
    }
    public function login(){
    	if(isset($_POST['Username'])){
    		$us=$_POST['Username'];
    		$ps=$_POST['Password'];
    		// var_dump($us);
    		// var_dump($ps);
            //数据库的查询
            $User = M("user"); // 实例化User对象,将表变成数据模型
            $user_data=[];
            $user_data['user_name']=$us;
            $user_data['user_pass']=$ps;
            $result=$User->where($user_data)->select();
            
            // $result=$User->where("name='".$us."' and pass='".$ps."'")->select();

            //var_dump($result);
    		if($result){
    			 session_start();
	            $_SESSION['us']=$us;
    			// $this->success("登陆成功","http://localhost/thinkphp-3.2/Stage/index/index");
                header("location:http://www.chafferer.top/hongsanzu/thinkphp-3.2/Stage/index/index");
    		}else{
    			$this->error("用户名或密码错误，请重新输入");
    		}
    	}
    }
 
    public function reg(){
        if(isset($_POST['Username1'])){
            $us=$_POST['Username1'];
            $ps=$_POST['Password1'];
            var_dump($us);
            $phone=$_POST['Phone'];
            $User = M("user"); // 实例化User对象,将表变成数据模型
            $user_data=[];
            $user_data['user_name']=$us;
            $user_data['user_pass']=$ps;
            $result=$User->where($user_data)->select();
            if($result){
                $this->error("用户名已存在，请换个名字");
            }else{
                $User = M("user");
                $data=[];
                $data['user_name'] = $us;
                $data['user_pass'] = $ps;
                $data['user_phone'] = $phone;
                $User->add($data); 
                //$this->success("http://localhost/thinkphp-3.2/Stage/index/index");
                header("location:http://www.chafferer.top/hongsanzu/thinkphp-3.2/Stage/index/index");
            }
        }
    }
    public function genres(){
    	if(isset($_POST['Search'])){
    		$ser=$_POST['Search'];
            //数据库的查询
            $Search=M('movie');
            $map['movie_name']= array('LIKE','%'.$ser.'%');
            $m=$Search->where($map)->where('palcetype=2 AND 4')->select();
            $this->assign('result',$m);  
    	}
    	if(isset($_GET['type'])){
    		$ser=$_GET['type'];
            //数据库的查询
            $Search=M('movie');
            $map['movie_type']= array('EQ',$ser);
//          $map['palcetype']= array('NEQ','1');
            $m=$Search->where($map)->where('palcetype=2 AND 4')->select();
            $this->assign('result',$m);  
    	}
    	$News=M('movie');
    	$result=$News->where('palcetype=2')->select();
    	$this->assign('news',$result); 
    	
    	$Type=M('type');
    	$result=$Type->where('1=1')->select();
    	$this->assign('op',$result); 	
    	$this->display("genres");
    }
    
    public function gettype(){
    }
    
    public function single(){
    	if(isset($_GET['movId'])){
    		$this->mId=$_GET['movId'];
            session_start();
	        $_SESSION['mtd']=$this->mId;
	        //查询信息
	        //电影信息
    	    $movie = M("movie");
            $p['movie_id'] = $this->mId;
            $movieInfo=$movie->where($p)->select(); 
            $this->assign('mInfo',$movieInfo); 	        
	        //用户信息
    	    $word = M("word");
            $map['movie_id'] = $this->mId;
            $wordInfo=$word->where($map)->order('word_id DESC')->select(); 
            $this->assign('wInfo',$wordInfo); 
    	   } 
         session_start();
        $result1=$_SESSION['us'];
        $this->assign('rootname',$result1); 
    	$this->display("single");
    }
    public function sub(){
    	session_start(); 
        $name=$_SESSION['us'];
    	if(isset($name)){
    		$msg=$_POST['Message'];
            $movieId=$_SESSION['mtd'];
            //数据获取
            $User = M("User");
            $data['user_name'] = $name;
            $userObj=$User->where($data)->select();      
            $userId=$userObj[0]['user_id'];
            //数据插入
            $Word = M("word"); // 实例化User对象
            $data['user_id'] = $userId;
            $data['movie_id'] =$movieId;
            $data['message'] =$msg;
            $Word->add($data);
    		//$this->success("添加成功","http://localhost/thinkphp-3.2/Stage/index/single?movId=".$movieId."");
            header("location:http://www.chafferer.top/hongsanzu/thinkphp-3.2/Stage/index/single?movId=".$movieId."");
    	}
    }
}
