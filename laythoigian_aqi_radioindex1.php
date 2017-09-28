<?php
include("config.inc.php");

$thoigian= pg_query($link,"SELECT DISTINCT thoigian from"." ".$_POST['tbname']);
$mang =array();

while($row = pg_fetch_row($thoigian)){
	$nam = substr($row[0], 0,4);
	$thang = substr($row[0], 5,2);
	$ngay = substr($row[0], 8,2);
	$gio = substr($row[0], 11,8);
	array_push ($mang, new ThoiGian ($nam, $thang, $ngay, $gio));
	
}
	echo json_encode($mang);
	
	class ThoiGian {
	var $nam;
	var $thang;
	var $ngay;
	var $gio;
	Function ThoiGian ($n, $t, $ng, $g){
		$this->nam = $n;
		$this->thang = $t;
		$this->ngay = $ng;
		$this->gio = $g;
	}	
	}

?>
