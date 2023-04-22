<?php
// Урок11-12 Слайд 15 Задание 4
echo "Урок11-12 Слайд 15 Задание 4 <br>";
$laba = isset($_GET['laba']) ? $_GET['laba'] : 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <label for="select">Выберите лабораторную работу:</label>
        <select name="laba" id="select">
            <option value="1">Лаб1</option>
            <option value="2" selected>Лаб2</option>
            <option value="3">Лаб3</option>
            <option value="4">Лаб4</option>
        </select><br>
        <button type="submit">Отправить</button>
    </form>
    <a href="/phpcourse.php?l=<? echo $laba ?>">Перейти на <? echo "Лаб" . $laba ?></a>
    <br>
    <br>
    <?//Слайд 15 Задание 4
      echo "Слайд 16 Задание 1"?>
    <form action="">
        <label for="email">Введите email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="title">Введите заголовок:</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="text"> Введите сообщение:</label>
        <textarea name="comment" id="text" cols="20" rows="5"></textarea><br><br>
        <button type="submit">Отправить</button>
    </form>
<?
    $email = isset($_GET['email']) ? $_GET['email'] : "";
    $comment = isset($_GET['comment']) ? $_GET['comment'] : "";
    $title = isset($_GET['title']) ? $_GET['title'] : "";
    
    mail($email, $title, $comment); 
 


?>
</body>

</html>