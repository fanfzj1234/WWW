<?php if (!defined('THINK_PATH')) exit();?>﻿<!--
作者：范志俊
时间：2014-07-25
描述：首页页面,包括显示本周课程表,和本周笔记,以及推荐笔记
-->
<?php session_start();?>
<input type="hidden" value="<?php echo $_COOKIE['uid'];?>" id="hidden_uid">
<input type="hidden" value="<?php echo $_COOKIE['type'];?>" id="hidden_type">
<input type="hidden" value="<?php echo $_COOKIE['state'];?>" id="hidden_state">
<input type="hidden" value="<?php echo $_COOKIE['utype'];?>" id="hidden_utype">
<script>
	var APP = "__APP__";
	var IMG = "__IMG__"; 
</script>
<script src="__JS__/checkBox.js"></script>
<link href="__CSS__/main_table.css">

<style>
	th {
		font-size: 16px
	}
	span {
		font-size: 14px;
		font: "微软雅黑";
	}
	#mytable, #xxtable {
		width: 100%;
		padding: 0;
		margin: 0;
		text-align: center;
		background-color: #ffffff;
	}

	td {
		border-right: 1px solid #C1DAD7;
		border-bottom: 1px solid #C1DAD7;
		font-size: 14px;
		align-content: center;
		width: 160px;
		color: #000000;
	}
	.detailImg {
		text-align: center;
		position: relative;
		display: -moz-box;
		display: -webkit-box;
	}
	.table-heading {
		font-family: Georgia, serif;
		font-size: 16px;
		font: normal 11px auto "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
		align-content: center;
		color: #101010;
	}
	#detailImg-pre, #detailImg-next {
		position: absolute;
		width: 30px;
		height: 46px;
		top: 30%;
		background: url(__IMG__/page_button.gif) 0 0 no-repeat;
		cursor: pointer;
		text-indent: -9999px;
	}
	.detailImg p {
		text-align: center;
		color: #999;
	}
	#detailImg-pre {
		left: 0;
		background-position: -35px 0;
	}
	#detailImg-next {
		right: 0;
		background-position: -99px 0;
	}
	#detailImg-pre:hover {
		background-position: -35px -47px;
	}
	#detailImg-next:hover {
		background-position: -99px -47px;
	}
	#detailImg-box {
		-moz-box-flex: 1;
		-webkit-box-flex: 1;
		margin-left: 30px;
		margin-right: 30px
	}
	#detailImg-box, #detailImg-pre, #detailImg-next, .detailImg {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
	}
	.class_main {
		text-align: center;
		position: relative;
		display: -moz-box;
		display: -webkit-box;
		margin-top: 20px;
	}
	#class-pre, #class-next {
		width: 30px;
	}
	#class-box {
		-moz-box-flex: 1;
		-webkit-box-flex: 1;
	}
	.class_main, #class-box, #class-next, #class-pre {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
	}
	.week_id_num_span {
		text-align: center;
		width: 30px;
		height: 30px;
		line-height: 35px;
		padding: 1px 1px 1px 3px;
		border: 1px solid transparent;
		border-radius: 1px;
		-moz-border-radius: 1px;
		-webkit-border-radius: 1px;
		color: #000000;
		background-color: #F7FBFF;
		float: left;
		margin: 1px 1px;
		font-size: 16px;
	}
	.week_id_num_span:hover {
		color: #FFFFFF;
		background-color: #3bafda;
		cursor: pointer;
	}
	.week_id_num_span_active {
		color: #FFFFFF;
		background-color: #0a64a4;
		cursor: pointer;
	}
	.week_add_span {
		color: #000000;
		background-color: #F7FBFF;
		cursor: pointer;
		text-align: center;
		width: 30px;
		height: 30px;
		line-height: 35px;
		padding: 1px 1px 1px 3px;
		border: 1px solid transparent;
		border-radius: 1px;
		-moz-border-radius: 1px;
		-webkit-border-radius: 1px;
		float: left;
		margin: 1px 1px;
		font-size: 16px;
	}
	.week_add_span_active {
		color: #FFFFFF;
		background-color: #0a64a4;
		cursor: pointer;
		text-align: center;
		width: 30px;
		height: 30px;
		line-height: 35px;
		padding: 1px 1px 1px 3px;
		border: 1px solid transparent;
		border-radius: 1px;
		-moz-border-radius: 1px;
		-webkit-border-radius: 1px;
		float: left;
		margin: 1px 1px;
		font-size: 16px;
	}
	.week_move_span {
		color: #000000;
		background-color: #F7FBFF;
		cursor: pointer;
		text-align: center;
		width: 30px;
		height: 30px;
		line-height: 35px;
		padding: 1px 1px 1px 3px;
		border: 1px solid transparent;
		border-radius: 1px;
		-moz-border-radius: 1px;
		-webkit-border-radius: 1px;
		float: left;
		margin: 1px 1px;
		font-size: 16px;
	}
	.week_move_span_active {
		color: #FFFFFF;
		background-color: #0a64a4;
		cursor: pointer;
		text-align: center;
		width: 30px;
		height: 30px;
		line-height: 35px;
		padding: 1px 1px 1px 3px;
		border: 1px solid transparent;
		border-radius: 1px;
		-moz-border-radius: 1px;
		-webkit-border-radius: 1px;
		float: left;
		margin: 1px 1px;
		font-size: 16px;
	}
	.class_open_xx {
		color: #60c5eb;
	}
	.class_open_kc {
		color: #4795d1;
	}
	.class_open_ks {
		color: #f04037;
	}
	.class_close {
		color: #4f6b72;
	}
	.class_null {
		color: #FFFFFF;
	}
	#classInfo {
		display: none;
	}
	#table_top {
		display: -moz-box;
		display: -webkit-box;
	}
	#table_top_left {
		width: 200px;
		text-align: center;
	}
	#table_top_right {
		width: 250px;
		text-align: center;
	}
	#table_top_main {
		-moz-box-flex: 1;
		-webkit-box-flex: 1;
	}
	#table_top, #table_top_left, #table_top_main, #table_top_right {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
	}
