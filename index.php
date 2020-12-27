<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/style.css">
    <title>今天開始來記帳</title>
</head>
<body>
    <h1 class="title">今天開始來記帳</h1>
    <?php
        if(isset($_GET['err'])){
    ?>
        <p color="red">帳號或密碼錯誤</p>
    <?php
        }
    ?>
    <form action="api/login.php" method="post">
        <div>
            帳號：<input type="text" name="acc" id="acc">
        </div>
        <div>
            密碼：<input type="password" name="pw" id="pw">
        </div>
        <input type="submit" value="登入">
    </form>
    <a href="registar.php">註冊帳號</a>
</body>
</html>