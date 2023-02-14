<?php
include_once "base.php";
// $table=$_POST['table'];

if ($_FILES['img']['error'] == 0) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../upload/" . $_FILES['img']['name']);

    $Image->save(['img'=>$_FILES['img']['name'],'sh'=>0,'description'=>$_POST['description'],'Tm'=>$_POST['tm']]);

    header("location:../back.php?do=team_pic&upload=success");
} else {
    echo "檔案上傳失敗";
    echo $_FILES['img']['error'];
}
