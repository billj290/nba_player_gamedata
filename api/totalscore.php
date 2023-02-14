<?php
include_once "./base.php";
$sqlTotalScore="SELECT SUM(PTS) AS '該隊得分' FROM `gamedata` GROUP BY `Tm`='$_GET['tm']'";
// echo $sqlTotalScore;
$totalScore=$pdo->query($sqlTotalScore)->fetch(PDO::FETCH_ASSOC);
$json_data=json_encode($totalScore,JSON_UNESCAPED_UNICODE);
echo $json_data;

?>