<?php

include("config.inc.php");

$sql = $_POST['sql'];


$ketqua= pg_query($link, $sql);
$mang =array();

while($row = pg_fetch_row($ketqua)){
	$tentram 		= 	$row[0];
	$x 				= 	$row[1];
	$y				= 	$row[2];
	$wqi_tram		= 	$row[3];
	
	array_push ($mang, new KetQua ($tentram, $x, $y, $wqi_tram));
	
}
	echo json_encode($mang);
	
	class KetQua {
	var $tentram;
	var $x;
	var $y;
	var $wqi_tram;
	Function KetQua ($t, $x, $y, $w){
		$this->tentram = $t;
		$this->x = $x;
		$this->y = $y;
		$this->wqi_tram = $w;
	}	
	}

?>
