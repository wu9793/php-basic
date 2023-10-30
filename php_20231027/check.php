<?php

date_default_timezone_set("Asia/Taipei");

//如果偵測到帳號是 admin 密碼是 1234，導向 member.php，便帶變數login=1
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    $_SESSION['login']=$_POST['acc'];

    setcookie("login","wuli",time()+300);

    header("location:member.php");
    
}else{
    setcookie("error","帳號或密碼錯誤，請重新登入",time());
    
    //如果偵測到不是，導向login.php，便帶變數m
    header("location:login.php");
    
}

?>