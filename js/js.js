$(function() {
    setTimeout(function() {
        $('#message_success,#message_fail').fadeOut(1500);
    });
    
    
});
function del(playerid,msg){
    let chk;
    
    if(typeof(msg)!='undefined'){
        chk=confirm(msg);
    }else{
        chk=confirm("確定要刪除嗎");
    }

    if(chk){
        $.get('./api/del_player.php',{playerid},()=>{
            location.reload();
        })
    }
}
