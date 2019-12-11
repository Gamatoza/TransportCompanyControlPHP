<?php
    print_r($_POST);
    $email = $_POST["email"];
    $message = $_POST["message"];
    $error = '';
    if(trim($email) == '')
        $error = 'Введите ваш email';
    else if(trim($message)=='')
        $error = 'Введите сообщение';
    else if(strlen($message) < 10)
        $error = 'Сообщение слишком маленькое';

    if($error != ''){
        echo $error;
        exit;
    }
    $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?="; //ctrl c ctrl v
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;character=utf-8\r\n";

    mail('gamatext@yandex.ru',$subject,$message,$headers);//отправка сообщения

    header("Location: about.php"); //переход обратно
?>