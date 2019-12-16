<?php
$mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');

$result = $mysqli->query("SELECT * FROM CollectionPlace");
$mysqli->close();
?>
<form id="someform" class="" action="check/UserAddedCheck.php" method="post">
    <div class="container mt-4">

        <div class="row">
            <div class="col-sm-10">
                <label for="" class="mt-2"><b></b></label> 
                <input type="text" placeholder="" name="" class="form-control" required>
            </div>
            <div class="col-1">
                <label for="" class="mt-3"><b></b></label>
                <a class="btn btn-dark" href="#" onclick="document.getElementById('idtab').style.display='block';document.getElementById('mainbody').style.overflow = 'hidden';">Показать&nbsp;таблицу</a> <!--nbsp это запрет на перенос-->
            </div><!--Добить все поля, сопостовление по Значение - Кнопка для получения таблицы, что бы выбрать [вставьте название таблицы]-->
            <!--Все по Reports-->
        </div>
        <button type="submit" class="btn btn-success mt-3">Add Order</button>
    </div>
</form>