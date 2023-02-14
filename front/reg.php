<div class="col-md-4 mx-auto my-5 p-5 border shadow-sm" style="background-color: #98d98e;border-radius:10px">
    <h3 class="text-center">使用者</h3>
    <form action="./api/reg_user.php" method="post">
        <div class="form-group">
            <label>使用者名稱</label>
            <input class="form-control" type="text" name="acc">
        </div>
        <div class="form-group">
            <label>密碼</label>
            <input class="form-control" type="password" name="pw">
        </div>
        <div class="form-group">
            <label>信箱</label>
            <input class="form-control" type="text" name="email">
        </div class="form-group">
        <div class="form-group mb-2">
            <label>姓名</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="text-center">
            <input class="btn btn-primary mx-2" type="submit" value="註冊">
            <input class="btn btn-warning mx-2" type="reset" value="重置">
        </div>
    </form>
</div>
