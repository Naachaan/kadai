<?php session_start();  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai4-1</title>
    </head>
    <body>
        <?php
        echo '現在のセッションで使っているセッションID：'
        .session_id();
        ?>
    </body>
</html>
