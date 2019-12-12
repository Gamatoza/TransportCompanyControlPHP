<?php

    $ACode = filter_var(trim($_POST['ACode']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

    $password = md5($password."JustAL1tt1eBi10fSa1t"); //пароль в хеш, безопасность и все такое
    //запрос
    $mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');
    $result = $mysqli->query("SELECT * FROM vGetPasses WHERE EmpID = '$ACode'  AND `Password` = '$password'");
    
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Пользователь не найден";
        exit();
    }

    setcookie('AID',$user['EmpID'],time() + 3600,"/");
    setcookie('Name',$user['Name'],time() + 3600,"/");
    setcookie('EmpType',$user['EmpType'],time() + 3600,"/");

    $mysqli->close();
    if (@$_SERVER['HTTP_REFERER'] != null) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
?>