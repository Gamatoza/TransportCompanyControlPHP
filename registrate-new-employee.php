<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/beautifyHeaders.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <title>Новый работник</title>
</head>

<body id="mainbody">
    <?php require "check/IsLogOn.php" ?>

    <?php require "blocks/header.php" ?>

    <div class="header-h1 container">
        <h1>Регистрация нового работника</h1>
    </div>

    <?php require "blocks/addUser.php" ?>

    <?php require "blocks/registration.php" ?>

    <div class="header-h1 container">
        <h1>Уволить работника</h1>
    </div>
    
    <?php require "blocks/delUser.php" ?>

    <?php require "blocks/footer.php" ?>

</body>

</html>