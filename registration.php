<?php
session_start();

if (isset($_SESSION['IS_AUTH']) && $_SESSION['IS_AUTH'] == true) {
    echo "Авторизованный пользователь <br>
<a href='/exit.php'>Выйти</a>";
} else {
    echo "Неавторизованный пользователь <br>";
}

//Загрузка файлов в папку img
if (!empty($_FILES)) {
    echo "Выбран файл: ".$_FILES['file']['name'];
    echo '<br>';
    $string = $_FILES['file']['name'];
    //Выбираем только файлы с расширением jpg, jpeg, png или gif.
    preg_match("/^.*\.(jpg|jpeg|png|gif)$/i", $string, $output_array);
    if (count($output_array) > 0) {
        move_uploaded_file($_FILES['file']['tmp_name'], 'foto/' . $_FILES['file']['name']);
    }else{
        echo "Файл не соответствует расширению";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/registration.css">
    <title>Регистрация</title>
</head>

<body>
    <h1>Регистрация</h1>
    <form class="aa" method='post' enctype="multipart/form-data">
    <label for="log">Запиши логин:</label>
        <input type="text" name='login' id="log" placeholder='Логин'><br><br>
        <label for="pas">Запиши пароль:</label>
        <input type="password" name='password' id="pas" placeholder='Пароль'><br><br>
        <label for="photo">Выбери аватарку:</label>
        <input type="file" class="custom-file-input" name="file" id="photo" title=" "/><br><br>
        <button type="submit">Зарегистрироваться</button>
    </form>
     <!-- Отменяет повторную отправку формы -->
     <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>