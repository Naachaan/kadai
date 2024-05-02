<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>課題2-6-input</title>
    </head>
    <body>
    <form action="kadai2-6-output.php" method="post">
            <p>賛成のメンバーを選択</p>
                <?php
                $kubun=[
                    '織田信長',
                    '上杉謙信',
                    '伊達政宗',
                    '徳川家康',
                    '豊臣秀吉',
                    '武田信玄',
                    '明智光秀'
                ];

                foreach($kubun as $key )
                echo '<input type="checkbox" name="kubun[]" value="',$key,'">',$key,'<br>';
                ?>

            <button type="submit">投票結果</button>
        </form>
        </select>            
    </body>
</html>