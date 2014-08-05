<?php
  

	class IndexAction extends CommonAction {
		// 显示主页面
		public function index(){
             $this->display();
		}
		public function index_main(){
			//var_dump($_GET);
			//die();
			 $usid=$_GET['uid'];
			 $this->assign("user_id",$usid);
             $this->display();
		}
		public function main(){
			$this->display();
		}
		public function test(){
			$this->display();
		}
		
	}
?>