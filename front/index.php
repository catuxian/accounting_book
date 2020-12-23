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
    <?php
    $do=(!empty($_GET['do']))?$_GET['do']:"main";
    $file=$do.".php";
    if(file_exists($file)){
        include $file;
    }else{
        include "main.php";
    }
    ?>
</body>

</html>