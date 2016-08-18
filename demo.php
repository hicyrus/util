<?php

require "Geo.class.php";

$g = [31.2014966,121.40233369999998,31.22323799999999,121.44552099999998];


echo Lib_Geo::getDistance($g[0],$g[1],$g[2],$g[3]);

?>