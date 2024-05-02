<?php session_start(); ?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai4-3</title>
    </head>
    <body>
        <?php
        $_SESSION['user']=[
            'name'=>$_POST['name'],'home'=>$_POST['home']];
        echo $_SESSION['user']['name'].'さん、こんにちは。<br>';
        echo '出身地は'.$_SESSION['user']['home'].'ですね。';
        ?>
        <br>
        <a href="kadai4-3-logout.php">ログアウト</a>
    </body>
</html>