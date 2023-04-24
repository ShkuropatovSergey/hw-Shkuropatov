<?php

    $template = [
        'message' => null
    ];$s=0;
    if( isset($_POST['login']) ){
        if(( $_POST['login']=='admin1' and $_POST['password'] ==  'password1')
        or ( $_POST['login']=='admin2' and $_POST['password'] ==  'password2')
        or ( $_POST['login']=='admin3' and $_POST['password'] ==  'password3')){
            $template['message'] = 'Вы успешно авторизовались';
            $s=1;
        }else{
            $template['message'] = 'Логин или пароль введены неверно.<br>
             Вы будете направлены на страницу регистрации.';
            $s=2;   
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <?php 
        if( !empty( $template['message'] ) && ($s==1)){
            echo "<h2>{$template['message']}</h2>";
        }elseif( !empty( $template['message'] ) && ($s==2)){
            echo "<h2>{$template['message']}</h2>";
        ?> <script>setTimeout(function(){
            window.location.href = 'registration.php';
          }, 3000);</script><?
        }
    ?>
    <h1>Авторизация</h1>
    <form class="aa" method='post'>
        <input type="text" name='login' placeholder='Логин'>
        <input type="password" name='password' placeholder='Пароль'>
        <button type="submit">Авторизоваться</button>
    </form>
   
   
</body>
</html>
