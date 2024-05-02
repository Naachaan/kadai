
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <table>
        <tr><th>商品番号</th><th>商品名</th><th>カテゴリー</th><th>商品価格</th></tr>
        <?php
        $pdo = new PDO('mysql:host=mysql215.phy.lolipop.lan; dbname=LAA1517473-shop; charset=utf8',
        'LAA1517473','Pass0703');
        $sql=$pdo->prepare('select * from item where name=?');
        $sql->execute([$_POST['keyword']]);
        $data=$sql->fetchAll();
        if(empty($data)){
            echo 'データが１件もありません';
        }
        foreach($data as $row){
            echo '<tr>';
            echo '<td>',$row['id'],'</td>';
            echo '<td>',$row['name'],'</td>';
            echo '<td>',$row['kubun'],'</td>';
            echo '<td>',$row['price'],'</td>';
            echo '</tr>';
        }
        ?>
        </table>
    </body>
</html>