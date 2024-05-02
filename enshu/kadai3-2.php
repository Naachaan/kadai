<?php
const server = 'mysql215.phy.lolipop.lan';
const dbname = 'LAA1517473-shop';
const user = 'LAA1517473';
const pass = 'Pass0703'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>練習6-4-output</title>
    </head>
    <body>
        <table>
            <tr><th>商品番号</th><th>商品名</th><th>カテゴリー</th><th>商品価格</th></tr>
            <?php
            $pdo = new PDO('mysql:host=mysql215.phy.lolipop.lan; dbname=LAA1517473-shop; charset=utf8',
            'LAA1517473','Pass0703');

            foreach($pdo->query('select * from item')as $row){
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