<?php
namespace Home\Controller;
use Think\Controller;
class BoardController extends Controller {
    public function index(){
   	$this->display("board");
    }
}