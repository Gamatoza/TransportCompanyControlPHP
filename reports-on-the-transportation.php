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
    <?php require "blocks/header.php" ?>
    <?php require "blocks/registration.php" ?>
    <?php
    $mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
    $result = $mysqli->query("SELECT * FROM Employee");
    $some = $result->fetch_assoc();
    echo $some['Password'];
    echo "<table width='100%' class='table table-striped'>";
    echo "<tr><td>pole1</td><td>pole2</td><td>pole3</td><td>pole4</td></tr>";

    while ($row = $result->fetch_assoc()) {
        $Client = $row['Client'];
        $Loader = $row['Loader'];
        $FarRobber = $row['FarRobber'];
        $From = $row['From'];
        $From = $row['To'];
        echo "<tr><td>$Client</td><td>$Loader</td><td>$FarRobber</td><td>$From</td><td>$To</td></tr>";
    }
    echo "</table>";
    ?>
    <!--<?php require "blocks/footer.php" ?>-->
</body>

</html>