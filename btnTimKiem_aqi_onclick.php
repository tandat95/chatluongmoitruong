<?php

include("config.inc.php");

$sql = $_POST['sql'];



$ketqua= pg_query($link, $sql);
$mang =array();

while($row = pg_fetch_row($ketqua)){
	$aqi 		= 	$row[0];
	$thoigian 	= 	$row[1];
	
	
	array_push ($mang, new KetQua ($aqi, $thoigian));
	
}
	echo json_encode($mang);
	
	class KetQua {
	var $aqi;
	var $thoigian;

	Function KetQua ($a, $t){
		$this->aqi = $a;
		$this->thoigian = $t;
		
	}	
	}

?>
