<?php session_start(); ?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai</title>
    </head>
    <body>
        <?php
        $_SESSION['user']=[
            'n1'=>$_POST['n1']];
        echo '入力されたパスワード：',$_SESSION['user']['n1'],'<br>';
        echo 'ハッシュ値：',password_hash($_POST['n1'],PASSWORD_DEFAULT);
        ?>
    </body>
</html>