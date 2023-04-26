<?php
session_start();
$_SESSION['date']=date("F j, Y, G:i:s");
    echo "Время захода пользователя на сайт " . $_SESSION['date'];
    echo '<br>';
    if(!isset($_SESSION['time'])){
        $_SESSION['time'] = time();
      }else{
        echo "Пользователь зашел на сайт " . time() - $_SESSION['time'].
        " секунд назад"; 
      }
?>
<!-- Урок 13-14
 Слайд 12 
 Задача на сессию
 Задание 3 -->