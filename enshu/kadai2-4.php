<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai2-2-input</title>
    </head>
    <body>
            <?php
            $kubun=['未就学児'=>0,'子供料金'=>500,'小学生～高校生料金'=>700,'大人料金'=>1000,'６５歳以上'=>600];
            foreach($kubun as $C=>$s){
                echo $C.'は'.$s.'です<br>';
            }
            ?>
    </body>
</html>