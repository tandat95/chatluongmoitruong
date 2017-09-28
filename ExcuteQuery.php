<?php

include("config.inc.php");

$sql = $_POST['sql'];

$ketqua= pg_query($link, $sql);

?>
