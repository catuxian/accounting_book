<?php
include_once "../base.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主畫面</title>
</head>

<body>
    <h1>這是<?=$_SESSION['login'];?>的記帳本</h1>
    <?php
    $do=(!empty($_GET['do']))?$_GET['do']:"main";
    $file=$do.".php";
    if(file_exists($file)){
        include $file;
    }else{
        include "main.php";
    }
    ?>
    <a href="../api/logout.php">登出</a>
</body>

</html>