$(document).ready(function(e) {
	
	        
        /*从服务器取得指定用户的课表，读取开始时间并计算当前教学周存入cookie，返回课程信息*/
		function GetTableInforByServer() {
				var iuId;	//用户id
				var idivection;	 //显示规则（横向，竖向）
				$.ajax({
				type:"Post",
				dataType="json",
				url:"",
				data:{uId:iuId,schoolWeek:ischoolWeek,divection:idivection},
				async:false,
				success:function(json){
					//$.cookie('classTable',json);  //获取成功，则存入cookie
					return json;					//成功则返回json数据
					$.each(json, function(key,item) {    
						if(key="beginTime")
						{
							var currWeek=TimeSpan(item);		//根据json数据中的教学开始时间计算出当前所属教学周
							$.cookie("currentWeek",currWeek);    //把当前教学周存入cookie
						}
						else if(key="class")
						{
							return item;
						}
						else
						{
							alert("课表json数据解析错误");
						}
					});
					
				},
				error:function(json){
					alert("加载错误");			//否则显示加载错误
					}
					});
				}
		
		/*课表表显示函数*/
		function Display()
		{
			var name;
        	var type;
			$("#mytable").empty();
			var tableClass=GetTableInforByServer();
			if(tableClass!=null)
			{
					var currentWeek=$.cookie("currentWeek");  //从cookie 取得当前教学周
		            $.each(item1, function (key2, item2) {
	                if (key2 == currentWeek） {
	                    $.each(item2, function (key3, item3) {
	                        $("#mytable").append("<tr id="+key3+"></tr>");//为节数在table中添加一个tr；添加横向tr（即第几大节）
	                            $.each(item3, function (key4, item4) {
	                                if (item4 == null) {
	                                    //alert("当前没有课程");
	                                    $("#key3").append("<td><span class="+value.type+">"+null+"</span></td> ");//如果没有课程，指定位置（相应节数）则显示null
	                                }
	                                else {
	                                    $.each(item4, function (key5, item5) {
	                                        //alert(key5 + ":" + item5);
	                                        if (key5 == "type") {
	                                            type = item5;
	                                        }
	                                        if (key5 == "name") {
	                                        	if(item5.length>5) //如果课程名字长度大于5的话，则截取前五个字显示，后面显示***
	                                        	{
	                                        		item5.substring(0, 4) + "***";
	                                        	}
	                                        	else
	                                        	{
	                                            name = item5;
	                                        	}
	                                        }
	                                    });
	                                    //alert(name + "::" + type);
	                                    $("#tnum").append("<td><span class="+type+">"+name+"</span></td> ");  //把当前课程信息填入table相应位置
	                                }
	                            });
	                    });
	                }
           			});

			}
			else
			{
				alert("get null information from server")；
			}
		}
		

/*		/*判断cookie是否记录，没有记录则去读取数据，并记录cookie；有记录的话则显示在表中*/
		function isHasValueCookie()
		{
			if($_cookie"classTable"]==null)
			{
				GetTableInforByServer();
			}
				Display();
		}
	*/
		/*获取时间差,并转换为当前教学周 返回*/
		function TimeSpan(var beginTime)
		{
			//var beginTime;//获得本学期教学开始时间
			var currentTime=new Date(); //获取当前时间信息
			var result1 = (((currentTime.getMonth() - beginTime.getMonth()) * 30) + (currentTime.getDate() - beginTime.getDate())) / 7;
        	var currentWeek = Math.floor(result1);  //如果两个时间差转换为周数为小数的话，则去整（向下取整）
        	return currentWeek;
		}
})
	
	