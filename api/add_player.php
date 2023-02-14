<?php
include_once "base.php";
dd($_POST);
$id=$_POST['playerid'];
$name=$_POST['playername'];
$Tm=$_POST['Tm'];
$PTS=$_POST['PTS'];
$TRB=$_POST['TRB'];
$STL=$_POST['STL'];
$AST=$_POST['AST'];
$BLK=$_POST['BLK'];


$sqlplayerid="INSERT INTO `playerid` (`playername`,`playerid`) VALUES ('$name','$id')";
// echo $sqlgamedata;
$res1=$pdo->exec($sqlplayerid);
$sqlgamedata="INSERT INTO `gamedata` (`playerid`,`Tm`,`TRB`,`AST`,`STL`,`BLK`,`PTS`) 
                              VALUES ('$id','$Tm','$TRB','$AST','$STL','$BLK','$PTS')";
$res2=$pdo->exec($sqlgamedata);
echo "新增成功".$res1;
echo "新增成功".$res2;

if($res1 && $res2){
    $status='add_success';
}else{
    $status='add_fail';
}
header("location:../back.php?do=player_list&status=$status");

?>