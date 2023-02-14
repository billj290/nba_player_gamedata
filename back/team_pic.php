<div class="container">
    <div class="row">
        <div class="col-12 border border-success rounded mt-3">
            <h3 class="text-center">球隊徽檔案上傳</h3>
            <?php
            if (isset($_GET['upload']) && $_GET['upload'] == 'success') {
                echo "<div id='message_success' style='color:rgb(0,67,137);font-size:35px;'>檔案上傳成功!</div>";
            } else {
                echo "<div id='message_fail' style='color:red'>檔案上傳失敗! 請洽MIS</div>";
            }
            ?>

            <form action="./api/upload.php" method="post" enctype="multipart/form-data">
                <label class="form-label">圖片說明:</label>
                <input class="form-control mb-3" type="text" name="description">
                <label class="form-label">所屬球隊:</label>
                <select class="form-select mb-3" name="tm" id="">
                    <?php
                    $rowsTeam = $Tm->all();
                    foreach ($rowsTeam as $rowTeam) {
                        echo "<option value='{$rowTeam['tm']}'>{$rowTeam['tmname']} </option>";
                    }
                    ?>
                </select>
                <input class="form-control mb-3" type="file" name="img">
                <input type="submit" value="新增隊徽" class="btn btn-success mb-3">
            </form>
        </div>

        <div class="col-12 border border-success rounded mt-3">
            <form action="./api/edit_teampic.php" method="post">
                <table class="table" style="width:100%">
                    <tr class="table-success">
                        <td style="width:45%">縮圖</td>
                        <td style="width:15%">描述</td>
                        <td style="width:10%">所屬球隊</td>
                        <td style="width:5%">顯示</td>
                        <td style="width:5%">刪除</td>
                        <td></td>
                    </tr>
                    <h3 class="text-center">隊徽預覽</h3>
                    <button type="submit" class="btn btn-success mb-3">修改確定</button>
                    <?php
                    $rows = $Image->all();
                    foreach ($rows as $row) {
                        $checked = ($row['sh'] == 1) ? 'checked' : '';
                    ?>
                        <tr>
                            <td>
                                <img src="./upload/<?= $row['img']; ?>" alt="" style="height:200px">
                            </td>
                            <td>
                                <input type="text" name="description[]" value="<?= $row['description']; ?>">
                            </td>
                            <td>
                                <select name="Tm[]" id="">
                                    <?php
                                    $rowsTeam = $Tm->all();
                                    foreach ($rowsTeam as $rowTeam) {
                                        $selected = ($rowTeam['tm'] == $row['Tm']) ? "selected" : '';
                                        echo "<option value='{$rowTeam['tm']}' $selected>{$rowTeam['tm']}</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= $checked; ?>>
                            </td>
                            <td>
                                <input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                            </td>
                            <td>
                                <button type="button" class="btn btn-success" onclick="location.href='?do=change_teampic&id=<?= $row['id']; ?>'">更新圖片</button>
                                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                                <input type="hidden" name="table" value="Image">
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </form>
        </div>

    </div>
</div>