<?php
/*--
	作者：范志俊
	时间：2014-07-25
	描述：Table控制器，显示课表
*/
	class TableAction extends CommonAction {
	
		// 显示主页面
		public function index(){
		ob_end_clean();
             $this->display();
		}
		//测试
		public function test()
		{
			 
			    //$type="getByTime";
			    $uid="59";
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
				echo $json_data;
				//$json_code=json_decode($json_data);
				//$V = $json_code->V;
//				$date_beginday=$json_code->beginday;
//				foreach($V as  $v){
//                   $Array->$v = $json_code->$v;
//              }    
//				
//				$tmp = array_merge(array('begin_time' => $date_beginday),array('class' => $Array->class));
//				$json_arry =json_encode($tmp);
//				
//				echo $json_data;
				
		}
		public function get_test()
		{
			 
			    //$type="getByTime";
			    $uid="59";
				$data['A']="Curriculum_User";
				$data['AC']="geteventByUid";
				$data['C']=base64_encode(gzencode("http".time()."W"));  
				$data['E']=1;
				 
                 $data['V'][]="uid";  
				 //$data['V'][]="divection";
                 $data['uid']=$uid;  
			    // $data['divection']="horzontal";  
			     $data_json=json_encode($data);
				
			     $json="json=".$data_json;  
				//echo $json;
			    $url = "http://api.ipaikt.com:88";
				$json_data=http_post_data($url,$json);
				echo $json_data;
				//$json_code=json_decode($json_data);
				//$V = $json_code->V;
//				$date_beginday=$json_code->beginday;
//				foreach($V as  $v){
//                   $Array->$v = $json_code->$v;
//              }    
//				
//				$tmp = array_merge(array('begin_time' => $date_beginday),array('class' => $Array->class));
//				$json_arry =json_encode($tmp);
//				
//				echo $json_data;
				
		}
		//获取课表
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
				//echo $json;
				$json_code=json_decode($json_data);
				$V = $json_code->V;
				$date_beginday=$json_code->beginday;
				foreach($V as  $v){
                     $Array->$v = $json_code->$v;
                }    
				
				$tmp = array_merge(array('begin_time' => $date_beginday),array('class' => $Array->class));
				$json_arry =json_encode($tmp);
				
				echo $json_arry;
				}
		}
		//删除课程
		public function deleteclass(){
			$url = "http://api.ipaikt.com:88";
			
			$uid=$_POST['uid'];
			$elabel=$_POST['elabel'];
			$weekday=$_POST['weekday'];
			$eweek="";
			$data['A']="Curriculum_Set";
			$data['AC']="delEventInfo";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
				 
            $data['V'][]="uid";  
			$data['V'][]="elabel";
			$data['V'][]="eweek";
			$data['V'][]="edayofweek";
			$data['V'][]="ecofday";
			foreach($weekday as $week)
			{
				$a=explode("_",$week);
				$eweek=$eweek.$a[1].",";
				$edayofweek=$a[2];
			    $ecofday=$a[3];
			
			}
                $length=strlen($eweek);
				 $str1 = substr($eweek,0,$length-1);
				$data['uid']=$uid;  
			    $data['elabel']=$elabel;
				$data['eweek']=$str1;  
				$data['edayofweek']=$edayofweek;
				$data['ecofday']=$ecofday;
			    $data_json=json_encode($data);
			    $json="json=".$data_json;  
				//echo $json;
				$json_data=http_post_data($url,$json);	
			    $json_code=json_decode($json_data);  
				$json_code=json_decode($json_data);
			    if($json_code->S=="success")
			   {
				   $i=json_encode(1);
			   }
			   else{
				$i=json_encode($json_code->MT);
			   }
			   echo $i;
		}
       //初始化课表
        public function reload(){
        	$url = "http://api.ipaikt.com:88";
			
			$uid=$_POST['uid'];
			$password=$_POST['reload_pwd'];
			$type=$_POST['type'];
			$data['A']="User_Register";
			$data['AC']="reloadevent";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
				 
            $data['V'][]="uid";  
			$data['V'][]="password";
			$data['V'][]="type";
			$data['uid']=$uid;  
			$data['password']=$password;
			$data['type']=$type;  
			$data_json=json_encode($data);
			$json="json=".$data_json;  
			//echo $json;
			$json_data=http_post_data($url,$json);	
			$json_code=json_decode($json_data);
			    if($json_code->S=="success")
			   {
				   $i=json_encode(1);
			   }
			   else{
				$i=json_encode($json_code->MT);
			   }
			   echo $i;
        }
		public function reload_test(){
        	$url = "http://api.ipaikt.com:88";
			
			$uid=59;
			$password="921128";
			$type="normal_student";
			$data['A']="User_Register";
			$data['AC']="reloadevent";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
				 
            $data['V'][]="uid";  
			$data['V'][]="password";
			$data['V'][]="type";
			$data['uid']=$uid;  
			$data['password']=$password;
			$data['type']=$type;  
			$data_json=json_encode($data);
			$json="json=".$data_json;  
			//echo $json;
			$json_data=http_post_data($url,$json);	
			echo $json_data;
        }
		//添加课程
		public function addevent(){
			$uid=$_POST['a_uid'];
			$elabel=$_POST['a_elabel'];
			$einfo=$_POST['a_einfo'];
			$estate=$_POST['a_estate'];
			$ecreid=$_POST['a_ecreid'];
			$etype=$_POST['a_etype'];
			$ealarm=$_POST['a_ealarm'];
			$etname=$_POST['a_etname'];
			$cid=$_POST['a_cid'];
			$ctype=$_POST['a_ctype'];
			$exmtype=$_POST['a_exmtype'];
			$cinfo=$_POST['a_cinfo'];
			$eweek=$_POST['a_eweek'];
			$length=strlen($eweek);
			$str1 = substr($eweek,0,$length-1);
			$edayofweek=$_POST['a_edayofweek'];
			$ecofday=$_POST['a_ecofday'];
			$eaddress=$_POST['a_address'];
			
			$url = "http://api.ipaikt.com:88";
			$data['A']="Curriculum_Set";
			$data['AC']="addEvent";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
				 
            $data['V'][]="uid";  
			$data['V'][]="elabel";
			$data['V'][]="einfo";
			$data['V'][]="estate";
			$data['V'][]="ecreid";
			$data['V'][]="etype";  
			$data['V'][]="ealarm";
			$data['V'][]="etname";
			$data['V'][]="cid";  
			$data['V'][]="ctype";
			$data['V'][]="exmtype";
			$data['V'][]="cinfo";
			$data['uid']=$uid;  
			$data['elabel']=$elabel;
			$data['einfo']=$einfo;  
			$data['estate']=$estate;  
			$data['ecreid']=$ecreid;
			$data['etype']=$etype;  
			$data['ealarm']=$ealarm;  
			$data['etname']=$etname;
			$data['cid']=$cid;  
			$data['ctype']=$ctype;  
			$data['exmtype']=$exmtype;
			$data['cinfo']=$cinfo;  
			$data_json=json_encode($data);
			$json="json=".$data_json;  
			//echo $json;
			//echo $eweek;
			$json_data=http_post_data($url,$json);	
			$json_code=json_decode($json_data);
			if($json_code->S=="success")
			$i=0;
			{
				$i++;
			}
			$eid=$json_code->V;
			$data['A']="Curriculum_Set";
			$data['AC']="addEvent";
			$data['C']=base64_encode(gzencode("http".time()."W"));  
			$data['E']=1;
				 
            $data['V'][]="uid";  
			$data['V'][]="elabel";
			$data['V'][]="einfo";
			$data['V'][]="eaddress";
			$data['V'][]="ealarm";
			$data['V'][]="ealarmtype";  
			$data['V'][]="eweek";
			$data['V'][]="edayofweek";
			$data['V'][]="ecofday";  
			$data['V'][]="einfo";
			$data['V'][]="cinfo";
			$data['uid']=$uid;  
			$data['elabel']=$elabel;
			$data['einfo']=$einfo;  
			$data['estate']=$estate;  
			$data['ecreid']=$ecreid;
			$data['etype']=$etype;  
			$data['ealarm']=$ealarm;  
			$data['ealarmtype']=$ealarmtype;
			$data['eweek']=$str1;  
			$data['edayofweek']=$edayofweek;  
			$data['ecofday']=$ecofday;
			$data['einfo']=$einfo;
			$data['cinfo']=$cinfo;  
			$data_json=json_encode($data);
			$json="json=".$data_json;  
			//echo $json;
			$json_data=http_post_data($url,$json);	
			$json_code=json_decode($json_data);
			if($json_code->S=="success")
			$i=0;
			{
				$i++;
			}
			
			echo $i;
		}
	}
?>
