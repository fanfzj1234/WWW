<?php if (!defined('THINK_PATH')) exit();?>﻿<!--
	作者：范志俊
	时间：2014-07-25
         描述：首页页面，包括显示本周课程表，和本周笔记，以及推荐笔记
-->
<script>
    var APP = "__APP__";
	var IMG = "__IMG__";
</script>
<link href="__CSS__/main_table.css">
<style>
th{
	font-size: 16px
}
span{
	font-size: 14px;
	font: "微软雅黑";
}
#mytable,#xxtable{ 
width: 100%; 
padding: 0; 
margin: 0; 
text-align : center ; 
background-color:#ffffff;
} 

td { 
border-right: 1px solid #C1DAD7; 
border-bottom: 1px solid #C1DAD7; 
font-size:14px; 
align-content: center;
width:160px;
color: #000000;
} 
#detailImg-pre,
#detailImg-next {
	position: absolute;
	width: 30px;
	height: 46px;
	top: 30%;
	background: url(__IMG__/page_button.gif) 0 0 no-repeat;
	cursor: pointer;
	text-indent:-9999px;
}

.detailImg img {
	max-width: 684px;
}
.detailImg p {
	text-align: center;
	color: #999;
}


#detailImg-box{
    -moz-box-flex: 1;-webkit-box-flex: 1;margin-left:30px;margin-right:30px
}
#detailImg-box,#detailImg-pre,#detailImg-next,detailImg{
    -moz-box-sizing: border-box;-webkit-box-sizing: border-box;
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
.detailImg {
	text-align: center;
	position: relative;
	display: -moz-box;display: -webkit-box;
}

.table-heading{ 
    font-family : Georgia, serif; 
    font-size : 16px ; 
    font: normal 11px auto "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; 
    align-content: center;
    color : #101010 ; 
} 

.week_id_num_span{
	text-align: center;
    width: 30px;
    height:30px;
    line-height:35px;
    padding: 1px 1px 1px 3px;
    border: 1px solid transparent;
    border-radius: 1px;
    -moz-border-radius: 1px;
    -webkit-border-radius: 1px;
    color: #000000;
	background-color:#F7FBFF ;
	float: left;
    margin: 1px 1px;
    font-size: 16px;
}
.week_id_num_span:hover{
    color: #FFFFFF;
	background-color:#3bafda ;
	cursor: pointer;
}
.week_id_num_span_active{
    color: #FFFFFF;
	background-color:#0a64a4 ;
	cursor: pointer;
}
.class_open_xx{
	color: #60c5eb;
	}
.class_open_kc{
	color: #4795d1;
	}
.class_open_ks{
	color: #f04037;
	}
.class_close{
	color: #4f6b72;
	}
.class_null{
	color: #FFFFFF;
	}
#classInfo{
	background-color:#DFF1FF;
	height: auto;
	font-size:14px;
	display: none;
}
</style>

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


<a href="#" title="<?php session_start(); echo $_SESSION['uid'];?>" id="user_login_name" class="glyphicon glyphicon-user" style="font-size: 18px;">
<!-- 假如 session不存在或设置的值为空，即没有登录，显示登录和注册button-->

<!-- session 存在，即登录成功就显示用户名 -->
 <strong style="color:#4795d1;padding-right:2px;font-size: 16px;" id="login_user_id">Hello Uid:<?php echo $_SESSION['uid']; ?>&nbsp;&nbsp;用户</strong>
 <input type="hidden" id="session_uid" value="<?php echo $_SESSION['uid'];?>" text="<?php echo $_SESSION['uid'];?>">
  <input type="hidden" id="week_num" value="">
  </a>
  </div>
<article class='larg'>
	  <div style="margin-left:30px"  id="jxz_xz" class="dropdown">
         <botton class="btn btn-primary_1 btn-lg" data-toggle="modal" data-target="#week_select_modal">
					选择教学周
				</botton>
<div class="modal fade bs-example-modal-sm" id="week_select_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"  aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h5 class="modal-title" id="login_ModalLabel">教学周选择</h5>
      </div>
       <div class="modal-body">
                    <div class="modal-form" >
                    <div class="form-group" >
                      <div id="week_select_div" style="height: auto;margin-bottom: 80px;">
                      </div>
		            </div>
		              </div>
    </div>
  </div>
</div>
</div>
</div>
    <div class="detailImg" > 
		<a id="detailImg-pre" alt="上一周">&lt;</a>
		<div id="detailImg-box" class="box">
		<table id="mytable" cellspacing="0" class="table table-bordered table-hovers"> 
      <tr> 
            <th id="trw_1"></td>
			<th id="trw_2"></td>
			<th id="trw_3"></td>
			<th id="trw_4"></td>
			<th id="trw_5"></td>
			<th id="trw_6"></td>
			<th id="trw_7"></td>
      </tr> 
</table> 
<div id="classInfo" >
     <table class="table table-striped table-bordered table-condensed" id="viewTable002">
     </table>
</div>
 </div>
		<a id="detailImg-next" alt="下一周">&gt;</a> 
</div>

