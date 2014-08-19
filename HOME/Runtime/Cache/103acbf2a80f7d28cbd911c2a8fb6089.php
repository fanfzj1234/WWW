<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：范志俊
	时间：2014-07-25
	描述：主页面，拼接header，动态变换<main>内容，由index_main.js控制
-->
<!-- 加载头文件 -->
<?php session_start();?>
<input type="hidden" value="<?php echo $_COOKIE['uid'];?>" id="hidden_uid">
<input type="hidden" value="<?php echo $_COOKIE['type'];?>" id="hidden_type">
<input type="hidden" value="<?php echo $_COOKIE['state'];?>" id="hidden_state">
<input type="hidden" value="<?php echo $_COOKIE['utype'];?>" id="hidden_utype">
<!--[if lt IE 9]>
<script type="text/javascript">
var e=("abbr,article,aside,audio,canvas,datalist,details,"+
"figure,footer,header,hgroup,mark,menu,meter,nav,output,"+
"progress,section,time,video").split(',');
for(var i=0;i<e .length;i++){
document.createElement(e[i]);
}
alert("我们感到很抱歉，无法在你的浏览器上，呈现我们的页面，请切换浏览器，谢谢！");
</script>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<noscript>
<style>.html5-wrappers{display:none!important;}</style>
<div class="ie-noscript-warning">您的浏览器禁用了脚本，请<a href="">查看帮助</a>来启用脚本!或者<a href="/?noscript=1">继续访问</a>.
</div>
</noscript>
<style>
/*html5*/
article,aside,dialog,footer,header,section,footer,nav,figure,menu{display:block}
</style>
< ![endif]--> 
<!--[if lte IE 8]>  
	<style>
/*html5*/
article,aside,dialog,footer,header,section,footer,nav,figure,menu{display:block}
</style>
<script type="text/javascript">  
(function(){  
   var html5elmeents = "address|article|aside|audio|canvas|command|datalist|details|dialog|figure|figcaption|footer|header|hgroup|keygen|mark|meter|menu|nav|progress|ruby|section|time|video".split('|');  
   for(var i = 0; i < html5elmeents.length; i++){  
      document.createElement(html5elmeents[i]);  
  }  
})();  
</script>  
<noscript>
<style>.html5-wrappers{display:none!important;}</style>
<div class="ie-noscript-warning">您的浏览器禁用了脚本，请<a href="">查看帮助</a>来启用脚本!或者<a href="/?noscript=1">继续访问</a>.
</div>
</noscript>
<![endif]-->
<!--[if IE]>
<script> 
var APP="__APP__";
alert('很抱歉，我们不能在你的浏览器上展现我们美丽动人的网页，请切换浏览器，谢谢！~');
location.href=APP+'/Public/404'; 
</script>
<![endif]-->
<!DOTYPE html PUBLI "-//W3//DTD XHTML 10 Trsitiol//E" "">
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

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="__JS__/bootstrap.min.js"></script>

<!--[if lte IE 6]>
  <script type="text/javascript" src="__JS__/bootstrap-ie.js"></script>
 <![endif]-->
<!-- jquery-ui  CSS 文件 -->
<link rel="stylesheet" href="__CSS__/jquery-ui.css" media="screen" type="text/css" />

<!--font-awesome  标准文字库  CSS 文件 -->
<link rel="stylesheet" href="__CSS__/font-awesome.css">

<!--bootstrap  再编辑   CSS 文件 -->
<link rel="stylesheet" href="__CSS__/bootstrap.css" media="screen" type="text/css"/>
 <!--[if lte IE 6]>

  <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap-ie6.css">

  <link rel="stylesheet" type="text/css" href="__CSS__/ie.css">
  <![endif]-->
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
 sroll="no"
>
<style>
#dh-t li{
	height:45px;line-height:45px;
	 }
*{
	overflow-y : visible;
 scrollbar-3dlight-color:#D4D0C8; /*- 最外左 -*/
  scrollbar-highlight-color:#fff; /*- 左二 -*/
  scrollbar-face-color:#E4E4E4; /*- 面子 -*/
  scrollbar-arrow-color:#666; /*- 箭头 -*/
  scrollbar-shadow-color:#808080; /*- 右二 -*/
  scrollbar-darkshadow-color:#D7DCE0; /*- 右一 -*/
  scrollbar-base-color:#D7DCE0; /*- 基色 -*/
  scrollbar-track-color:#FFFFFF;/*- 滑道 -*/
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
        <span class="glyphicon glyphicon-home"  data-title='首页' id="index">&nbsp;首页</span>
      </li>
      <li>
        <span data-title='课程表' id="syllabus" class="glyphicon glyphicon-calendar" >&nbsp;课程表</span>
      </li>
      <li>
        <span data-title='课堂笔记' id="note" class="glyphicon glyphicon-book">&nbsp;课堂笔记</span>
      </li>
      <li >
        <span data-title='我的资料' id="information" class="glyphicon glyphicon-star">&nbsp;我的资料</span>
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
	$("#information").click(function(){
	   	$(".index_main").load(APP+"/User/index"); 
       });
    $("#go_finish_info").click(function(){
	   	$(".index_main").load(APP+"/User/index"); 
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

<!--[if !IE]><!--> 

<!--<![endif]-->
<main  class="index_main"> 
<article class='larg'>
</article>
</main>
</body>
</html>