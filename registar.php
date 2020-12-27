<!-- 註冊頁面 -->
<h1>註冊帳號</h1>
<form action="api/registar.php" method="post">
    <div>
        帳號：<input type="text" name="acc">
    </div>
    <div>
        密碼：<input type="pw" name="pw">
    </div>
    <div>
        使用者名稱：<input type="text" name="name">
    </div>
    <div>
        電子郵件：<input type="text" name="email">
    </div>
    <div>
        生日：<input type="date" name="birthday">
    </div>
    <input type="submit" value="送出">
    <input type="reset" value="重置">
</form>