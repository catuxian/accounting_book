<?php
    include_once "../base.php";
    print_r($_POST);
    $Mem->save($_POST);

    to("../index.php");
?>