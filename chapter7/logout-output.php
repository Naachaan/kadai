<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if(isset($_SESSION['customer'])){
    unset($_SESSION['customer']);
    echo 'ログアウトさびたん';
}else{
    echo 'しでぃにログアウトそーいびーん';
}
?>
<?php require 'footer.php'; ?>