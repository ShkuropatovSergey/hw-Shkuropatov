<?php
session_start();

$_SESSION['secret']='secret';

if(isset($_SESSION['IS_AUTH']) && $_SESSION['IS_AUTH']==true){
echo "Авторизованный пользователь <br>
<a href='/exit.php'>Выйти</a>";
}else{
    echo "Неавторизованный пользователь";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form class="aa" method='post'>
        <input type="text" name='login' placeholder='Логин'>
        <input type="password" name='password' placeholder='Пароль'>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>