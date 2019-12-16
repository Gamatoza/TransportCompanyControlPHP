<?php
$mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');

$result = $mysqli->query("SELECT * FROM CollectionPlace");
$mysqli->close();
?>

<form id="someform" class="" action="check/UserAddedCheck.php" method="post">
    <div class="container mt-4">

        <div class="row">
            <div class="col-sm-10">
                <label for=" " class="mt-2"><b></b></label>
                <input type="text" placeholder="" name="" class="form-control" required>
            </div>
            <div class="col-1">
                <label for=" " class="mt-3"><b></b></label>
                <input type="button" name="" class="btn btn-success" value="Показать" required>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-3">Add Order</button>
    </div>
</form>