<?php
    $emptype = filter_var(trim($_POST['emptype']),FILTER_SANITIZE_STRING);
    $NIS = filter_var(trim($_POST['NIS']),FILTER_SANITIZE_STRING);
    $date = filter_var(trim($_POST['date']),FILTER_SANITIZE_STRING);
    $password =  filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    $phone =  filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
    $workplace = filter_var(trim($_POST['workplace']),FILTER_SANITIZE_STRING);
    //собираем данные с формы

    if(mb_strlen($NIS) < 5 || mb_strlen($NIS) > 50){
    /*&&
    mb_strlen($password) > 50){*/ //убрана проверка на пароль ибо md5 все в 32символный пароль загоняет, малаца какой
        echo "some problem";
    exit();
    }//проверка по проходу, ибо в mysql стоят ограничения на эти атрибуты
    $ID = "";
    switch ($emptype) {
        case 'FarRobbers':
            $ID = 'FRID';   
            break;
        case 'Loaders':
            $ID = 'LID';
        break;
        case 'Accountants':
            $ID = 'AID';
        break;
        default:
            echo "some problem";
            exit();
        break;
    } //нарушает SOLID
    // можно использовать заглавные буквы + ID, но как это сделать коротко и красиво, пока не ясно


    //exit(); // TEST PLACE //убрать только когда будет готово, ибо лишние добавления в бд мне не нужны
    
    //подключение
    $password = md5($password."JustAL1tt1eBi10fSa1t"); //пароль в хеш, безопасность и все такое
    
    //запрос
    $mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');

    $mysqli->query("INSERT INTO `Employee` (`Password`) VALUES('$password')");
    $ins = $mysqli->insert_id;
    $mysqli->query("INSERT INTO `$emptype` ($ID,NIS,Birthday,PhoneNumber".($workplace!=null?",WorkPlaceID":'').") VALUES ($ins,'$NIS','$date','$phone'".($workplace!=null?",".$workplace:'').")");
    $mysqli->close();
    header('Location: ../registrate-new-employee.php'); //переход обратно
?>