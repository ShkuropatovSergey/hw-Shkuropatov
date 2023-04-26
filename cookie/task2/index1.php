<?php
setcookie('login',$_GET['login'], time()+3600*24);
setcookie('time',date("F j, Y, G:i:s"), time()+3600*24);
if (isset($_COOKIE['login'])){
    print_r($_COOKIE);
}
// Урок 13-14
// Слайд 12 
// Занятие 2
