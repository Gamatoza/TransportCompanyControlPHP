<?php
$mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');

$result = $mysqli->query("SELECT * FROM CollectionPlace");
$mysqli->close();
?>
<form id="someform" class="" action="check/OrderAddedCheck.php" method="post">
    <div class="container mt-4">

        <div class="row">
            <!--OrderID-->
            <div class="col-sm-10">
                <label for="OrderID" class="mt-2"><b>Заказ №</b></label> 
                <input type="text" placeholder="Впишите ID заказа" name="OrderID" class="form-control" required>
            </div>
            <div class="col-1">
                <!--<a class="btn btn-dark" href="#" onclick="document.getElementById('idtab').style.display='block';document.getElementById('mainbody').style.overflow = 'hidden';">Показать&nbsp;таблицу</a>  nbsp это запрет на перенос-->
                
                <a class="btn btn-dark mt-5" target="_blank" href="generateTable.php?tabname=Orders">Показать&nbsp;таблицу</a> <!--Вся суть в получении tabname-->
            </div>

            <!--ClientID-->
            <div class="col-sm-10">
                <label for="ClientID" class="mt-2"><b>Клиент</b></label> 
                <input type="text" placeholder="Введите ID клиента" name="ClientID" class="form-control" required>
            </div>
            <div class="col-1">
                
                <a class="btn btn-dark mt-5" target="_blank" href="generateTable.php?tabname=Clientele">Показать&nbsp;таблицу</a> <!--Вся суть в получении tabname-->
            </div>
            
            <!--FarRobberID-->
            <div class="col-sm-10">
                <label for="FarRobberID" class="mt-2"><b>Дальнобойщик</b></label> 
                <input type="text" placeholder="Введите ID дальнобойщика" name="FarRobberID" class="form-control" required>
            </div>
            <div class="col-1">
                
                <a class="btn btn-dark mt-5" target="_blank" href="generateTable.php?tabname=FarRobbers">Показать&nbsp;таблицу</a> <!--Вся суть в получении tabname-->
            </div>

            <!--LoaderID-->
            <div class="col-sm-10">
                <label for="LoaderID" class="mt-2"><b>Грузчик</b></label> 
                <input type="text" placeholder="Введите ID грузчика" name="LoaderID" class="form-control" required>
            </div>
            <div class="col-1">
                
                <a class="btn btn-dark mt-5" target="_blank" href="generateTable.php?tabname=Loaders">Показать&nbsp;таблицу</a> <!--Вся суть в получении tabname-->
            </div>

            <!--Price-->
        </div>
        
            <label for="Цена" class="mt-2"><b>Цена</b></label> 
            <input type="text" placeholder="Введите цену" name="Price" class="form-control" required>
        
        <button type="submit" class="btn btn-success mt-3">Add Order</button>
    </div>
</form>