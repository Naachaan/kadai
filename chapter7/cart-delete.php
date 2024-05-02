<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
unset($_SESSION['product'][$_GET['id']]);
echo 'カートからあちねーむん削除さびたん';
echo '<hr>';
require 'cart.php';
?>
<?php require 'footer.php'; ?>