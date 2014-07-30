/*
   	作者：范志俊
	时间：2014-07-25
         描述：  获取学校列表js，获取学校文本框中输入的内容，post给后台Public控制器的get_school_list方法，分析并处理后台传递回来的json数据
                     获取专业列表js，获取专业文本框中输入的内容，post给后台Public控制器的get_discipline_list方法，分析并处理后台传递回来的json数据
*/
$(document).ready(function(e) {
    // var APP="__APP__";
	//学生school下拉列表获取
 var inputString_1=$("#school_input_1").val();
 if(inputString_1=="") { 
//文本框内容为空 
    $('#school_list_1').hide(); 
   } 
 /*提交数据*/

/*假如文本框进行输入*/
$("#school_input_1").keyup(function(e){
	if(e.keyCode!=40&&e.keyCode!=38)
	{   
		$("#school_list_1").show();
		$.ajax({
			type:"post",
			url:APP+"/Public/get_school_list",
			data:{action: "search_school",schoolName:inputString_1},
			async:false,
			success: function (data,a) {
				$('#school_list_1').empty();
	            $.each(data,function(i,item){
	                 $("#school_list_1").append("<option>&nbsp;&nbsp;&nbsp;&nbsp;"+item.schoolName+"</option>");      
                });
	        }
		});
	} 
	else{
		$("#school_list_1").hide();
	}
  });
/*下拉列表失去焦点*/
$("#school_input_1").blur(function(){ 
	$("#school_list_1").hide();
});
$("#school_list_1").blur(function(){ 
	$("#school_list_1").hide();
});
/*下拉列表选择，将选择的值放进文本框内*/
$("#school_list_1 option").click(function(event){
	$("#school_input_1").val($(this).text());
});


//教师school下拉列表获取
 var inputString_2=$("#school_input_2").val();

 if(inputString_2=="") { 
//文本框内容为空 
    $('#school_list_2').hide(); 
   } 
 /*提交数据*/

/*假如文本框进行输入*/
$("#school_input_2").keyup(function(e){
	if(e.keyCode!=40&&e.keyCode!=38)
	{   
		$("#school_list_2").show();
		$.ajax({
			type:"post",
			url:APP+"/Public/get_school_list",
			data:{action: "search_school",schoolName:inputString_2},
			async:false,
			success: function (data,a) {
	                 $('#school_list_2').empty();
	                 $.each(data,function(i,item){
	                      $("#school_list_2").append("<option>&nbsp;&nbsp;&nbsp;&nbsp;"+item.schoolName+"</option>");  
	                 });
            }
		});
	} 
	else{
		$("#school_list_2").hide();
	}
  });
/*下拉列表失去焦点*/
$("#school_input_2").blur(function(){ 
	
	$("#school_list_2").hide();
});
$("#school_list_2").blur(function(){ 
	
	$("#school_list_2").hide();
});
/*下拉列表选择，将选择的值放进文本框内*/
$("#school_list_2 option").click(function(event){
	$("#school_input_2").val($(this).text());
});




//教师discipline下拉列表获取
 var inputString_3=$("#discipline_input").val();

 if(inputString_3=="") { 
//文本框内容为空 
    $('#discipline_list').hide(); 
   } 
 /*提交数据*/

/*假如文本框进行输入*/
$("#discipline_input").keyup(function(e){
	if(e.keyCode!=40&&e.keyCode!=38)
	{   
		$("#discipline_list").show();
		$.ajax({
			type:"post",
			url:APP+"/Public/get_discipline_list",
			data:{action: "search_discipline",disciplineName:inputString_3},
			async:false,
			success: function (data,a) {
	                 $('#school_list_2').empty();
	                 $.each(data,function(i,item){
	                      $("#school_list_2").append("<option>&nbsp;&nbsp;&nbsp;&nbsp;"+item.disciplineName+"</option>");  
	                 });
            }
		});
	} 
	else{
		$("#discipline_list").hide();
	}
  });
/*下拉列表失去焦点*/
$("#discipline_input").blur(function(){ 
	
	$("#discipline_list").hide();
});
$("#discipline_list").blur(function(){ 
	
	$("#discipline_list").hide();
});
/*下拉列表选择，将选择的值放进文本框内*/
$("#discipline_list option").click(function(event){
	$("#discipline_input").val($(this).text());
});

});