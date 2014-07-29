<?php
class PublicAction extends CommonAction {
		
		// 显示主页面
		public function code(){
		  
		   header('Content-type:text/html;charset=utf-8');
                   
              import('ORG.Util.Image');
              ob_end_clean();
              Image::buildImageVerify($length=5, $mode=1, $type='png', $width=60, $height=26, $verifyName='verify');
		}
		public function jk(){
			$this->display();
		}
}
?>