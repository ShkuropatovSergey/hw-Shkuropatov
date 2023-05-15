<?php
session_start();

if (isset($_SESSION['IS_AUTH']) && $_SESSION['IS_AUTH'] == true) {
    echo "Авторизованный пользователь <br><br>
<a href='/exit.php'>Удалить сессию</a>";
} else {
    echo "Неавторизованный пользователь";
}

// //Загрузка файлов в папку foto
// if (!empty($_FILES)) {
//     echo "Выбран файл: " . $_FILES['img_src']['name'];
//     echo '<br>';
//     $string = $_FILES['img_src']['name'];
//     //Выбираем только файлы с расширением jpg, jpeg, png или gif.
//     preg_match("/^.*\.(jpg|jpeg|png|gif)$/i", $string, $output_array);
//     if (count($output_array) > 0) {
//         move_uploaded_file($_FILES['img_src']['tmp_name'], 'foto/' . $_FILES['img_src']['name']);
//         copy($_FILES['img_src']['tmp_name'], 'foto/' . $_FILES['img_src']['name']);

//         $img_src="/foto/".$name;
//     } else {
//         echo "Файл не соответствует расширению";
//     }
// }


$template = [
    'message' => null,
    'error' => []
];
// Регистрация
if (isset($_POST['login'])) {



//Загрузка файлов в папку foto
if (!empty($_FILES)) {
    echo "Выбран файл: " . $_FILES['img_src']['name'];
    echo '<br>';
    $string = $_FILES['img_src']['name'];
    //Выбираем только файлы с расширением jpg, jpeg, png или gif.
    preg_match("/^.*\.(jpg|jpeg|png|gif)$/i", $string, $output_array);
    if (count($output_array) > 0) {
        move_uploaded_file($_FILES['img_src']['tmp_name'], 'foto/' . $_FILES['img_src']['name']);
        move_uploaded_file($_FILES['img_src']['tmp_name'], 'foto/' . $_FILES['img_src']['name']);

        $img_src="/foto/".$_FILES['img_src']['name'];
    } else {
        echo "Файл не соответствует расширению";
    }
}



    if (empty($_POST['login']) or empty($_POST['password'])) {
        $template['message'] = "Вы не ввели логин и пароль";
    } else {
        $secret = 'macbook';
        $pass_hash = md5("{$secret} {$_POST['password']}");

        $link = mysqli_connect('localhost', '1', 1, 'registration');
        mysqli_set_charset($link, 'utf8');
        // проверка одинаковых паролей и логинов
        $sql1 = "SELECT * FROM users WHERE login='{$_POST['login']}' AND pass_hash='{$pass_hash}' ";
        $result5 = mysqli_query($link, $sql1);
        $resultMas = mysqli_fetch_all($result5, MYSQLI_ASSOC);

        if (!empty($resultMas)) {
            for ($i = 0; $i <= count($resultMas); $i++) {
                if (($resultMas[$i]['login'] == $_POST['login']) and ($resultMas[$i]['pass_hash'] == $pass_hash)) {
                    $template['message'] = 'Такой логин или пароль уже есть. Введите другой';
                    break;
                }
            }
        } else {
            $sql2 = "INSERT INTO users (id,login,pass_hash,img_src)
      VALUE (NULL,'{$_POST['login']}','{$pass_hash}','{$img_src}')";

            $result = mysqli_query($link, $sql2);
            if ($result) {
                $template['message'] = 'Вы зарегистрированы';
                $_SESSION['IS_AUTH'] = true;

?> <script>
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 3000);
                </script><?

                        } else {
                            $template['message'] = 'Произошла ошибка';
                        }
                    }
                }
            }
                            ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/registration.css">
    <title>Регистрация</title>
</head>

<body>

    <body style="background-color: <?= $_COOKIE['color'] ?>" ;>
        <?php
        if (!empty($template['message'])) {
            echo "<h2>{$template['message']}</h2>";
        }
        ?>
        <div class="registration">
            <div class="box">
                <h1>Регистрация</h1>
                <form class="aa" method='post' enctype="multipart/form-data">
                    <input type="text" name='login' placeholder='Логин'><br><br>
                    <input type="password" name='password' placeholder='Пароль'><br><br>

                    <input type="file" name="img_src" style="display: none" id="getFile">
<div onclick="document.getElementById('getFile').click()">Загрузите аватарку</div>
                    <!-- <div class="form-group">
                        <label for="ImgSrc">Загрузите фотографию:</label>
                        <input type="file" name="img_src" class="form-control-file" id="ImgSrc" /> -->



                        <button class="button" type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </body>

</html>