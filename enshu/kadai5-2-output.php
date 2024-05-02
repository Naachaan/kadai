<?php session_start(); ?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai</title>
    </head>
    <body>
        <?php
        $pass = password_hash('12345',PASSWORD_DEFAULT);
        if(password_verify($_POST['n1'],$pass) == true){
            echo '保存されているパスワードと一致しました';
        }else{
            echo '保存されているパスワードと一致しません';
        }
        ?>
    </body>
</html>