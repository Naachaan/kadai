<!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>kadai1-6-output</title>
</head>
        <body>
            <?php
                if ( empty( $_POST['user'] ) ){
                    echo 'ログイン名が入力されていません。';
                } else if ( empty(  $_POST['pw'] ) ){
                    echo 'パスワードが入力されていません。';
                } else if ( $_POST['user'] == 'admin' && $_POST['pw'] == '1234' ) {
                    echo $_POST['user'], 'さん、ようこそ！';
                } else {
                    echo 'ログイン名かパスワードが間違っています';
                }
                ?>
            </body>
</html>