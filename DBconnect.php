<?php
    try{
        $DSN = "mysql: host=localhost; dbname=word-search; charset=utf8";
        $PDO = new PDO($DSN, "root", "root");
    } catch (PDOException $e){
        echo "DB接続エラー：{$e->getMessage()}";
    }
?>