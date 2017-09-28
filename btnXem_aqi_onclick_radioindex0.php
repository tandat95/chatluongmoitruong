<?php

include("config.inc.php");

$sql = $_POST['sql'];



$ketqua= pg_query($link, $sql);
$mang =array();

while($row = pg_fetch_row($ketqua)){
	$tentram 		= 	$row[0];
	$x 				= 	$row[1];
	$y				= 	$row[2];
	$aqi_ngay_tram	= 	$row[3];
	
	array_push ($mang, new KetQua ($tentram, $x, $y, $aqi_ngay_tram));
	
}
	echo json_encode($mang);
	
	class KetQua {
	var $tentram;
	var $x;
	var $y;
	var $aqi_ngay_tram;
	Function KetQua ($t, $x, $y, $a){
		$this->tentram = $t;
		$this->x = $x;
		$this->y = $y;
		$this->aqi_ngay_tram = $a;
	}	
	}

?>
