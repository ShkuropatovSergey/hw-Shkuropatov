<?php
$counter=isset($_COOKIE['counter']) ? $_COOKIE['counter']:0;
$counter++;
setcookie('counter',$counter, time()+3600*24*365);
if (isset($_COOKIE['counter'])){
     echo "Вы заходите на сайт $counter раз";
 }else{
     echo "Вас еще не было на этом сайте";
 }
?>
<!-- Урок 13-14
Слайд 12
Задача на куки
Задание 3 -->