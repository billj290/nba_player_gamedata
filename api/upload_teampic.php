<?php
include_once "base.php";

dd($_POST);
dd($_FILES);
if ($_FILES['img']['error'] == 0) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../upload/" . $_FILES['img']['name']);

    $sql="UPDATE `image` SET `img`='{$_FILES['img']['name']}' WHERE `id`='{$_POST['id']}'";
          
    $pdo->exec($sql);

    header("location:../back.php?do=team_pic&upload=success");
}
?>