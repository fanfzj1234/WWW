<?php
    class LoginAction extends CommonAction{
		
	    /*实现用户登陆*/
	    public function user()
		{
			$studentId="2012021039";
				$password="921128";
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
				var_dump($json_data);
				
		}
		public function user_register(){
			$type=$_POST['type'];
			
			//$type="normal_student";
			if($type=="normal_student")
			{
				//$studentId="2012021039";
				//$password="921128";
				//$schoolId="齐齐哈尔大学";
				$studentId=$_POST['studentId'];
				$password=$_POST['student_password'];
				$schoolId=$_POST['schoolId'];
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
               

			}
			if($type=="custom")
			{
				
				$data['A']="User_Register";
				$data['AC']="register";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="type";  
				$data['type']=$type;  
                

			}
			    $data_json=json_encode($data);
				$json="json=".$data_json;  
			    $url = "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				echo $json_data;
		}
		/*注销用户操作*/
		public function  do_logout(){
			unset($_SESSION['user']);
		    //$this->success("注销成功");
			$this->display("Index:index");
			}	
	}
?>
