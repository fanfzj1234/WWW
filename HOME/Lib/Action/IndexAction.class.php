<?php
  

	class IndexAction extends CommonAction {
		// 显示主页面
		public function index(){
		     ob_end_clean();
			 
			 if($_COOKIE['login']==1)
             $this->display("Index/index_main");
			 else{
			 	cookie(null);
			    session(null);
			 	$this->display();
			 }
		}
		public function  do_logout(){
			cookie(null);
			session(null);
			echo 1;
			}
		public function index_main(){
			//var_dump($_GET);
			//die();
			 ob_end_clean();
			 session_start();
			 if(!isset($_SESSION['yz'])&&$_SESSION['yz']!=md5('爱拍课堂'.$_COOKIE['uid']))
			 {
			 	$this->redirect("Index/login");
			 }
			 else
			 {
			 	$this->display();
			 }
		}
		public function main(){
	     	ob_end_clean();
			if(!isset($_SESSION['yz'])&&$_SESSION['yz']!=md5('爱拍课堂'.$_COOKIE['uid']))
			 {
			 	$this->redirect("Index/login");
			 }
			 else
			 {
			 	$this->display();
			 }
		}
		public function test(){
		ob_end_clean();
			if(!isset($_SESSION['yz'])&&$_SESSION['yz']!=md5('爱拍课堂'.$_COOKIE['uid']))
			 {
			 	$this->redirect("Index/login");
			 }
			 else
			 {
			 	$this->display();
			 }
		}
		public function login(){
			ob_end_clean();
			 	$this->display();
		}
		
	}
?>