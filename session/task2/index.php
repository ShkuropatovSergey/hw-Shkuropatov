<?php
session_start();
$_SESSION['time']=date("F j, Y, G:i:s");
if (isset($_SESSION['time'])){
    echo "Время захода пользователя на сайт " . $_SESSION['time'];
}
?>
<!-- Урок 13-14
 Слайд 12 
 Задача на сессию
 Задание 2 -->