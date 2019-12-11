<?php

?>
<form id="someform" class="" action="check/UserAddedCheck.php" method="post">
    <div class="container">
        <label for="emptype"><b>Employee type</b></label>
        <select name="emptype" class="form-control">
            <option></option>
            <option>Loader</option>
            <option>FarRobber</option>
            <option>Accountant</option>
        </select><br />
        <!--Добавить проверку на выбор не пустой строки -->
        <label for="NIS"><b>Name Initial Surname</b></label>
        <input type="text" placeholder="Enter NIS" name="NIS" class="form-control" required>

        <label for="Birthday"><b>Birthday</b></label>
        <input class="datepicker form-control" id="datepicker">
        <script>
            $(document).ready(function() {
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'dd/mm/yy',
                    defaultDate: '-20y -1m -247d',
                    yearRange: '-50:+0'
                });
                $("#birthdate").focus(function() {
                    $(this).datepicker("show")
                });

            });
        </script>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" class="form-control" required>

        <button type="submit" class="btn btn-success mt-3">Registrate</button>
    </div>
</form>