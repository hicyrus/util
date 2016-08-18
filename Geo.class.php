<?php

class Lib_Geo {

	const EARTHRADIUS = 6367000;
	//计算地理距离
	public static function getDistance($lat1,$lng1,$lat2,$lng2){
		//将角度转为狐度
		$rLat1=deg2rad($lat1);//deg2rad()函数将角度转换为弧度
		$rLat2=deg2rad($lat2);
		$rLng1=deg2rad($lng1);
		$rLng2=deg2rad($lng2);
		$a=$rLat1-$rLat2;
		$b=$rLng1-$rLng2;
		$s=2*asin(sqrt(pow(sin($a/2),2)+cos($rLat1)*cos($rLat2)*pow(sin($b/2),2)))*6378.137*1000;
		return $s;
	}



}


?>