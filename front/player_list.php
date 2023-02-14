<!-- <div class="text-center">
    <a class="btn btn-success" href="back.php?do=add">新增球員</a>
</div> -->
<div class="d-flex justify-content-center">
    <!-- <img src="./img/nba75.jpeg" alt="NBA75" style="width:200px"> -->
    <span style="font-size:2.5em">球隊比較</span>
</div>
<div class=" container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="text-center">
                <div id="leftTeampic">
                    <img src="./upload/Atlanta_Hawks.png" id="leftTeampicImg">
                </div>
                <div>
                    <select id="mySelectLeft"></select>
                    <button class="btn btn-success" id="getSelectBtnLeft">查詢該球隊</button>
                    <div id="totalScoreLeft">每場得分</div>
                </div>
            </div>
            <hr>
            <table class="table table-striped text-center">
                <thead>
                    <tr id="playerListLeft">
                        <td>球員</td>
                        <td>球隊</td>
                        <td>得分</td>
                        <td>籃板</td>
                        <td>抄截</td>
                        <td>助攻</td>
                        <td>阻攻</td>
                    </tr>
                </thead>
                <tbody id="myTbodyLeft">

                </tbody>
            </table>
        </div>
        <div class="col-12 col-md-6">
            <div class="text-center">
                <div id="rightTeampic">
                    <img src="./upload/Atlanta_Hawks.png" alt="hawks1">
                </div>
                <div>
                    <select id="mySelectRight"></select>
                    <button class="btn btn-success" id="getSelectBtnRight">查詢該球隊</button>
                    <div id="totalScoreRight">每場得分</div>
                </div>
            </div>
            <hr>
            <table class="table table-striped text-center">
                <thead>
                    <tr id="playerListRight">
                        <td>球員</td>
                        <td>球隊</td>
                        <td>得分</td>
                        <td>籃板</td>
                        <td>抄截</td>
                        <td>助攻</td>
                        <td>阻攻</td>
                    </tr>
                </thead>
                <tbody id="myTbodyRight">

                </tbody>
            </table>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
    $(function() {

        const myTbodyLeft = $('#myTbodyLeft');
        const getSelectBtnLeft = $('#getSelectBtnLeft');
        // console.log('getSelectBtn', getSelectBtn);
        const mySelectLeft = $("#mySelectLeft");
        const mySelectRight = $('#mySelectRight');
        const getSelectBtnRight = $('#getSelectBtnRight');
        const myTbodyRight = $('#myTbodyRight');
        // console.log('myselect', mySelect);
        const leftTeampic = $('#leftTeampic');
        const rightTeampic = $('#rightTeampic');

        getSelectBtnLeft.click(function() {
            let getSelectValueLeft = mySelectLeft.val();
            console.log('getSelectValueLeft', getSelectValueLeft);
            $.ajax({
                url: "./api/gamedata.php",
                type: "get",
                data: {
                    tm: getSelectValueLeft
                },
                // datatype: 'json',
                success: function(resp) {
                    // console.log('resp', resp);
                    let gameData = JSON.parse(resp);
                    // console.log('gameData', gameData);
                    myTbodyLeft.html('');
                    let totalScoreFloatLeft = 0;
                    let totalScoreLeft = 0;
                    $.each(gameData, function(key, value) {
                        let textContent = `
                        <tr>
                            <td style="width:10%">${value.球員}</td>
                            <td style="width:15%">${value.球隊}</td>
                            <td>${value.得分}</td>
                            <td>${value.籃板}</td>
                            <td>${value.抄截}</td>
                            <td>${value.助攻}</td>
                            <td>${value.阻攻}</td>
                        </tr>
                    `;
                        myTbodyLeft.append(textContent);
                        totalScoreFloatLeft += parseFloat(value.得分);
                        totalScoreLeft = totalScoreFloatLeft.toFixed(2);
                        $('#totalScoreLeft').html(`<div style='font-size:30px;color:red;'>每場進攻火力:${totalScoreLeft}分</div>`);
                    })

                }
            });
            $.post('./api/front_teampic_left.php', {getSelectValueLeft}, (res) => {
                let teampicLeft = JSON.parse(res);
                console.log('teampicLeft', teampicLeft);
                // console.log('img',teampicLeft.img);
                let teamPicLeft = `<img src="./upload/${teampicLeft.img}" class='img-fluid' alt="">`;
                leftTeampic.html(teamPicLeft);
            })
        });

        getSelectBtnRight.click(function() {
            let getSelectValueRight = mySelectRight.val();
            console.log('getSelectValueRight', getSelectValueRight);
            $.ajax({
                url: "./api/gamedata.php",
                type: "get",
                data: {
                    tm: getSelectValueRight
                },
                // datatype: 'json',
                success: function(resp) {
                    // console.log('resp', resp);
                    let gameData = JSON.parse(resp);
                    // console.log('gameData', gameData);
                    // console.log('gameData ARRAY?', Array.isArray(gameData));
                    myTbodyRight.html('');
                    let totalScoreFloatRight = 0;
                    let totalScoreRight = 0;
                    $.each(gameData, function(key, value) {
                        let textContent = `
                        <tr>
                            <td style="width:10%">${value.球員}</td>
                            <td style="width:15%">${value.球隊}</td>
                            <td>${value.得分}</td>
                            <td>${value.籃板}</td>
                            <td>${value.抄截}</td>
                            <td>${value.助攻}</td>
                            <td>${value.阻攻}</td>
                        </tr>
                    `;
                        myTbodyRight.append(textContent);
                        totalScoreFloatRight += parseFloat(value.得分);
                        totalScoreRight = totalScoreFloatRight.toFixed(2);
                        $('#totalScoreRight').html(`<div style='font-size:30px;color:red;'>每場進攻火力:${totalScoreRight}分</div>`);
                    })
                }
            });
            $.post('./api/front_teampic_right.php',{getSelectValueRight},(res)=>{
                let teampicRight=JSON.parse(res);
                console.log('right',teampicRight);
                let teamPicRight =`<img src="./upload/${teampicRight.img}" class='img-fluid' alt="">`;
                rightTeampic.html(teamPicRight);
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
                    mySelectLeft.append(textOption);
                    mySelectRight.append(textOption);
                });
            }
        });


    });
</script>