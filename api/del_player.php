<?php
include "base.php";

$sqlgamedata="DELETE FROM `gamedata` WHERE `playerid`='{$_GET['playerid']}'";
$sqlplayerid="DELETE FROM `playerid` WHERE `playerid`='{$_GET['playerid']}'";

echo $sqlgamedata;
$pdo->exec($sqlgamedata);
$pdo->exec($sqlplayerid);


to("../back.php?do=player_list");

?>