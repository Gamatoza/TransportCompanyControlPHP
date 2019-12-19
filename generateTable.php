<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>Главная</title>
</head>

<body id="mainbody">
    <?php require "check/IsLogOn.php"?>
    <?php
    $tabname = $_GET['tabname'];
    if($tabname == null){ //лучше запили здесь пророчку на соответсвие с названиями таблиц
        echo "something go wrong";
        echo "<a href='../'>go back</a>";
    }?>

    <?php require "blocks/header.php" ?>
    <?php require "blocks/registration.php" ?>
    <?php

    $result = htmlspecialchars($result);
    $mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
    $headers = $mysqli->query(" SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tabname';");
    echo "<table width='100%' class='table table-striped'><tr>";
    while(($row = $headers->fetch_array()) != false){
        echo "<td>$row[0]</td>";
    }
    echo "</tr>";
    if($tabname == "Orders")
    $result = $mysqli->query("SELECT ord.* FROM Orders ord RIGHT JOIN vReport rp ON ord.OrderID != rp.OrderNum");
    else
    $result = $mysqli->query("SELECT * FROM $tabname");
    $length = $result->field_count;
    while(($row = $result->fetch_array()) != false){
        echo "<tr>";
        for ($i=0; $i < $length; $i++) { 
            echo "<td>$row[$i]</td>";
        }
        echo "</tr>";
    }
    /*
    while(($row = $result->fetch_array()) != false){
        echo "<td>$row[0]</td>";
    }
    */
    /*echo "<tr><td>ID заказа</td><td>Заказ</td><td>Клиент</td><td>Дальнобойщик</td><td>Грузчик</td><td>Место отбытия</td><td>Место прибытия</td><td>Цена</td></tr>";
    while (($row = $result->fetch_assoc()) != false) {
        $Order = $row['OrderNum'];
        $OrderName = $row['Name'];
        $Client = $row['ClientName'];
        $FarRobber = $row['FarRobberName'];
        $Loader = $row['LoaderName'];
        $Place = $row['From'];
        $To = $row['To'];
        $Price = $row['Price'];
        echo "<tr><td>$Order</td><td>$OrderName</td><td>$</td><td>$Client</td><td>$FarRober</td><td>$Loader</td><td>$Place</td><td>$To</td><td>$Price</td></tr>";
    }*/
    echo "</table>";
    ?>
    <?php require "blocks/footer.php" ?>
</body>

</html>