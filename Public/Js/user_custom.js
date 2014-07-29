/*
   	作者：范志俊
	时间：2014-07-25
	描述：游客访问，登陆就请求一次游客接口，发送到Login控制器的user_register方法
 */
$(document).ready(function(e) {
	/*游客访问*/
	$.ajax
        ({
        		type: "post",
                url: APP+"/Login/user_register",
                data: {type:"custom"},
                dataType: "json",
                success: function(data,a){
                	 if(data.S=="success")
                     {
                     	$("#user_login_name").addClass("register_style_success");
                        $("#user_login_name").append("Hello 游客："+data.uid+"");
                        
                     }
                     if(data.S=="failed")
                     {
                     	 $("#user_login_name").addClass("register_style_failed");
                         $("#user_login_name").append(" "+data.MT+" ");
                      }
                },
        	    error:function(data){
                        $("#user_login_name").addClass("register_style_success");
                        $("#user_login_name").append("游客访问已关闭");
        	    }
        });
});