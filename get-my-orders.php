<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/beautifyHeaders.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>Отчет</title>
</head>

<body id="mainbody">
    <?php require "check/IsLogOn.php" ?>

    <?php require "blocks/header.php" ?>
    <?php require "blocks/registration.php" ?>

    <div class="header-h1 container">
        <h1>Выполняемые заказы</h1>
    </div>
    <?php
    $mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
    $result = $mysqli->query("SELECT * FROM vReport WHERE ClientName = '" . $_COOKIE['NIS'] . "'");
    echo "<table width='100%' class='table table-striped'>";
    echo "<tr><td>ID заказа</td><td>Заказ</td><td>Дальнобойщик</td><td>Грузчик</td><td>Место отбытия</td><td>Место прибытия</td><td>Цена</td></tr>";
    while (($row = $result->fetch_assoc()) != false) {
        $Order = $row['OrderNum'];
        $OrderName = $row['Name'];
        $FarRobber = $row['FarRobberName'];
        $Loader = $row['LoaderName'];
        $Place = $row['From'];
        $To = $row['To'];
        $Price = $row['Price'];
        echo "<tr><td>$Order</td><td>$OrderName</td><td>$FarRobber</td><td>$Loader</td><td>$Place</td><td>$To</td><td>$Price</td></tr>";
    }
    echo "</table>";
    ?>
    <div class="header-h1 container">
        <h1>Заказы ожидающие обработки</h1>
    </div>
    <?php
    $mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
    
    $result = $mysqli->query("SELECT ord.* FROM Orders ord JOIN vReport rp ON ord.OrderID != rp.OrderNum WHERE ord.ClientID ='" . $_COOKIE['AID'] . "'");
    echo "<table width='100%' class='table table-striped'>";
    echo "<tr><td>Номер заказа</td><td>Заказ</td><td>Вес</td><td>Хрупкий</td><td>Дата отправки</td><td>От куда</td><td>Куда</td></tr>";
    while (($row = $result->fetch_assoc()) != false) {
        $Order = $row['OrderID'];
        $OrderName = $row['Name'];
        $Weight = $row['Weight'];
        $IsFragile = $row['IsFragile'] == 1?"Да":"Нет";
        $DateRecept = $row['DateRecept'];
        $From = $row['FromThe'];
        $To = $row['ToThe'];
        echo "<tr><td>$Order</td><td>$OrderName</td><td>$Weight</td><td>$IsFragile</td><td>$DateRecept</td><td>$From</td><td>$To</td></tr>";
    }
    echo "</table>";
    ?>
    <?php require "blocks/footer.php" ?>
</body>

</html>