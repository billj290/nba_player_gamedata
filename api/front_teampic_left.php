<?php
include_once "base.php";
$left=$_POST['getSelectValueLeft'];
$row=$Image->find(['Tm'=>$left,'sh'=>1]);

$json_data=json_encode($row,JSON_UNESCAPED_UNICODE);
echo $json_data;
?>