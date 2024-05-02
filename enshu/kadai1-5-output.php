<!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>kadai1-5-output</title>
</head>
        <body>
            <?php
                echo 'ご来場ありがとうございます！料金は';
                switch ($_POST['Ticket']){
                    case '1';
                    echo '0';
                    break;

                    case '2';
                    echo '500';
                    break;

                    case '3';
                    echo '700';
                    break;

                    case '4';
                    echo '1000';
                    break;

                    case '5';
                    echo '600';
                    break;
                }
                echo '円です！';
                ?>
            </body>
</html>