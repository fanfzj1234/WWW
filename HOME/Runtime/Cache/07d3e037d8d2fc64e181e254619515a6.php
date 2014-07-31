<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：范志俊
	时间：2014-07-25
	描述：接口帮助文档页面
-->
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>接口帮助文档页面</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<script type="text/javascript" src='http://code.jquery.com/jquery-2.1.1.js'></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="http://www.bootcss.com/p/stickup/stickup.css" rel="stylesheet">
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- 定位元素  StickUp 图片 文件 -->
<link rel="image_src" href="http://lirancohen.github.io/stickUp/images/stickUp.png">
<style>
/*调节锚点偏移*/
h3{

margin:-200px 0 0;
border-top:200px solid #FFFFFF;
z-index:1;
color: #000000;

}
/*调节页面显示，左右各空10px的位置*/
body{
	margin-left: 10px;
	margin-right: 10px;
}
/*自定义li背景颜色*/
li{
			background-color: #5cb85c;
}
/*p自动换行*/
p{
	word-break:break-all; word-wrap:break-word ;"
}
</style>
 
</head>
		
	<body style="margin-left: 20px;margin-right: 20px;">
		
			
	
	 <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">置顶</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
               <li class="menuItem">
               	<a href="#main_info_jk" id="main_info">接口总览</a>
               </li>
               <li class="menuItem">
              <a href="#" id="user_info" class="dropdown-toggle" data-toggle="dropdown">用户接口
              	<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="navbarDrop1">
                <li class=""><a href="#one_one" tabindex="-1">1-1普通学生正常注册</a></li>
                <li class=""><a href="#one_two" tabindex="-1">1-2 教师正常注册</a></li>
                <li class=""><a href="#one_three" tabindex="-1">1-3 游客访问</a></li>
                <li class=""><a href="#one_four" tabindex="-1">1-4 获取用户信息</a></li>
                <li class=""><a href="#one_five" tabindex="-1">1-5 提交用户信息</a></li>
                <li class=""><a href="#one_six" tabindex="-1">1-6 获取更多信息</a></li>
              </ul>
            </li>
            
                <li class="menuItem">
              <a href="#" id="table_info" class="dropdown-toggle" data-toggle="dropdown">课程表接口
              	<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="navbarDrop1">
                <li class=""><a href="#two_one" tabindex="-1">2-1 请求课表</a></li>
                <li class=""><a href="#two_two" tabindex="-1">2-2 学校服务器拉取课表</a></li>
                <li class=""><a href="#two_three" tabindex="-1">2-3 编辑课表</a></li>
                <li class=""><a href="#two_four" tabindex="-1">2-4 确认保存内容</a></li>
              </ul>
            </li>
             <li class="menuItem">
              <a href="#" id="school_info" class="dropdown-toggle" data-toggle="dropdown">学校信息接口
              	<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="navbarDrop1">
                <li class=""><a href="#three_one" tabindex="-1">3-1 获取学校名称和id</a></li>
               
              </ul>
            </li>
              </ul>
            </div>
          </div>
        </div> 
      </div>

		
		
		<h3 id="main_info_jk">接口地址：</h3>
        <table class="table table-bordered">
        	<tr>
        		<td>
        			S:【字符串】接口请求的结果的状态，success和failed是两大主状态，可以有其它，S为status
                    
                </td>
                <td>
                	E:【整型】接口版本【双向操作都需要告知】
                	
                </td>
                <td>
                	M:【数组】消息，给客户端判断提示信息用 NULL时没有任何信息，MT也会同时为NULL。返回具体信息数组，这个信息不是给用户直接看的，而是给接收端判断用的
                </td>
            </tr>
            <tr>
            	<td>
            	    MT:【数组】参考信息的中文意思，数组数量与M相同,一个给接收端参考用的错误解释，防止接收端没有相应错误的文字内容
                </td>
                <td>
                	C:【字符串】服务端或客户端的验证串【POST必有】，接收端ID或者接收端验证串，接收端以后根据这个串算出以后所有操作需要的验证串
                	
                </td>
                <td>
                	V:【数组】额外变量名名称数组
                </td>
		    </tr>
		    <tr>
		    	<td>
		    		A:【字符串】接口名，下划线用于分割路由【POST必有】
		    	</td>
		    	<td>
		    		AC:【字符串】操作名，用这个接口做什么操作由此决定
		    	</td>
		    </tr>
        </table>
        <strong>
        	信息POST发送案例：
        </strong><br>
                 $json['A']="User_Register";&nbsp;&nbsp; $json['AC']="register";<br>
                 $json['C']="sadfasdfsdfasdf";&nbsp;&nbsp;$json['E']=1;<br>
                 $json['V'][]="username";&nbsp;&nbsp;$json['V'][]="password";<br>
                 $json['username']="Attect";&nbsp;&nbsp;$json['password']="123456";<br>
                 echo json_encode($json);<br>
        <strong>C值获取方式：</strong>
        <p>base64_encode(gzencode("http".time()."W"))（网页端）<br>
        base64_encode(gzencode("andr".time()."C"))（手机端）</p>
        <strong>信息返回案例:</strong>{"S":"success","C":"asdfasdfasdfasdfasdfasdfasf","E":1,"M":["register_success"],"MT":["u6ce8u518cu6210u529f"],"V":["username","password"],"username":"Attect","password":123456}

       <h2 id="user_info_jk">一.用户接口</h3>
		<!--1-1-->
		<div id="1-1">
		<h3 id="one_one">1-1 普通学生正常注册 &nbsp;&nbsp;User_register&nbsp;&nbsp;&nbsp;      POST</h3>
		<P>接口相关参数：A:User_Register；AC:register</P>
		<p>参数：<strong>type:</strong>注册类型;<strong>studentId:</strong>学号;<strong>password:</strong>教务处密码;<strong>schoolId:</strong>学校Id</p>
		<p>返回：<strong>uid:</strong>用户id;<strong>utype:</strong>用户类型</p>
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_one_suceess">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="one_one_suceess" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[0]"uid" [1]utype &nbsp;&nbsp;
				</td>
			</tr>
		</table> 
		<P>结果成功案例："uid":322&nbsp;"utype":"student"</P>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_one_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="one_one_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"sutdentId_exists" //多个错误信息
				</td>
			</tr>
			<tr>
				<td>
					MT:[0]"学号已存在" //
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		测试：
		<form action="" method="post">
		type<input type="text" id="type" value="normal_student">
		studentId<input type="text" id="studentId" value="2342323423">
        password<input type="text" id="student_password" value="ddddddd">
        schoolId<input type="text" id="schoolId" value="齐大">
        <input type="button" id="do_register_button" value="提交">
		</form>
		  </div>
		<br>
		<br>
		<!--1-2-->
		<div id="1-2">
		<h3 id="one_two">1-2 教师正常注册&nbsp;&nbsp;User_register&nbsp;&nbsp;&nbsp;       POST</h3>
		<P>接口相关参数：A:User_Register；AC:register</P>
		<p>参数：<strong>type:</strong>注册类型;<strong>schoolId:</strong>学校Id;<strong>disciplineId:</strong>专业Id;<strong>teacherName:</strong>教师名字;<strong>password:</strong>密码;<strong>password_again</strong>:再次输入密码;<strong></p>
		</p>返回：uid:用户id;utype:用户类型</p>
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_two_success">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="one_two_success" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[0]"uid" [1]utype 
				</td>
			</tr>
		</table> 
		<P>结果成功案例："uid":37&nbsp;"utype":"teacher"</P>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_two_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="one_two_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"school_not_exists" [1]"discipline_not_exists" [2]"password_not_same"
				</td>
			</tr>
			<tr>
				<td>
					MT[0]"学校不存在" [1]"专业不存在" [2]"两次输入的密码不一样"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		<form action="" method="post">
		type<input type="text" id="type" value="normal_teacher">
		disciplineId<input type="text" id="disciplineId" value="1">
		teacherName<input type="text" id="teacherName" value="教师名字">
        password<input type="text" id="password" value="ddddddd">
        password_again<input type="text" id="password_again" value="ddddddd">
        schoolId<input type="text" id="schoolId" value="1">
        <input type="button" id="sumbit" value="提交">
		</form>
	</div>
	<br>
	<br>
	<!--1-3-->
	    <div id="1-3">
		<h3  id="one_three">1-3 游客访问&nbsp;&nbsp;User_register&nbsp;&nbsp;&nbsp;       POST</h3>
		<P>接口相关参数：A:User_Register；AC:register</P>
		<p>参数：<strong>type:</strong>注册类型;</p>
		</p>返回：<strong>type:</strong>custom</p>
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_three_success">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="one_three_success" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[0]"uid" [1]utype 
				</td>
			</tr>
		</table> 
		<P>结果成功案例："uid":2322&nbsp;"utype":"custum"</P>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_three_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="one_three_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"server_close_custum"
				</td>
			</tr>
			<tr>
				<td>
					MT:[0]"游客访问已关闭"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		<form action="" method="post">
		Type<input type="text" id="Type" value="custom">
        <input type="button" id="sumbit" value="提交">
		</form>
	</div>
	<br>
    <br>
	<!--1-4-->
	 <div id="1-4">
		<h3  id="one_four">1-4 获取用户信息&nbsp;&nbsp;User_info&nbsp;&nbsp;&nbsp;       POST</h3>
		<P>接口相关参数：A:User_info；AC:basicPull</P>
		<p>参数：<strong>uid:</strong>用户id</p>
		</p>返回：<strong>userName:</strong>用户名;<strong>userDate:</strong>注册时间;<strong>userType:</strong>身份类型（1为学生；2为老师）;<strong>userState:</strong>是否正式（1为正式；2为临时）;</p>
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_four_success">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="one_four_success" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[0]uerName [1]userDate [2]userType [3]userState
				</td>
			</tr>
		</table> 
		<P>结果成功案例："userName":"李四";"userDate":"2014-07-23 10:11:12";"userType":1;userState":1
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_four_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="one_four_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"user_not_exists"
				</td>
			</tr>
			<tr>
				<td>
					MT:[0]"用户不存在"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		<form action="" method="post">
		uid<input type="text" id="uid" value="22">
        <input type="button" id="sumbit" value="提交">
		</form>
	</div>
		<br>
    <br>
	<!--1-5-->
	 <div id="1-5">
		<h3  id="one_five">1-5 完善用户信息&nbsp;&nbsp; User_info&nbsp;&nbsp;&nbsp;       POST</h3>
		<P>接口相关参数：A:User_info；AC:sumbit</P>
		<p>参数：<strong>uid:</strong>用户id;<strong>userName:</strong>用户名;<strong>userRealName:</strong>用户昵称;<strong>schoolId_1:</strong>地区id;<strong>schoolId_2:</strong>学校id;<strong>schoolId_3:</strong>学院id;<strong>schoolId_4:</strong>专业id;<strong>userStudentId:</strong>学号;<strong>userStudentPasswd:</strong>密码;<strong>userEmail:</strong>邮箱;<strong>userTel:</strong>联系电话;<strong>userAccount_qq:</strong>QQ;<strong>userAccount_sina:</strong>新浪微博;<strong>userAccount_renren:</strong>人人;<strong>userIntro:</strong>个人简介;</p>
		</p>返回：NULL
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_five_success">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="one_five_success" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		<P>结果成功案例：NULL
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_five_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="one_five_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:"email_format_error"
				</td>
			</tr>
			<tr>
				<td>
					MT:"邮箱格式错误"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		<form action="" method="post">
		uid<input type="text" id="uid" value="22">
		userName<input type="text" id="userName" value="张三">
		userRealName<input type="text" id="userRealName" value="李四">
		schoolId_1<input type="text" id="schoolId_1" value="1">
		schoolId_2<input type="text" id="schoolId_2" value="2">
		schoolId_3<input type="text" id="schoolId_3" value="2">
		schoolId_4<input type="text" id="schoolId_4" value="1">
		userStudentId<input type="text" id="userStudentId" value="2012021039">
		userStudentPasswd<input type="text" id="userStudentPasswd" value="921128">
		userEmail<input type="text" id="userEmail" value="1009137312@qq.com">
		userTel<input type="text" id="userTel" value="18845299765">
		userAccount_qq<input type="text" id="userAccount_qq" value="1009137312">
		userAccount_sina<input type="text" id="userAccount_sina" value="1009137312@qq.com">
		userACCount_renren<input type="text" id="userACCount_renren" value="15921171834">
		userACCount_userIntro<input type="text" id="userACCount_userIntro" value="Hello World">
        <input type="button" id="sumbit" value="提交">
		</form>
	</div>
    <br>
    <br>
    <!--1-6-->
	 <div id="1-6">
		<h3  id="one_six">1-6 获取更多用户信息&nbsp;&nbsp; User_info&nbsp;&nbsp;&nbsp;       POST</h3>
		<P>接口相关参数：A:User_info；AC:detailPull</P>
		<p>参数：<strong>uid:</strong>用户id;</p>
		</p>返回：<strong>userName:</strong>用户名;<strong>userRealName:</strong>用户昵称;<strong>schoolId_1:</strong>地区id;<strong>schoolId_2:</strong>学校id;<strong>schoolId_3:</strong>学院id;<strong>schoolId_4:</strong>专业id;<strong>userStudentId:</strong>学号;<strong>userStudentPasswd:</strong>密码;<strong>userEmail:</strong>邮箱;<strong>userTel:</strong>联系电话;<strong>userAccount_qq:</strong>QQ;<strong>userAccount_sina:</strong>新浪微博;<strong>userAccount_renren:</strong>人人;<strong>userIntro:</strong>个人简介;
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_six_success">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="one_six_success" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[1]userName [2]userRealName [3]schoolId_1 [4]schoolId_2 [5]schoolId_3 [6]schoolId_4 [7]userStudentId [8]userSutdentPasswd [9]userEmail 
  [10]userTel [11]userAccount_qq [12]userAccount_sina [13]userAccount_renren [14]userIntro [15]userAvatar//这里应该有更多的东西
				</td>
			</tr>
		</table> 
		<P>结果成功案例：.....
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one_six_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="one_six_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:NULL
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		<form action="" method="post">
		uid<input type="text" id="uid" value="22">
        <input type="button" id="sumbit" value="提交">
		</form>
	</div>
    <br>
    <br>
    
    <h2 id="table_info_jk">二.课程表接口</h3>
		<!--2-1-->
		<div id="2-1">
		<h3 id="two_one">2-1 正常请求课表 &nbsp;&nbsp;Curriculum_get&nbsp;&nbsp;&nbsp;      POST</h3>
		<P>接口相关参数：A:Curriculum_User；AC:getByTime</P>
		<p>参数：<strong>uid:</strong>用户id;<strong>divection:</strong>方向;<strong>start_time:</strong>开始时间（时间可以具体到分，也可以具体到日）;<strong>end_time:</strong>结束时间;<strong>school_week:</strong>学校周</p>
		<p>返回：<strong>divection:</strong>方向;<strong>class_day_num:</strong>每天课程数;<strong>class_array:</strong>课程数组</p>
		<p><strong>课程数组:</strong>name:课程名称;type:课程类型;id:课程id;操作时用  teacherId：教师id；teacherName:教师姓名；status：老师状态</p>
		<p><strong>课程状态：</strong>normal_class：正常；no_class：没课；self_study：自习</p>
		<p><strong>课程状态：</strong>normal：正常；pause：暂停</p>
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two_one_suceess">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="two_one_suceess" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[0]divection [1]class_day_num [2]class_array
				</td>
			</tr>
		</table> 
		<P>结果成功案例："uid":vertical&nbsp;"class_day_num":"5"&nbsp;"class_array":[0]{['id']2 ['name']"高等数学" ['type']['normal_class'] ['teacherId']24 ['teacherName']"张三" ['status']'normal'.....}
				[1]{['id']3 ['name']NULL ['type']"no_class" }
				[2]{['id']5 ['name']"大学英语" ['type']['normal_class'] ['teacherId']23 ['teacherName']"李四" ['status']'pause'.....}	
				[3]{['id']8 ['name']"自习" ['type']'self_study' ['status']'pause'.....}	</P>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two_one_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="two_one_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"class_never_push" 
				</td>
			</tr>
			<tr>
				<td>
					MT:[0]"从未提交过课表"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		测试：
		<form action="" method="post">
		divection<input type="text" id="divection" value="vertical">
		start_time<input type="text" id="start_time" value="2014-9-1">
        end_time<input type="text" id="end_time" value="2014-9-7">
        school_week<input type="text" id="school_week" value="1">
        <input type="button" id="sumbit" value="提交">
		</form>
		  </div>
		<br>
		<br>
		<!--2-2-->
		<div id="2-2">
		<h3 id="two_two">2-2 从学校服务器拉取课表 &nbsp;&nbsp;Curriculum_pull_from_school_server&nbsp;&nbsp;&nbsp;      POST</h3>
		<P>接口相关参数：A:Curriculum_User；AC:pullFromSchool</P>
		<p>参数：NULL
		<p>返回：<strong>divection:</strong>方向;<strong>class_day_num:</strong>每天课程数;<strong>class_array:</strong>课程数组</p>
		<p><strong>课程数组:</strong>name:课程名称;type:课程类型;id:课程id;操作时用  teacherId：教师id；teacherName:教师姓名；status：老师状态</p>
		<p><strong>课程状态：</strong>normal_class：正常；no_class：没课；self_study：自习</p>
		<p><strong>课程状态：
		</strong>normal：正常；pause：暂停</p>
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two_two_suceess">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="two_two_suceess" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[0]divection [1]class_day_num [2]class_array
				</td>
			</tr>
		</table> 
		<P>结果成功案例："uid":vertical&nbsp;"class_day_num":"5"&nbsp;"class_array":[0]{['id']2 ['name']"高等数学" ['type']['normal_class'] ['teacherId']24 ['teacherName']"张三" ['status']'normal'.....}
				[1]{['id']3 ['name']NULL ['type']"no_class" }
				[2]{['id']5 ['name']"大学英语" ['type']['normal_class'] ['teacherId']23 ['teacherName']"李四" ['status']'pause'.....}	
				[3]{['id']8 ['name']"自习" ['type']'self_study' ['status']'pause'.....}	</P>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two_two_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="two_two_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"school_server_error_500" [1]"html_preg_failed"
				</td>
			</tr>
			<tr>
				<td>
					MT:[0]"学校服务器故障：500错误" [1]"课表页面HTML正则匹配失败"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		测试：
		<form action="" method="post">
        <input type="button" id="sumbit" value="提交">
		</form>
		  </div>
		<br>
		<br>
	  <!--2-3-->
		<div id="2-3">
		<h3 id="two_three">2-3 编辑课表 &nbsp;&nbsp;Curriculum_edit&nbsp;&nbsp;&nbsp;      POST</h3>
		<P>接口相关参数：A:Curriculum_User；AC:editTemSave</P>
		<p>参数：<strong>action:</strong>操作类型;<strong>divection:</strong>方向;<strong>class_day_num:</strong>每天课程数;<strong>class_array:</strong>课程数组</p>
		<p><strong>课程数组:</strong>name:课程名称;type:课程类型;id:课程id;操作时用  teacherId：教师id；teacherName:教师姓名；status：课程状态</p>
		<p><strong>课程状态：</strong>normal_class：正常；no_class：没课；self_study：自习</p>
		<p><strong>老师状态：</strong>normal：正常；pause：暂停</p>
		<p>返回：NULL
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two_three_suceess">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="two_three_suceess" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		<P>结果成功案例：NULL</P>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two_three_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="two_three_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"empty_commit" [1]"format_error"
				</td>
			</tr>
			<tr>
				<td>
					MT:[0]"没有提交内容" [1]"提交数据出错"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		测试：
		<form action="" method="post">
			  action<input type="text" id="action" value="commit">
			  divection<input type="text" id="divection" value="vertical">
			  class_day_num<input type="text" id="class_day_num" value="5">
			  name<input type="text" id="name" value="高等数学">
			  type<input type="text" id="type" value="normal_class">
			  teacher_Id<input type="text" id="teacher_Id" value="24">
			  teacher_name<input type="text" id="teacher_name" value="张三">
			  status<input type="text" id="status" value="normal">     
             <input type="button" id="sumbit" value="提交">
		</form>
		  </div>
		<br>
		<br>
		<!--2-4-->
		<div id="2-4">
		<h3 id="two_four">2-4 确认保存 &nbsp;&nbsp;Curriculum_edit&nbsp;&nbsp;&nbsp;      POST</h3>
		<P>接口相关参数：A:Curriculum_User；AC:editSave</P>
		<p>参数：<strong>action:</strong>操作类型;</p>
		<p>返回：<strong>divection:</strong>方向;<strong>class_day_num:</strong>每天课程数;<strong>class_array:</strong>课程数组</p>
		<p><strong>课程数组:</strong>name:课程名称;type:课程类型;id:课程id;操作时用  teacherId：教师id；teacherName:教师姓名；status：老师状态</p>
		<p><strong>课程状态：</strong>normal_class：正常；no_class：没课；self_study：自习</p>
		<p><strong>课程状态：</strong>normal：正常；pause：暂停</p>
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two_four_suceess">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="two_four_suceess" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[0]divection [1]class_day_num [2]class_array
				</td>
			</tr>
		</table> 
		<P>结果成功案例："divection":"vertical"&nbsp;"class_day_num":5&nbsp;"class_array":  [0]{['id']2 ['name']"高等数学" ['type']['normal_class'] ['teacherId']24 ['teacherName']"张三" ['status']'normal'.....}//name:课程名称 id:课程id，操作时用  teacherId：教师id
				[1]{['id']3 ['name']NULL ['type']"no_class" }
				[2]{['id']5 ['name']"大学英语" ['type']['normal_class'] ['teacherId']23 ['teacherName']"李四" ['status']'pause'.....}	
				[3]{['id']8 ['name']"自习" ['type']'self_study' ['status']'pause'.....}	</P>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two_four_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="two_four_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"empty_commit"
				</td>
			</tr>
			<tr>
				<td>
					MT:[0]"没有提交内容"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		测试：
		<form action="" method="post">
			  action<input type="text" id="action" value="push">
              <input type="button" id="sumbit" value="提交">
		</form>
		  </div>
		<br>
		<br>
		
		  <h2 id="school_info_jk">三.学校信息接口</h3>
		<!--3-1-->
		<div id="3-1">
		<h3 id="three_one">3-1 获取学校名称和id &nbsp;&nbsp;School_info&nbsp;&nbsp;&nbsp;   POST</h3>
		<P>接口相关参数：A:School_Info；AC:getSchoolListByKey</P>
		<p>参数：<strong>action:</strong>操作类型;<strong>schoolName:</strong>学校名称;</p>
		<p>返回：<strong>school_array:</strong>学校数组;</p>
		<p><strong>学校数组:</strong>schoolName:学校名称;schoolId:学校Id;schoolType:学校类型;（本科、专科）</p>
		<p>返回结果案例：</p>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#three_one_suceess">
                                    返回 成功案例
        </a>
      </h4>
    </div>
    <div id="three_one_suceess" class="panel-collapse collapse in">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:success
				</td>
				<td>
					E:1
				</td>
				<td>
					M:Null
				</td>
			</tr>
			<tr>
				<td>
					MT:NULL
				</td>
				<td>
					C:sdfjsajdflasjdfljsdlfa 
				</td>
				<td>
					V:[0]school_array
				</td>
			</tr>
		</table> 
		<P>结果成功案例："school_array":[0]{['schoolName']"齐齐哈尔大学" ['schoolId']22 ['schoolType']1} [1]{['schoolName']"齐齐哈尔大学医学院" ['schoolId']23 ['schoolType']2}</P>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#three_one_failed">
                                 返回失败案例
        </a>
      </h4>
    </div>
    <div id="three_one_failed" class="panel-collapse collapse">
      <div class="panel-body">
         	<table class="table table-bordered table-condensed">
			<tr>
				<td>
					S:failed 
				</td>
				<td>
					E:1
				</td>
				<td>
					M:[0]"class_never_push" 
				</td>
			</tr>
			<tr>
				<td>
					MT:[0]"从未提交过课表"
				</td>
				<td>
					C:NULL
				</td>
				<td>
					V:NULL
				</td>
			</tr>
		</table> 
		
      </div>
    </div>
  </div>
  </div>

		测试：
		<form action="" method="post">
		action<input type="text" id="action" value="search_school">
        schoolName<input type="text" id="schoolName" value="齐齐哈尔">
        <input type="button" id="sumbit" value="提交">
		</form>
		  </div>
		<br>
		<br>
	

	</body>
	<!-- 定位元素  StickUp Javascript 文件 -->
		<script src="http://www.bootcss.com/p/stickup/js/stickUp.min.js"></script>	
	<!-- 定位元素  自定义设置  Javascript 文件 -->	
        <script type="text/javascript">
              //initiating jQuery
              jQuery(function($) {
                $(document).ready( function() {
                  //enabling stickUp on the '.navbar-wrapper' class
                  $('.navbar-wrapper').stickUp();
                   /*$('.navbar-wrapper').stickUp({
                  	parts: {
                  		          0:'main_info',
                                  1:'user_info',
                                  2:'table_info',
                                  3:'school_info',
                                 
                                },
                                itemClass: 'menuItem',
                                itemHover: 'active'
                              });*/
                });
              });

            </script>	
</html>