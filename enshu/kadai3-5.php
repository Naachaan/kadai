<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        $pdo = new PDO('mysql:host=mysql215.phy.lolipop.lan; dbname=LAA1517473-shop; charset=utf8',
        'LAA1517473','Pass0703');
        foreach ($pdo->query('select * from product')as $row){
            $data[] = $row;
        };
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        ?>
    </body>
</html>