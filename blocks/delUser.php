<form id="myForm" class="" action="check/DeleteUserCheck.php" method="post">
    <div class="container mt-4">
        <div class="row">
        <div class="col-sm-8">
            <label for="OrderID" class="mt-2"><b>ID Сотрудника</b></label>
            <input type="text" placeholder="Впишите ID сотрудника" name="EmpID" class="form-control" required>
        </div>
        <div class="col-2">
            <button class="btn btn-dark mt-5">Уволить</button>
        </div>
        <div class="col-2">
                <!--<a class="btn btn-dark" href="#" onclick="document.getElementById('idtab').style.display='block';document.getElementById('mainbody').style.overflow = 'hidden';">Показать&nbsp;таблицу</a>  nbsp это запрет на перенос-->
                
                <a class="btn btn-dark mt-5" target="_blank" href="get-all-employee.php">Показать&nbsp;таблицу</a> <!--Вся суть в получении tabname-->
            </div>
        </div>
    </div>
</form>
<script>
    $('#myForm').submit(function() {
        if (confirm("Вы уверены?"))
            return true;
        else
            return false;
    });
</script>