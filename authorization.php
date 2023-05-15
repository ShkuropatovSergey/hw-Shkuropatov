<?php
session_start();
setcookie(session_name(), session_id(), time() + 365 * 24 * 3600);

$temlate=[
    'message'=>null,
    'page'=>null
];

 
if(isset($_POST['login'])){
    
    $secret = 'macbook';
    $pass_hash = md5("{$secret} {$_POST['password']}");

    $link=mysqli_connect('localhost', '1', 1, 'registration');
    mysqli_set_charset($link, 'utf8');

    $sql="SELECT * FROM users WHERE login='{$_POST['login']}' AND pass_hash='{$pass_hash}' limit 1";
  
    $result = mysqli_query($link, $sql);
    
    if (mysqli_fetch_assoc($result)) {
        $template['message'] = 'Вы успешно авторизовались';
        $_SESSION['IS_AUTH']=true;
        $check=true;
        if (isset($_SESSION['page'])) {
            foreach ($_SESSION["page"] as $value) {
                $template['page'] = $value;
            }
        }
    } else {
        $template['message'] = 'Логин и пароль введены неверно';
        $check=false;
        if (isset($_SESSION['page'])) {
            foreach ($_SESSION["page"] as $value) {
                $template['page'] = $value;
            }
        }
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
    <link rel="stylesheet" href="styles/authorization.css">
    <link rel="stylesheet" href="styles/header.css">
    <title>Авторизация</title>
</head>

<body style="background-color: <?= $_COOKIE['color'] ?>" ;>

<?php
if(!empty($template['message']) and $check==true){
    echo "<h2>{$template['message']}</h2>";
    
    ?> <script>
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 3000);
</script><?
}elseif (!empty($template['message']) and $check==false) {
    echo "<h2>{$template['message']}</h2>";
?> <script>
        setTimeout(function() {
            window.location.href = 'registration.php';
        }, 3000);
    </script><?
            }
          ?>
    <div class="authorization">
        <div class="box">
            <h1>Авторизация</h1>
            <form class="aa" method='post'>
                <input type="text" name='login'  placeholder='Логин'><br><br>
                <input type="password" name='password' placeholder='Пароль'><br><br>
                <button class="button" type="submit">Авторизоваться</button>
            </form>
        </div>
    </div>

    <h3><a href="fact.php">Перейти на страницу fact.php</a></h3>
    <h3><a href="bitrix.php">Перейти на страницу bitrix.php</a></h3>

</body>
</html>