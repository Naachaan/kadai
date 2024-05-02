<!DOCTYPE html>
    <html lang = "ja">
        <head>
            <meta charset="UTF-8">
            <title>課題4-1-1</title>
</head>
        <body>
        <?php
                echo '赤：';
                if(isset($_POST['red'])){
                    echo '選択';
                } else {
                    echo '未選択';
                }
                echo '<br>';
                echo '青：';
                if(isset($_POST['blue'])){
                    echo '選択';
                } else {
                    echo '未選択';
                }
                echo '<br>';
                echo '緑：';
                if(isset($_POST['green'])){
                    echo '選択';
                } else {
                    echo '未選択';
                }
                ?>
                </body>
                </html>