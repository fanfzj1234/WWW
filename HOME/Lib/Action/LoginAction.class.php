<?php
    class LoginAction extends CommonAction{
		
	    /*实现用户登陆*/
		public function user_register(){
			$type=$_POST['type'];
			if($type=="normal_student")
			{
				$studentId=$_POST['studentId'];
				$password=$_POST['student_password'];
				$schoolId=$_POST['schoolId'];
				
				$data['A']="User_Register";
				$data['AC']="register";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				$data['V'][]="type";  
                $data['V'][]="studentId";  
				$data['V'][]="password";  
				$data['V'][]="schoolId";  
				$data['V'][]="type";  
                $data['studentId']=$studentId;  
				$data['password']=$password;  
				$data['schoolId']=$schoolId;  
                $data_json=json_encode($data);
				
				
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
                $data_json=json_encode($data);

			}
			if($type=="custom")
			{
				
				$data['A']="User_Register";
				$data['AC']="register";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
                $data['V'][]="type";  
				$data['type']=$type;  
                $data_json=json_encode($data);

			}
			
			    $url="";
				$json_data=http_post_data($url,$data_json);
				return $json_data;
		}
		/*注销用户操作*/
		public function  do_logout(){
			unset($_SESSION['user']);
		    //$this->success("注销成功");
			$this->display("Index:index");
			}	
	}
?>
