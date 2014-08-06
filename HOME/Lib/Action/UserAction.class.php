<?php
/*--
	作者：范志俊
	时间：2014-07-25
	描述：User控制器
*/
	class UserAction extends CommonAction {
		// 显示主页面
		public function index(){
             $this->display();
		}
		public function user_info(){
			$type=$_POST['type'];
			if($type=="basic_pull")
			{
				$uid=$_POST['me_uid'];
				
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
			if($type=="sumbit")
			{
				$uid=$_POST['me_me_uid'];
				$username=$_POST['me_username'];
				$userRealName=$_POST['me_userRealName'];
				$schoolId_1=$_POST['me_schoolId_1'];
				$schoolId_2=$_POST['me_schoolId_2'];
				$schoolId_3=$_POST['me_schoolId_3'];
				$schoolId_4=$_POST['me_schoolId_4'];
				$userStudentId=$_POST['me_userStudentId'];
				$userStudentPasswd=$_POST['me_userStudentPasswd'];
				$usrEmail=$_POST['me_usrEmail'];
				$userTel=$_POST['me_userTel'];
				$userAccount_qq=$_POST['me_userAccount_qq'];
				$userAccount_sina=$_POST['me_userAccount_sina'];
				$userAccount_renren=$_POST['me_userAccount_renren'];
				$userIntro=$_POST['me_userIntro'];
				
				$data['A']="User_info";
				$data['AC']=$type;
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="uid";  
				$data['V'][]="username";
				$data['V'][]="userRealName";
				$data['V'][]="schoolId_1";
				$data['V'][]="schoolId_2";
				$data['V'][]="schoolId_3";
				$data['V'][]="schoolId_4";
				$data['V'][]="userStudentId";
				$data['V'][]="userStudentPasswd";
				$data['V'][]="usrEmail";
				$data['V'][]="userTel";
				$data['V'][]="userAccount_qq";
				$data['V'][]="userAccount_sina";
				$data['V'][]="userAccount_renren";
				$data['V'][]="userIntro";
				
                $data['uid']=$uid;  
				$data['username']=$username;  
			    $data['userRealName']=$userRealName;  
				$data['schoolId_1']=$schoolId_1;  
				$data['schoolId_2']=$schoolId_2;  
				$data['schoolId_3']=$schoolId_3;  
				$data['schoolId_4']=$schoolId_4;  
				$data['userStudentId']=$userStudentId;  
				$data['userStudentPasswd']=$userStudentPasswd;  
				$data['usrEmail']=$usrEmail;  
				$data['userTel']=$userTel;  
				$data['userAccount_qq']=$userAccount_qq;  
				$data['userAccount_sina']=$userAccount_sina;
                $data['userAccount_renren']=$userAccount_renren;
				$data['userIntro']=$userIntro;  
                $data_json=json_encode($data);
			}
			if($type=="detailPull")
			{
				$uid=$_POST['me_me_uid'];
				
				$data['A']="User_info";
				$data['AC']=$type;
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="uid";  
				
                $data['uid']=$uid;  
				
                $data_json=json_encode($data);
			}
			
				$url="";
				$json_data=http_post_data($url,$data_json);
				return $json_data;
			
		}
	}
?>
