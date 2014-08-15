<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：范志俊
	时间：2014-07-25
	描述：主页面，拼接header，动态变换<main>内容，由index_main.js控制
-->
<!-- 加载头文件 -->
 <?php
 session_start(); $_SESSION['uid']=$user_id; ?> 
<!--[if lt IE9]>
<script>
(function() {
if (!
/*@cc_on!@*/
0) return;
var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');
var i= e.length;
while (i--){
document.createElement(e[i])
}
})()
</script>
<![endif]-->
<!--[if lte IE 8]>
<noscript>
<style>.html5-wrappers{display:none!important;}</style>
<div class="ie-noscript-warning">您的浏览器禁用了脚本，请<a href="">查看这里</a>来启用脚本!或者<a href="/?noscript=1">继续访问</a>.
</div>
</noscript>
<![endif]-->
<style>
/*html5*/
article,aside,dialog,footer,header,section,footer,nav,figure,menu{display:block}
</style>
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
<!-- Bootstrap & Snippet plugin core CSS-->

<link href="__CSS__/index_image_style.css" rel="stylesheet">
<link href="__CSS__/table.css">
<!-- 新 jquery Javascript 文件 --> 
<script type="text/javascript" src='__JS__/jquery-2.1.1.js'></script>
<script type="text/javascript" src='__JS__/week_jquery.js'></script>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="__CSS__/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） 
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="__JS__/bootstrap.min.js"></script>

<!-- jquery-ui  CSS 文件 -->
<link rel="stylesheet" href="__CSS__/jquery-ui.css" media="screen" type="text/css" />

<!--font-awesome  标准文字库  CSS 文件 -->
<link rel="stylesheet" href="__CSS__/font-awesome.css">

<!--bootstrap  再编辑   CSS 文件 -->
<link rel="stylesheet" href="__CSS__/bootstrap.css" media="screen" type="text/css"/>
<!-- 主页 框架  CSS 文件 -->
<link rel="stylesheet" href="__CSS__/index_main.css" media="screen" type="text/css" />
<!-- 首页 CSS-->
<link href="__CSS__/main_table.css">
</head>
<!-- url后面随机值，保证页面最新 -->
<body
ondragstart="return false;" 
onpaste="return false;" 
oncut="return false;"  
oncopy="return false;" 
onload=""
>
<style>
#dh-t li{
	height:45px;line-height:45px;
	 }
</style>
<span class='bckg'></span>
<header>
	
  <h1>
  		<img src="__IMG__/logo2.png" id="logo" alt="爱拍课堂" width="87px"/>
  </h1>
  <nav style="vertical-align:middle;" id="dh-t">
    <ul>
     <li>
        <span class="glyphicon glyphicon-home"  data-title='首页' id="index">&nbsp;&nbsp;首页</span>
      </li>
      <li>
        <span data-title='课程表' id="syllabus" class="glyphicon glyphicon-calendar" >&nbsp;&nbsp;课程表</span>
      </li>
      <li>
        <span data-title='课堂笔记' id="note" class="glyphicon glyphicon-book">&nbsp;&nbsp;课堂笔记</span>
      </li>
      <li >
        <span data-title='我的资料' id="information" class="glyphicon glyphicon-star">&nbsp;&nbsp;我的资料</span>
      </li>      
    </ul>
     
  </nav>
   
</header>

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

<main  class="index_main"> 
<article class='larg'>
</article>
</main>
  
</body>
<!-- 自定义 游客访问  操作 Javascript 文件
<script src="__JS__/user_custom.js"></script> -->
</html>