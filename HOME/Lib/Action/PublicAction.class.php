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
		$sclsp = ",qq";
		$sclname = "齐齐";
		import('ORG.Net.IpLocation');// 导入IpLocation类
             $Ip = new IpLocation(); // 实例化类
             $location = $Ip->getlocation(get_client_ip()); // 获取某个IP地址所在的位置
        
		$address=$location['area'];
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
		$data['V'][]="address";
		$data['sclsp'] = $sclsp;
		$data['sclname'] = $sclname;
		$data['address'] = $address;
		$data_json=json_encode($data);
		$json = "json=" . $data_json;
		echo $json;
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
        session_start();
		$schoolName = $_POST['schoolName'];
		$sclsp = ",";
		$sclname = "";
		import('ORG.Net.IpLocation');// 导入IpLocation类
             $Ip = new IpLocation(); // 实例化类
             $location = $Ip->getlocation(get_client_ip()); // 获取某个IP地址所在的位置
        
		$address=$location['area'];
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
		$data['V'][]="address";
		$data['sclsp'] = $sclsp;
		$data['sclname'] = $sclname;
		$data['address'] = $address;
		$data_json=json_encode($data);
		$json = "json=" . $data_json;
		$url = "http://api.ipaikt.com:88";
		$json_data = http_post_data($url, $json);
		$json_code=json_decode($json_data);
		
		$V = $json_code->V;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                } 
		$json_array=json_encode($Array->list);
		echo $json_array;
	}

	public function get_col_list() {
		$sclid1 = $_POST['sclid1'];
		
		$data['A'] = "School_Info";
		$data['AC'] = "getcollist";
		$data['C'] = base64_encode(gzencode("http" . time() . "W"));
		$data['E'] = 1;
		$data['V'][] = "sclid";
		$data['sclid'] = $sclid1;
        $data_json=json_encode($data);
		$json = "json=" . $data_json;
		$url = "http://api.ipaikt.com:88";
		$json_data = http_post_data($url, $json);
		//echo $json;
		$json_code=json_decode($json_data);
		
		$V = $json_code->V;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                } 
		$json_array=json_encode($Array->list);
		echo $json_array;
	}
    public function get_spe_list() {
		$sclid1 = $_POST['sclid'];
		$colid = $_POST['colid'];
		$data['A'] = "School_Info";
		$data['AC'] = "getspelist";
		$data['C'] = base64_encode(gzencode("http" . time() . "W"));
		$data['E'] = 1;
		$data['V'][] = "sclid1";
		$data['V'][] = "colid";
		$data['sclid1'] = $sclid1;
		$data['colid'] = $colid;
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
	public function get_cla_list() {
		$sclid1 = $_POST['speid'];
		$colid = $_POST['colid'];
		$data['A'] = "School_Info";
		$data['AC'] = "getclalist";
		$data['C'] = base64_encode(gzencode("http" . time() . "W"));
		$data['E'] = 1;
		$data['V'][] = "speid";
		$data['V'][] = "colid";
		$data['colid'] = $colid;
		$data['speid'] = $speid;
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
}
?>