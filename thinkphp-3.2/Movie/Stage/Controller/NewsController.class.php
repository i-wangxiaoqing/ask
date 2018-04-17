<?php
namespace Stage\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function news(){
    	$this->display("news");
    }
    
}