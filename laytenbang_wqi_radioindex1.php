
<?php

include("config.inc.php");

$tenbang= pg_query($link,"SELECT table_name 
FROM information_schema.tables 
WHERE table_schema='public'
AND table_type='BASE TABLE'
AND left(table_name,3)='wqi' 
AND right(table_name,5)='thang'");

$arr = pg_fetch_all($tenbang);
	echo json_encode($arr);

?>
