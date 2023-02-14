
<div class="col-md-6 mx-auto border p-1 shadow-sm border-success rounded">
    <h3 class="text-center">編輯球員數據</h3>
    <?php
    if(isset($_GET['playerid'])){
        $row=$Gamedata->find(['playerid'=>$_GET['playerid'],'Tm'=>$_GET['tm']]);
        // print_r($row);
        $rowName=$Playerid->find(['playerid'=>$_GET['playerid']]);
        $rowsTeam=$Tm->all();
        // dd($rowsTeam);
    }else{
        header ("location:index.php?status=edit_error");
    }

    ?>
    <form action="./api/edit_player.php" method="post">
        <div class="form-group d-flex">
            <label class="form-label col-md-3">球員playerid</label>
            <div class="form-control"><?=$row['playerid'];?></div>
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">球隊</label>
            <select class="form-control" name="Tm" id="">
                <?php
                foreach($rowsTeam as $rowTeam){
                    $selected=($rowTeam['tm']==$_GET['tm'])?'selected':'';
                    echo "<option value='{$rowTeam['tm']}' $selected>{$rowTeam['tmname']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">球員姓名</label>
            <input class="form-control" type="text" name="playername" value="<?=$rowName['playername'];?>">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">得分</label>
            <input class="form-control" type="number" step="0.01" name="PTS" value="<?=$row['PTS'];?>">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">籃板</label>
            <input class="form-control" type="number" step="0.01" name="TRB" value="<?=$row['TRB'];?>">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">抄截</label>
            <input class="form-control" type="number" step="0.01" name="STL" value="<?=$row['STL'];?>">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">助攻</label>
            <input class="form-control" type="number" step="0.01" name="AST" value="<?=$row['AST'];?>">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">阻攻</label>
            <input class="form-control" type="number" step="0.01" name="BLK" value="<?=$row['BLK'];?>">
        </div>
        <div class="text-center mt-1">
            <!-- <input type="hidden" name="table" value="gamedata"> -->
            <input type="hidden" name="playerid" value="<?=$row['playerid'];?>">
            <input class="btn btn-success" type="submit" value="確認修改">
        </div>
    </form>
</div>