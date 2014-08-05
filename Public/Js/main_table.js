        var uid01=document.getElementById("session_uid").value;
		var rows;
		var currentWeek;
        /*从服务器取得指定用户的课表，读取开始时间并计算当前教学周存入cookie，返回课程信息*/
		$(document).ready(function() {
	     	var classTabel;
	     	//请求数据
			$.ajax({
			type:"post",
			dataType:"json",
			data:{uid:uid01,type:"getByTime"},
			url:APP+"/Table/curriculum_user",			
			async:false,
			success:function(data){
			    alert(data);
				var btime = new Date(data.begin_time);
			    currentWeek=TimeSpan(btime);
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
													$(trid).append("<td><span class='class_open' id=c_"+classTabel[i][i1][i2].nid+">"+classTabel[i][i1][i2].elabel+"</span></td> ");
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
				DisplayByCurrentWeek(currentWeek);
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
	})	;

		function DisplayByCurrentWeek(week)
        {
			//var week=parseInt(document.getElementById("txtWeek").value);
			var brow=(week-1)*5+1;
			var erow=week*5;
            // loop to add all the <tr>
            //var rows = parseInt(document.getElementById("rowno").text);
            for(var row_index=1;row_index<=rows*7;row_index++)
            {
            		var trId="tr_"+row_index;
            		if(document.getElementById(trId)!=undefined){
	                var tr_node=document.getElementById(trId);
	                tr_node.style.display = " ";
            	}
            }
            for(var row_index=brow;row_index<=erow;row_index++)
            {
            	var trId1="tr_"+row_index;
            	if(document.getElementById(trId1)!=undefined)
            	{
	                var tr_node=document.getElementById(trId1);
	                tr_node.style.display = "block";
               }
            }
        }
        function TimeSpan(beginTime)
        {
        		var nowtime = new Date();
				var days = nowtime.getTime()-beginTime.getTime();
				days = Math.floor(days/(24*3600*1000))+1;
				
				var weeks = Math.ceil(days/7);
				return weeks;
				
        }