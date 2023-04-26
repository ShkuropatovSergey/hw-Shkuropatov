<?php
session_start();
$_SESSION['name']=$_GET['name'];
 if (isset($_SESSION['name'])){
    echo "Hello " . $_SESSION['name'];
}
?>
 <!-- Урок 13-14
 Слайд 12 
 Задача на сессию
 Задание 1 -->
