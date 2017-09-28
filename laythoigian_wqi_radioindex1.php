<?php

include("config.inc.php");


$thoigian= pg_query($link,"SELECT DISTINCT thoigian from"." ".$_POST['tbname']);
$mang =array();

while($row = pg_fetch_row($thoigian)){
	$nam = substr($row[0], 0,4);
	$thang = substr($row[0], 5,2);
	
	array_push ($mang, new ThoiGian ($nam, $thang));
	
}
	echo json_encode($mang);
	
	class ThoiGian {
	var $nam;
	var $thang;
	
	Function ThoiGian ($n, $t ){
		$this->nam = $n;
		$this->thang = $t;
	
	}	
	}
	

?>
