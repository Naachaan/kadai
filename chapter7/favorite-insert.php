<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
if(isset($_SESSION['customer'])){
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into favorite values(?,?)');
    $sql->execute([$_SESSION['customer']['id'],$_GET['id']]);
    echo 'ちーいりんかいあちねーむんいりしーいびたん';
    echo '<hr>';
    require 'favorite.php';
}else{
    echo 'ちーいりんかいあちねーむんいりしーんかーログインしみそーれー';
}
?>
<?php require 'footer.php';?>