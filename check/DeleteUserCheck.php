<?php
    $id = filter_var(trim($_POST['EmpID']),FILTER_SANITIZE_STRING);

    $mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');
    
    $mysqli->query("DELETE FROM Employee WHERE EmpID = $id");

    //в Employee есть связь с остальными таблицами на ON CASCADE DELETE, потому и удаление только одно

    $mysqli->close();
    header('Location: ../registrate-new-employee.php');

?>