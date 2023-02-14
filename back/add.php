<div class="col-md-6 mx-auto border p-1 shadow-sm border-success rounded">
    <h3 class="text-center">新增球員數據</h3>
  
    
    <form action="./api/add_player.php" method="post">
        <div class="form-group d-flex">
            <label class="form-label col-md-3">球員playerid</label>
            <?php
            $sql="SELECT max(`playerid`) as 'max' FROM `gamedata`";
            $max=q($sql);
            // dd($max);
            // echo $max[0]['max'];
            ?>
            <input class="form-control" name="playerid" value="<?=$max[0]['max']+1;?>">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">球隊</label>
            <select class="form-control" name="Tm" id="">
                <?php
                $rowsTeam=$Tm->all();
                foreach($rowsTeam as $rowTeam){
                    // $selected=($rowTeam['tm']==$_GET['tm'])?'selected':'';
                    echo "<option value='{$rowTeam['tm']}'>{$rowTeam['tmname']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">球員姓名</label>
            <input class="form-control" type="text" name="playername" value="">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">得分</label>
            <input class="form-control" type="number" step="0.01" name="PTS" value="">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">籃板</label>
            <input class="form-control" type="number" step="0.01" name="TRB" value="">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">抄截</label>
            <input class="form-control" type="number" step="0.01" name="STL" value="">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">助攻</label>
            <input class="form-control" type="number" step="0.01" name="AST" value="">
        </div>
        <div class="form-group d-flex mt-1">
            <label class="form-label col-md-3">阻攻</label>
            <input class="form-control" type="number" step="0.01" name="BLK" value="">
        </div>
        <div class="text-center mt-1">
            <!-- <input type="hidden" name="table" value="gamedata"> -->
            
            <input class="btn btn-success" type="submit" value="確認修改">
        </div>
    </form>
</div>