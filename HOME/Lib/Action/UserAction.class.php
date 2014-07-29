<?php
/*--
	作者：范志俊
	时间：2014-07-25
	描述：Index控制器，显示主页index和主题main页面
*/
	class TableAction extends CommonAction {
		// 显示主页面
		public function index(){
             $this->display();
		}
		public function user_info(){
			$type=$_POST['type'];
			if($type=="basic_pull")
			{
				$uid=$_POST['uid'];
				
				$data['A']="User_info";
				$data['AC']=$type;
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="uid";  
                $data['uid']=$uid;  
                $data_json=json_encode($data);
				
				$url="";
				$json_data=http_post_data($url,$data_json);
				return $json_data;
			}
			{
				$uid=$_POST['sumbit'];
				
				$data['A']="User_info";
				$data['AC']=$type;
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="uid";  
                $data['uid']=$uid;  
                $data_json=json_encode($data);
				
				$url="";
				$json_data=http_post_data($url,$data_json);
				return $json_data;
			}
		}
	}
?>
