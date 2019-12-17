<?php
    $OrderID = filter_var(trim($_POST['OrderID']),FILTER_SANITIZE_STRING);
    $ClientID = filter_var(trim($_POST['ClientID']),FILTER_SANITIZE_STRING);
    $FarRobberID =  filter_var(trim($_POST['FarRobberID']),FILTER_SANITIZE_STRING);
    $LoaderID =  filter_var(trim($_POST['LoaderID']),FILTER_SANITIZE_STRING);
    $Price = filter_var(trim($_POST['Price']),FILTER_SANITIZE_STRING);
    //собираем данные с формы

    if(mb_strlen($Price) < 0){
    /*&&
    mb_strlen($password) > 50){*/ //убрана проверка на пароль ибо md5 все в 32символный пароль загоняет, малаца какой
        echo "some problem";
    exit();
    }//проверка по проходу, ибо в mysql стоят ограничения на эти атрибуты

    //запрос
    $mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');

    $mysqli->query("INSERT INTO `Reports` (OrderID,DateAccepted,ClientID,FarRobberID,LoaderID,Price)
    VALUES (,'$OrderID',NOW(),'$ClientID','$FarRobberID',$LoaderID,$Price");
    $mysqli->close();
    //здесь должна быть проверка на НЕ добавление при ошибке, ака если нету заказа, то и пошев тi нахой
    header('Location: ../registrate-new-order.php'); //переход обратно
?>