<script>  
		var uid01=document.getElementById("session_uid").value;
		var rows;           //共有的周数
		var currentWeek;    //保存当前周
		var tempWeek;       //临时周，用于用户操作（上一周，下一周）
		var btime;			//教学开始时间			
        /*从服务器取得指定用户的课表，读取开始时间并计算当前教学周存入cookie，返回课程信息*/
		$(document).ready(function() {
			var APP="__APP__"; 			 
	     	var classTabel;
	     	//请求数据
			$.ajax({
			type:"post",
			dataType:"json",
			data:{uid:uid01,type:"getByTime"},
			url:APP+"Table/curriculum_user",			
			async:false,
			success:function(data){
				classDetail=data;
			    btime = new Date(data.begin_time);
			    currentWeek=TimeSpan(btime);
			    tempWeek=currentWeek;
				classTabel=data.class;
                    var k=1;
                    		rows=classTabel.length;
							for(var i=0;i<classTabel.length;i++)
							{
								for(var i1=0;i1<classTabel[i].length;i1++)
									{
										$("#mytable").append("<tr style='display:none' id=tr_"+k+"></tr>");
										for(var i2=0;i2<classTabel[i][i1].length;i2++)
											{
												var trid="#tr_"+k;
												if(classTabel[i][i1][i2] !=null)
												{
													var itemClassexmtype=classTabel[i][i1][i2].exmtype;
													var itemClassLabel=classTabel[i][i1][i2].elabel;
													if(itemClassLabel.length>8)
													{
														itemClassLabel=itemClassLabel.substring(0, 8) + "***";
													}
													 if(itemClassexmtype=="考查")
													$(trid).append("<td><span class='class_open_kc test-center' id=class_"+(i)+"_"+(i1)+"_"+(i2)+" onmouseover='ViewInfor(id)' onmouseout='ViewDelete()'>"+itemClassLabel+"</span></td> ");
													if(itemClassexmtype=="考试")
													$(trid).append("<td><span class='class_open_ks test-center' id=class_"+(i)+"_"+(i1)+"_"+(i2)+" onmouseover='ViewInfor(id)' onmouseout='ViewDelete()'>"+itemClassLabel+"</span></td> ");
													if(itemClassexmtype=="限选")
													$(trid).append("<td><span class='class_open_xx test-center' id=class_"+(i)+"_"+(i1)+"_"+(i2)+" onmouseover='ViewInfor(id)' onmouseout='ViewDelete()'>"+itemClassLabel+"</span></td> ");
												}
												else
												{
													//alert("第"+(i+1)+"周星期"+(i2+1)+"第"+(i1+1)+"大节"+"没课");
													$(trid).append("<td ><span class='class_null'>"+"空"+"</span></td> ");
												}
											}
		                                k++;
								}
							}
							if(currentWeek<0)
							{
								ChangeTimeView();
								DisplayByCurrentWeek(1);
								
							}
							else if(currentWeek>22)
							{
								ChangeTimeView();
								DisplayByCurrentWeek(18);
							}
							else
							{
								ChangeTimeView();
								DisplayByCurrentWeek(currentWeek);
							}
			},
			error:function(){
				alert("data error");
			}
			
});
	
/***********************************************/
            $('th').parent().addClass('table-heading');         
            $('td:contains("showtime")').siblings().addClass('tdhlight'); 
            $('#mytable td').hover(function(){ 
                   
                     	 $(this).addClass('info'); 
                     $(this).css("cursor","pointer"); 
                   
                }, 
                function(){ 
                    
                    $(this).removeClass('info'); 
                    
                });  
			$("#detailImg-next").click(function(){
		           ChangClassWeek("next");
		        });
			$("#detailImg-pre").click(function(){
		           ChangClassWeek("pre");
		        });
		    //教学周选择循环显示周
		    var week_num=rows;
			for(var i=0;i<week_num;i++)
			{
				if(currentWeek!=(i+1))
				$("#week_select_div").append("<span class='week_id_num_span' id='week_id_num_"+i+"' onclick='week_select(id)'>"+(i+1)+"</span>");
				else{
				$("#week_select_div").append("<span class='week_id_num_span_active' id='week_id_num_"+i+"' onclick='week_select(id)'>"+(i+1)+"</span>");	
				}
				if((i+1)%9==0)
				$("#week_select_div").append("<br>");
			}
			
	})	;

		//显示当前教学周的课表，并隐藏其他教学周
		function DisplayByCurrentWeek(week)
        {
			var brow=(week-1)*5+1;
			var erow=week*5;
 
            for(var row_index=1;row_index<=rows*7;row_index++)
            {
            		var trId="tr_"+row_index;
            		if(document.getElementById(trId)!=undefined){
	                var tr_node=document.getElementById(trId);
	                tr_node.style.display = "none";
            	}
            }
            for(var row_index=brow;row_index<=erow;row_index++)
            {
            	var trId1="tr_"+row_index;
            	if(document.getElementById(trId1)!=undefined)
            	{
	                var tr_node=document.getElementById(trId1);
	                tr_node.style.display = "table-row";
               }
            }
        }
        
		//计算时间差，返回当前教学周
		function TimeSpan(beginTime)
        {
        		var nowtime = new Date();
				var days = nowtime.getTime()-beginTime.getTime();
				days = Math.floor(days/(24*3600*1000))+1;
				var weeks = Math.ceil(days/7);
				return weeks;
        }

		//根据选择的周，显示相应周次的课表
		function  ChangClassWeek(item) 
		{
			if(item=="pre")
			{
				if(tempWeek==0)
				{
					ChangeTimeView() ;
					DisplayByCurrentWeek(1);
					alert("已经到第一周了，不要再点了");
				}
				else
				{
					--tempWeek;
					ChangeTimeView() ;
					DisplayByCurrentWeek(tempWeek+1);
				}
			}
			else if(item=="next")
			{
				if(tempWeek==18)
				{
					ChangeTimeView() ;
					alert("考试周，没有课，好好复习啦~");
					DisplayByCurrentWeek(18);
				}
				else
				{
					++tempWeek;
					ChangeTimeView() ;
					DisplayByCurrentWeek(tempWeek+1);
					
				}
			}
			else
			{
				alert("operate error!!");
			}
		}

		//根据当前教学周，改变table 表头显示的日期
		function ChangeTimeView() 
		{
			var currentDate=btime.valueOf()+parseInt(tempWeek)*7* 24 * 60 * 60 * 1000;
			currentDate = new Date(currentDate);
			var nowDayOfWeek = currentDate.getDay(); 
			var nowDay = currentDate.getDate(); 
			var nowMonth = currentDate.getMonth(); 
			var nowYear = currentDate.getYear(); 
			nowYear += (nowYear < 2000) ? 1900 : 0; 
			var weekStartDate = new Date(nowYear, nowMonth, nowDay - nowDayOfWeek+1); 
			var weekEndDate = new Date(nowYear, nowMonth, nowDay + (6 - nowDayOfWeek)); 
			for(var count=1;count<8;count++)
			{
				var trw_week=document.getElementById("trw_"+count);
				trw_week.innerHTML=weekStartDate.toDateString();
				weekStartDate=new Date(weekStartDate.valueOf()+24*60*60*1000);
			}
			
		}
				
			//显示课程详细信息
		function ViewInfor(viewId)
		{
			//alert(viewId);
    		var strs = new Array(); 
   			strs = viewId.split("_"); 
			var i0=parseInt(strs[1]);
			var i1=parseInt(strs[2]);
			var i2=parseInt(strs[3]);
				var classInfo1=document.getElementById("classInfo");
				var table1 = document.getElementById("viewTable002");
				var row = table1.insertRow();	
				var cell = row.insertCell(0);
				cell.innerHTML=classDetail.class[i0][i1][i2].elabel;				
				var cell = row.insertCell(0);
				cell.innerHTML="课程标签";
				
				var row = table1.insertRow();
				var cell = row.insertCell(0);
				cell.innerHTML=classDetail.class[i0][i1][i2].ctype;
				var cell = row.insertCell(0);
				cell.innerHTML="课程类型";
				
				var row = table1.insertRow();
				var cell = row.insertCell(0);
				cell.innerHTML=classDetail.class[i0][i1][i2].etname;
				var cell = row.insertCell(0);
				cell.innerHTML="任课老师";
				
				var row = table1.insertRow();
				var cell = row.insertCell(0);
				cell.innerHTML=classDetail.class[i0][i1][i2].exmtype;
				var cell = row.insertCell(0);
				cell.innerHTML="考试类型";
				
				var row = table1.insertRow();
				var cell = row.insertCell(0);
				cell.innerHTML=classDetail.class[i0][i1][i2].eaddress;
				var cell = row.insertCell(0);
				cell.innerHTML="上课地址";
				classInfo1.style.display = "block";
				//document.body.appendChild(classDiv);
				//alert(classDetail.class[i0][i1][i2].elabel+";"+classDetail.class[i0][i1][i2].ctype+";"+classDetail.class[i0][i1][i2].etname+";"+classDetail.class[i0][i1][i2].exmtype+";"+classDetail.class[i0][i1][i2].eaddress);
		}
		
		
		function ViewDelete()
		{
			var classInfo1=document.getElementById("classInfo");
			var viewTable=document.getElementById("viewTable002");
			 var pchildren = viewTable.childNodes;
			//清空表中的行和列
			for(var a=0; a<pchildren.length; a++){
				viewTable.removeChild(pchildren[a]);
			}
			classInfo1.style.display = "none";
		}
		
		//教学周选择周显示相应周
		function week_select(weekId){
			//alert(weekId);
			$('#week_select_modal').modal('toggle')
			var strs = new Array(); 
   			strs = weekId.split("_"); 
			var i0=parseInt(strs[1]);
			var i1=parseInt(strs[2]);
			var i2=parseInt(strs[3]);
			var i3=parseInt(i2)+1;
			DisplayByCurrentWeek(i3);
			tempWeek=i2;
			ChangeTimeView() ;
		}
</script>
</article>