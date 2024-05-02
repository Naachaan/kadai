<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kadai1-5-input</title>
    </head>
    <body>
        <h1>麻生動物園へようこそ！</h1>
        <h1>どのチケットをご購入ですか？</h1>
        <form action="kadai1-5-output.php" method="post">
            <p><input type="radio" name="Ticket" value="1">未就学児</p>
            <p><input type="radio" name="Ticket" value="2">子供料金</p>
            <p><input type="radio" name="Ticket" value="3">小学生～高校生</p>
            <p><input type="radio" name="Ticket" value="4">大人料金</p>
            <p><input type="radio" name="Ticket" value="5">６５歳以上</p>
        <button type="submit">送信</button>
    </body>
</html>