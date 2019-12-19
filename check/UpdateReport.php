<?php
    $id = filter_var(trim($_POST['id']),FILTER_SANITIZE_STRING);

    $mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');
    
    $mysqli->query("DELETE FROM Reports WHERE OrderID = $id");
    $mysqli->query("DELETE FROM Orders WHERE OrderID = $id");

    //тут по идее идет связь уделния, потому удаляется еще и с таблицы Orders,
    //но я их еще не восстановил, по этому пока что так
    //а так же еще и удаление пользователя ибо у него не осталось заказов
    
    $mysqli->close();
    header('Location: ../reports-on-the-transportation.php');

?>