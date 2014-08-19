<?php
/*--
	作者：范志俊
	时间：2014-07-25
	描述：User控制器
*/
	class UserAction extends CommonAction {
		// 显示主页面
		public function index(){
			    ob_end_clean();
			    $uid=$_COOKIE['uid'];
				$data['A']="User_info";
				$data['AC']="getUserInfo";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="uid";  
                $data['uid']=$uid;  
                $data_json=json_encode($data);
				$json="json=".$data_json;  
				$url= "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				$json_code=json_decode($json_data);
				$this->V = $this->json_code['V'];
				foreach($this->V as $v){ 
$Array[$v]=$json_code->$v;;
}
				$me_uid=$Array['uid'];
				$me_uemail=$Array['uemail'];
				$email=explode("@",$me_uemail);
				$me_utel=$Array['utel'];
				$me_uqq=$Array['uqq'];
				$me_usina=$Array['usina'];
				$me_urenren=$Array['urenren'];
				$me_uinfo=$Array['uinfo'];
				$me_schlid1=$Array['sclid'];
				$me_schlid2=$Array['colid'];
				$me_schlid3=$Array['speid'];
				$me_schlid4=$Array['claid'];
				$me_sclname=$Array['sclname'];
				$me_sclname2=$Array['colname'];
			    $me_sclname3=$Array['spename'];
				$me_sclname4=$Array['claname'];
				$me_userRealName=$Array['userrealname'];
				
				$this->assign("user_id",$me_uid);
				$this->assign("userEmail",$email[0]);
				$this->assign("userTel",$me_utel);
				$this->assign("userAccount_qq",$me_uqq);
				$this->assign("userAccout_sina",$me_usina);
				$this->assign("userAccout_renren",$me_urenren);
				$this->assign("userIntro",$me_uinfo);
				$this->assign("schoolId_1_id",$me_schlid1);
				$this->assign("schoolId_2_id",$me_schlid2);
				$this->assign("schoolId_3_id",$me_schlid3);
				$this->assign("schoolId_4_id",$me_schlid4);
				$this->assign("schoolId_1",$me_sclname);
				$this->assign("schoolId_2",$me_sclname2);
				$this->assign("schoolId_3",$me_sclname3);
				$this->assign("schoolId_4",$me_sclname4);
                $this->assign("useRealName",$me_userRealName);
                $sclid1 =$me_schlid1;
		
		        $scl['A'] = "School_Info";
		        $scl['AC'] = "getcollist";
		        $scl['C'] = base64_encode(gzencode("http" . time() . "W"));
		        $scl['E'] = 1;
		        $scl['V'][] = "sclid";
		        $scl['sclid'] = $sclid1;
                $data_json=json_encode($scl);
		        $json = "json=" . $data_json;
		        $url = "http://api.ipaikt.com:88";
		        $json_data = http_post_data($url, $json);
		        $json_code=json_decode($json_data);
				//echo $json;
		        //echo $json_data;
		        $this->V = $json_code->V;
				foreach($V as  $v){
                    $Array[$v]=$json_code->$v;
                } 
				$collist=array($Array['list']);
				$this->assign("collist",$collist);
		
              if(!isset($_SESSION['yz'])&&$_SESSION['yz']!=md5('爱拍课堂'.$_COOKIE['uid']))
			 {
			 	$this->error("请重新登陆","Index/login");
			 }
			 else
			 {
			 	$this->display();
			 }
		}
		public function test(){
			    $uid="59";
				$data['A']="User_info";
				$data['AC']="getUserInfo";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="uid";  
                $data['uid']=$uid;  
                $data_json=json_encode($data);
				$json="json=".$data_json;  
				//echo $json;
				$url= "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				//echo $json_data;
                $json_code=json_decode($json_data);
				$this->V = $json_code->V;
				foreach($this->V as $v){ 
$Array[$v]=$json_code->$v;;
}
				$me_uid=$Array['uid'];
				$me_uemail=$Array['uemail'];
				$email=explode("@",$me_uemail);
				$me_utel=$Array['utel'];
				$me_uqq=$Array['uqq'];
				$me_usina=$Array['usina'];
				$me_urenren=$Array['urenren'];
				$me_uinfo=$Array['uinfo'];
				$me_schlid1=$Array['sclid'];
				$me_schlid2=$Array['colid'];
				$me_schlid3=$Array['speid'];
				$me_schlid4=$Array['claid'];
				$me_sclname=$Array['sclname'];
				$me_sclname2=$Array['colname'];
			    $me_sclname3=$Array['spename'];
				$me_sclname4=$Array['claname'];
				$me_userRealName=$Array['userrealname'];

                $sclid1 =$me_schlid1;
		
		        $scl['A'] = "School_Info";
		        $scl['AC'] = "getcollist";
		        $scl['C'] = base64_encode(gzencode("http" . time() . "W"));
		        $scl['E'] = 1;
		        $scl['V'][] = 631;
		        $scl['sclid'] = $sclid1;
                $data_json=json_encode($scl);
		        $json = "json=" . $data_json;
		        $url = "http://api.ipaikt.com:88";
		        $json_data = http_post_data($url, $json);
		        $json_code=json_decode($json_data);
				echo $json;
		        echo $json_data;
		        $this->V = $json_code->V;
				foreach($V as  $v){
                    $Array[$v]=$json_code->$v;
                } 
		        var_dump($Array['list']);
		}
		public function user_test(){
			     $uid=54;
				//$username=$_POST['me_username'];
				//$userRealName=$_POST['me_userRealName'];
				$schoolId_1=631;
				$schoolId_2=2;
				$schoolId_3=1;
				$schoolId_4=2;
				$userStudentId="2012021039";
				$userStudentPasswd="921128";
				$usrEmail="1009137312@qq.com";
				$userTel="188452399765";
				$userAccount_qq="1009137312";
				$userAccount_sina="1009137312@qq.com";
				$userAccount_renren="15921171834";
				$userIntro="人生没有彩排，每天都是直播。迎着朝阳，踏上属于你的旅途.";
				
				$data['A']="User_info";
				$data['AC']="updateUserInfo";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="uid";  
				//$data['V'][]="username";
				//$data['V'][]="userRealName";
				$data['V'][]="sclid1";
				$data['V'][]="sclid2";
				$data['V'][]="sclid3";
				$data['V'][]="sclid4";
				$data['V'][]="ustuid";
				$data['V'][]="ustupass";
				$data['V'][]="uemail";
				$data['V'][]="utel";
				$data['V'][]="uqq";
				$data['V'][]="usina";
				$data['V'][]="urenren";
				$data['V'][]="uinfo";
				
                $data['uid']=$uid;  
				//$data['username']=$username;  
			    //$data['userRealName']=$userRealName;  
				$data['sclid1']=$schoolId_1;  
				$data['sclid2']=$schoolId_2;  
				$data['sclid3']=$schoolId_3;  
				$data['sclid4']=$schoolId_4;  
				$data['ustuid']=$userStudentId;  
				$data['ustupass']=$userStudentPasswd;  
				$data['uemail']=$usrEmail;  
				$data['utel']=$userTel;  
				$data['uqq']=$userAccount_qq;  
				$data['usina']=$userAccount_sina;
				
                $data['urenren']=$userAccount_renren;
				$data['uinfo']=$userIntro;  
                $data_json=json_encode($data);
                $json="json=".$data_json;
               echo $json;  
//				$data_json=json_encode($data);
		}
		public function user_info(){
			    
			
				$uid=$_POST['uid'];
				//$username=$_POST['me_username'];
				$userRealName = $_POST['userRealName'];
				$schoolId_1=$_POST['sclid1'];
				$schoolId_2=$_POST['sclid2'];
				$schoolId_3=$_POST['sclid3'];
				$schoolId_4=$_POST['sclid4'];
				//$userStudentId=$_POST['ustuid'];
				//$userStudentPasswd=$_POST['ustupass'];
				$usrEmail=$_POST['uemail'];
				$userTel=$_POST['utel'];
				$userAccount_qq=$_POST['uqq'];
				$userAccount_sina=$_POST['usina'];
				$userAccount_renren=$_POST['urenren'];
				$userIntro=$_POST['uinfo'];
				
				$data['A']="User_info";
				$data['AC']="updateUserInfo";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="uid";  
				//$data['V'][]="username";
				$data['V'][] = "urealname";
				$data['V'][]="sclid1";
				$data['V'][]="sclid2";
				$data['V'][]="sclid3";
				$data['V'][]="sclid4";
				//$data['V'][]="ustuid";
				//$data['V'][]="ustupass";
				$data['V'][]="uemail";
				$data['V'][]="utel";
				$data['V'][]="uqq";
				$data['V'][]="usina";
				$data['V'][]="urenren";
				$data['V'][]="uinfo";
				
                $data['uid']=$uid;  
				$data['username']=$username;  
			    $data['urealname'] = $userRealName;
				$data['sclid1']=$schoolId_1;  
				$data['sclid2']=3;  
				$data['sclid3']=1;  
				$data['sclid4']=1;  
				//$data['ustuid']=$userStudentId;  
				//$data['ustupass']=$userStudentPasswd;  
				$data['uemail']=$usrEmail;  
				$data['utel']=$userTel;  
				$data['uqq']=$userAccount_qq;  
				$data['usina']=$userAccount_sina;
                $data['urenren']=$userAccount_renren;
				$data['uinfo']=$userIntro;  
                $data_json=json_encode($data);
                $json="json=".$data_json;
                echo $json;  
				$url= "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
			    $json_code=json_decode($json_data);
			    if($json_code->S=="success")
			    {
				$i=json_encode(1);
                session_start();
				$_COOKIE['state']=1;
			    }
			    else{
				$i=is_array($json_code->MT);
			    }
			echo $i;
		}
        public function user_login_set()
		{
			$type=$_POST['type'];
			$uid=$_POST['uid'];
			$username=$_POST['username'];
			$password=$_POST['pwd'];
			
			$data['A']="User_Register";
			$data['AC']="setAccessByUid";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
            $data['V'][]="type";  
			$data['V'][]="uid";
			$data['V'][]="username";
			$data['V'][]="password";
			$data['type']="normal_student";
			$data['uid']=$uid;
			$data['username']=$username;
			$data['password']=$password;
			$data_json=json_encode($data);
			$json="json=".$data_json;  
			$url= "http://api.ipaikt.com:88";
			$json_data=http_post_data($url,$json);
			$json_code=json_decode($json_data);
			if($json_code->S=="success")
			{
				$i=json_encode(1);
				 session_start();
				$_SEESION['login_info']=1;
				setcookie("state",1, time()+3600*24*7);
				setcookie("login_info", 1, time()+3600*24*7); 
			}
			else{
				$i=json_encode($json_code->MT);
			}
			echo $i;
		}
		public function update_test(){
			$uid=59;
			$oldpassword="123456";
			$password="6yhn6yhn";
			$data['A']="User_Register";
			$data['AC']="updatePassword";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
            $data['V'][]="uid";
			$data['V'][]="oldpassword";
			$data['V'][]="password";
			$data['uid']=$uid;
			$data['oldpassword']=$oldpassword;
			$data['password']=$password;
			$data_json=json_encode($data);
			$json="json=".$data_json;  
			$url= "http://api.ipaikt.com:88";
			$json_data=http_post_data($url,$json);
			echo $json_data;
		}
        public function update_password(){
        	$uid=$_POST['uid'];
			$oldpassword=$_POST['oldpwd'];
			$password=$_POST['newpwd'];
			$data['A']="User_Register";
			$data['AC']="updatePassword";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
            $data['V'][]="uid";
			$data['V'][]="oldpassword";
			$data['V'][]="password";
			$data['uid']=$uid;
			$data['oldpassword']=$oldpassword;
			$data['password']=$password;
			$data_json=json_encode($data);
			$json="json=".$data_json;  
			$url= "http://api.ipaikt.com:88";
			$json_data=http_post_data($url,$json);
			echo $json_data;
        }
	}
?>
