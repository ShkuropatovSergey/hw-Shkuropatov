<?php
session_start();
setcookie(session_name(), session_id(), time() + 365 * 24 * 3600);

if (isset($_GET['color'])) {
    echo "Сейчас выбран цвет: ".$_GET['color'].'<br>';
    setcookie('color', $_GET['color'], time() + 365 * 24 * 3600);
}
?>
<header>
    <a class="logo" href="index.php"></a>
    <nav>
        <ul id="navbar">
            <li><a href="registration.php">Регистрация</a></li>
            <li><a href="authorization.php">Авторизация</a></li>
            <li><a href="#">Контакты</a>
                <div class="hidden">
                    <ul>
                        <li><a href="#">Адрес</a></li>
                        <li><a href="#">Телефон</a></li>
                        <li><a href="#">Email</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Ссылка</a></li>
            <form action="">
                <select name="color">
                    <option value="green">Зеленый</option>
                    <option value="white" selected>Белый</option>
                    <option value="red">Красный</option>
                    <option value="yellow">Желтый</option>
                </select>
                <button type="submit">Применить</button>
            </form>
        </ul>
    </nav>
    <div class="burger"></div>
</header>
