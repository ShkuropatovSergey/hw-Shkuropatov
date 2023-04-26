<?php
setcookie('name', 'User', time() + 3600 * 7 * 24);
if (isset($_COOKIE['name'])) {
    echo "Hello " . $_COOKIE['name'];
}
//Урок 13-14
// Слайд 12
//Задание 1
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>
<body>

</body>
</html>