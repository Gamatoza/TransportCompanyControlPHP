<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/beautifyHeaders.css">
    <script src="js/main.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>Отчет</title>
</head>

<body id="mainbody">
    <?php require "check/IsLogOn.php" ?>

    <?php require "blocks/header.php" ?>
    <!--КОЛОНКА ДЛЯ ПОИСКА ДА-->
    <?php require "blocks/registration.php" ?>
    <form id='myForm' action='check/UpdateReport.php' method='post'>
        <table width='100%' class='table table-striped'>
            <tr>
                <td>ID заказа</td>
                <td>Заказ</td>
                <td>Клиент</td>
                <td>Дальнобойщик</td>
                <td>Грузчик</td>
                <td>Место отбытия</td>
                <td>Место прибытия</td>
                <td>Цена</td>
                <td>Выполнено?</td>
            </tr>
            <?php
            $mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
            $result = $mysqli->query("SELECT * FROM vReport");
            echo "";
            while (($row = $result->fetch_assoc()) != false) {
                $Order = $row['OrderNum'];
                $OrderName = $row['Name'];
                $Client = $row['ClientName'];
                $FarRobber = $row['FarRobberName'];
                $Loader = $row['LoaderName'];
                $Place = $row['From'];
                $To = $row['To'];
                $Price = $row['Price'];
                echo "<tr><td>$Order</td><td>$OrderName</td><td>$Client</td><td>$FarRobber</td><td>$Loader</td><td>$Place</td><td>$To</td><td>$Price</td><td><button type='submit' style='margin-top:-10px;margin-bottom: -10px;' name='id' value='$Order'>-</button></td></tr>";
            }
            ?>
            <script>
                $('#myForm').submit(function() {
                    if(confirm("Вы уверены?"))
                    return true;
                    else
                    return false;
                });
            </script>
        </table>
    </form>
    <?php require "blocks/footer.php" ?>
</body>

</html>