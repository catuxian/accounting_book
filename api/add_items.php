<?php
    include_once "../base.php";
    $Items->save($_POST);
    to("../front/index.php");
?>