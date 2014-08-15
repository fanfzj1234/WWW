<?php
class PublicAction extends CommonAction {

	// 显示主页面
	public function code() {

		header('Content-type:text/html;charset=utf-8');

		import('ORG.Util.Image');
		ob_end_clean();
		Image::buildImageVerify($length = 5, $mode = 1, $type = 'png', $width = 60, $height = 26, $verifyName = 'verify');
	}

	public function jk() {
		ob_end_clean();
		$this -> display();
	}
    public function schooltest(){
    	$schoolName ="qq";
		$sclsp = ",";
		$sclname = "";
		if (preg_match("/[\x7f-\xff]/", $schoolName)) {
			$sclname =$schoolName;
		} else {
			$sclsp = $sclsp."".$schoolName;
		}
		$data['A'] = "School_Info";
		$data['AC'] = "getscllist";
		$data['C'] = base64_encode(gzencode("http" . time() . "W"));
		$data['E'] = 1;
		$data['V'][] = "sclsp";
		$data['V'][] = "sclname";
		$data['sclsp'] = $sclsp;
		$data['sclname'] = $sclname;
		$data_json=json_encode($data);
		$json = "json=" . $data_json;
		//echo $json;
		$url = "http://api.ipaikt.com:88";
		$json_data=http_post_data($url,$json);
		//echo $json_data;
		$json_code=json_decode($json_data);
		
		$V = $json_code->V;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                } 
				
		$school_info=json_encode($Array); 
		$json_array=json_encode($Array->list);
		var_dump($json_array);
    }
	public function schoolinfo() {

		$schoolName = $_POST['schoolName'];
		$sclsp = ",";
		$sclname = "";
		if (preg_match("/[\x7f-\xff]/", $schoolName)) {
			$sclname =$schoolName;
		} else {
			$sclsp = $sclsp."".$schoolName;
		}
		$data['A'] = "School_Info";
		$data['AC'] = "getscllist";
		$data['C'] = base64_encode(gzencode("http" . time() . "W"));
		$data['E'] = 1;
		$data['V'][] = "sclsp";
		$data['V'][] = "sclname";
		$data['sclsp'] = $sclsp;
		$data['sclname'] = $sclname;
		$data_json=json_encode($data);
		$json = "json=" . $data_json;
		$url = "http://api.ipaikt.com:88";
		$json_data = http_post_data($url, $json);
		$json_code=json_decode($json_data);
		
		$V = $json_code->V;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                } 
				
		$school_info=json_encode($Array); 
		$json_array=json_encode($Array->list);
		echo $json_array;
	}

	public function get_discipline_list() {
		$action = $_POST['action'];
		$disciplineName = $_POST['disciplineName'];

		$data['A'] = "School_Info";
		$data['AC'] = "getDisciplineListByKey";
		$data['C'] = base64_encode(gzencode("http" . time() . "W"));
		$data['E'] = 1;
		$data['V'][] = "action";
		$data['V'][] = "disciplineName";
		$data['action'] = $action;
		$data['disciplineName'] = $disciplineName;
		$data_json = json_encode($data);

		$url = "";
		$json_data = http_post_data($url, $data_json);
		return $json_data;
	}

}
?>