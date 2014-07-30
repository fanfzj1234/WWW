<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：范志俊
	时间：2014-07-25
         描述：首页页面，包括显示本周课程表，和本周笔记，以及推荐笔记
-->
<script>
    var APP = "__APP__";
	var IMG = "__IMG__";
</script>
<!-- 自定义 table 操作 Javascript 文件 -->
<script src="__JS__/main_table.js"> </script>
<div class='title'>
    <h2>首页</h2>
     <!--
	作者：范志俊
	时间：2014-07-25
	描述：Top栏，登陆和注册，显示用户头像和用户名
-->
<script>
	var APP="__APP__";
</script>
<!-- 自定义 下拉列表，验证码，button特效  操作 Javascript 文件 -->
<script src="__JS__/index_main.js"></script>

<!-- 自定义 获取school列表  操作 Javascript 文件 -->
<script src="__JS__/get_school_list.js"></script>

<!-- 自定义 注册提交  操作 Javascript 文件 -->
<script src="__JS__/user_register.js"></script>


<!-- 自定义 top页面 CSS 文件 -->
<link rel="stylesheet" href="__CSS__/index_top.css"/>


<a href="#" title="<?php echo $_SESSION['uid'];?>" class="glyphicon glyphicon-user" ><strong id="user_login_name" ></strong></a>
<!-- 假如 session不存在或设置的值为空，即没有登录，显示登录和注册button-->
<?php
 session_start(); if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){ ?>

<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
  登陆
</button>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#student_register">
  注册
</button>
<!-- 登陆 Modal 模态框 -->
<div class="modal fade bs-example-modal-sm" id="login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"  aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="login_ModalLabel">登陆爱拍课堂</h4>
      </div>
       <div class="modal-body">
                    <div class="modal-form">
                       <form method="post" role="form" id="form_login">

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="glyphicon glyphicon-user"></i>
						</div>

						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-key"></i>
						</div>

						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>

				</div>
			    <div class="form-group">
                         
                         <div class="input-group">
						<div class="input-group-addon">
							<i><strong class="glyphicon glyphicon-picture"></strong></i>
						</div>
                          <input type="text" class="form-control" name="code" id="code" placeholder="Code" autocomplete="off" />
                          <span class="input-group-addon" ><img src="__APP__/Public/code" id="code_img" alt="点击验证码刷新" title="点击验证码刷新"></span>
                         </div>
						 
                         
                        
				</div>   
			</form>
			<!-- 状态提示栏 -->
			<p id="login_alert" role="alert"></p>
		  </div>
		   
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="loading-example-btn">登陆</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- 学生注册 Modal 模态框-->
<div class="modal fade bs-example-modal-sm" id="student_register" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"  aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="student_register_ModalLabel">学生注册  &nbsp;&nbsp;/ 
        	<button type="button" class="btn btn-link btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#teacher_register" style="margin-top: -3px;"  id="teacher_register_exchange_button">教师注册</button></h4>
      </div>
       <div class="modal-body">
                    <div class="modal-form">&nbsp;
                       <form method="post" role="form" id="form_login">
                       	<div class="form-group">
                         <div class="input-group">
                                 <span class="input-group-addon">学校</span>
                                 <input type="text" id="school_input_1" class="form-control" placeholder="School">
                                    
                         </div>
                          
                        <select class="input-xlarge" multiple="multiple" id="school_list_1" onmouseover="this.size=document.getElementById('school_list_1').length">
                        
                        </select>
                       

                         </div>
                        <div class="form-group">
                         <div class="input-group">
                         	      <span class="input-group-addon">学号</span>
                                  <input type="text" class="form-control" id="studentId"  placeholder="Student No.">
                                  
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="input-group">
                                  <span class="input-group-addon">密码</span>
                                  <input type="password" class="form-control" id="student_password" placeholder="Student Password">
                                  
                         </div>
                        </div>
			</form>
			<!-- 状态提示栏 -->
			<p id="register_alert" role="alert"></p>
		  </div>
		   
      <div class="modal-footer">
      	
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary"  id="loading-example-btn student_register_button">注册</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- 教师注册 Modal 模态框-->
<div class="modal fade bs-example-modal-sm" id="teacher_register" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"  aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       <h4 class="modal-title" id="student_register_ModalLabel">教师注册  &nbsp;&nbsp;/ 
       	<button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-dismiss="modal" data-target="#student_register" style="margin-top: -3px;" id="student_register_exchange_button">学生注册</button></h4>
      </div>
       <div class="modal-body">
                    <div class="modal-form">
                       <form method="post" role="form" id="form_login">
                       	<div class="form-group">
                         <div class="input-group">
                                 <span class="input-group-addon">学校</span>
                                 <input type="text" id="school_input_2" class="form-control" placeholder="School">
                                    
                         </div>
                          
                        <select class="input-xlarge" multiple="multiple" id="school_list_2"  onmouseover="this.size=document.getElementById('school_list_2').length">
                        
                        </select>
                       

                         </div>
                         	<div class="form-group">
                         <div class="input-group">
                                 <span class="input-group-addon">专业</span>
                                 <input type="text" id="discipline_input" class="form-control" placeholder="Discipline">
                                    
                         </div>
                          
                        <select class="input-xlarge" multiple="multiple" id="discipline_list" onmouseover="this.size=document.getElementById('discipline_list').length">
                        
                        </select>
                       

                         </div>
                        <div class="form-group">
                         <div class="input-group">
                         	      <span class="input-group-addon">教师姓名</span>
                                  <input type="text" class="form-control" id="teacherName"  placeholder="TeacherName">
                                  
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="input-group">
                                  <span class="input-group-addon">密码</span>
                                  <input type="password" class="form-control" id="teacher_password" placeholder="Teacher Password">
                                  
                         </div>
                        </div>
                        <div class="form-group">
                        <div class="input-group">
                                  <span class="input-group-addon">再次输入密码</span>
                                  <input type="password" class="form-control" id="teacher_password_again" placeholder="Password Again">
                                  
                         </div>
                        </div>
			</form>
			<!-- 状态提示栏 -->
			<p id="register_alert" role="alert"></p>
		  </div>
		   
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary"  id="loading-example-btn teacher_register_button">注册</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- session 存在，即登录成功就显示用户名 -->
<?php  }else{ ?>
 Hello <strong style="color:#F00;padding-right:2px ;" id="login_user_id"><?php echo $_SESSION['utype']." ".$_SESSION['uid'];?></strong>
 <input type="hidden" id="session_uid" value="<?php echo $_SESSION['uid'];?>">
 <?php
 } ?>



  </div>
