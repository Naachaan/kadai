<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from customer where login=?');
$sql->execute([$_POST['login']]);
$row = $sql->fetch(PDO::FETCH_ASSOC);
if($row && password_verify($_POST['password'],$row['password'])){
    $_SESSION['customer']=[
        'id'=>$row['id'],'name'=>$row['name'],
        'address'=>$row['address'],'login'=>$row['login'],
        'password'=>$row['password']];
    echo 'めんそーれー',$_SESSION['customer']['name'],'よーんなーしんじやー';
}else{
    echo 'ログインまたはパスワードぬたがやーびん';
}
?>
<?php require 'footer.php'; ?>