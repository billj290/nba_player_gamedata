<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

    <?php
    session_start();
    date_default_timezone_set("Asia/Taipei");

    $dsn = "mysql:host=localhost;charset=utf8;dbname=nba";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "SELECT  max(id)
            FROM playerid
           ";

$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);
$test=$rows[0]["max(id)"];
echo $test;
for($i=1;$i<=$test;$i++){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=nba";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "SELECT  playername
            FROM playerid
            WHERE id=$i
           ";
    $test1=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r ($test1);
    // echo "</pre>";
    $dsn = "mysql:host=localhost;charset=utf8;dbname=nba";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "SELECT  PTS
            FROM gamedata
            WHERE playerid=$i
           ";
     $test2=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    //  echo "<pre>";
    //  print_r ($test2);
    //  echo "</pre>";
     echo "名子".$test1[0]["playername"]."PTS數據".$test2[0]["PTS"].",".$test2[1]["PTS"].",".$test2[2]["PTS"];
     echo "<br>";

}
    
?>


</body>

</html>