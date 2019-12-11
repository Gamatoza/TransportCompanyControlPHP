<?php

    $username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

    $password = md5($password."JustAL1tt1eBi10fSa1t"); //пароль в хеш, безопасность и все такое
    
    //запрос
    $mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');

    $mysqli->query("select * from GetPasses");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Пользователь не найден";
        exit();
    }
    print_r($user);
    exit();//TEST

    $mysqli->close();
    if (@$_SERVER['HTTP_REFERER'] != null) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
?>