<?php

include("config.inc.php");

$sql = $_POST['sql'];



$ketqua= pg_query($link, $sql);
$mang =array();

while($row = pg_fetch_row($ketqua)){
	$wqi 		= 	$row[0];
	$thoigian 	= 	$row[1];
	
	
	array_push ($mang, new KetQua ($wqi, $thoigian));
	
}
	echo json_encode($mang);
	
	class KetQua {
	var $wqi;
	var $thoigian;

	Function KetQua ($w, $t){
		$this->wqi = $w;
		$this->thoigian = $t;
		
	}	
	}

?>
