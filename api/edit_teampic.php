<?php
include_once "base.php";
dd($_POST);

$table = $_POST['table'];
foreach ($_POST['id'] as $idx => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $$table->del($id);
    } else {
        $row = $$table->find($id);
        echo "修改前";
        dd($row);
        $row['description'] = $_POST['description'][$idx];

        if(isset($_POST['sh']) && in_array($id,$_POST['sh'])){
            $row['sh']=1;
        }else{
            $row['sh']=0;
        }

        // $row['sh'] = (isset($_POST['sh']) && $_POST['sh'][$idx] == $id) ? 1 : 0;
        echo "修改後";
        dd($row);

        $sql = "UPDATE `image` set `description`='{$row['description']}' , `sh`='{$row['sh']}' WHERE `id`='{$row['id']}'";
        $pdo->exec($sql);
    }
}

header("location:../back.php?do=team_pic");
