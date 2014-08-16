<?php
  

	class IndexAction extends CommonAction {
		// 显示主页面
		public function index(){
		     ob_end_clean();
			 import('ORG.Net.IpLocation');// 导入IpLocation类
             $Ip = new IpLocation(); // 实例化类
             $location = $Ip->getlocation(get_client_ip()); // 获取某个IP地址所在的位置
             session_start();
			 $_SESSION['country']=$location['country'];
             $this->assign("country",$location['country']);
			 $this->assign("area",$location['area']);
             $this->display();
		}
		public function index_main(){
			//var_dump($_GET);
			//die();
			 ob_end_clean();
			 session_start();
			 if(!isset($_SESSION['yz'])&&$_SESSION['yz']!=md5('爱拍课堂'))
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
			$this->display();
		}
		public function test(){
		ob_end_clean();
			$this->display();
		}
		public function login(){
			ob_end_clean();
			$this->display();
		}
		
	}
?>