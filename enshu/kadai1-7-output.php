<!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>kadai1-7-output</title>
</head>
        <body>
            <?php
                echo 'ご来場ありがとうございます！料金は';
                switch ($_POST['Ticket']){
                    case '1';
                    $pay = 0;
                    break;

                    case '2';
                    $pay = 500;
                    break;

                    case '3';
                    $pay = 700;
                    break;

                    case '4';
                    $pay = 1000;
                    break;

                    case '5';
                    $pay = 600;
                    break;
                }
                if ( isset($_POST['choki']) && ( $_POST['Ticket'] == '2' || $_POST['Ticket'] == '3' ) ){
                    $pay /= 2;
                }
                if ( isset($_POST['donichi']) && $_POST['Ticket'] != '1'){
                    $pay += 100;
                }
                echo $pay, '円です！';
                ?>
            </body>
</html>