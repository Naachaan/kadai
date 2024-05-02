<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
if(isset($_SESSION['customer'])){
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare(
        'delete from favorite where customer_id=? and product_id=?');
    $sql->execute([$_SESSION['customer']['id'],$_GET['id']]);
    echo 'ちーいりからあちねーむん削除さびたん';
    echo '<hr>';
}else{
    echo 'ちーいりからあちねーむん削除すんがーログインしみそーれー';
}
require 'favorite.php';