<?php

include("config.inc.php");
$sql =$_POST['sql'];

$ketqua= pg_query($link, $sql);

$mang=array();
while($row = pg_fetch_row($ketqua)){

		 $aqi_ngay_so2 = $row[0];
		 $aqi_ngay_co = $row[1];
		 $aqi_ngay_no2 =$row[2];
		 $aqi_ngay_o3 = $row[3];
		 $aqi_ngay_tsp = $row[4];
		 $aqi_ngay_pm25 = $row[5];
		 $aqi_ngay_pm10 = $row[6];
		$aqi_ngay_pb = $row[7];
	
	Array_push($mang, new AQI_ThongSo( $aqi_ngay_so2, $aqi_ngay_co,$aqi_ngay_no2,$aqi_ngay_o3,$aqi_ngay_tsp, $aqi_ngay_pm25, $aqi_ngay_pm10,$aqi_ngay_pb) );
	
}

	echo json_encode($mang);
	
	class AQI_ThongSo {
		var $aqi_so2;
		var $aqi_co;
		var $aqi_no2;
		var $aqi_o3;
		var $aqi_tsp;
		var $aqiy_pm25;
		var $aqi_pm10;
		var $aqi_pb;
		function AQI_ThongSo ($a, $b, $c, $d, $e, $f, $g, $h){
			$this->aqi_so2=$a;
			$this->aqi_co=$b;
			$this->aqi_no2=$c;
			$this->aqi_o3=$d;
			$this->aqi_tsp=$e;
			$this->aqi_pm25=$f;
			$this->aqi_pm10=$g;
			$this->aqi_pb=$h;
			
			
		}
		
			
	}

?>
