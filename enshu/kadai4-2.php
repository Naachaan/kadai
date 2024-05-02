<?php session_start();  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai4-1</title>
    </head>
    <body>
        <?php
        echo 'セッションが開始されると、ブラウザにセッション名でセッションIDが保存されます。<br>
              保存されるセッション名：'.session_name().'<br>
              保存されるセッションID：'.session_id();
        ?>
    </body>
</html>
