<?php
include "base.php";

$sql="SELECT `gamedata`.`playerid`,
             `playerid`.`playerid`,  
             `playerid`.`playername` as '球員',
             `gamedata`.`Tm` as '球隊',
             `gamedata`.`PTS` as '得分',
             `gamedata`.`TRB` as '籃板',
             `gamedata`.`STL` as '抄截',
             `gamedata`.`AST` as '助攻',
             `gamedata`.`BLK` as '阻攻'
     FROM    `gamedata`,`playerid`
     WHERE   `gamedata`.`playerid`=`playerid`.`playerid` && 
             `gamedata`.`Tm`='{$_GET['tm']}'";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$json_data=json_encode($rows,JSON_UNESCAPED_UNICODE);
echo $json_data;

?>