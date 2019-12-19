<?php

    $ACode = filter_var(trim($_POST['ACode']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

    $password = md5($password."JustAL1tt1eBi10fSa1t"); //пароль в хеш, безопасность и все такое
    $mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');
    if($ACode < 10000){
    $result = $mysqli->query("SELECT * FROM vGetPasses WHERE (EmpID = '$ACode' OR `Login` = '$ACode') AND `Password` = '$password'");
    $resAID = "EmpID";
    }
    else //лучше так, ибо если пользователей и работников будет много, то запрос будет долгим
    { 
    $result = $mysqli->query("SELECT * FROM Clientele WHERE ClientID = '$ACode' AND `Password` = '$password'");
    $resAID = "ClientID";
    }

    $user = $result->fetch_assoc();
    print_r($user);
    if(count($user) == 0){
        echo "Пользователь не найден";
        exit();
    }
    
    setcookie('AID',$user[$resAID],time() + 3600,"/"); //resAID определяет какой код добавить, ибо столбцы разные окда
    setcookie('Login',$user['Login'],time() + 3600,"/");
    setcookie('NIS',$user['NIS'],time() + 3600,"/");
    setcookie('EmpType',$user['Type'],time() + 3600,"/");

    $mysqli->close();
    if (@$_SERVER['HTTP_REFERER'] != null) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
?>