<?php
include_once "base.php";
$right=$_POST['getSelectValueRight'];
$row=$Image->find(['Tm'=>$right, 'sh'=>1]);

$json_data=json_encode($row,JSON_UNESCAPED_UNICODE);
echo $json_data;
?>