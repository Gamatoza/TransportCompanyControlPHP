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
    <!--<div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner active">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slides/1.svg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slides/2.svg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slides/3.svg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <script>
            $('#carousel').carousel({
                interval: 10000,
                keyboard: false,
                pause: 'hover',
                ride: 'carousel',
                wrap: false
            });
    </script>-->
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
    <div class="container mt-5">
        <div class="d-flex flex-wrap">
            <?php
            for ($i = 0; $i < 5; $i++) : ?>
                <div class="col-lg-4" align="center">
                    <img class="bd-placeholder-img rounded-circle img-thumbnail" width="180" height="180" src="img/merunyapak/<?php echo $i + 1 ?>.jpg">
                    <div align="left">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <?php require "blocks/footer.php" ?>
</body>

<!-- jQuery -->
<script src="/examples/vendors/jquery/jquery-3.3.1.min.js"></script>
<!-- Bootstrap -->
<script src="/examples/vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="node_modules/util/util.js"></script>

</html>