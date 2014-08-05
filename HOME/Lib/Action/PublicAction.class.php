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
		ob_end_clean();
			$this->display();
		}
		public function get_school_list(){
			$action=$_POST['action'];
			$schoolName=$_POST['schoolName'];
			
			$data['A']="School_Info";
			$data['AC']="getSchoolListByKey";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
			$data['V'][]="action";  
            $data['V'][]="schoolName";  
			$data['action']=$action;  
			$data['schoolName']=$schoolName;  
            $data_json=json_encode($data);
			
			$url="";
			$json_data=http_post_data($url,$data_json);
			return $json_data;
		}
		public function get_discipline_list()
		{
			$action=$_POST['action'];
			$disciplineName=$_POST['disciplineName'];
			
			$data['A']="School_Info";
			$data['AC']="getDisciplineListByKey";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
			$data['V'][]="action";  
            $data['V'][]="disciplineName";  
			$data['action']=$action;  
			$data['disciplineName']=$disciplineName;  
            $data_json=json_encode($data);
			
			$url="";
			$json_data=http_post_data($url,$data_json);
			return $json_data;
		}
}
?>