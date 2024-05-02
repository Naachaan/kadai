<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題演習</title>
</head>
<body>
    <h1>今日の日付を選んでください</h1>
<form action="kadai2-1-output.php" method="post">
    <select name="m">
        <?php
        for( $i=1 ; $i<=12 ; $i++){
        echo '<option value=',"$i",'>',$i,'</option>';
        }
        ?>
    </select>
    <?php
    echo '月';
    ?>
    <select name="d">
        <?php
        for( $i=1 ; $i<=31 ; $i++){
        echo '<option value=',"$i",'>',$i,'</option>';
        }
        ?>
    </select>
    <?php
    echo '日';
    ?>
    <button type="submit">選択</button>
</form>
</body>
</html>