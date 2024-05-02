<?php session_start(); ?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai4-3</title>
    </head>
    <body>
        <?php
        echo $_SESSION['user']['home'],'出身の';
        echo $_SESSION['user']['name'],'さん、さようなら。<br>';
        session_destroy();
        echo 'ログアウトしました。<br>';
        ?>
        <a href="kadai4-3-login.php">ログイン</a>
    </body>
</html>