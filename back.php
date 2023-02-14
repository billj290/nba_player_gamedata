<?php

include "./api/base.php";
if (!isset($_SESSION['login'])) {
    header("location:./index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <?php
    include "./layout/header.php";
    ?>

    <div class="container">
        <div class="row">

            <?php
            $do = $_GET['do'] ?? 'player_list';
            $file = "./back/" . $do . ".php";

            if (isset($file)) {
                include $file;
            } else {
                include "./back/player_list.php";
            }
            ?>

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>