<?php

	class NoteAction extends CommonAction {
	
		
		public function index(){
			if(!isset($_SESSION['yz'])&&$_SESSION['yz']!=md5('爱拍课堂'.$_COOKIE['uid']))
			 {
			 	$this->error("请重新登陆","Index/login");
			 }
			else{
             $this->display();
			}
		}
		public function test()
		{
			 
			    //$type="getByTime";
			    $uid="43";
				$data['A']="Curriculum_User";
				$data['AC']="getForCurrentTerm";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				 
                 $data['V'][]="uid";  
				 $data['V'][]="divection";
                 $data['uid']=$uid;  
			     $data['divection']="horzontal";  
			     $data_json=json_encode($data);
				
			     $json="json=".$data_json;  
				//echo $json;
			    $url = "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				$json_code=json_decode($json_data);
				$this->V = $this->json_code['V'];
				$date_beginday=$json_code->beginday;
				foreach($this->V as $v){ 
$Array[$v]=$json_code->$v;;
}   
				
				$tmp = array_merge(array('begin_time' => $date_beginday),array('class' => $Array['class']));
				$json_arry =json_encode($tmp);
				
				echo $json_arry;
				
		}
		public function curriculum_user(){  
			 $type=$_POST['type'];
			 
			 if($type=="getByTime")
			 {
			 	$uid=$_POST['uid'];
				
				$data['A']="Curriculum_User";
				$data['AC']="getForCurrentTerm";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				 
                 $data['V'][]="uid";  
				 $data['V'][]="divection";
                 $data['uid']=$uid;  
			     $data['divection']="horzontal";  
			     $data_json=json_encode($data);
				
			     $json="json=".$data_json;  
				//echo $json;
			    $url = "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				$json_code=json_decode($json_data);
				$this->V = $this->json_code['V'];
				$date_beginday=$json_code->beginday;
				foreach($this->V as $v){ 
$Array[$v]=$json_code->$v;;
}   
				
				$tmp = array_merge(array('begin_time' => $date_beginday),array('class' => $Array['class']));
				$json_arry =json_encode($tmp);
				
				echo $json_arry;
				}

		}
	}
?>
