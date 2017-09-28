
<?php
include("config.inc.php");
$sql = $_POST['sql'];

$ketqua= pg_query($link, $sql);
$arr = pg_fetch_all($ketqua);
	echo json_encode($arr);

?>
