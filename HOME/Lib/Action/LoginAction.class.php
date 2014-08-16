<?php
    class LoginAction extends CommonAction{
		
	    /*实现用户登陆*/
	    public function user()
		{
			    $studentId="2012021037";
				$password="021037";
				$schoolId="齐齐哈尔大学";
				$type="normal_student";
				
				$data['A']="User_Register";
				$data['AC']="register";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				$data['V'][]="type";  
                $data['V'][]="studentId";  
				$data['V'][]="password";  
				$data['V'][]="schoolId";  
				$data['type']=$type;  
                $data['studentId']=$studentId;  
				$data['password']=$password;  
				$data['schoolId']=$schoolId;
				
                $data_json=json_encode($data);
				$json="json=".$data_json;  
			    $url = "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				
			    echo $json_data;
		}
		public function user_register(){
			$type=$_POST['type'];
			
			//$type="normal_student";
			if($type=="normal_student")
			{
				//$studentId="2012021039";
				//$password="921128";
				$schoolId="齐齐哈尔大学";
				$studentId=$_POST['studentId'];
				$password=$_POST['student_password'];
				//$schoolId=$_POST['schoolId'];
				$type="normal_student";
				$data['A']="User_Register";
				$data['AC']="register";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				$data['V'][]="type";  
                $data['V'][]="studentId";  
				$data['V'][]="password";  
				$data['V'][]="schoolId";  
				$data['type']=$type;  
                $data['studentId']=$studentId;  
				$data['password']=$password;  
				$data['schoolId']=$schoolId;  
				
				 $data_json=json_encode($data);
				$json="json=".$data_json;  
			    $url = "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				$json_code=json_decode($json_data);
			    $V = $json_code->V;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                }    
			    if($json_code->S=="success")
			   {
				$i=json_encode(1);
				 session_start();
				$_SESSION['state']=2;
				$_SESSION['uid']=$Array->uid;
				$_SESSION['type']=$Array->userType;
				$_SESSION['utype']=1;
				$_SESSION['yz']=md5('爱拍课堂');
			   }
			else{
				$i=json_encode($json_code->MT);
			}
			echo $i;
				
			}
			if($type=="normal_teacher")
			{
				$disciplineId=$_POST['disciplineId'];
				$teacherName=$_POST['teacherName'];
				$password=$_POST['teacher_password'];
				$password_again=$_POST['teacher_password_again'];
				$schoolId=$_POST['schoolId'];
				
				$data['A']="User_Register";
				$data['AC']="register";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				$data['V'][]="type";  
                $data['V'][]="disciplineId";  
				$data['V'][]="teacherName";  
				$data['V'][]="password";  
				$data['V'][]="password_again";  
				$data['V'][]="schoolId";  
				$data['type']=$type;    
				$data['disciplineId']=$disciplineId;  
                $data['teacherName']=$teacherName;  
				$data['password']=$password;  
				$data['password_again']=$password_again;
				$data['schoolId']=$schoolId;  
               
                $json_code=json_decode($json_data);
			    $V = $json_code->V;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                }    
			    if($json_code->S=="success")
			   {
				$i=json_encode(1);
				 session_start();
				$_SESSION['state']=2;
				$_SESSION['uid']=$Array->uid;
				$_SESSION['type']=$Array->userType;
				$_SESSION['utype']=2;
				$_SESSION['yz']=md5('爱拍课堂');
			   }
			else{
				$i=json_encode($json_code->MT);
			}
			echo $i;
			}
			if($type=="custom")
			{
				
				$data['A']="User_Register";
				$data['AC']="register";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="type";  
				$data['type']=$type;  
                
                $json_code=json_decode($json_data);
			   $V = $json_code->V;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                }    
			    if($json_code->S=="success")
			   {
				$i=json_encode(1);
				 session_start();
				$_SESSION['state']=2;
				$_SESSION['uid']=$Array->uid;
				$_SESSION['type']=$Array->userType;
				$_SESSION['yz']=md5('爱拍课堂');
			    }
			else{
				$i=json_encode($json_code->MT);
			}
			echo $i;
			}
			   
		}
		/*注销用户操作*/
		public function  do_logout(){
			unset($_SESSION['user']);
		    //$this->success("注销成功");
			$this->display("Index:index");
			}
		public function	verify(){
			session_start();
			//echo md5($_POST['verify']);
			
			if($_SESSION['verify']== md5($_POST['verify'])) {
                 echo 1;
            }
			else{
				echo 2;
			}
		}
		public function user_login(){
			    $username=$_POST['username'];
				$password=$_POST['password'];
				
				$data['A']="User_Register";
				$data['AC']="login";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				$data['V'][]="username";  
                $data['V'][]="password";  
				$data['username']=$username;  
				$data['password']=$password; 
				$data_json=json_encode($data);
				$json="json=".$data_json;  
			    $url = "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				$json_code=json_decode($json_data);
				$V = $json_code->V;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                }    
			    if($json_code->S=="success")
			   {
				$i=json_encode(1);
				 session_start();
				$_SESSION['state']=1;
				$_SESSION['uid']=$Array->uid;
				$_SESSION['udate']=$Array->udate;
				$_SESSION['utype']=$Array->utype;
				if($_SESSION['utype']==1)
				$_SESSION['type']="normal_student";
				if($_SESSION['utype']==2)
				$_SESSION['type']="teacher";
				$_SESSION['yz']=md5('爱拍课堂');
			    }
			else{
				$i=json_encode($json_code->MT);
			}
			echo $i;
		}
		public function login_test(){
			    $username="fanfzj";
				$password="6yhn6yhn";
				
				$data['A']="User_Register";
				$data['AC']="login";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				$data['V'][]="username";  
                $data['V'][]="password";  
				$data['username']=$username;  
				$data['password']=$password; 
				$data_json=json_encode($data);
				$json="json=".$data_json;
				echo $json."<br>"; 
			    $url = "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				echo $json_data;
		}
	}
?>
