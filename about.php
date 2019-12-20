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
    <title>Контакты</title>
</head>

<body>
    <?php require "blocks/header.php" ?>
    <?php require "blocks/registration.php" ?>
    <form id="mailform" action="" method="post" class="container mt-5">

        <input type="email" id="email" placeholder="Введите Email" class="form-control mb-1" style="display:inline">
        <!--<space id = "ammaspace" class="col-md m-5" style="display:inline;"> TODO: Доработай что бы они были с двух разных сторон   col-xs-12 col-md-5-->
        <input type="text" id="name" placeholder="Введите имя" class="form-control mb-2" style="display:inline; padding-left:12px">
        <input type="phone" id="phone" placeholder="+375 (99) 99-99-999" class="form-control mb-2">
        <script>
            $("#phone").mask("+375 (99) 99-99-999"); //маска ввода
        </script>
        <textarea id="message" class="form-control" placeholder="Введие ваше сообщение" class="form-control" required></textarea>
        <button type="button" id="sendMail" class="btn btn-success mt-3">Отправить</button>
        <div id="errorMessage"></div>
            <!--TODO: добавить ошибку с появлением под каждой строкой -->
    </form>
    <script>
        /*if (document.body.clientWidth < 768) //обработка формы в соответсвии с размерами экрана
            document.getElementById("ammaspace").className = "";
            document.addEventListener("DOMContentLoaded", function(event) {
                window.onresize = function() {
                    if (document.body.clientWidth < 766)
                    document.getElementById("ammaspace").className = "";
                    else if (document.body.clientWidth > 766) {
                        document.getElementById("ammaspace").className = "col-md";
                    }
                };
            });*/
    </script>
    <?php require "blocks/footer.php" ?>
    <script src="js/formMail.js"></script>
</body>

</html>