/*
   	作者：范志俊
	时间：2014-07-25
	描述： 注册js，将前台的学号，密码，学校名称获取，post给后台Login控制器的user_register方法
 */
$(document).ready(function(e) {
	
	
	/*学生注册*/
	$("#student_register_button").click(function(){
		alert(1);
        $.ajax
        (
        	{
        		
        		type: "post",
                url: APP+"/Login/user_register",
                data: {type:"normal_student",studentId:$("#studentId").val(), student_password:$("#student_password").val(),schoolId:$("#school_input_1").val()},
                dataType: "json",
                success: function(data,a){
                	alert(data);
                	 if(data.S=="success")
                     {
                         $("#register_alert").attr("class", "alert alert-success");
                         $("#register_alert").append("注册成功");
                         $("#login_user_id").append(" 学生："+data.uid+"");
                     }
                     if(data.S=="failed")
                     {
                     	 $("#register_alert").attr("class", "alert alert-danger");
                         $("#register_alert").append(""+item.MT+"");
        	         }
                },
        	    error:function(data){
                         $("#register_alert").attr("class", "alert alert-danger");
                         $("#register_alert").append("注册失败，请重新注册");
        	    }
        });
  });
  /*教师注册*/
  $("#teacher_register_button").click(function(){
        $.ajax
        (
        	{
        		type: "post",
                url: APP+"Login/user_register",
                data: {type:"normal_teacher",disciplineId:$("#discipline_input").val(), teacherName:$("#teacherName").val(),teacher_password:$("#teacher_password").val(),teacher_password_again:$("#teacher_password_again").val(),schoolId:$("#school_input_2").val()},
                dataType: "json",
                success: function(data,a){
                	 if(data.S=="success")
                     {
                         $("#register_alert").attr("class", "alert alert-success");
                         $("#register_alert").append("注册成功");
                         $("#login_user_id").append(" 教师："+data.uid+"");
                     }
                     if(data.S=="failed")
                     {
                     	 $("#register_alert").attr("class", "alert alert-danger");
                         $("#register_alert").append(""+data.MT+"");
                     }
                },
        	    error:function(data){
                         $("#register_alert").attr("class", "alert alert-danger");
                         $("#register_alert").append("注册失败，请重新注册");
        	    }
        });
    
  });
});