<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：范志俊
	时间：2014-07-25
	描述：主页面，拼接header，动态变换<main>内容，由index_main.js控制
-->
<!-- 加载头文件 -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="author" content="">

<title>爱拍课堂||ipaikt</title>
<script>
    var APP = "__APP__";
	var IMG = "__IMG__";	
</script>

<!-- 新 jquery Javascript 文件 --> 
<script type="text/javascript" src='http://code.jquery.com/jquery-2.1.1.js'></script>

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- 自定义  首页课程表 CSS 文件 -->
<link rel="stylesheet" href="__CSS__/main_table.css" media="screen" type="text/css" />

<!-- jquery-ui  CSS 文件 -->
<link rel="stylesheet" href="__CSS__/jquery-ui.css" media="screen" type="text/css" />

<!--font-awesome  标准文字库  CSS 文件 -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css">

<!--bootstrap  再编辑   CSS 文件 -->
<link rel="stylesheet" href="__CSS__/bootstrap.css" media="screen" type="text/css"/>

<!-- 主页 框架  CSS 文件 -->
<link rel="stylesheet" href="__CSS__/index_main.css" media="screen" type="text/css" />

<!-- 时间  Javascript 文件 -->
<script type="text/javascript" src="__JS__/time.js"></script>

<!-- 用户信息  Javascript 文件 -->
<script type="text/javascript" src="__JS__/user_info.js"></script>


<!-- 自定义 左侧 导航栏 跳转 Javascript 文件 -->
<script>
$(document).ready( function() {
	$(".index_main").load(APP+"/Index/main");
	$("#index").click(function(){
		$(".index_main").load(APP+"/Index/main");
	});			
	$("#syllabus").click(function(){
		$(".index_main").load(APP+"/Table/index");
	});
	$("#note").click(function(){
		$(".index_main").load(APP+"/Note/index");
	});
	
    $('body').on("click", ".larg div h3", function(){
    if ($(this).children('span').hasClass('close')) {
      $(this).children('span').removeClass('close');
    }
    else {
      $(this).children('span').addClass('close');
    }
    /*$(this).parent().children('p').slideToggle(250);*/
  });
  
  $('body').on("click", "nav ul li a", function(){
    var title = $(this).data('title');
    $('.title').children('h2').html(title);
  });
});

</script>

</head>
<!-- url后面随机值，保证页面最新 -->
<body
ondragstart="return false;" 
onload="if(window.location.href.indexOf('temp')==-1)window.location.href=window.location.href+'?temp='+Math.random().toString();bodyLoad();" 
onpaste="return false;" 
oncut="return false;"  
oncopy="return false;" 
>

<span class='bckg'></span>
<header>
	
  <h1>
  	<img src="__IMG__/favicon.ico" id="logo" alt="爱拍课堂"/>
    爱拍课堂
  </h1>
  <nav>
    <ul>
     <li>
        <a data-title='首页' id="index">首页</a>
      </li>
      <li>
        <a data-title='课程表' id="syllabus">课程表</a>
      </li>
      <li>
        <a data-title='课堂笔记' id="note">课堂笔记</a>
      </li>
      <li>
        <a data-title='我的资料' id="information">我的资料</a>
      </li>      
    </ul>
     
  </nav>
   
</header>
<main  class="index_main"> 
<article class='larg'>
</article>
</main>
    
</body>

<!-- 自定义 游客访问  操作 Javascript 文件 -->
<script src="__JS__/user_custom.js"></script>
</html>