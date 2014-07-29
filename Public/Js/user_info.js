/*
   	作者：范志俊
	时间：2014-07-25
	描述： 用户信息获取,完善，获取更多用户信息
 */
$(document).ready(function(e) {
	
	
	/*获取用户信息*/
	    $("#information").click(function(){
	   	$(".index_main").load(APP+"/User/index");
        $.ajax
        (
        	{
        		type: "post",
                url: APP+"/User/user_info",
                data: {uid:$("#session_uid").value(),type:"basic_pull"},
                dataType: "json",
                success: function(data){
                	 if(data.S=="success")
                     {
                     	$.each(data.V,function(i,item){
                         $("#basic_pull_userName").append(""+item.userName+"");
                         $("#basic_pull_userDate").append(""+item.userDate+"");
                         if(item.State==1){
                          $("#basic_pull_State").attr("class", "basic_pull_zs");	
                          $("#basic_pull_State").append("正式用户（欢迎你的使用）");
                         }
                         if(item.State==2){
                          $("#basic_pull_State").attr("class", "basic_pull_ls");	
                          $("#basic_pull_State").append("临时用户(请尽快完善信息)");
                         }
                         if(item.Type==1){
                          $("#basic_pull_Type").attr("class", "basic_pull_student");	
                          $("#basic_pull_Type").append("学生");
                         }
                         if(item.Type==2){
                          $("#basic_pull_Type").attr("class", "basic_pull_teacher");	
                          $("#basic_pull_Type").append("教师");
                         }
                         });
                     }
                     if(data.S=="failed")
                     {
                     	$().message(""+item.MT+"");
        	         }
                
                },
        	    error:function(data){
                        $().message("网络繁忙，请刷新一下，重试");
        	    }
        });
       });
   /*信息完善*/
  $("#information_perfect").click(function(){
        $.ajax
        (
        	{
        		type: "post",
                url: APP+"User/user_info",
                data: {type:"sumbit",uid:$("#meuid").value(),username:$("#me_username").value(),userRealName:$("#me_userRealName").value(),schoolId_1:$("#me_schoolId_1").value(),schoolId_2:$("#me_schoolId_2").value(),
                       schoolId_3:$("#me_schoolId_3").value(),schoolId_4:$("#me_schoolId_4").value(),userStudentId:$("#me_userStudentId").value(),userStudentPasswd:$("#me_userStudentPasswd").value(),
                       userEmail:$("#me_userEmail").value(),userTel:$("#me_userTel").value(),userAccount_qq:$("#me_userAccount_qq").value(),userAccount_sina:$("#me_userAccount_sina").value(),
                       userAccount_renren:$("#me_userAccount_renren").value(),userIntro:$("me_userIntro").value()
                      },
                dataType: "json",
                success: function(data){
                	 if(data.S=="success")
                     {
                     	alert("修改成功！");
                     }
                     if(data.S=="failed")
                     {
                     	  $().message(""+data.MT+"");
        	         }
                
                },
        	    error:function(data){
                         $().message("网络繁忙，请刷新一下，重试");       
        	    }
        });
    
  });
  /*确认信息提交*/
  $("#information_perfect").click(function(){
        $.ajax
        (
        	{
        		type: "post",
                url: APP+"User/user_info",
                data: {type:"datailPull",uid:$("uid").value()},
                dataType: "json",
                success: function(data){
                	 if(data.S=="success")
                     {
                     	 $().message("信息保存成功");
                     }
                     if(data.S=="failed")
                     {
                     	  $().message("信息保存失败，请稍后重试！");
                     }
        	         
                
                },
        	    error:function(data){
                         $().message("网络繁忙，请刷新一下，请稍后重试！");
                         
        	    }
        });
    
  });

});