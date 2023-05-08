<?php
session_start();
setcookie(session_name(), session_id(), time() + 365 * 24 * 3600);

if(isset($_SESSION['IS_AUTH']) && $_SESSION['IS_AUTH']==true){
    echo "Авторизованный пользователь <br>
    <a href='/exit.php'>Удалить сессию</a>";
    }else{
        echo "Неавторизованный пользователь";
    }

$template = [
    'message' => null,
    'page' => null
];
$s = 0;
if (isset($_POST['login'])) {
    if ($_POST['login'] == 'admin1' and $_POST['password'] ==  'password1') {
        if (isset($_SESSION['page'])) {
            foreach ($_SESSION["page"] as $value) {
                $template['page'] = $value;
            }
        }
        $template['message'] = $_POST['login'] . ', вы успешно авторизовались';
        $_SESSION['IS_AUTH']=true;
        $s = 1;
    } elseif ($_POST['login'] == 'admin2' and $_POST['password'] ==  'password2') {
        if (isset($_SESSION['page'])) {
            foreach ($_SESSION["page"] as $value) {
                $template['page'] = $value;
            }
        }
        $template['message'] = $_POST['login'] . ', вы успешно авторизовались';
        $_SESSION['IS_AUTH']=true;
        $s = 1;
    } elseif ($_POST['login'] == 'admin3' and $_POST['password'] ==  'password3') {
        if (isset($_SESSION['page'])) {
            foreach ($_SESSION["page"] as $value) {
                $template['page'] = $value;
            }
        }
        $template['message'] = $_POST['login'] . ', вы успешно авторизовались';
        $_SESSION['IS_AUTH']=true;
        $s = 1;
    } else {
        $template['message'] = 'Логин или пароль введены неверно.<br>
             Вы будете направлены на страницу регистрации.';
        $s = 2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="authorization.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>

<body>
    <?php
    if (!empty($template['message']) && ($s == 1)) {
        echo "<h2>{$template['message']}</h2>";
        echo "<h2>{$template['page']}</h2>";
    } elseif (!empty($template['message']) && ($s == 2)) {
        echo "<h2>{$template['message']}</h2>";
        echo "<h2>{$template['page']}</h2>";
    ?> <script>
            setTimeout(function() {
                window.location.href = 'registration.php';
            }, 3000);
        </script><?
                }
                    ?>
    <h1>Авторизация</h1>
    <form class="aa" method='post'>
    <label for="log">Запиши логин:</label>
        <input type="text" name='login' id="log" placeholder='Логин'><br><br>
        <label for="pas">Запиши пароль:</label>
        <input type="password" name='password' id="pas" placeholder='Пароль'><br><br>
        <label for="auth">Авторизуйся:</label>
        <button type="submit" id="auth">Авторизоваться</button>
    </form>
    <!-- Отменяет повторную отправку формы -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
 
    <h3><a href="fact.php">Перейти на страницу fact.php</a></h3>
    <h3><a href="bitrix.php">Перейти на страницу bitrix.php</a></h3>
    <h3><a href="index.php">Перейти на страницу index.php</a></h3>
</body>
</html>