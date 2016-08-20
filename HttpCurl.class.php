<?php
class Lib_HttpCurl {

	public function get($urli,$header=array()){
		//初始化
		$ch = curl_init();
		//设置选项,包括URL
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if(empty($header))
			curl_setopt($ch, CURLOPT_HEADER, 0);
		else
			curl_setopt($ch, CURLOPT_HEADER, $header);
		//执行并获取html文档内容
		$output = curl_exec($ch);
		//释放curl句柄
		curl_close($ch);
		//打印获取的数据
		return $output;
	}
}