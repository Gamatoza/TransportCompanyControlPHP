<?php
$mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');

$result = $mysqli->query("SELECT * FROM CollectionPlace");
$mysqli->close();
?>

<form id="someform" class="" action="check/UserAddedCheck.php" method="post">
    <div class="container mt-4">
        <div class="row">
            <div class="col-4">
                <label for="emptype"><b>Employee&nbsp;type</b></label>
                <select name="emptype" id="emptype" class="form-control">

                    <option></option>
                    <option value="Loaders">Loader</option>
                    <option value="FarRobbers">Far Robber</option>
                    <option value="Accountants">Accountant</option>
                </select>

                <script>
                    $("select[name='emptype']").change(function() {
                        if ($(this).val() != "" && $(this).val() != "Accountant") {
                            $("#place").css("display", "block");
                        } else {
                            $("#place").css("display", "none");
                        }

                    });
                </script>
            </div>
            <!--Добавить проверку на выбор не пустой строки -->
            <div class="col">
                <label for="NIS"><b>Name Initial Surname</b></label>
                <input type="text" placeholder="Enter NIS" name="NIS" class="form-control mb-0 mt-0" required>
            </div>
        </div>
        <label for="Birthday" class="mt-2"><b>Birthday</b></label>
        <input class="datepicker form-control mb-2" id="datepicker" name="date">
        <script>
            $(document).ready(function() {
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'yy-mm-dd',
                    defaultDate: '-20y -1m -247d',
                    yearRange: '-50:+0'
                });
                $("#birthdate").focus(function() { //фокус что бы работал, первый тык под себя забирает ajax
                    $(this).datepicker("show")
                }); //настройка и вывод датапикера

            });
        </script>


        <label for="phone"><b>Phone number</b></label>
        <input type="text" placeholder="+375 (999) 99 99 999" id="phone" name="phone" class="form-control" required>
        <script>
            $("#phone").mask("+375 (99) 99-99-999"); //маска ввода
        </script>
        <div id="place" style="display: none;">
            <label for="workplace"><b>Workplace</b></label>
            <select name="workplace" id="workplace" class="form-control">
                <?php 
                    while(($row = $result->fetch_assoc()) != FALSE){
                        echo "<option value = '".$row['CPID']."'>".$row['PlaceName']."</option>";
                    }
                ?>
            </select>
        </div>
        
        <label for="password" class="mt-2"><b>Password</b></label>
        <input type="text" placeholder="Enter Password" name="password" class="form-control" required>

        <button type="submit" class="btn btn-success mt-3">Registrate</button>
    </div>
</form>