<?php
return array(
	//'配置项'=>'配置值'

	    'SHOW_PAGE_TRACE'=>false,//开启页面trace
		'URL_HTML_SUFFIX'=>'xml|html|shtml',//配置伪静态
		'URL_CASE_INSENSITIVE' =>true,//url大小写
		
		// 'URL_ROUTER_ON' => true, //URL路由
		 'URL_MODEL' => '3',//去掉index.php
		
		'OUTPUT_ENCODE'=>false,
	

        'TMPL_PARSE_STRING'=>array(
             '__CSS__'=>'/Public/Css',
             '__JS__'=>'/Public/Js',
	      '__IMG__'=>'/Public/images',
		  '__PHOTO__'=>'/Public/img',
	      '__ckeditor__'=>'/Public/ckeditor',
	      
        ),	
);
?>
