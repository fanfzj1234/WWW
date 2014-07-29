<?php
  class CommonAction extends Action{
	      function _empty(){
          //header("Location: /404.html");
		  $this->display('Public:404');
         }
		 function http_post_data($url, $data_string) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json; charset=utf-8',
			'Content-Length: ' . strlen($data_string))
		);
        ob_start();
        curl_exec($ch);
        $return_content = ob_get_contents();
        return $return_content;
         }
	  }

?>