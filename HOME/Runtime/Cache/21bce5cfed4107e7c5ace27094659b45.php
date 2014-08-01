<?php if (!defined('THINK_PATH')) exit();?><!--
	作者：范志俊
	时间：2014-07-25
         描述：首页页面，包括显示本周课程表，和本周笔记，以及推荐笔记
-->

<style>
	#wrapper {
  padding: 12px;
}

select {
  -webkit-appearance: menulist-button;
  width: 200px;
  height: 25px;
}

.drp-popup {
  font-family: "AvenirLTStd-Heavy", "Avenir LT Std 85 Heavy", "Open Sans", Helvetica, Arial, sans-serif;
}

.drp-popup {
  top: 30px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: absolute;
  z-index: 9999;
  font-size: 12px;
  color: #444444;
  background-color: white;
  margin: 15px 0;
  padding: 18px 18px 38px;
  text-transform: uppercase;
  border: 1px solid #d6d6d6;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -webkit-box-shadow: 0px 4px 10px 0 #828282;
  -moz-box-shadow: 0px 4px 10px 0 #828282;
  box-shadow: 0px 4px 10px 0 #828282;
}
.drp-popup *, .drp-popup *:before, .drp-popup *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.drp-popup a {
  text-decoration: none;
}
.drp-popup ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.drp-popup .drp-timeline {
  position: relative;
}
.drp-popup .drp-timeline .drp-timeline-bar {
  position: relative;
  height: 13px;
  border-bottom: 3px solid #cccccc;
  bottom: 21px;
}
.drp-popup .drp-timeline .drp-timeline-bar:before, .drp-popup .drp-timeline .drp-timeline-bar:after {
  content: "";
  position: absolute;
  height: 15px;
  border-left: 3px solid #cccccc;
  bottom: -9px;
  left: 0;
}
.drp-popup .drp-timeline .drp-timeline-bar:after {
  left: auto;
  right: 0;
}
.drp-popup .drp-timeline .drp-timeline-presets {
  position: relative;
  z-index: 1;
}
.drp-popup .drp-timeline .drp-timeline-presets li {
  position: relative;
  width: 87px;
  height: 36px;
  display: inline-block;
  color: #bcbcbc;
  background-image: url("data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");
  text-align: center;
  cursor: pointer;
}
.drp-popup .drp-timeline .drp-timeline-presets li:first-child {
  margin-left: 3px;
}
.drp-popup .drp-timeline .drp-timeline-presets li .drp-button {
  z-index: 2;
  cursor: pointer;
  background-color: #e0e0e0;
  width: 12px;
  height: 12px;
  position: absolute;
  bottom: 4px;
  left: 37px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 2px solid white;
  -webkit-transition: all 0.15s ease;
  -moz-transition: all 0.15s ease;
  -o-transition: all 0.15s ease;
  transition: all 0.15s ease;
}
.drp-popup .drp-timeline .drp-timeline-presets li.drp-selected {
  color: #444444;
}
.drp-popup .drp-timeline .drp-timeline-presets li.drp-selected .drp-button, .drp-popup .drp-timeline .drp-timeline-presets li:hover .drp-button {
  background-color: #2a91ca;
  width: 16px;
  height: 16px;
  left: 35px;
  bottom: 2px;
}
.drp-popup .drp-calendar {
  display: table-cell;
  vertical-align: top;
  width: 228px;
  padding-bottom: 8px;
  border-bottom: 1px solid #e0e0e0;
}
.drp-popup .drp-calendar .drp-month-picker {
  position: relative;
  background-color: #efefef;
  height: 30px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  margin-bottom: 3px;
  line-height: 32px;
}
.drp-popup .drp-calendar .drp-month-picker .drp-month-title {
  font-size: 14px;
  text-align: center;
}
.drp-popup .drp-calendar .drp-month-picker .drp-arrow {
  -moz-user-select: -moz-none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
  position: absolute;
  width: 28px;
  height: 30px;
  line-height: 32px;
  text-align: center;
  left: 0;
  top: 0;
  color: #afafaf;
}
.drp-popup .drp-calendar .drp-month-picker .drp-arrow-right {
  left: auto;
  right: 0px;
}
.drp-popup .drp-calendar .drp-day-headers li {
  display: inline-block;
  width: 30px;
  height: 24px;
  line-height: 26px;
  margin: 0 0 3px 3px;
  text-align: center;
}
.drp-popup .drp-calendar .drp-day-headers li:first-child {
  margin-left: 0;
}
.drp-popup .drp-calendar .drp-days {
  zoom: 1;
}
.drp-popup .drp-calendar .drp-days:before, .drp-popup .drp-calendar .drp-days:after {
  content: "";
  display: table;
}
.drp-popup .drp-calendar .drp-days:after {
  clear: both;
}
.drp-popup .drp-calendar .drp-days li {
  -moz-user-select: -moz-none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  width: 33px;
  height: 24px;
  border-right: solid 3px white;
  float: left;
  cursor: pointer;
  line-height: 26px;
  text-align: center;
  margin: 0 0 3px 0;
}
.drp-popup .drp-calendar .drp-days li.drp-day-last-in-row {
  width: 30px;
  border-right: none;
}
.drp-popup .drp-calendar .drp-days li.drp-day-in-range {
  color: #2a91ca;
  background-color: #ddf3fe;
  border-color: #ddf3fe;
}
.drp-popup .drp-calendar .drp-days li.drp-day-last-in-range {
  border-color: white;
}
.drp-popup .drp-calendar .drp-days li.drp-day-selected, .drp-popup .drp-calendar .drp-days li:hover {
  color: #efefef;
  background-color: #2a91ca;
}
.drp-popup .drp-calendar .drp-days li.drp-day-disabled {
  color: #cccccc;
}
.drp-popup .drp-calendar .drp-days li.drp-day-disabled:hover {
  background-color: white;
  cursor: default;
}
.drp-popup .drp-calendar .drp-days .drp-day-empty {
  background-color: transparent !important;
  cursor: auto;
}
.drp-popup .drp-calendars {
  padding: 18px 0 10px;
  border-top: 1px solid #e0e0e0;
}
.drp-popup .drp-calendar:first-child .drp-day-selected {
  border-color: #ddf3fe;
}
.drp-popup .drp-calendar-date {
  position: absolute;
  bottom: 0px;
  height: 34px;
  width: inherit;
  text-align: center;
  color: #2a91ca;
  font-size: 16px;
}
.drp-popup .drp-calendar-date:before {
  font-size: 12px;
  color: #444444;
}
.drp-popup .drp-calendar-start .drp-calendar-date:before {
  content: "Start Date: ";
}
.drp-popup .drp-calendar-end .drp-calendar-date:before {
  content: "End Date: ";
}
.drp-popup .drp-calendar-separator {
  display: table-cell;
  position: relative;
  width: 69px;
  top: 8px;
}
.drp-popup .drp-calendar-separator:before {
  content: "";
  position: absolute;
  height: 90%;
  border-left: 1px solid #e0e0e0;
  left: 34px;
}
.drp-popup .drp-calendar-separator:after {
  content: "To";
  position: absolute;
  top: 80px;
  color: #2a91ca;
  background-color: white;
  height: 38px;
  width: 69px;
  text-align: center;
  font-size: 16px;
  line-height: 41px;
}
.drp-popup .drp-tip {
  position: absolute;
  top: 0;
  left: 30px;
}
.drp-popup .drp-tip:before, .drp-popup .drp-tip:after {
  content: "";
  position: absolute;
  border-style: solid;
  bottom: 0;
}
.drp-popup .drp-tip:before {
  left: 0;
  border-width: 0 16px 16px;
  border-color: #d6d6d6 transparent;
}
.drp-popup .drp-tip:after {
  left: 2px;
  border-width: 0px 14px 14px;
  border-color: white transparent;
}
</style>

