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
    <h2>课程表</h2>
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


<a href="#" title="<?php echo $_SESSION['uid'];?>" id="user_login_name"></a>
<!-- 假如 session不存在或设置的值为空，即没有登录，显示登录和注册button-->

<!-- session 存在，即登录成功就显示用户名 -->
 Hello <strong style="color:#F00;padding-right:2px ;" id="login_user_id"><?php echo $_SESSION['utype']." ".$_SESSION['uid'];?></strong>
 <input type="hidden" id="session_uid" value="<?php echo $_SESSION['uid'];?>">
  </div>
<article class='larg'>
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
<ul class="pagination pagination-lg">
  <li id="table_last"><a href="#">&laquo;上周</a></li>
  <li><a href="#">第<strong id="table_week_number"></strong>周</a></li>
  <li id="table_next"><a href="#">下周&raquo;</a></li>
</ul>
</article>