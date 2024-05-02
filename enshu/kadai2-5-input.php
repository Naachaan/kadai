<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>課題2-5-input</title>
    </head>
    <body>
    <form action="kadai2-5-output.php" method="post">
            <p>入場する人の区分を選択してください</p>
                <p><select name="kubun" >
                <?php
                $kubun=[
                    '未就学児' => 0,
                    '子供料金' => 500,
                    '小学生～高校生料金' => 700,
                    '大人料金' => 1000,
                    '65歳以上' =>600
                ];

                foreach($kubun as $key => $val)
                echo '<option value="',$val,'">',$key,'</option>';
                ?>               
            </select></p>        
            <button type="submit">確定</button>
        </form>
        </select>            
    </body>
</html>