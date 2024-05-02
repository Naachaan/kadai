
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <table>
        <tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>
        <?php
        $pdo = new PDO('mysql:host=mysql215.phy.lolipop.lan; dbname=LAA1517473-shop; charset=utf8',
        'LAA1517473','Pass0703');
        $sql=$pdo->prepare('select * from product where name like '% ? %'');
        $sql->execute([$_POST['keyword']]);
        foreach($sql as $row){
            echo '<tr>';
            echo '<td>',$row['id'],'</td>';
            echo '<td>',$row['name'],'</td>';
            echo '<td>',$row['price'],'</td>';
            echo '</tr>';
        }
        ?>
        </table>
    </body>
</html>