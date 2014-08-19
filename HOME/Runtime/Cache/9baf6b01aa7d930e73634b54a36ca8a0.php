<?php if (!defined('THINK_PATH')) exit();?><!--
作者：范志俊
时间：2014-07-25
描述：个人资料页面
-->
<!--
作者：1009137312@qq.com
时间：2014-08-07
描述：完善-->
<?php session_start();?>
<input type="hidden" value="<?php echo $_COOKIE['uid'];?>" id="hidden_uid">
<input type="hidden" value="<?php echo $_COOKIE['type'];?>" id="hidden_type">
<input type="hidden" value="<?php echo $_COOKIE['state'];?>" id="hidden_state">
<input type="hidden" value="<?php echo $_COOKIE['utype'];?>" id="hidden_utype">
<script>
	var APP = "__APP__";
	var IMG = "__IMG__"; 
</script>
<style>
	#editor {
		overflow: scroll;
		font-size: 14px;
		min-height: 100px;
		max-height: 300px;
		max-width: 500px;
	}
	#input_text {
		height: 40px;
	}
</style>
<div class="title">
	<h2>我的资料</h2>
	<!--
	作者：范志俊
	时间：2014-07-25
	描述：Top栏，登录和注册，显示用户头像和用户名
-->
<script>
	var APP="__APP__";
</script>

<!-- 自定义 top页面 CSS 文件 -->
<link rel="stylesheet" href="__CSS__/index_top.css"/>


<a href="#" title="<?php echo $_COOKIE['uid'];?>" id="user_login_name" class="glyphicon glyphicon-user" style="font-size: 18px;">
<!-- 假如 session不存在或设置的值为空，即没有登录，显示登录和注册button-->

<!-- session 存在，即登录成功就显示用户名 -->
 <strong style="color:#4795d1;padding-right:2px;font-size: 16px;" id="login_user_id">Hello 
 	<?php  if($_COOKIE['type']=="normal_student"||$_COOKIE['utype']=1) { echo "学生"; } else { echo "教师"; } ?>:<?php echo $_COOKIE['uid']; ?></strong>
 	
  </a>
  <a id="login_out" style="cursor:pointer;font-size: 18px;">注销</a>
  <script>
  		$(document).ready(function(){
  			$("#login_out").click(function(){
  				$.ajax({
  					type:"post",
  					url:APP+"Index/do_logout",
  					async:true,
  					success:function(data)
  					{
  						if(data==1)
  						window.location.href=APP+"Index/index";
  					}
  				});
  			});
  		});
  </script>