</style>
<div class='title'>
	<h2>课程表</h2>
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
<article class='larg'>
		<?php session_start();?>
<input type="hidden" value="<?php echo $_COOKIE['uid'];?>" id="hidden_uid">
<input type="hidden" value="<?php echo $_COOKIE['type'];?>" id="hidden_type">
<input type="hidden" value="<?php echo $_COOKIE['state'];?>" id="hidden_state">
<input type="hidden" value="<?php echo $_COOKIE['utype'];?>" id="hidden_utype">
	<div style="margin-left:30px;margin-bottom: 10px;"  id="jxz_xz" class="dropdown">
		<div id="table_top"  style="width: 100%;margin-bottom: 10px;">
			<div id="table_top_left">
				<button type="button" class="btn btn-default" id="week_select_button" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
									选择教学周
								</button>
								<div class="popover bottom" id="week_select_popover" style="margin-top:60px;margin-left: -10px;">
									<div class="arrow"></div>
									<div class="popover-content">
										<div id='week_select_div' style='height: auto;margin-bottom:100px;'></div>
                                    </div>
								</div>
			</div>
			<div id="table_top_main" class="text-center" style="padding-top:15px;">
				<strong class="text-primary" id="now_week_num" style="font-size: 18px;"></strong>
			</div>
			<div id="table_top_right" class="btn-group text-center"><botton class="btn btn-info dropdown-toggle" id="set_class_info"  data-toggle="dropdown">
					编辑课表<span class="caret"></span>
				</botton>
				<ul class="dropdown-menu" role="menu">
                      <li><a id="add_class">添加课程</a></li>
                      <li><a id="delete_class">删除课程</a></li>
                      <li><a id="move_class">移动课程</a></li>
                      <li><a id="reload_class">初始化课表</a></li>
                      <li><a id="follow_class">同步课程</a></li>
            </ul>
			<botton class="btn btn-danger" id="reset_table" style="display: none;">
					取消
				</botton>
			<booton class="btn btn-warning" id="get_stu_list" style="margin-left: 10px;">课程学生列表</booton>
			</div>

		</div>
	   <!--教学周选择模态框-->
		<div class="modal fade bs-example-modal-sm" id="week_select_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"  aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h5 class="modal-title" id="login_ModalLabel">教学周选择</h5>
					</div>
					<div class="modal-body">
						<div class="modal-form" >
							<div class="form-group" >
								<div id="week_select_div" style="height: auto;margin-bottom: 80px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		 <!--添加课程模态框-->
		<div class="modal fade bs-example-modal-lg" id="add_class_modal" tabindex="-1" role="dialog" aria-labelledby="myLagerModalLabel"  aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h5 class="modal-title" id="login_ModalLabel">添加课程</h5>
					</div>
					<div class="modal-body">
						<div class="modal-form" >
							<form class="form-horizontal" role="form">
								<div class="form-group" >
									<label class="col-sm-2 control-label" for="elabel">课程名</label>
									<div class="col-sm-4">
										<input type="text" id="elabel" placeholder="Class_Name" class="form-control">
										
									</div>
									<label class="col-sm-2 control-label">课程类型</label>
									<div class="radio col-sm-4">
										<label class="raio-inline">
											<input type="radio" class="etype" name="etype" id="etype_1"  value="1" checked="checked">课程</label>
										<label class="radio-inline" style="padding-top: 0px;">
											<input type="radio" class="etype" name="etype" id="etype_2" value="2">活动</label>
									</div>
									
								</div>
								<div class="form-group" >
									<label class="col-sm-2 control-label" for="etname">上课老师</label>
									<div class="col-sm-4">
										<input type="text" id="etname" class="form-control" placeholder="Class_Teacher">
										<div style="z-index: 100;margin-top: -55px;background-color: #FFFFFF;height: auto;padding-left:0px ;width: 100%;">
										<select id="class_label_list" clas="input-xlarge" multiple="multiple" onchange="select_change()" style="width:100%;">
										<script>		
										function select_change(){
                                    		$("#elabel").val($("#class_label_list option:selected").text());
                                    	}
										</script>  
										</select>
										</div>
									</div>
									<label class="col-sm-2 control-label">课程属性</label>
									<div class="radio col-sm-4">
										<label class="r-inline">
											<input type="radio" class="ctype" name="ctype" id="ctype_1" value="必修" checked="checked">
											必修</label>
										<label class="redio-inline">
											<input type="radio" class="ctype" name="ctype" id="ctype_2" value="限选">
											限选</label>
										<label class="r-inline">
											<input type="radio" class="ctype" name="ctype" id="ctype_3" value="选修">
											选修</label>
										<label class="r-inline">
											<input type="radio" class="ctype" name="ctype" id="ctype_4" value="无">
											无</label>
									</div>
									
								</div>
								<div class="form-group" >
                                    <label class="col-sm-2 control-label" for="einfo">课程简介</label>
									<div class="col-sm-4">
										<input type="text" id="einfo" placeholder="Class_Info" class="form-control">
									</div>
									<label class="col-sm-2 control-label">考试类型</label>
									<div class="radio col-sm-4">
										<label class="radio-inline">
											<input type="radio" class="exmtype" name="exmtype" id="exmtype_1" value="考试" checked="checked">
											考试课</label>
										<label class="radio-inline" >
											<input type="radio" class="exmtype"  name="exmtype" id="exmtype_2" value="考察">
											考察课</label>
										<label class="radio-inline" >
											<input type="radio" class="exmtype"  name="exmtype" id="exmtype_3" value="无">
											无</label>
									</div>
								</div>
								<div class="form-group" >
									<label class="col-sm-2 control-label" for="cinfo">选课限制说明</label>
									<div class="col-sm-4">
										<textarea id="cinfo" class="form-control" rows="5"></textarea>
									</div>
									<label class="col-sm-2 control-label" for="ealarm">上课时间</label>
									<div class="col-sm-4" id="add_week_checkbox">
								       
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="ealarm">闹钟提醒</label>
									<div class="col-sm-4">
										<p style="padding:0px 0px 0px 0px;">提前&nbsp;<input type="text" id="ealarm" placeholder="Before_time" value="10" >&nbsp;分钟提醒</p>
										<p class="text-info">（-1 为无需提醒）</p>
									</div>
									<label class="col-sm-2 control-label" for="ealarm">提醒次数</label>
									<div class="col-sm-4">
								       <label class="radio-inline">
											<input type="radio" class="ealarmtype" name="ealarmtype" id="ealarmtype_1" value="1">
											一直提醒</label>
										<label class="radio-inline">
											<input type="radio" class="ealarmtype"  name="ealarmtype" id="ealarmtype_2" value="2">
											提醒三次</label>
										<label class="radio-inline">
											<input type="radio" class="ealarmtype"  name="ealarmtype" id="ealarmtype_3" value="3">
											提醒一次</label>	
									</div>
								</div>	
								<div class="form-group">
									<label class="col-sm-2 control-label" for="ealarm">上课/活动地点</label>
									<div class="col-sm-4">
										<input type="text" id="eaddress" placeholder="Class_ddress" class="form-control">
									</div>
									<label class="col-sm-2 control-label" for="ealarm">是否替换原课程</label>
									<div class="col-sm-4">
										<label class="radio-inline">
										<input type="radio" name="replace" id="replace1" value="1">替换</label>
										<label class="radio-inline">
										<input type="radio" name="replace" id="replace2" value="0">不替换</label>
									</div>
								</div>	
								<input type="hidden" id="hidden_week_day">
							</form>
						</div>
					
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								取消
							</button> 
							<button type="button" class="btn btn-info" id="class_add_button">
								确定
							</button> 
						</div>
							</div>
					</div>
				</div>
			</div>
		<!--查看课程学生列表模态框-->
		<div class="modal fade bs-example-modal-lg" id="class_stulist_modal" tabindex="-1" role="dialog" aria-labelledby="myLagerModalLabel"  aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h5 class="modal-title" id="login_ModalLabel">该课程学生列表</h5>
					</div>
					<div class="modal-body">
						<div class="modal-form" >
							<form class="form-horizontal" role="form">
								<div class="form-group" >
									<label class="col-sm-2 control-label" for="elabel">课程名</label>
									<div class="col-sm-4">
										<strong id="class_name_stu_list"></strong>
									</div>
									<label class="col-sm-2 control-label" for="elabel">有课/没课切换</label>
									<div class="col-sm-4">
										<label class="radio-inline">
											<input type="radio" class="ealarmtype_stu" name="_exists" id="ealarmtype_stu_1" value="1" checked="checked">
											选择该课程</label>
										<label class="radio-inline">
											<input type="radio" class="ealarmtype_stu"  name="ealarmtype_stu" id="ealarmtype_stu_2" value="0" >
											未选择该课程</label>
									</div>
								</div>
								<div class="form-group" >
									<div class="col-sm-1"></div>
									<div class="col-sm-10">
									<table class="table table-condensed table-striped" id="class_stu_table">
										<tr>
											<th class="col-sm-2"> 学号 </th>
											<th class="col-sm-2"> 真实姓名 </th>
											<td class="col-sm-1"></td>
											<th class="col-sm-2"> 学号 </th>
											<th class="col-sm-2"> 真实姓名 </th>
											<td class="col-sm-1"></td>
										</tr>
									</table>
									<p id="class_stu_list_warming" class="text-center"></p>
									</div>
									<div class="col-sm-1"></div>
								</div>
								</form>
						</div>
						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								取消
							</button>
							<button type="button" class="btn btn-info" id="class_list_button">
								确定
							</button>

						
					</div>
				</div>
			</div>
		</div>
		<!--移动课表模态框-->
       	<div class="modal fade bs-example-modal-lg" id="class_move_modal"  tabindex="-1" role="dialog" aria-labelledby="myLagerModalLabel"  aria-hidden="true">
			<div class="modal-dialog modal-lg">
       			<div class="modal-content">
       				<div class="modal-header">
       					<button type="button" class="close" data-dismiss="modal">
       						<span aria-hidden="true">
       							X
       						</span>
       						<span class="sr-only">Close</span>
       					</button>
       					<h4 class="modal-title" id="move_class_ModalLabel">移动课程</h4>
       				</div>
       				<div class="modal-body">
       					<form role="form" class="form-horizontal">
       						<div class="modal-form">
       						 <div class="form-group">
       							<label class="col-sm-2 control-label" for="elabel">课程名</label>
									<div class="col-sm-4">
										<strong id="move_class_name" style="margin-top: 7px;"></strong>
									</div>
									<label class="col-sm-2 control-label" for="elabel">上课时间</label>
									<div class="col-sm-4">
										<strong  id="class_time" style="margin-top: 7px;"></strong>
									</div>
       						 </div>
       						 <div class="form-group">
       							<label class="col-sm-2 control-label" for="move_week_checkbox">教学周选择</label>
								<div class="col-sm-4" id="move_week_checkbox"></div>
								<label class="col-sm-2 control-label" for="weekday_select">移动到</label>
								<div class="col-sm-1">
									<select size="4" style="width:70px" id="weekday_select">
									<option value="1">周一</option>
									<option value="2">周二</option>
									<option value="3">周三</option>
									<option value="4">周四</option>
									<option value="5">周五</option>
									<option value="6">周六</option>
									<option value="7">周日</option>
								    </select>
								</div>
								<div class="col-sm-1">
								    <select size="4" style="width:80px;" id="dayclass_select">
									<option value="1">第一大节</option>
									<option value="2">第二大节</option>
									<option value="3">第三大节</option>
									<option value="4">第四大节</option>
									<option value="5">第五大节</option>
								</select>
								</div>
       						 </div>
       					     <div class="form-group">
									<label class="col-sm-2 control-label" for="ealarm">闹钟提醒</label>
									<div class="col-sm-4">
										<p style="padding:0px 0px 0px 0px;">提前&nbsp;<input type="text" id="moveealarm" placeholder="Before_time" value="10" >&nbsp;分钟提醒</p>
										<p class="text-info">（-1 为无需提醒）</p>
									</div>
									<label class="col-sm-2 control-label" for="ealarm">提醒次数</label>
									<div class="col-sm-4">
								       <label class="radio-inline">
											<input type="radio" class="ealarmtype" name="moveealarmtype" id="moveealarmtype_1" value="1">
											一直提醒</label>
										<label class="radio-inline">
											<input type="radio" class="ealarmtype"  name="moveealarmtype" id="moveealarmtype_2" value="2">
											提醒三次</label>
										<label class="radio-inline">
											<input type="radio" class="ealarmtype"  name="moveealarmtype" id="moveealarmtype_3" value="3" checked="checked">
											提醒一次</label>	
									</div>
								</div>	
							 <div class="form-group">
									<label class="col-sm-2 control-label" for="ealarm">上课/活动地点</label>
									<div class="col-sm-4">
										<input type="text" id="moveeaddress" placeholder="Class_ddress" class="form-control">
									</div>
									
								</div>	
       						</div>
       					</form>
       				</div>
       				<div class="modal-footer">
       					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
       					<button type="button" class="btn btn-info">移动</button>
       				</div>
       			</div>
       		</div>
       	</div>
	   <!--删除课表模态框-->
		<div class="modal fade bs-example-modal-lg" id="class_delete_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h5 class="modal-title" id="login_ModalLabel">课程删除</h5>
					</div>
					<div class="modal-body">
						<div class="modal-form" >
							<div class="form-group">
								课程名
								<strong id="class_name"></strong>
							</div>
							<div class="form-group" >
								<strong>上课时间</strong>
								<table id="class_delete_checkbox" style="height: auto;" class="table table-striped"></table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								取消
							</button> 
							<button type="button" class="btn btn-danger" id="class_delete_button">
								删除
							</button> 
						</div>
					</div>
				</div>
			</div>
		</div>
	     <!--初始化课程模态框-->
		<div class="modal fade bs-example-modal-sm" id="reload_class_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"  aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h5 class="modal-title" id="login_ModalLabel">初始化课表</h5>
					</div>
					<div class="modal-body">
						<div class="modal-form" >
							<div class="form-group" >
								<p style="margin: 0px;">
									请输入教务处密码,我们将初始化课表
								</p>
								<table class="table table-striped table-condensed">
									<tr>
										<td>教务处密码：</td>
										<td width="100px">
										<input type="password" id="reload_pwd">
										</td>
									</tr>
								</table>
								<p id="reload_warnming"></p>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								取消
							</button>
							<button type="button" class="btn btn-info" id="reload_class_button">
								确定
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="detailImg" style="width: 100%;">
		<a id="detailImg-pre" alt="上一周">
			&lt;
		</a>
		<div id="detailImg-box" class="box">
			
			<table id="mytable" cellspacing="0" class="table table-bordered table-striped">
				<tr>
					<th id="trw_1"></th><th id="trw_2"></td><th id="trw_3"></th><th id="trw_4"></th><th id="trw_5"></th><th id="trw_6"></th><th id="trw_7"></th>
				</tr>
			</table>
			
		</div>
		<a id="detailImg-next" alt="下一周">
			&gt;
		</a>
	</div>
