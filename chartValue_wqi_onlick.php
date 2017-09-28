<?php

include("config.inc.php");
$sql =$_POST['sql'];

$ketqua= pg_query($link, $sql);

$mang=array();
while($row = pg_fetch_row($ketqua)){

		 $wqi_bod = $row[0];
		 $wqi_cod= $row[1];
		 $wqi_nh4= $row[2];
		 $wqi_po3= $row[3];
		 $wqi_tss= $row[4];
		 $wqi_do= $row[5];
		 $wqi_ph= $row[6];
		 $wqi_coliform= $row[7];
		 $wqi_doduc= $row[8];
	
	Array_push($mang, new WQI_ThongSo($wqi_bod, $wqi_cod, $wqi_nh4, $wqi_po3, $wqi_tss, $wqi_do, $wqi_ph, $wqi_coliform, $wqi_doduc) );
	
}

	echo json_encode($mang);
	
	class WQI_ThongSo {
		var $wqi_bod;
		var $wqi_cod;
		var $wqi_nh4;
		var $wqi_po3;
		var $wqi_tss;
		var $wqi_do;
		var $wqi_ph;
		var $wqi_coliform;
		var $wqi_doduc;
		function WQI_ThongSo ($a, $b, $c, $d, $e, $f, $g, $h, $i){
			$this->wqi_bod=$a;
			$this->wqi_cod=$b;
			$this->wqi_nh4=$c;
			$this->wqi_po3=$d;
			$this->wqi_tss=$e;
			$this->wqi_do=$f;
			$this->wqi_ph=$g;
			$this->wqi_coliform=$h;
			$this->wqi_doduc=$i;
			
			
		}
		
			
	}

?>
