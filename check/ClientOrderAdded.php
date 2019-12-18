<?php
//здесь два запроса, один на добавление пользователя, другой на добавление заказа
//не забудь как нибудь выдавать пользователю его ник, ну, кроме как посылания его на почту, ибо у тебя она через ajax не работает XD

$NIS = filter_var(trim($_POST['NIS']),FILTER_SANITIZE_STRING);
$PhoneNumber = filter_var(trim($_POST['PhoneNumber']),FILTER_SANITIZE_STRING);
$Email =  filter_var(trim($_POST['Email']),FILTER_SANITIZE_STRING);
$OrderName =  filter_var(trim($_POST['OrderName']),FILTER_SANITIZE_STRING);
$Weight = filter_var(trim($_POST['Weight']),FILTER_SANITIZE_STRING);
$IsFragile =  filter_var(trim($_POST['IsFragile']),FILTER_SANITIZE_STRING) == "on"?1:0;
$From =  filter_var(trim($_POST['From']),FILTER_SANITIZE_STRING);
$To =  filter_var(trim($_POST['To']),FILTER_SANITIZE_STRING);
//собираем данные с формы

if(mb_strlen($Weight) < 0){
/*&&
mb_strlen($password) > 50){*/ //убрана проверка на пароль ибо md5 все в 32символный пароль загоняет, малаца какой
    echo "some problem";
exit();
}//проверка по проходу, ибо в mysql стоят ограничения на эти атрибуты



exit(); //TEST
//запрос
$mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');
    $result = $mysqli->query("SELECT * `Clientele` ORDER BY ClientID DESC LIMIT 1");
    $customer = $result->fetch_assoc();
    $currentNumber = 10000;
    if($customer['ClientID'] != null)
        $currentNumber = ['ClientID'];
    setcookie('CID',$currentNumber,time() + 3600,"/");
    setcookie('NIS',$NIS,time() + 3600,"/");


$mysqli->query("INSERT INTO `Clientele` (NIS,PhoneNumber,Email,`Password`)
VALUES ($NIS,$PhoneNumber,$Email,)");
$mysqli->close();
//здесь должна быть проверка на НЕ добавление при ошибке, ака если нету заказа, то и пошев тi нахой
header('Location: ../place-your-order.php'); //переход обратно
?>