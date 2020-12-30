<?php
    include_once "../base.php";

    $acc=$_POST['acc'];
    $pw=$_POST['pw'];

    if(($Mem->count(['acc'=>$acc,'pw'=>$pw]))>0){
        
        $row=$Mem->all(['acc'=>$acc,'pw'=>$pw]);
        $_SESSION['login']=$row[0]['name'];
        to("../admin.php");
    }else{
        to("../index.php?err=1");
    }
?>