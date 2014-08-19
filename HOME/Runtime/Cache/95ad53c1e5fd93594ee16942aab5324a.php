<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：范志俊
	时间：2014-07-25
         描述：笔记页面
-->
<script>
    var APP = "__APP__";
	var IMG = "__IMG__";
</script>


	  <div class='title'>
    <h2>课程笔记</h2>
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
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand" src="__IMG__/logo2.png" alt="爱拍课堂" width="80px"></img>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" style="margin-top:0px;">Serach</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#">添加笔记</a></li>
        <li><a href="#">修改笔记</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">标记</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav></article>