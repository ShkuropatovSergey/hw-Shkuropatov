<?php
session_start();
session_destroy();

if(isset($_SESSION['IS_AUTH']) && $_SESSION['IS_AUTH']==true){
    echo "Авторизованный пользователь <br>
    <a href='/exit.php'>Удалить сессию</a>";
    }else{
        echo "Неавторизованный пользователь";
    }
?>
<h2>Эта страница exit.php</h2>
<h2>Сессия удалена</h2>

<h3><a href="index.php">Перейти на страницу index.php</a></h3>
<h3><a href="authorization.php">Перейти на страницу authorization.php</a></h3>