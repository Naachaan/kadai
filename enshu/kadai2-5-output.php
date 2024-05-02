<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>課題2-5-output</title>
    </head>
    <body>
        <?php
        $kubun=[
            '未就学児' => 0,
            '子供料金' => 500,
            '小学生～高校生料金' => 700,
            '大人料金' => 1000,
            '65歳以上' =>600
        ];
        echo '入場料は',$_REQUEST['kubun'],'円です';
        ?>
    </body>
</html>