<div class='title'>
    <h2>首页</h2>
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


<a href="#" title="<?php echo $_SESSION['uid'];?>" id="user_login_name">
<!-- 假如 session不存在或设置的值为空，即没有登录，显示登录和注册button-->

<!-- session 存在，即登录成功就显示用户名 -->
 <strong style="color:#F00;padding-right:2px ;" id="login_user_id">Hello <?php echo $_SESSION['utype']." ".$_SESSION['uid'];?></strong>
 <input type="hidden" id="session_uid" value="<?php echo $_SESSION['uid'];?>"></a>
  </div>
<article class='larg'>
<div class="panel-group" id="accordion">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        	本周课程表
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      	<div style="margin-bottom:10px;"> <div id='wrapper'>
  <form>
    <select class='custom-date' name='select'>
      <option value='7'>7 Days</option>
      <option value='30'>30 Days</option>
      <option selected='selected' value='90'>90 Days</option>
      <option value='180'>180 Days</option>
      <option value='365'>365 Days</option>
      <option value='custom'>Custom</option>
    </select>
  </form>
</div>
   <ul class="pagination pagination-lg">
  <li id="table_last"><a href="#">&laquo;上周</a></li>
  <li><a href="#">第<strong id="now_weeK">1</strong>周</a></li>
  <li id="table_next"><a href="#">下周&raquo;</a></li>
</ul>
      	</div>
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
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                         本周笔记
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
                                           本周笔记  
<ul class="media-list">
  <li class="media">
    <a class="pull-left" href="#">
       <img style="width: 64px; height: 64px;" class="media-object" src="http://d.hiphotos.baidu.com/image/pic/item/f636afc379310a55d8c966fab54543a9832610ca.jpg" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading">数据库原理</h4>
        <h5 class="media-heading">第一章</h5>
               标签：Sql
    </div>
  </li>
</ul>
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            推荐笔记
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
             推荐笔记      
      </div>
    </div>
  </div>
</div>
</article>
<!-- 时间  Javascript 文件 -->
<script type="text/javascript" src="__JS__/time.js"></script>
<!--选择教学周-->
<script type="text/javascript" src="__JS__/week_select.js"></script>
<!-- 自定义 table 操作 Javascript 文件 -->
<script src="__JS__/main_table.js"> </script>