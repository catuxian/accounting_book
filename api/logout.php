<?php
include_once "../base.php";
unset($_SESSION['login']);
echo $_SESSION['login'];
to("../index.php");
?>
