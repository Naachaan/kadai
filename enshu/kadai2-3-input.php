<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai2-3-input</title>
    </head>
    <body>
        <p>入場する人の区分を選択してください</p>
        <form action="kadai2-3-output.php" method="post">
            <select name="kubun">
            <?php
            $kubun=array('未就学児','子供料金','小学生～高校生料金','大人料金','６５歳以上');
            foreach($kubun as $C){
                echo '<option value="',$C,'">',$C,'</option>';
            }
            ?>
            </select>
            <button type="submit">確定</button>
    </body>
</html>