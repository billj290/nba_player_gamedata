

<?php
if (isset($_GET['error'])) {
?>    
<div class="container">
    <div class="row">
        <div class="card">
            <img src="./img/lebron.jpg" class="card-img-top" alt="帳號密碼錯誤">
            <div class="card-body">
                <h5 class="card-title" style="color:red">帳號或密碼錯誤!</h5>
                <h5 class="card-title">登入嘗試<?=$_SESSION['login_try'];?>次</h5>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<form action="./api/chk_user.php" method="post">
    <section>
        <div class="signin">
            <div class="content">
                <h2>登入</h2>
                <div class="form">
                    <div class="inputBx">
                        <input type="text" name="acc" required>
                        <i>登入者名稱</i>
                    </div>
                    <div class="inputBx">
                        <input type="password" name="pw" required>
                        <i>密碼</i>
                    </div>
                    <div class="links">
                        <a href="index.php?do=reg">註冊</a>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="登入">
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>