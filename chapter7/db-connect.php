<?php
    const SERVER = 'mysql215.phy.lolipop.lan';
    const DBNAME = 'LAA1517473-shop';
    const USER = 'LAA1517473';
    const PASS = 'Pass0703';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
    $pdo=new PDO($connect,USER,PASS);
?>