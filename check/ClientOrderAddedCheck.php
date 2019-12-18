<?php
//здесь два запроса, один на добавление пользователя, другой на добавление заказа

$NIS = filter_var(trim($_POST['NIS']), FILTER_SANITIZE_STRING);
$PhoneNumber = filter_var(trim($_POST['PhoneNumber']), FILTER_SANITIZE_STRING);
$Email =  filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING);
$OrderName =  filter_var(trim($_POST['OrderName']), FILTER_SANITIZE_STRING);
$Weight = filter_var(trim($_POST['Weight']), FILTER_SANITIZE_STRING);
$IsFragile =  filter_var(trim($_POST['IsFragile']), FILTER_SANITIZE_STRING) == "on" ? 1 : 0;
$From =  filter_var(trim($_POST['From']), FILTER_SANITIZE_STRING);
$To =  filter_var(trim($_POST['To']), FILTER_SANITIZE_STRING);
//собираем данные с формы

if (mb_strlen($Weight) < 0) {
    /*&&
mb_strlen($password) > 50){*/ //убрана проверка на пароль ибо md5 все в 32символный пароль загоняет, малаца какой
    echo "some problem";
    exit();
} //проверка по проходу, ибо в mysql стоят ограничения на эти атрибуты



//exit(); //TEST
//запрос
$mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
    /*
    setcookie('CID',$currentNumber,time() + 3600,"/");  //здесь была идея автоматического входа пользователя
    setcookie('NIS',$NIS,time() + 3600,"/");*/          //мы ее еще рассматриваем
//кто мы? я и другие мои личности

if($_COOKIE['AID' <= 10000]){
//$primPassword = rand(100000,999999);
$primPassword = 123; //пока нет какой либо отправки сообщения пользователю пароль будет таким, лол
$password = md5($primPassword . "JustAL1tt1eBi10fSa1t");

$mysqli->query("INSERT INTO `Clientele` (NIS,PhoneNumber,Email,`Password`)
    VALUES ('$NIS','$PhoneNumber','$Email','$password')");

//------------------------// проверочки всякие

$result = $mysqli->query("SELECT * FROM `Clientele` ORDER BY ClientID DESC LIMIT 1");


$customer = $result->fetch_assoc();
$currentNumber = $customer['ClientID'];
}else $currentNumber = $_COOKIE['AID'];
/* 
if ($result != null)
    $customer = $result->fetch_assoc();
    echo $customer['ClientID']; //WHAT THE F
    $currentNumber = $custumer['ClientID']+4; // Гребаное ничего, вывод происходит но он не принимает значение, сраная магия
    
else
    $currentNumber = 10000;*/
$date = date("Y-m-d");
$mysqli->query("INSERT INTO `Orders`(ClientID,`Name`,`Weight`,IsFragile,DateRecept,FromThe,ToThe)
    VALUES ($currentNumber,'$OrderName',$Weight,$IsFragile,'$date','$From','$To')");
//------------------------// еще проверочки
//?????
//Profit!
$mysqli->close();
//здесь должна быть отправка информации по почте, но скорее всего она должна быть уже непосредственно в составлении репорта, ака, ну вот мы сделали только сейчас проверяйте
//логично нелогично
//а еще вывод сообщения по типу - ожидайте обращения по телефону или почте, примерное время ожидание - 69 лет, и в таком духе
header('Location: ../place-your-order.php'); //переход обратно
