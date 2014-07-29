/*
   	作者：范志俊
	时间：2014-07-25
	描述： 验证码点击切换，button点击特效，
 */
 
	
	$(document).ready( function() {
		$("#code_img").click(function(){
		$("#code_img").attr("src",APP+"/Public/code?"+"Math.random()");
		
	});		
	$("#loading-example-btn").click(function(){
		$("#loading-example-btn").value("Loading...");
	});

});