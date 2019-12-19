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
        <h1>Текущие заказы с вашим ID</h1>
    </div>
    <?php
    $nis = $_COOKIE['NIS'];
    $mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
    $result = $mysqli->query("SELECT * FROM vReport WHERE '$nis' = FarRobberName OR '$nis' = LoaderName");
    echo "<table width='100%' class='table table-striped'>";
    echo "<tr><td>ID заказа</td><td>Заказ</td><td>Клиент</td><td>Дальнобойщик</td><td>Грузчик</td><td>Место отбытия</td><td>Место прибытия</td><td>Цена</td></tr>";
    while (($row = $result->fetch_assoc()) != false) {
        $Order = $row['OrderNum'];
        $OrderName = $row['Name'];
        $ClientName = $row['ClientName'];
        $FarRobber = $row['FarRobberName'];
        $Loader = $row['LoaderName'];
        $Place = $row['From'];
        $To = $row['To'];
        $Price = $row['Price'];
        echo "<tr><td>$Order</td><td>$OrderName</td><td>$ClientName</td><td>$FarRobber</td><td>$Loader</td><td>$Place</td><td>$To</td><td>$Price</td></tr>";
    }
    echo "</table>";
    ?>
    <?php require "blocks/footer.php" ?>
</body>

</html>