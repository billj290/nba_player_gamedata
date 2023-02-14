<?php
include "base.php";
$rows=$Tm->all();
$json_data=json_encode($rows,JSON_UNESCAPED_UNICODE);

echo $json_data;

?>