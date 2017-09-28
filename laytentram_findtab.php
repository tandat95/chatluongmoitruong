
<?php

include("config.inc.php");

$sql = $_POST['sql'];
 
$tentram= pg_query($link, $sql);
$mang = array();


$arr = pg_fetch_all($tentram);
	echo json_encode($arr);

?>
