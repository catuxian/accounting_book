<?php
    include_once "../base.php";

    $acc=$_POST['acc'];
    $pw=$_POST['pw'];

    if(($Mem->count(['acc'=>$acc,'pw'=>$pw]))>0){
        $_SESSION['login']=$acc;
        to("../front");
    }else{
        to("../index.html");
    }
?>