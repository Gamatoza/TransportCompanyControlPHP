<div class="mytopnav d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <?php if ($_COOKIE['AID'] == null) : ?>
        <h5 class="my-0 mr-md-auto font-weight-normal">SomeTransportCompany</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Главная</a>
            <a class="p-2 text-dark" href="place-your-order.php">Оформить запрос на заказ</a>
            <a class="p-2 text-dark" href="about.php">Контакты</a>
        </nav>
        <a class="btn btn-outline-primary" href="#" onclick="document.getElementById('id01').style.display='block';document.getElementById('mainbody').style.overflow = 'hidden';">Войти</a>
    <?php else : ?>
        <!-- Здесь просмотр всех, пока что только бухгалтер -->
        <h5 class="my-0 mr-md-auto font-weight-normal">Добро пожаловать <?= $_COOKIE['Login']!=null?$_COOKIE['Login']:$_COOKIE['NIS'] ?>!</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Главная</a>
            <a class="p-2 text-dark" href="registrate-new-employee.php">Регистрация нового работника</a>
            <a class="p-2 text-dark" href="registrate-new-order.php">Регистрация нового заказа</a>
            <a class="p-2 text-dark" href="reports-on-the-transportation.php">Отчет о заказах</a>
        </nav>
        <a class="btn btn-outline-primary" href="#" onclick="window.location.href = 'check/Exit.php'">Выйти</a>
    <?php endif; ?>
</div>