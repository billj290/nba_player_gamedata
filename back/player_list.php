<div class="text-center" style="color:red">
<?php
if(isset($_GET['status'])){
    switch($_GET['status']){
        case 'add_success':
            echo "<span>新增球員成功</span>";
        break;
        case 'add_fail':
            echo "<span>新增球員失敗</span>";
        break;
        case 'edit_error':
            echo "<span>無法編輯</span>";
        break;    
    }
}

?>
</div>

<div class="text-center">
    <a class="btn btn-success" href="back.php?do=add">新增球員</a>
</div>
<hr>
<div class="text-center">
    <select id="mySelect"></select>
    <button class="btn btn-success" id="getSelectBtn">查詢該球隊</button>
</div>
<hr>

<table class="table table-striped text-center">
    <thead>
        <tr id="playerList">
            <td>球員</td>
            <td>球隊</td>
            <td>得分</td>
            <td>籃板</td>
            <td>抄截</td>
            <td>助攻</td>
            <td>阻攻</td>

        </tr>
    </thead>
    <tbody id="myTbody">

    </tbody>
</table>

<script>
    $(function() {

        const myTbody = $('#myTbody');
        const getSelectBtn = $('#getSelectBtn');
        // console.log('getSelectBtn', getSelectBtn);
        const mySelect = $("#mySelect");
        // console.log('myselect', mySelect);

        getSelectBtn.click(function() {
            let getSelectValue = mySelect.val();
            console.log('getSelectValue', getSelectValue);
            $.ajax({
                url: "./api/gamedata.php",
                type: "get",
                data: {
                    tm: getSelectValue
                },
                // datatype: 'json',
                success: function(resp) {
                    console.log('resp', resp);
                    let gameData = JSON.parse(resp);
                    console.log('gameData', gameData);
                    myTbody.html('');
                    $.each(gameData, function(key, value) {
                        let textContent = `
                        <tr>
                            <td>${value.球員}</td>
                            <td>${value.球隊}</td>
                            <td>${value.得分}</td>
                            <td>${value.籃板}</td>
                            <td>${value.抄截}</td>
                            <td>${value.助攻}</td>
                            <td>${value.阻攻}</td>
                            <td>
                                <a href="back.php?do=edit&playerid=${value.playerid}&tm=${value.球隊}" class="btn btn-primary">編輯</a>
                                <a onclick="del(${value.playerid},'你確定要刪除${value.球員}?')" class="btn btn-warning">刪除</a>
                            </td>
                        </tr>
                    `;
                        myTbody.append(textContent);
                    })
                    
                }
            });
        });

        $.ajax({
            url: "./api/team.php",
            type: "get",
            datatype: 'json',
            success: function(res) {
                // console.log(res);
                let data = JSON.parse(res);
                // console.log('data typeof', typeof(data));
                // let a = data[0];
                // console.log('a', a);
                $.each(data, function(key, value) {
                    let textOption = `
                        <option value="${value.tm}">${value.tmname}</option>
                    `;
                    mySelect.append(textOption);
                });
            }
        });


    });
</script>