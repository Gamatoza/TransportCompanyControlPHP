<?php
$mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');

$result = $mysqli->query("SELECT * FROM CollectionPlace");
$mysqli->close();
?>

<form id="someform" class="" action="check/ClientOrderAddedCheck.php" method="post">
    <!--Добавишь чек в котором два запроса, на нового пользователя и на заказ -->
    <div class="container mt-4">
        <div class="row">
            <?php if($_COOKIE['AID']<10000): ?>
            <div class="col" >
                <label for="NIS"><b>Name Initial Surname</b></label>
                <input type="text" placeholder="Enter your Name" name="NIS" class="form-control mb-0 mt-0" required>

                <label for="PhoneNumber" class="mt-3"><b>Phone number</b></label>
                <input type="text" placeholder="+375 (999) 99 99 999" id="phone" name="PhoneNumber" class="form-control" required>
                <script>
                    $("#phone").mask("+375 (99) 99-99-999"); //маска ввода
                </script>

                <label for="Email" class="mt-2"><b>E-mail</b></label>
                <input type="email" placeholder="Enter your e-mail" name="Email" class="form-control" required>
            </div>
            <?php endif; ?>
            <div class="col">
                <label for="Name"><b>Order Name</b></label>
                <input type="text" placeholder="Enter order name" name="OrderName" class="form-control mb-0 mt-0" required>
                <div class="row mt-4">
                    <div class="col">
                        <label for="Weight"><b>Weight</b></label>
                        <input type="text" placeholder="Enter the approximate weight of your cargo" name="Weight" class="form-control mb-0 mt-0" required>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <input class="form-check-input" type="checkbox" name="IsFragile">
                        <label class="form-check-label" for="defaultCheck1">
                            Is Fragile?
                        </label>

                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="From"><b>From</b></label>
                        <input type="text" placeholder="From" name="From" class="form-control" required>
                    </div>
                    <div class="col-6">
                        <label for="From"><b>To</b></label>
                        <input type="text" placeholder="To" name="To" class="form-control" required>

                    </div>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-success mt-3">Registrate</button>
    </div>
</form>