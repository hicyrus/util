<?php
class Lib_HttpCurl {

	public function get($url,$header=array()){
		//初始化
		$ch = curl_init();
		//设置选项,包括URL
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if(empty($header))
                curl_setopt($ch, CURLOPT_HEADER, 0);
        else{
                curl_setopt($ch,CURLOPT_HEADER,0);
                curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        }
       
        	
		//执行并获取html文档内容
		$output = curl_exec($ch);
		if(curl_errno($ch)){
        	curl_close($ch);
        	return curl_errno($ch);
        }
		//释放curl句柄
		curl_close($ch);
		//打印获取的数据
		return $output;
	}

	public function post($url,$postData=array(),$header=array()){
		//初始化
		$ch = curl_init();
		//设置选项,包括URL
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if(empty($header))
                curl_setopt($ch, CURLOPT_HEADER, 0);
        else{
                curl_setopt($ch,CURLOPT_HEADER,0);
                curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        }
        //post数据
        curl_setopt($ch, CURLOPT_POST, 1);
        //post的变量
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

		//执行并获取html文档内容
		$output = curl_exec($ch);
		if(curl_errno($ch)){
        	curl_close($ch);
        	return curl_errno($ch);
        }

		//释放curl句柄
		curl_close($ch);
		//打印获取的数据
		return $output;
	}
}