<article class='larg'>
<div class="panel-group" id="accordion">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        	本周课程表
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      	<div style="margin-bottom:10px;"><strong >当前时间：</strong><strong id="date" style="margin-left:20px;margin-right: 10px;"></strong></div>
<table id="mytable" cellspacing="0" class="table table-striped"> 
   <tr> 
      <th width="50px"><strong class="glyphicon glyphicon-calendar"></strong></th> 
      <?php  $jdtoday = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y")); $offset = jddayofweek($jdtoday); for($i=1-$offset; $i<=7-$offset; $i++){ $date = strtotime($i.' days'); echo "<th>".date('n-j', $date)."<br>(".date('D', $date).")</th>"; } ?>
   </tr> 
   <tr> 
      <th>一</th> 
      <td><span class="class_open">专业实验I1</span></td> 
      <td><span class="class_open">软件工程</span></td> 
      <td><span class="class_open">大学英语5</span></td> 
      <td><span class="class_open">计算机组成原理</span></td> 
      <td><span class="class_open">软件工程</span></td> 
      <td><span class="class_null">空</span></td> 
      <td><span class="class_null">空</span></td> 
   </tr> 
    <tr> 
      <th>二</th> 
      <td><span class="class_open">数据库原理</span></td> 
      <td><span class="class_open">计算机组成原理</span></td> 
      <td><span class="class_open">数据库原理</span></td> 
      <td><span class="class_open">毛泽东思想和中国特色社会主义理论体系概论2</span></td> 
      <td><span class="class_null">空</span></td> 
      <td><span class="class_open">操作系统</span></td> 
      <td><span class="class_null">空</span></td> 
   </tr> 
    <tr> 
      <th>三</th> 
      <td><span class="class_open">专业实验II2</span></td> 
      <td><span class="class_open">毛泽东思想和中国特色社会主义理论体系概论2</span></td> 
      <td><span class="class_open">数据库系统开发实训</span></td>  
      <td><span class="class_open">操作系统</span></td> 
      <td><span class="class_close">专业实验II2</span></td>
      <td><span class="class_null">空 </span></td> 
      <td><span class="class_null">空 </span></td> 
   </tr> 
    <tr> 
      <th>四</th>  
      <td><span class="class_null">空</span></td> 
      <td><span class="class_open">专业基础实验2</span></td> 
      <td><span class="class_null">空</span></td> 
      <td><span class="class_null">空</span></td> 
      <td><span class="class_open">专业基础实验2</span></td> 
      <td><span class="class_null">空</span></td> 
      <td><span class="class_null">空</span></td> 
   </tr> 
    <tr > 
      <th>五</th>  
      <td><span class="class_open">算法设计与分析</span></td> 
      <td><span class="class_open">微机接口技术</span></td> 
      <td><span class="class_open">算法设计与分析</span></td> 
      <td><span class="class_open">微机接口技术</span></td> 
      <td><span class="class_open">数字系统设计</span></td> 
      <td><span class="class_null">空</span></td> 
      <td><span class="class_null">空</span></td>
   </tr> 
</table> 
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                         本周笔记
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
                                           本周笔记  
<ul class="media-list">
  <li class="media">
    <a class="pull-left" href="#">
       <img style="width: 64px; height: 64px;" class="media-object" src="http://d.hiphotos.baidu.com/image/pic/item/f636afc379310a55d8c966fab54543a9832610ca.jpg" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading">数据库原理</h4>
        <h5 class="media-heading">第一章</h5>
               标签：Sql
    </div>
  </li>
</ul>
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            推荐笔记
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
             推荐笔记      
      </div>
    </div>
  </div>
</div>
</article>