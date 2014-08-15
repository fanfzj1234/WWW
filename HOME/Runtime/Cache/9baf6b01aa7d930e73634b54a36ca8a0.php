<?php if (!defined('THINK_PATH')) exit();?><!--
作者：范志俊
时间：2014-07-25
描述：个人资料页面
-->
<script>
	var APP = "__APP__";
	var IMG = "__IMG__"; 
</script>

<div class='title'>
	<h2>我的资料</h2>
	<!--
	作者：范志俊
	时间：2014-07-25
	描述：Top栏，登陆和注册，显示用户头像和用户名
-->
<script>
	var APP="__APP__";
</script>

<!-- 自定义 top页面 CSS 文件 -->
<link rel="stylesheet" href="__CSS__/index_top.css"/>


<a href="#" title="<?php session_start(); echo $_SESSION['uid'];?>" id="user_login_name" class="glyphicon glyphicon-user" style="font-size: 18px;">
<!-- 假如 session不存在或设置的值为空，即没有登录，显示登录和注册button-->

<!-- session 存在，即登录成功就显示用户名 -->
 <strong style="color:#4795d1;padding-right:2px;font-size: 16px;" id="login_user_id">Hello Uid:<?php echo $_SESSION['uid']; ?>&nbsp;&nbsp;用户</strong>
 <input type="hidden" id="session_uid" value="<?php echo $_SESSION['uid'];?>" text="<?php echo $_SESSION['uid'];?>">
  <input type="hidden" id="week_num" value="">
  </a>
</div>
<article class='larg'>
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
							
							<table class="table table-striped table-hover table-condensed" id="user_info_add">
								<p>你好！Id：&nbsp;<?php echo $_SESSION['uid']; ?>&nbsp;用户</p>
								<tr>
									<td> 用户名: </td>
									<td>
									<input type="text" placeholder="UserName" id="userName" value="{ $userName }">
									</td>
									<td>
									<p id="username_warning"></p></td>
								</tr>
								<tr>
									<td> 昵称: </td>
									<td>
									<input type="text" placeholder="UserRealName" id="userRealName" value="{ $userRealName }">
									</td>
									<td>
									<p id="userrealname_warning"></p></td>
								</tr>
								<tr>
									<td> 学校: </td>
									<td>
									<p>
										{ $userRealName }">
									</p></td>
									<td>
									<p id="school_1_warning"></p></td>
								</tr>
								<tr>
									<td> 学院: </td>
									<td>
									<input type="text" placeholder="College" value="{ $school_2 }">
									</td>
									<td>
									<p id="school_2_warning"></p></td>
								</tr>
								<tr>
									<td> 专业: </td>
									<td>
									<input type="text" placeholder="Major" value="{ $school_3 }">
									</td>
									<td>
									<p id="school_3_warning"></p></td>
								</tr>
								<tr>
									<td> 班級: </td>
									<td>
									<input type="text" placeholder="Class" value="{ $school_4 }">
									</td>
									<td>
									<p id="school_4_warning"></p></td>
								</tr>
								<tr>
									<td> 邮箱: </td>
									<td>
									<input type="text" placeholder="Class" value="{ $userEmaill }">
									@
									<select>
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
									<p id="school_1_warning"></p></td>
								</tr>
								<tr>
									<td> 联系方式: </td>
									<td>
									<input type="text" placeholder="TelePhone" value="{ $userTel }">
									@
									<select>
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
									<p id="school_1_warning"></p></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							修改密码
						</a></h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							<table class="table table-striped table-hover table-condensed" id="user_info_add">

							</table>
						</div>
					</div>
				</div>
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
								（我们正在收集相关意见数据，诸位想要拥有什么功能，请至件到我们的邮箱&nbsp;
								<a href="mailto:ipaikt@163.com" style="color: #f04037;">
									ipaikt@163.com
								</a>
								&nbsp;,我们会结合相关建议，制作出更更完美的功能 ）
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</article>