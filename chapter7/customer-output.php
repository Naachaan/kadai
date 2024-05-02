<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
require 'db-connect.php';
if(isset($_SESSION['customer'])){
    $id=$_SESSION['customer']['id'];
    $sql=$pdo->prepare('select * from customer where id !=? and login=?');
    $sql->execute([$id,$_POST['login']]);
}else{
    $sql=$pdo->prepare('select * from customer where login=?');
    $sql->execute([$_POST['login']]);
}
if(empty($sql->fetchAll())){
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if(isset($_SESSION['customer'])){
        $sql=$pdo->prepare('update customer set name=?,address=?,login=?,password=? where id=?');
        $sql->execute([
            $_POST['name'],$_POST['address'],$_POST['login'],$password,$id
        ]);
        $_SESSION['customer']=[
            'id'=>$id,'name'=>$_POST['name'],'address'=>$_POST['address'],'login'=>$_POST['login'],'password'=>$password
        ];
        echo 'うきゃくさん情報更新さびたん';
    }else{
        $sql=$pdo->prepare('insert into customer values(null,?,?,?,?)');
        $sql->execute([
            $_POST['name'],$_POST['address'],$_POST['login'],$password
        ]);
        echo 'うきゃくさん情報登録さびたん';
    }
}else{
    echo 'ログイン名がしでぃに使用さりとーいびーくとぅ変更しみそーれー';
}
?>
<?php require 'footer.php'; ?>