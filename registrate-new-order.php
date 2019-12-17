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
    <title>Новый заказ</title>
</head>

<body id="mainbody">
    <?php require "check/IsLogOn.php"?>


    <?php require "blocks/header.php" ?>
    <div class="header-h1 container">
        <h1>Регистрация нового заказа</h1>
    </div>
    <?php require "blocks/registration.php" ?>
    <?php require "blocks/addOrder.php" ?>
    
    

    <?php require "blocks/footer.php" ?>
</body>

</html>