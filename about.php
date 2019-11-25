<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php require "blocks/header.php" ?>

    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Введие Email" class="">
        <textarea name="message" class="form-control" placeholder="Введие ваше сообщение"></textarea>
    </form>

    <?php require "blocks/footer.php" ?>
</body>

</html>