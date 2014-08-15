<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Bootstrap & Snippet plugin core CSS-->
		<link href="__CSS__/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="__CSS__/stickup.css" rel="stylesheet">

		<link href="__CSS__/index_image_style.css" rel="stylesheet">

		<!-- 新 jquery Javascript 文件 -->
		<script type="text/javascript" src='__JS__/jquery-2.1.1.js'></script>

		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css">

		<!-- 可选的Bootstrap主题文件（一般不用引入） -->
		<link rel="stylesheet" href="__CSS__/bootstrap-theme.min.css">

		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="__JS__/bootstrap.min.js"></script>

		<!-- jquery-ui  CSS 文件 -->
		<link rel="stylesheet" href="__CSS__/jquery-ui.css" media="screen" type="text/css" />

		<!--font-awesome  标准文字库  CSS 文件 -->
		<link rel="stylesheet" href="__CSS__/font-awesome.css">

		<!--bootstrap  再编辑   CSS 文件 -->
		<link rel="stylesheet" href="__CSS__/bootstrap.css" media="screen" type="text/css"/>
		<!-- 自定义 下拉列表，验证码，button特效  操作 Javascript 文件 -->
		<script src="__JS__/index_main.js"></script>
		<style>
			#school_list_1, #school_list_2, #discipline_list {
				margin-left: 53px;
				width: 195px;
			}
			.register_style_failed {
				color: #a94442;
			}
			.register_style_success {
				color: #4fc1e9;
			}
			.navbar.navbar-inverse.navbar-static-top a:hover {
				color: #ffffff;
			}
			.navbar.navbar-inverse.navbar-static-top a:hover {
				color: #000000;
			}
			.navbar-inverse .navbar-nav > .active > a {
				background-image: -webkit-linear-gradient(top,#222 0,#282828 100%);
				background-image: -o-linear-gradient(top,#222 0,#282828 100%);
				background-image: -webkit-gradient(linear,left top,left bottom,from(#222),to(#282828));
				background-image: linear-gradient(to bottom,#0A64A4 0,#0A64A4 100%);
				color: #FFFFFF;
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff222222', endColorstr='#ff282828', GradientType=0);
				background-repeat: repeat-x;
				-webkit-box-shadow: inset 0 3px 9px rgba(0,0,0,.25);
				box-shadow: inset 0 3px 9px rgba(0,0,0,.25);
			}
			article, aside, dialog, footer, header, section, footer, nav, figure, menu {
				display: block
			}
		</style>
		<script>
			var APP = "__APP__";
			var IMG = "__IMG__";
			(function() {
				if (!
					/*@cc_on!@*/0)
					return;
				var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');
				var i = e.length;
				while (i--) {
					document.createElement(e[i])
				}
			})()
		</script>

		<script src="__JS__/index_chinazjs.js"></script>

		<title>爱拍课堂||ipaikt</title>
	</head>

	<body style="overflow:scroll;overflow-x:hidden" data-find="_5">
		<!--[if lte IE 8]>
		<noscript>
		<style>.html5-wrappers{display:none!important;}</style>
		<div class="ie-noscript-warning">您的浏览器禁用了脚本，请<a href="">查看这里</a>来启用脚本!或者<a href="/?noscript=1">继续访问</a>.
		</div>
		</noscript>
		<![endif]-->
		<!-- onload="if(window.location.href.indexOf('temp')==-1)window.location.href=window.location.href+'&?temp='+Math.random().toString();" -->
		<!-- START THE COVER -->
		<div id="home" class="carousel" data-find="_4" style="margin-bottom: 20px;">
			<div class="carousel-inner">
				<div class="item active" style="min-height:380px;">
					<div class="container">
						<div class="carousel-caption" style="padding-bottom: 0px;">
							<img src="__IMG__/logo2.png">
							<h1 style="background-color: #0a64a4; border-bottom: 0px solid #0a64a4; ">爱拍课堂</h1>
							<h3>一个 课程表和笔记相结合  APP应用</h3>
							<p>
								记录学习点滴，专注学生学习。用上爱拍，喜欢爱拍，恋上爱拍。
							</p>
							<p style="margin-bottom: 0px;">
								<botton class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
									<strong>登陆</strong>
								</botton>
								<botton class="btn btn-primary_1 btn-lg" data-toggle="modal" data-target="#student_register">
									<strong>注册</strong>
								</botton>
							</p>
						</div>
					</div>
				</div>
			</div><!-- END COVER -->
		</div>
		<!--
		作者：1009137312@qq.com
		时间：2014-07-31
		描述：登陆

		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
		登陆
		</button>
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#student_register">
		注册
		</button>-->
		<!-- 登陆 Modal 模态框 -->
		<div class="modal fade bs-example-modal-sm" id="login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"  aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h5 class="modal-title" id="login_ModalLabel">登陆 &nbsp;&nbsp;/
						<button type="button" class="btn btn-link btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#student_register" style="margin-top: -3px;font-size:14px"  id="student_register_exchange_button">
							学生注册
						</button> /
						<button type="button" class="btn btn-link btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#teacher_register" style="margin-top: -3px;font-size:14px"  id="teacher_register_exchange_button">
							教师注册
						</button></h5>
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
											<i class="glyphicon glyphicon-pencil"></i>
										</div>

										<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
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
							</form>
							<!-- 状态提示栏 -->
							<p id="login_alert" role="alert">
								程序员正在为登陆功能奋战中
							</p>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								取消
							</button>
							<button type="button" class="btn btn-primary_1" data-loading-text="Loading..." id="login_button">
								登陆
							</button>
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
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h5 class="modal-title" id="student_register_ModalLabel">
						<button type="button" class="btn btn-link btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#login" style="margin-top: -3px;font-size:14px"  id="login_exchange_button">
							登陆
						</button>/
						&nbsp;学生注册&nbsp;/
						<button type="button" class="btn btn-link btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#teacher_register" style="margin-top: -3px;font-size:14px"  id="teacher_register_exchange_button">
							教师注册
						</button></h5>
					</div>
					<div class="modal-body">
						<div class="modal-form">
							<form method="post" role="form" id="form_login">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">学校</span>
										<input type="text" id="school_input_1" class="form-control" placeholder="(暂时只支持齐齐哈尔大学)">

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
										<input type="password" class="form-control" id="student_password_1" placeholder="Student Password">

									</div>
								</div>
							</form>
							<!-- 状态提示栏 -->
							<p id="register_alert_stu" role="alert"></p>
						</div>

						<div class="modal-footer">

							<button type="button" class="btn btn-default" data-dismiss="modal">
								取消
							</button>
							<button type="button" class="btn btn-primary_2"  id="student_register_button">
								注册
							</button>
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
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h5 class="modal-title" id="student_register_ModalLabel">
						<button type="button" class="btn btn-link btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#login" style="margin-top: -3px;font-size:14px"  id="login_exchange_button">
							登陆
						</button> /
						<button type="button" class="btn btn-link btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#student_register" style="margin-top: -3px;font-size:14px"  id="student_register_exchange_button">
							学生注册
						</button> /&nbsp;&nbsp;教师注册 </h5>
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
							<p id="register_alert_tea" role="alert"></p>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								取消
							</button>
							<button type="button" class="btn btn-primary_2"  id="teacher_register_button">
								注册
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- START THE NAVBAR -->
		<div class="navbar-wrapper stuckMenu" style="margin-top:0px">
			<div class="container">
				<div class="navwrapper">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#">
									ipaikt
								</a>
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class="menuItem active">
										<a href="#home">
											首页
										</a>
									</li>
									<li class="menuItem">
										<a href="#features">
											特色
										</a>
									</li>
									<li class="menuItem">
										<a href="#updates">
											界面更友好
										</a>
									</li>
									<li class="menuItem">
										<a href="#installation">
											建立更快捷
										</a>
									</li>
									<li class="menuItem">
										<a href="#one-pager">
											复习更方便
										</a>
									</li>
									<li class="menuItem">
										<a href="#extras">
											功能更多多
										</a>
									</li>
									<li class="menuItem">
										<a href="#contact">
											联系我们
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- End Navbar -->

			</div>
		</div>
		<!-- END NAVBAR -->
		<!-- START THE CONTENT -->
		<div id="contents" data-find="_3">

			<!-- START THE FEATURES -->
			<div id="features" class="featurette container marketing">
				<!-- Three columns of text -->
				<div class="row">
					<center>
						<h4 style="margin-bottom:0px;margin-top:20px;"><b>Ipaikt APP</b></h4>
						<h5 style="margin-top:5px;">
						<mute>
							v0.0.1 BETA
						</mute></h5>
					</center>
					<div class="col-lg-4">

						<img src="__IMG__/simple.png">
						<h2>建立更快捷</h2>
						<p>
							课表秒导入，显示云同步
						</p>
						<p>
							有图有真相，笔记轻松建
						</p>
						<p>
							富媒体支持,内容更详实
						</p>
						<p>
							便签轻松加，查找顶呱呱
						</p>
						<p>
							<a class="btn btn-default" href="#installation">
								详细内容 »
							</a>
						</p>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4">
						<img src="__IMG__/onepager.png">
						<h2>复习更方便</h2>
						<p>
							后台能识别，自动理知识
						</p>
						<p>
							资源同步推，课程同步好
						</p>
						<p>
							笔记共分享，人多力量大
						</p>
						<p>
							评测帮不漏，考试有感觉
						</p>
						<p>
							<a class="btn btn-default" href="#one-pager">
								详细信息 »
							</a>
						</p>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4">
						<img src="__IMG__/opensource.png">
						<h2>功能更多多</h2>
						<p>
							老师来帮助，不挂有保障
						</p>
						<p>
							平台版本全，终端任君选
						</p>
						<p>
							<a class="btn btn-default" href="#extras">
								详细信息 »
							</a>
						</p>
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div>
			<!-- END FEATURES -->

			<!-- START THE UPDATES -->
			<div id="updates" class="row featurette">
				<div class="col-lg-12">
					<h2 class="featurette-heading">界面更友好</h2>
				</div>
				<div class="col-lg-offset-1 col-lg-10">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="__IMG__/web_show_1.png" alt="首页">
								<div class="carousel-caption">
									<strong style="color: #000000;">首页界面展示</strong>
								</div>
							</div>
							<div class="item">
								<img src="__IMG__/web_show_3.png" alt="教学周选择">
								<div class="carousel-caption">
									<strong style="color: #000000;">教学周选择功能展示</strong>
								</div>
							</div>
							<div class="item">
								<img src="__IMG__/web_show_2.png" alt="课表">
								<div class="carousel-caption">
									<strong style="color: #000000;">课程表界面展示</strong>
								</div>
							</div>

						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<!-- END UPDATES -->

				<!-- START THE INSTALLATION -->
				<div id="installation" class="row featurette" data-find="_8">
					<div class="col-md-7" data-find="_7">
						<h2 class="featurette-heading">建立更快捷
						<br>
						<span class="text-muted">Set up more quickly.</span></h2>
						<p class="lead">
							<img src="__IMG__/logo2.png" id="logo" alt="爱拍课堂" width="60px"/>
							&nbsp; <strong>笔记支持按学校学号导入课表，课表再也不用自己编辑了，省时省力省心。</strong>
						</p>
						<p class="col-lg-offset-1"></p>
						<p class="lead">
							这些还不够<b><i>!</i></b>拍课堂笔记最吸引人的功能之一是<strong>支持拍照记录方式</strong>。
						</p>
						<p class="lead">
							是不是还在为笔油发愁<b><i>?</i></b>
						</p>
						<p class="lead">
							是不是害怕记慢了跟不上老师的速度<b><i>?</i></b>
						</p>
						<p class="lead">
							是不是还在为抄错的一个字母思考半天想不出来为什么而头痛<b><i>?</i></b>
						</p>
						</p>
						<p class="lead">
							现在我们还支持<b>图片拍摄记录课堂笔记</b>的种种方式
						</p>
						<p class="lead">
							<b><i>方便快捷,就这么简单！</i></b>
						</p>
					</div>
					<div class="col-md-5"></div>
				</div>
				<!-- END INSTALLATION -->

				<!-- START THE ONE-PAGER -->
				<div id="one-pager" class="row featurette">
					<div class="col-md-5"></div>
					<div class="col-md-7">
						<h2 class="featurette-heading">复习更方便<span class="text-muted">
							<br>
							Review the more convenient</span></h2>
						<p class="lead">
							还在为复习没有资源烦恼吗<b><i>?</i></b>
						</p>
						</p>
						<p class="lead">
							还在因为不给别人笔记而当成小抠吗<b><i>?</i></b>
						</p>
						</p>
						<p class="lead">
							<b>
							<img src="__IMG__/logo2.png" id="logo" alt="爱拍课堂" width="60px"/>
							&nbsp;提供强大的笔记分享功能，让您在期末有资源看，有资料看，一键共享，全班受益。</b>
						</p>
						<p class="lead">
							做你的学霸，让他人羡慕崇拜<b><i>!</i></b>
						</p>

						<p class="lead">
							做你的学渣，有资料去参考从而过科当学神<b><i>!</i></b>
						</p>
						<p class="lead">
							<b><i>还等什么，马上开启你的专属爱拍课堂，走出精彩学习之路!</i></b>
						</p>
					</div>
				</div>
				<!-- END ONE-PAGER -->

				<!-- START THE EXTRAS -->
				<div id="extras" class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading">功能更多多
						<br>
						<span class="text-muted">Function more</span></h2>
						<p class="lead">
							笔记，课表，分享还不够<b><i>?</i></b>
						</p>
						</p>
						<p class="lead">
							<strong>一次满足你!</strong>
						</p>
						<p class="lead">
							<img src="__IMG__/logo2.png" id="logo" alt="爱拍课堂" width="60px"/>
							&nbsp;<b>海量的在线教育资源</b>，让你没有老师也能精通一门课程，课堂习题的练习!
						</p>
						<p class="lead">
							<img src="__IMG__/logo2.png" id="logo" alt="爱拍课堂" width="60px"/>
							&nbsp;<b>教师信息发布</b>，让你不再为收不到短信错过重要事件而苦恼。
						</p>
						<p class="lead">
							真的不要再犹豫了<b><i>!</i></b>
						</p>
						<p class="lead">
							<b><i>马上开启你的专属爱拍课堂</i></b>
						</p>

					</div>
					<div class="col-md-5"></div>
				</div>
				<!-- END EXTRAS -->

				<!-- START THE FOOTER -->
				<footer id="contact" class="row featurette" style="padding-bottom: 80px;">
					<div class="row">
						<h2 class="featurette-heading  text-center"><span class="text-muted">ipaikt</span></h2></br>
						<h4 class="text-center">一个 课程表和笔记结合的APP应用</h4>
						<br>
						<div class="text-center col-sm-12 col-lg-12">
							<p>
								© 2014 ipaikt |
								<a href="http://www.ipaikt.com" style="color: #f04037;">
									爱拍课堂
								</a>
							</p>
							<p>
								如果你在使用中发现爱拍有任何不足之处或问题，欢迎至件到我们的
								<a href="mailto:ipaikt@163.com" style="color: #f04037;">
									ipaikt@163.com
								</a>
								我们会及时诊断和修复您的爱拍
							</p>
							<p>
								<b><i>让您更爱您的爱拍。</b></i>
							</p>
						</div>
					</div>
				</footer>
				<!-- END FOOTER -->

			</div>
			<!-- END CONTENT -->

			<!-- Bootstrap & Plugins core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
			<script src="__JS__/jquery.min.js"></script>

			<!-- ### IMPORTANT ### stickUp javascript file -->
			<!-- ######################################### -->
			<script src="__JS__/stickUp.min.js"></script>
			<!-- ######################################### -->

			<!-- ### IMPORTANT ### stickUp options in use -->
			<!-- ######################################## -->
			<script type="text/javascript">
				jQuery(function($) {
					$(document).ready(function() {
						$('.navbar-wrapper').stickUp({
							parts : {
								0 : 'home',
								1 : 'features',
								2 : 'updates',
								3 : 'installation',
								4 : 'one-pager',
								5 : 'extras',
								6 : 'contact'
							},
							itemClass : 'menuItem',
							itemHover : 'active',
							topMargin : 'auto'
						});
					});
				});
			</script>

			<script>
				$(document).ready(function() {
					function student_register_go() {
						var studentId_1 = $("#studentId").val();
						var student_password_1 = $("#student_password_1").val();
						//var schoolId_1=$("#school_input_1").val();
						var schoolId_1 = "齐齐哈大学";
						$("#student_register_button").html("Loading...");
						$.ajax({

							type : "post",
							url : APP + "/Login/user_register",
							data : {
								type : "normal_student",
								studentId : studentId_1,
								student_password : student_password_1,
								schoolId : schoolId_1
							},
							//data: {type:"normal_student",studentId:studentId_1, student_password:student_password_1,schoolId:schoolId_1},
							dataType : "json",
							success : function(data) {

								if (data.S == "success") {
									$("#register_alert").attr("class", "alert alert-success");
									$("#register_alert").append("注册成功");
									window.location.href = APP + "Index/index_main&uid=" + data.uid;
								}
								if (data.S == "failed") {

									$("#register_alert").attr("class", "alert alert-danger");
									$("#register_alert").append("" + data.MT + "");
								}

							},
							error : function(data) {
								$("#register_alert").attr("class", "alert alert-danger");
								$("#register_alert").append("注册失败，请重新注册");
							}
						});

					}


					$("#student_register_button").click(function() {
						student_register_go();
					});
					/*教师注册*/
					$("#teacher_register_button").click(function() {
						teacher_register_go();
					});
					function teacher_register_go() {
						$("#teacher_register_button").html("Loading...");
						var disciplineId_1 = $("#discipline_input").val();
						var teacherName_1 = $("#teacherName").val();
						var teacher_password_1 = $("#teacher_password").val();
						var teacher_password_again_1 = $("#teacher_password_again").val();
						var schoolId_2 = $("#school_input_2").val();
						$.ajax({
							type : "post",
							url : APP + "Login/user_register",
							data : {
								type : "normal_teacher",
								disciplineId : disciplineId_1,
								teacherName : teacherName_1,
								teacher_password : teacher_password_1,
								teacher_password_again : teacher_password_again_1,
								schoolId : schoolId_2
							},
							dataType : "json",
							success : function(data) {
								if (data.S == "success") {
									$("#register_alert").attr("class", "alert alert-success");
									$("#register_alert").append("注册成功");

									window.location.href = APP + "Index/index_main&uid=" + data.uid;
								}
								if (data.S == "failed") {
									$("#register_alert").attr("class", "alert alert-danger");
									$("#register_alert").append("" + data.MT + "");
								}
							},
							error : function() {
								$("#register_alert").attr("class", "alert alert-danger");
								$("#register_alert").append("注册失败，请重新注册");
							}
						});

					}


					$("#student_register").keydown(function(e) {
						if (e.keyCode == 13) {
							student_register_go();
						}
					});
					$("#teacher_register").keydown(function(e) {
						if (e.keyCode == 13) {
							teacher_register_go();
						}
					});
				});
			</script>
	</body>
</html>