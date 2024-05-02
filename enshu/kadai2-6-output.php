<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>課題2-6-output</title>
    </head>
    <body>
        <?php
        $total=0;
        $kubun=[
            '織田信長',
            '上杉謙信',
            '伊達政宗',
            '徳川家康',
            '豊臣秀吉',
            '武田信玄',
            '明智光秀'
        ];

        echo '賛成メンバー：';

            foreach($_REQUEST['kubun'] as $key){
                echo $key,',';
                $total++;
            }
            echo '<br><br>';
            if($total>=4){
                echo '賛成多数';
            }else{
                echo '反対多数';
            }

        ?>
    </body>
</html>