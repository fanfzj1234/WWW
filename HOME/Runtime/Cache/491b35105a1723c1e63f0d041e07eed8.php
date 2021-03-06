<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="">
		<meta name="author" content="">

		<title>爱课课堂||登录</title>
	</head>
	<script type="text/javascript">
		var APP = "__APP__";
		var IMG = "__IMG__";
	</script>
	<script type="text/javascript" src="__JS__/jquery.js"></script>
	<script src="__JS__/jquery.scrollfollow.js" type="text/javascript"></script>
	<script src="__JS__/jquery.min.js"></script>
	<script src="__JS__/supersized.3.2.7.min.js"></script>
	<script src="__JS__/supersized-init.js"></script>
	<script src="__JS__/modernizr.js"></script>
	<script src="__JS__/index_main.js"></script>
	<link rel="stylesheet" href="__CSS__/font-awesome.min.css">
	<link rel="stylesheet" href="__CSS__/login_reset.css">
	<link rel="stylesheet" href="__CSS__/supersized.css">
	<link rel='stylesheet' href='__CSS__/jquery-ui.css'>
	<link rel='stylesheet prefetch' href='__CSS__/bootstrap.min.css'>
	<link rel="stylesheet" href="__CSS__/login_style.css" media="screen" type="text/css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/index_login.css"/>

	<body class="login-page" >
		<div class="page-container">
			<div id="logo">
				Ipaikt
			</div>
			<div class="login-form">

				<div class="login-content">

					<form method="post"  class="form-horizontal" name="user_login">

						<div class="form-group">

							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>

								<input type="text" class="form-control" name="user_name" id="user_name_login" placeholder="Username" autocomplete="off" />
							</div>

						</div>

						<div class="form-group">

							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>

								<input type="password" class="form-control" name="user_pwd" id="password_login" placeholder="Password" autocomplete="off"/>
							</div>

						</div>
						<div class="form-group">

							<div class="input-group">
								<div class="input-group-addon">
									<i><strong class="glyphicon glyphicon-picture"></strong></i>
								</div>
								<input type="text" class="form-control" name="code" id="code" placeholder="Code" autocomplete="off" style="height: 40px;" />
								<span class="input-group-addon" >
									<img src="__APP__/Public/code" id="code_img" alt="点击验证码刷新" title="点击验证码刷新">
								</span>
							</div>

						</div>

						<div class="form-group">
							<!--<button type="submit" class="btn btn-primary btn-block btn-login" id="login-sub-btn">-->
							<button type="button" id="login-sub-btn" class="btn btn-primary btn-block btn-login">
								<i class="glyphicon glyphicon-log-in"></i>
								Login In
							</button>
						</div>
						<div class="form-group">
							<p id="login_alert" style="color:#F00;"></p>
						</div>
						<div class="form-group">
							© 2014 ipaikt |
								<a href="http://www.ipaikt.com" style="color: #f04037;">
									爱拍课堂
								</a>

						</div>

					</form>
				</div>
				<div style="text-align:center;clear:both;"></div>

			</div>

		</div>

	</body>
		<script>
		$(document).ready(function() {
					/*验证码验证*/
					var code;
					var code_yz;
					$("#code").keyup(function(e) {
						code= $("#code").val();
						$.ajax({
						    type : "post",
							url : APP + "/Login/verify",
							data : {verify :code},
							success : function(data) {
								if(data==1)
                               {
                               	code_yz=1;
                               	$("#login_alert").empty();
								$("#login_alert").append("验证码正确");
                               }
                               else{
                               	$("#login_alert").empty();
								$("#login_alert").append("验证码错误，请重新输入");
                               	code_yz=0;
                               }
							},
							error : function(data) {
								code_yz=0;
								$("#login_alert").empty();
								$("#login_alert").append("验证码错误，请重新输入");
							}
					    });
					});
					/*登录*/
					$("#login-sub-btn").click(function() {
						login_go();
					});
					$(".login-content").keydown(function(e) {
							if (e.keyCode == 13) {
								login_go();
							}
						});
						function login_go() {
							if (code_yz == 1) {
								$("#login-sub-btn").html("Loading...");
								var username_input = $("#user_name_login").val();
								var password_input = $("#password_login").val();
								$.ajax({
									type : "post",
									url : APP + "Login/user_login",
									data : {
										username : username_input,
										password : password_input
									},
									dataType : "json",
									success : function(data) {
										if (data==1) {
											$("#login_alert").empty();
											$("#login_alert").attr("class", "alert alert-success");
											$("#login_alert").append("登录成功");
											window.location.href = APP + "Index/index_main";
										}
										else{
											$("#login_alert").empty();
											$("#login_alert").attr("class", "alert alert-danger");
											$("#login_alert").append("" + data+ "");
										}
									},
									error : function() {
										$("#login_alert").empty();
										$("#login_alert").attr("class", "alert alert-danger");
										$("#login_alert").append("登录失败，请重新登录");
									}
								});
							} else {
								alert("验证码错误，请重新输入！");
								$("#code").focus();
							}
						}

				});
			</script>
</html>