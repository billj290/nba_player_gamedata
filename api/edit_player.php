<?php
include_once "base.php";

// $table=$_POST['table'];
// dd($_POST);

unset($_POST['playername']);
$res1=$Gamedata->save($_POST);
// echo "編輯成功";

header("location:../back.php?do=player_list");



?>