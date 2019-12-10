<?php

?>

<form id="someform" class="" action="check/UserAddedCheck.php" method="post">
    <div class="container">
        <label for="emptype"><b>Employee type</b></label>
        <select name="emptype">
            <option></option>
            <option>Loader</option>
            <option>FarRobber</option>
            <option>Accountant</option>
        </select><br/><!--Добавить проверку на выбор не пустой строки -->
        <label for="NIS"><b>Name Initial Surname</b></label>
        <input type="text" placeholder="Enter NIS" name="NIS" required>

        <label for="Birthday"><b>Birthday</b></label>
        <input type="text" placeholder="Enter NIS" name="NIS" required>
        
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Registrate</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>
</form>