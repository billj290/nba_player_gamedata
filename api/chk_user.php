
<?php
session_start();
include_once "./base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$sql="select count(`id`) from `users` where `acc`='$acc' && `pw`='$pw'";
$chk=$pdo->query($sql)->fetchColumn();

if($chk==1){
    $user=$Users->all();
    $_SESSION['login']=$user;
    header("location:../back.php");

}else{
    if(isset($_SESSION['login_try'])){
        $_SESSION['login_try']++;
    }else{
        $_SESSION['login_try']=1;
    }
    header("location:../index.php?do=login&error=login");
}

?>