<div class="class_main" style="width: 100%;">
		<a id="class-pre">

		</a>
		<div id="class-box" class="box">
			<div id="classInfo" >
				<h4 class="text-success">课程详细信息</h4>
				<table class="table table-striped table-bordered table-condensed" id="viewTable002"></table>
			</div>
		</div>
		<a id="class-next">
		</a>
	</div>

	<script>
				var uid01 = document.getElementById("hidden_uid").value;
		var rows;
		//共有的周数
		var currentWeek;
		//保存当前周
		var tempWeek;
		//临时周,用于用户操作（上一周,下一周）
		var btime;
		//教学开始时间
		var class_data;
		//课表 信息
		var class_name;
		var week_num;
		var move_class_id;
		var week_select_button_num=0;
		/*从服务器取得指定用户的课表,读取开始时间并计算当前教学周存入cookie,返回课程信息*/
		$(document).ready(function() {
			var APP = "__APP__";
			var classTabel;
			//请求课表数据
			$.ajax({
				type : "post",
				dataType : "json",
				data : {
					uid : uid01,
					type : "getByTime"
				},
				url : APP + "Table/curriculum_user",
				async : false,
				success : function(data) {
					classDetail = data;
					btime = new Date(data.begin_time);
					currentWeek = TimeSpan(btime);
					tempWeek = currentWeek;
					classTabel = data.class;
					class_data=classTabel;
					var k = 1;
					rows = classTabel.length;
					for (var i = 0; i < classTabel.length; i++) {
					for (var i1 = 0; i1 < classTabel[i].length; i1++) {
						$("#mytable").append("<tr style='display:none' id=tr_" + k + "></tr>");
						for (var i2 = 0; i2 < classTabel[i][i1].length; i2++) {
							var trid = "#tr_" + k;
							if (classTabel[i][i1][i2] != null) {
								var itemClassexmtype = classTabel[i][i1][i2].exmtype;
								var itemClassLabel = classTabel[i][i1][i2].elabel;
								var itemClasscid=    classTabel[i][i1][i2].cid;
								if (itemClassLabel.length > 8) {
									itemClassLabel = itemClassLabel.substring(0, 5) + "***";
								}
								var type;
								if (itemClassexmtype == "考查") {
									type = "kc";
								}
								if (itemClassexmtype == "考试") {
									type = "ks";
								}
								if (itemClassexmtype == "限选") {
									type = "xx";
								}
								$(trid).append("<td id=class_td_" + (i) + "_" + (i1) + "_" + (i2) + "  onmouseover='ViewInfor(id,event)' onmouseout='ViewDelete()'><span id='class_" + (i) + "_" + (i1) + "_" + (i2) + "' class='class_open_" + type + " test-center'>" + itemClassLabel + "</span><span id='cid_"+itemClasscid+"_"+i+"_"+i1+"_"+i2+"' class='glyphicon glyphicon-remove delete_class' style='float:right;display:none'></span><span id='list_"+i+"_"+i1+"_"+i2+"' class='glyphicon glyphicon-list class_stu_list' style='float:right;display:none'></span><span id='move_"+itemClasscid+"_"+i+"_"+i1+"_"+i2+"' class='glyphicon glyphicon-transfer move_class' style='float:right;display:none'></span></td>");
							} else {
								//alert("第"+(i+1)+"周星期"+(i2+1)+"第"+(i1+1)+"大节"+"没课");
								$(trid).append("<td><span class='class_null'>" + "空" + "</span><span id='class_" + (i) + "_" + (i1) + "_" + (i2) + "' class='glyphicon glyphicon-plus add_class' style='float:right;display:none'></span></td> ");
							}
						}
						k++;
					}
				}
					if (currentWeek <=0) {
						ChangeTimeView();
						DisplayByCurrentWeek(1);

					} else if (currentWeek > 22) {
						ChangeTimeView();
						DisplayByCurrentWeek(18);
					} else {
						ChangeTimeView();
						DisplayByCurrentWeek(currentWeek);
					}
				},
				error : function() {
					alert("data error");
				}
			});
            
			/***********************************************/
			//表格鼠标浮动
			$('th').parent().addClass('table-heading');
			$('td:contains("showtime")').siblings().addClass('tdhlight');
			$('#mytable td').hover(function() {

				$(this).addClass('info');
				$(this).css("cursor", "pointer");

			}, function() {

				$(this).removeClass('info');

			});
			//上一周
			$("#detailImg-next").click(function() {
				ChangClassWeek("next");
			});
			//下一周
			$("#detailImg-pre").click(function() {
				ChangClassWeek("pre");
			});
			//教学周选择循环显示周
			$("#week_select_button").click(function(){
			week_num = rows;
			if(week_select_button_num%2==0)
			{
				
			$("#week_select_div").empty();
			for (var i = 0; i < week_num; i++) {
				if (currentWeek != (i + 1))
					$("#week_select_div").append("<span class='week_id_num_span' id='week_id_num_" + i + "' onclick='week_select(id)'>" + (i + 1) + "</span>");
				else {
					$("#week_select_div").append("<span class='week_id_num_span_active' id='week_id_num_" + i + "' onclick='week_select(id)'>" + (i + 1) + "</span>");
				}
				if ((i + 1) % 9 == 0)
				$("#week_select_div").append("<br>");
			}
			$('#week_select_popover').show();
			week_select_button_num++;
			}
			else{
				$('#week_select_popover').hide();
				week_select_button_num++;
			}
      });
			//添加课程添加时间
			for(var i=0;i<rows;i++){
				$("#add_week_checkbox").append("<span class='week_add week_add_span' id='eweek_"+(i+1)+"'>"+(i+1)+"</span>");
				if ((i + 1) % 8 == 0)
				{
					$("#add_week_checkbox").append("<br>");
					
				}
			}	
			$("#elabel").focus(function(){
				
				$("#class_label_list").show();
			});
			//移动课程添加时间
			for(var i=0;i<rows;i++){
			
				$("#move_week_checkbox").append("<span class='week_move week_move_span' id='moveweek_"+(i+1)+"'>"+(i+1)+"</span>");
				if ((i + 1) % 8 == 0)
				{
					
					$("#move_week_checkbox").append("<br>");
				}
			}	
			//取消按钮选中
			$("#reset_table").click(function(){
						$(".delete_class").hide();
						$(".add_class").hide();
						$("#reset_table").hide();
						$("#set_class_info").show();
						$(".move_class").hide();
						$("#get_stu_list").show();
						$(".class_stu_list").hide();
			});
			//添加课程
			$("#add_class").click(function(){
						$(".add_class").show();
						$("#set_class_info").hide();
						$("#reset_table").show();	
			});
			//初始化
			$("#reload_class").click(function(){
						$("#reload_class_modal").modal('show');
			});
			
			//课程选择
		     var class_add_click=0;
			
			//删除按钮选中
			$("#delete_class").click(function(){
					$(".delete_class").show();
					$("#set_class_info").hide();
					$("#reset_table").show();	
					});
			//移动课表		
			$("#move_class").click(function(){
					$(".move_class").show();
					$("#set_class_info").hide();
					$("#reset_table").show();	
					});	
			//获取课程学生列表
			$("#get_stu_list").click(function(){
				$(".class_stu_list").show();
				$("#reset_table").show();	
				$("#get_stu_list").hide();
				$("#set_class_info").hide();
			});
			//获取课程学生列表Modal
			$(".class_stu_list").click(function(){
				var class_id=$(this).attr("id");
				var str=new Array();
				str=class_id.split("_");
				var j=parseInt(str[1]);
				var j1=parseInt(str[2]);
			    var j2=parseInt(str[3]); 
			      edayofweek=j2+1;
			      ecofday=j1+1;
			      eweek=j+1;
			       //$("#move_week_checkbox").empty();
					for (var i = 0; i < class_data.length; i++) {
						for (var i1 = 0; i1 < class_data[i].length; i1++) {
							for (var i2 = 0; i2 < class_data[i][i1].length; i2++) {
								if (class_data[i][i1][i2] != null) {
									if (i==j&& i1 == j1 && i2 == j2) {
										class_name = class_data[i][i1][i2].elabel;
									}
								}
							}
						}
					}
					$("#class_name_stu_list").empty();
					$("#class_name_stu_list").append(class_name);
					get_stu_list(eweek,edayofweek,ecofday);
					$("#class_stulist_modal").modal('show');
			});
			function get_stu_list(eweek,edayofweek,ecofday){
				    var uid=$("#hidden_uid").val();
					var aeweek=eweek;
					var aedayofweek=edayofweek;
					var aecofday=ecofday;
					var exists=$(":radio[name='ealarmtype_stu']:checked").val();
					$.ajax({
						type:"post",
						url:APP+"Table/stulist",
						async:false,
						dataType:"json",
						data:
						{
						a_uid:uid,	
						a_eweek:aeweek,
						a_edayofweek:aedayofweek,
						a_ecofday:aecofday,
						a_exists:exists
						},
						success:function(data)
						{
							$("#class_stu_table").append("<tr>");
							var i=0;
							$.each(data,function(i,item){
								$("#class_stu_table").append("<td></td><td></td>");
								if(i++%2==0)
								$("#class_stu_table").append("</tr>");
							});
							
						},
						error:function(data)
						{
							$("#class_stu_list_warming").empty();
							$("#class_stu_list_warming").append("数据异常，请刷新重试~谢谢");
						}
					});
			}
			//移动按钮课表		
			var edayofweek;
			var ecofday;
			var eweek;
			$(".move_class").click(function(){
				//$('#class_move_modal').modal('show');
				 var class_time=$(this).attr("id");
			      var cid_str = new Array();
			      cid_str = class_time.split("_");
			      var cid= parseInt(cid_str[1]);
			      var j=parseInt(cid_str[2]);
			      var j1=parseInt(cid_str[3]);
			      var j2=parseInt(cid_str[4]);
			      edayofweek=j2+1;
			      ecofday=j1+1;
			      eweek=j+1;
			       //$("#move_week_checkbox").empty();
					for (var i = 0; i < class_data.length; i++) {
						for (var i1 = 0; i1 < class_data[i].length; i1++) {
							for (var i2 = 0; i2 < class_data[i][i1].length; i2++) {
								if (class_data[i][i1][i2] != null) {
									if (i==j&& i1 == j1 && i2 == j2) {
										class_name = class_data[i][i1][i2].elabel;
									}
								}
							}
						}
					}
				 $("#move_class_name").empty();
			     $("#class_time").empty();
			     $("#move_class_name").append(""+class_name+"");  
			     $("#class_time").append("周"+(j2+1)+"&nbsp;第"+(j1+1)+"节");
			     $('#class_move_modal').modal('show');
			});
			//移动课程button
			$("#class_move_button").click(function(){
				var uid=$("#hidden_uid").val();
				var elabel=$("#move_class_name").html();
				var eaddress=$("#moveeaddress").val();
				var ealarm=$("#moveealarm").val();
				var ealarmtype=$(":radio[name='ealarmtype']:checked").val();	
				var old_week=tempWeek+1;
			    var old_edayofweek=edayofweek;
			    var old_ecofday=ecofday;
			    //alert(move_class_id);
			    var classid_str = move_class_id.split("_");
			    var eweek= parseInt(classid_str[1]);
			    var edayofweek=$("#weekday_select").val();
			    var ecofday=$("#dayclass_select").val();
			    
			    $.ajax({
			    	type:"post",
			    	url:APP+"Table/moveclass",
			    	async:true,
			    	data:{
			    		a_uid:uid,
			    		a_elabel:elabel,
			    		a_eaddress:eaddress,
			    		a_ealarm:ealarm,
			    		a_ealarmtype:ealarmtype,
			    		a_eweek:eweek,
			    		a_edayofweek:edayofweek,
			    		a_ecofday:ecofday,
			    		a_oldweek:old_week,
			    		a_olddofweek:old_edayofweek,
			    		a_oldcofday:old_ecofday,
			    	},
			    	dataType : "json",
			    	success:function(data)
			    	{
			    		if(data==1)
			    		 {   
			    		 	alert("移动成功");
			    		    $("#class_move_button").html("移动成功");
			    		    window.location.href=APP+"Index/index_main";
			    		   }
			    		else{
			    			alert(data);
			    		}
			    	},
			    	error:function(){
			    			alert("请刷新重试，谢谢");
			    	}
			    });
			});
			//删除按钮选中
            $(".delete_class").click(function(){
				 var class_cid=$(this).attr("id");
		
				 $('#class_delete_modal').modal('show');
			      var cid_str = new Array();
			      cid_str = class_cid.split("_");
			      var cid= parseInt(cid_str[1]);
			      var j1=parseInt(cid_str[3]);
			      var j2=parseInt(cid_str[4]);
			       var class_check="";
			       var j=1;
			       var item="week";
			       $("#class_delete_checkbox").empty();
			       class_check+="<tr>";
			      for (var i = 0; i < class_data.length; i++) {
					for (var i1 = 0; i1 < class_data[i].length; i1++) {
						for (var i2 = 0; i2 < class_data[i][i1].length; i2++) {
							if(class_data[i][i1][i2]!=null){
							if(class_data[i][i1][i2].cid==cid&&i1==j1&&i2==j2)
							{
								  class_name=class_data[i][i1][i2].elabel;
							      class_check+="<td class='text-center'><input type='checkbox' id='week_"+ (i+1) + "_" + (i2+1) + "_" + (i1+1)+"' value='week_"+ (i+1) + "_" + (i2+1) + "_" + (i1+1)+"' onclick='Checked(this.checked,"+item+")' name='week''>&nbsp;<span class='text-primary'>第"+(i+1)+"周"+"&nbsp;周"+(i2+1)+"&nbsp;第"+(i1+1)+"节</span></td>";	
							      if(j%4==0)
							      {
							       class_check+="</tr><tr>";
							       //alert(class_check);
							      }
							      j++;
							}
						}
					
					}
					}
				}
			      class_check+="</tr>";
			     
			     $("#class_delete_checkbox").html(class_check);
			     $("#class_name").empty();
			     $("#class_name").append(""+class_name+"");  
			});
			//添加按钮选中
            $(".add_class").click(function(){
				 $('#add_class_modal').modal('show');
				  $("#hidden_week_day").val($(this).attr("id"));
				  $.ajax({
					type:"post",
					url:APP+"Table/label_list",
					async:false,
					dataType:"json",
					data:{uid:$("#hidden_uid").val()},
					success:function(data){
						 
						$.each(data, function(i,item) {  
							//$.each(item, function(j,item1) {
 						       $("#class_label_list").append("<option style='background-color:#FFFFFF;' value='"+item['elabel']+"'>"+item['elabel']+"</option>")                                                         
						//});
						});
					}
				});
			});
			//增加课程操作
			$("#class_add_button").click(function(){
				var elabel=$("#elabel").val();
				var ctype=$(":radio[name='ctype']:checked").val();
				var etname=$("#etname").val();
				var etype=$(":radio[name='etype']:checked").val();
				var cinfo=$("#cinfo").val();
				var ealarm=$("#ealarm").val();
				var uid=$("#hidden_uid").val();
				var estate=1;
				var cid="";
				var eaddress=$("#eaddress").val();
				var einfo=$("#einfo").val();
				var ecreid=uid;
				var exmtype=$(":radio[name='exmtype']:checked").val();
				var week_day=$("#hidden_week_day").val();
				var ealarmtype=$(":radio[name='ealarmtype']:checked").val();
				var week_str = new Array();
			    week_str = week_day.split("_");
			    var edayofweek= parseInt(week_str[3])+1;
			    var ecofday=parseInt(week_str[2])+1;
			    var eweek="";
			    var replace=$(":radio[name='replace']:checked").val();
			    $(".week_add").each(function(){
			    	if($(this).attr("class")=="week_add week_add_span_active"){
			    		eweek=eweek+$(this).html()+",";
			    	}
			    });
			    
				$.ajax({
					type:"post",
					url:APP+"Table/addevent",
					dataType : "json",
					data:{
						a_uid:uid,
						a_elabel:elabel,
						a_einfo:einfo,
						a_estate:estate,
						a_ecreid:ecreid,
						a_etype:etype,
						a_ealarm:ealarm,
						a_ealarmtype:ealarmtype,
						a_etname:etname,
						a_cid:cid,
						a_ctype:ctype,
						a_exmtype:exmtype,
						a_cinfo:cinfo,
						a_edayofweek:edayofweek,
						a_ecofday:ecofday,
						a_eweek:eweek,
						a_address:eaddress,
						a_replace:replace
					},
					success:function(data){
						if(data==2)
						{
							alert("添加成功");
							window.location.href=APP+"Index/index_main";
						}
						else{
							alert(data);
						}
					},
					error:function(data){
						alert("网络繁忙,请刷新重试~");
					}
				});
			});
			//初始化课表
			$("#reload_class_button").click(function(){
				var pwd=$("#reload_pwd").val();
				var userid=$("#hidden_uid").val();
				var user_type=$("#hidden_type").val();
				$("#reload_class_button").html("Loading");
				$.ajax({
					type:"post",
					dataType : "json",
				    data : {
					uid : userid,
					reload_pwd:pwd,
					type :user_type
				    },
				    url : APP + "Table/reload",
				   success : function(data) {
					//alert(data);
					if(data==1)
					{
						$("#reload_warnming").empty();
						$("#reload_warnming").append("初始化成功,即将刷新页面");
						location.reload(true);   
					}
					else{
						$("#reload_warnming").empty();
						
						$("#reload_warnming").append(data);
					}
				},
			    error:function(data){
			    	$("#reload_warnming").empty();
			    	$("#reload_warnming").append("学校系统登录失败,请刷新重试");
			    	$("#reload_class_button").html("重试");
			    }
				});
			});
    });
		//显示当前教学周的课表,并隐藏其他教学周
		function DisplayByCurrentWeek(week) {
			var brow = (week - 1) * 5 + 1;
			var erow = week * 5;

			for (var row_index = 1; row_index <= rows * 7; row_index++) {
				var trId = "tr_" + row_index;
				if (document.getElementById(trId) != undefined) {
					var tr_node = document.getElementById(trId);
					tr_node.style.display = "none";
				}
			}
			for (var row_index = brow; row_index <= erow; row_index++) {
				var trId1 = "tr_" + row_index;
				if (document.getElementById(trId1) != undefined) {
					var tr_node = document.getElementById(trId1);
					tr_node.style.display = "table-row";
				}
			}
		}

		//计算时间差,返回当前教学周
		function TimeSpan(beginTime) {
		var nowtime = new Date();
		var weeks;
		var days = nowtime.getTime() - beginTime.getTime();
		if(days<=0)
		{
			weeks=0;
		}
		else
		{
			days = Math.floor(days / (24 * 3600 * 1000)) + 1;
			weeks = Math.ceil(days / 7);
		}
		return weeks;
	}

		//根据选择的周,显示相应周次的课表
		function ChangClassWeek(item) {
			if (item == "pre") {
				if (tempWeek == 0) {
					ChangeTimeView();
					DisplayByCurrentWeek(1);
					alert("已经到第一周了,不要再点了");
				} else {
					--tempWeek;
					ChangeTimeView();
					DisplayByCurrentWeek(tempWeek + 1);
				}
			} else if (item == "next") {
				if (tempWeek == 18) {
					ChangeTimeView();
					alert("考试周,没有课,好好复习啦~");
					tempWeek=17;
					DisplayByCurrentWeek(18);
				} else {
					++tempWeek;
					ChangeTimeView();
					DisplayByCurrentWeek(tempWeek + 1);

				}
			} else {
				alert("operate error!!");
			}
			 $("#now_week_num").html("第</strong><strong class='text-danger' style='font-size:20px;'>&nbsp;"+(tempWeek+1)+"&nbsp;</strong><strong>周");
             document.getElementById("now_week_num").title="第"+(tempWeek+1)+"周";
		}

		//根据当前教学周,改变table 表头显示的日期
		function ChangeTimeView() {
			var currentDate = btime.valueOf() + parseInt(tempWeek) * 7 * 24 * 60 * 60 * 1000;
			currentDate = new Date(currentDate);
			var nowDayOfWeek = currentDate.getDay();
			var nowDay = currentDate.getDate();
			var nowMonth = currentDate.getMonth();
			var nowYear = currentDate.getYear();
			nowYear += (nowYear < 2000) ? 1900 : 0;
			var weekStartDate = new Date(nowYear, nowMonth, nowDay - nowDayOfWeek + 1);
			var weekEndDate = new Date(nowYear, nowMonth, nowDay + (6 - nowDayOfWeek));
			for (var count = 1; count < 8; count++) {
				var trw_week = document.getElementById("trw_" + count);
				trw_week.innerHTML = weekStartDate.toDateString();
				weekStartDate = new Date(weekStartDate.valueOf() + 24 * 60 * 60 * 1000);
			}

		}

		//显示课程详细信息
		function ViewInfor(viewId,event) {
			//alert(viewId);
		var strs = new Array();
		strs = viewId.split("_");
		var i0 = parseInt(strs[2]);
		var i1 = parseInt(strs[3]);
		var i2 = parseInt(strs[4]);
		var classInfo1 = document.getElementById("classInfo");
		var table1 = document.getElementById("viewTable002");
		var row = table1.insertRow();
		var cell = row.insertCell(0);
		cell.innerHTML = classDetail.class[i0][i1][i2].elabel;
		var cell = row.insertCell(0);
		cell.innerHTML = "课程标签";

		var row = table1.insertRow();
		var cell = row.insertCell(0);
		cell.innerHTML = classDetail.class[i0][i1][i2].ctype;
		var cell = row.insertCell(0);
		cell.innerHTML = "课程类型";

		var row = table1.insertRow();
		var cell = row.insertCell(0);
		cell.innerHTML = classDetail.class[i0][i1][i2].etname;
		var cell = row.insertCell(0);
		cell.innerHTML = "任课老师";

		var row = table1.insertRow();
		var cell = row.insertCell(0);
		cell.innerHTML = classDetail.class[i0][i1][i2].exmtype;
		var cell = row.insertCell(0);
		cell.innerHTML = "考试类型";

		var row = table1.insertRow();
		var cell = row.insertCell(0);
		cell.innerHTML = classDetail.class[i0][i1][i2].eaddress;
		var cell = row.insertCell(0);
		cell.innerHTML = "上课地址";
			classInfo1.style.display = "block";
			//document.body.appendChild(classDiv);
			//alert(classDetail.class[i0][i1][i2].elabel+";"+classDetail.class[i0][i1][i2].ctype+";"+classDetail.class[i0][i1][i2].etname+";"+classDetail.class[i0][i1][i2].exmtype+";"+classDetail.class[i0][i1][i2].eaddress);
		}

		function ViewDelete() {
			var classInfo1 = document.getElementById("classInfo");
			var viewTable = document.getElementById("viewTable002");
			var pchildren = viewTable.childNodes;
			//清空表中的行和列
			for (var a = 0; a < pchildren.length; a++) {
				viewTable.removeChild(pchildren[a]);
			}
			classInfo1.style.display = "none";
		}

		//删除课表
		function deleteClasses()
		{
			var tempClasses=getCheckBoValue("week");
			var TempClassName=class_name;
			$.ajax({
				type : "post",
				data : {
					uid : uid01,
					weekday:tempClasses,
					elabel:TempClassName
				},
				dataType : "json",
				url : APP + "Table/deleteclass",
				async : false,
				success : function(data) {
					alert(data);
					if(data==1)
					 {
					 	alert("删除成功");
					 $("#class_delete_modal").modal('hide');
					 }
					 else
					 {
					 	alert(data);
					 }
				},
				error:function(data)
				{
					alert("请刷新重试");
				}
			});

		}
		
		//教学周选择周显示相应周
		function week_select(weekId) {
			//alert(weekId);
			week_select_button_num++;
		    $('#week_select_popover').hide();
			var strs = new Array();
			strs = weekId.split("_");
			var i0 = parseInt(strs[1]);
			var i1 = parseInt(strs[2]);
			var i2 = parseInt(strs[3]);
			var i3 = parseInt(i2) + 1;
			DisplayByCurrentWeek(i3);
			tempWeek = i2;
			 $("#now_week_num").html("第</strong><strong class='text-danger' style='font-size:20px;'>&nbsp;"+(tempWeek+1)+"&nbsp;</strong><strong>周");
              document.getElementById("now_week_num").title="第"+(tempWeek+1)+"周";
			ChangeTimeView();
		}
		//课程选择状态切换
			 $(".week_move").click(function(){
                  if($(this).attr("class")=="week_move week_move_span")
				  {
						$(".week_move").each(function(){
							$(this).attr("class","week_move week_move_span");
						});
						$(this).attr("class","week_move week_move_span_active");
						move_class_id=$(this).attr("id");
				  }
			     else
				{
						$(this).attr("class","week_move week_move_span");
				}
			  });
		
      $("#now_week_num").html("第</strong><strong class='text-danger' style='font-size:20px;'>&nbsp;"+(tempWeek+1)+"&nbsp;</strong><strong>周");
       document.getElementById("now_week_num").title="第"+(tempWeek+1)+"周";
	</script>
</article>
<script>
	$(document).ready(function() {
		$(".week_add").click(function() {
			if ($(this).attr("class") == "week_add week_add_span") {
				$(this).attr("class", "week_add week_add_span_active");
			} else {
				$(this).attr("class", "week_add week_add_span");
			}
		});
	}); 
</script>