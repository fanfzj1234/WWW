<?php
  

	class IndexAction extends CommonAction {
		// 显示主页面
		public function index(){
		     ob_end_clean();
             $this->display();
		}
		public function index_main(){
			//var_dump($_GET);
			//die();
			ob_end_clean();
			 $usid=$_GET['uid'];
			 $this->assign("user_id",$usid);
             $this->display();
		}
		public function main(){
		ob_end_clean();
			$this->display();
		}
		public function test(){
		ob_end_clean();
			$this->display();
		}
		
	}
?>