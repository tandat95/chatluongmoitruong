<?php
include("config.inc.php");


$sql = "select encode(image,'base64') from anh "; 



$ketqua= pg_query($link, $sql);
$arr = pg_fetch_all($ketqua);

	echo str_replace('\n','', (json_encode($arr, JSON_UNESCAPED_SLASHES )));



?> 