</div>
<article class="larg">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							完善资料
						</a></h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<form id="user_info_form" method="post">
								
								<table class="table table-striped  table-condensed" id="user_info_add">
									<tr>
										<td>真实姓名: </td>
										<td width="100px">
										<input type="text" placeholder="UserRealName" id="userRealName" value=""  class="input_text">
										</td>
										<td>
										<p id="userrealname_warning"></p></td>
									</tr>
									<tr>
										<td> 学校: </td>
										<td>
										<p class="text-info"  id="schoolId_1" style="width: 40%;"><?php echo ($schoolId_1); ?></p>
									     <input type="hidden" value="<?php echo ($schoolId_1_id); ?>" id="schoolId_1_id">
										</td>
										<td>
										<p class="text-warning" id="school_1_warning"></p></td>
									</tr>
									<tr>
										<td> *学院: </td>
										<td>
											<select id="sclid2" size="5"  style="width: 40%;">
												<!--<?php if(is_array($collist)): foreach($collist as $key=>$list): ?><option value="<?php echo ($list["sclid2"]); ?>"><?php echo ($list["sclname2"]); ?></option><?php endforeach; endif; ?>-->
											</select>
											<input type="hidden" value="<?php echo ($schoolId_2_id); ?>" id="schoolId_2_id">
										</td>
										<td>
										<p class="text-warning" id="school_2_warning"></p></td>
									</tr>
									<tr>
										<td> *专业: </td>
										<td>
										<select id="sclid3" size="5" style="width: 40%;"></select>
										<input type="hidden" value="<?php echo ($schoolId_3_id); ?>" id="schoolId_3_id">
										</td>
										<td>
										<p class="text-warning" id="school_3_warning"></p></td>
									</tr>
									<tr>
										<td> 班级: </td>
										<td>
										<select id="sclid4" size="5" style="width: 40%;"></select>
										<input type="hidden" value="<?php echo ($schoolId_4_id); ?>" id="schoolId_4_id">
										</td>
										<td>
										<p class="text-warning" id="school_4_warning"></p></td>
									</tr>
									<tr>
										<td> *邮箱: </td>
										<td>
										<input type="text" placeholder="Email" value="<?php echo ($userEmail); ?>"  class="input_text" id="userEmail">
										@
										<select id="email_select">
											<option value="qq.com">qq.com</option>
											<option value="163.com">163.com</option>
											<option value="126.com">126.com</option>
											<option value="sina.com">sina.com</option>
											<option value="sohu.com">sohu.com</option>
											<option value="yeah.net">yeah.net</option>
											<option value="139.com">139.com</option>
											<option value="21cn.com">21cn.com</option>
											<option value="gmail.com">gmail.com</option>
											<option value="hotmail.com">hotmail.com</option>
										</select></td>
										<td>
										<p class="text-warning" id="school_1_warning"></p></td>
									</tr>
									<tr>
										<td> 联系方式: </td>
										<td>
										<input type="text" placeholder="TelePhone" value="<?php echo ($userTel); ?>"  class="input_text" id="userTel">
										</td>
										<td>
										<p class="text-warning" id="phone_warning"></p></td>
									</tr>
									<tr>
										<td> QQ: </td>
										<td>
										<input type="text" placeholder="QQ" value="<?php echo ($userAccount_qq); ?>"  class="input_text" id="userAccount_qq">
										</td>
										<td>
										<p class="text-warning" id="qq_warning"></p></td>
									</tr>
									<tr>
										<td> 新浪微博: </td>
										<td>
										<input type="text" placeholder="Sina" value="<?php echo ($userAccout_sina); ?>"  class="input_text" id="userAccount_sina">
										</td>
										<td>
										<p class="text-warning" id="sina_warning"></p></td>
									</tr>
									<tr>
										<td> 人人网: </td>
										<td>
										<input type="text" placeholder="RenRen" value="<?php echo ($userAccout_renren); ?>"  class="input_text" id="userAccount_renren">
										</td>
										<td>
										<p class="text-warning" id="renren_warning"></p></td>
									</tr>
									<tr>
										<td> 签名: </td>
										<td>										
											<textarea id="userInfo" class="input_text" style="width: 40%" rows="3"><?php echo ($userIntro); ?></textarea></td>
										<td>
										<p class="text-warning" id="userinfo_warning"></p></td>
									</tr>
									<tr>
										<td></td>
										<td>
										<button type="button" id="loading-example-btn" data-loading-text="Loading..." class="btn btn-info">
											提交信息
										</button></td>
										<td></td>
									</tr>
									<!--
                                    	
                                    <tr>
										<td>头像上传：</td>
										<td colp="1">
										<input type="file" name="upload_file"id="upload_file"/>
										</td>
										<td>
										<input type="hidden"id="path"name="path"/>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
										<button type="button" onclick="ajaxFileUpload()" style="color: #000000;" class="btn btn-success">
											上传照片
										</button></td>
										<td></td>
									</tr>-->
								</table>

								<!--<script type="text/javascript" src="__JS__/ajaxfileupload.js"></script>
								<script type="text/javascript">
									function ajaxFileUpload() {
										$.ajaxFileUpload({
											url : "uploadPhoto.php",
											secureuri : false,
											fileElementId : "upload_file",
											dataType : "json",
											success : function(data, status) {
												alert(data);
												if (data.indexOf("error") >= 0) {
													alert("文件上传失败");
												} else {
													alert("here");
													var upload = document.getElementById("upload");
													upload.innerText = "文件已上传";
													var path = document.getElementById("path");
													path.value = data;
												}
											},
											error : function(data, status, e) {
												alert(e);
											}
										});
									}
									</script>-->
                                    <script >
                                    $(document).ready(function(){
                                    	var schoolId_1_id=$("#schoolId_1_id").val();
                                    	
                                    	//获取学院;
                                    $.ajax({
                                    	type:"post",
                                    	url:APP+"Public/get_col_list",
                                    	
                                    	data:{sclid1:schoolId_1_id},
                                    	dataType:"json",
									     success:function(data) {
										$.each(data, function(i, item){
									   $("#sclid2").append("<option value='"+item.colid+"'>"+item.colname+"</option>");
									 });
									},
									error:function(data){
                                       $("#school_2_warning").html("获取列表失败");
									}
									});
                                 //专业
                                    $.ajax({
                                    	type:"post",
                                    	url:APP+"Public/get_spe_list",
                                    	
                                    	data:{sclid1:schoolId_1_id},
                                    	dataType:"json",
									     success:function(data) {
										$.each(data, function(i, item){
									   $("#sclid2").append("<option value='"+item.colid+"'>"+item.colname+"</option>");
									 });
									},
									error:function(data){
                                       $("#school_2_warning").html("获取列表失败");
									}
									});
									$("#loading-example-btn").click(function(){
									var userid=$("#hidden_uid").val();
									var userRealName=$("#userRealName").val();
									var schoolId_1=$("#schoolId_1").val();
									var schoolId_2=$("#schoolId_2").val();
									var schoolId_3=$("#schoolId_3").val();
									var schoolId_4=$("#schoolId_4").val();
									var ustuid=$("#ustuid").val();
									var ustupass=$("#ustupass").val();
									var userEmail=$("#userEmail").val();
									var Email_address=$("#email_select option:selected").text();
									var Email= userEmail+"@"+Email_address;
									var userTel=$("#userTel").val();
									var userAccount_qq=$("#userAccount_qq").val();
									var userAccount_renren=$("#userAccount_renren").val();
									var userAccount_sina=$("#userAccount_sina").val();
									var userInfo=$("#userInfo").val();
									var userAvatar=$("#userAvatar").val();
									$("#loading-example-btn").html("loading");
									$.ajax({
									type : "post",
									url:APP+"User/user_info",
									data:{uid:userid,sclid1:schoolId_1,sclid2:schoolId_2,sclid2:schoolId_2,sclid3:schoolId_3,sclid4:schoolId_4,uemail:Email,
										utel:userTel,uqq:userAccount_qq,usina:userAccount_sina,urenren:userAccount_renren,uinfo:userInfo,type:"sumbit",userRealName:userRealName},
									dataType :"json",
									async : false,
									success : function(data) {
										//alert(data);
									   $("#loading-example-btn").html("提交成功");
									}, error:function(data){
                                       $("#loading-example-btn").html("重试");
									}
									});
									});
									});
								</script>
							</form>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							修改密码信息
						</a></h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="bs-example bs-example-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
									<li class="active" style="background-color: #F7F7F7;">
										<a href="#home" role="tab" data-toggle="tab">
											修改教务信息
										</a>
									</li>
									<li class="">
										<a href="#profile" role="tab" data-toggle="tab">
											修改登录信息
										</a>
									</li>
								</ul>
								<div id="myTabContent" class="tab-content">
									<div class="tab-pane fade active in" id="home">
										<table class="table table-striped  table-condensed" id="password_change_jw">
											<tr>
												<td width="100px"> 学号： </td>
												<td>
												<input type="text" id="jw_studentId" placeholder="StudentId" class="input_text">
												</td>
												<td>
												<p class="bg-danger" id="jw_studentId_warning"></p></td>
											</tr>
											<tr>
												<td> 新密码： </td>
												<td>
												<input type="password" id="jw_password" placeholder="StudentPwd" class="input_text">
												</td>
												<td>
												<p class="bg-danger" id="jw_warning"></p></td>
											</tr>
											<tr>
												<td></td>
												<td>
												<button type="button" id="jw_button" data-loading-text="Loading..." class="btn btn-info">
													提交信息
												</button></td>
											</tr>
										</table>
									</div>
									<div class="tab-pane fade" id="profile">
										<table class="table table-striped   table-condensed" id="password_change_dl">
											<tr>
												<td  width="100px">旧密码： </td>
												<td width="200px">
												<input type="text" id="old_password_xg" class="input_text" placeholder="OldPassword">
												</td>
												<td>
												<p class="bg-danger" id="old_password_warning"></p></td>
											</tr>
											<tr>
												<td> 新密码： </td>
												<td>
												<input type="password" id="new_password_xg" class="input_text"  placeholder="NewPassword">
												</td>
												<td>
												<p class="bg-danger" id="new_password_warning"></p></td>
											</tr>
											<tr>
												
												<td>
												<button type="button" id="xg_button" data-loading-text="Loading..." class="btn btn-info">
													提交信息
												</button>
												
												</td>
												<td><p class="text-success" id="xg_warning"></p></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function(){
					$("#jw_button").click(function() {
						var student_Id = $("#jw_studentId").val();
						var student_pwd = $("#jw_password").val();
						$.ajax({
							type : "post",
							data : {
								type : "sumbit",
								studentId : student_Id,
								studentpwd : student_pwd
							},
							url : APP + "User/user_info",
							dataType : "json",
							async : false,
							success : function(data) {
								if (data.S= "success")
									$("#jw_warning").html("提交成功");
								else {
									$("#jw_warning").html(dataMT);
								}
							},
							error : function(data) {
								$("#jw_warning").val("请刷请，重试~");
							}
						});
					});
					$("#xg_button").click(function() {
						var old_pwd = $("#old_password_xg").val();
						var new_pwd = $("#new_password_xg").val();
						var user_uid = $("#hidden_uid").val();
						
						$.ajax({
							type : "post",
							data : {
								oldpwd : old_pwd,
								newpwd : new_pwd,
								uid : user_uid
							},
							url : APP + "User/update_password",
							dataType : "json",
							async : false,
							success : function(data) {
								if (data.S = "success")
								{
									alert(1);
									$("#xg_warning").html("提交成功");
							     }
								else {
									$("#old_password_warning").html(data.MT);
								}
							},
							error : function(data) {
								$("#xg_warning").html("请刷请，重试~");
							}
						});
					});
					});
				</script>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							其他功能
						</a></h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
							<p>
								我们正在收集相关意见数据，诸位想要拥有什么功能。
							</p>
							<p>
								请至件到我们的邮箱
								<a href="mailto:ipaikt@163.com" style="color: #f04037;">
									ipaikt@163.com
								</a>
							</p>
							<p>
								我们会结合相关建议，制作出更加完美的功能
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

</article>