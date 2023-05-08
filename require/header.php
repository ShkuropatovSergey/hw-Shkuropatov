<?php
session_start();
setcookie(session_name(), session_id(), time() + 365 * 24 * 3600);

if(isset($_SESSION['IS_AUTH']) && $_SESSION['IS_AUTH']==true){
    echo "Авторизованный пользователь <br><br>
    <a href='/exit.php'>Удалить сессию</a><br><br>";
    }else{
        echo "Неавторизованный пользователь <br><br> ";
    }
?>
<h3><a href="authorization.php">Перейти на страницу authorization.php</a></h3>
<br><br>
<header>   
<a class="logo" href="#"></a>
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
            </ul>
        </nav>
        <div class="burger"></div>
    </header>