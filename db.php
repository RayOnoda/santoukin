<?php
    function connectDb_public(){
        try{
            $dsn = '';
            $username = '';
            $password = '';
            $pdo = new PDO($dsn, $username, $password);
            return $pdo;
        }catch(PDOException $e){
            echo 'データベース接続に失敗しました。';
            exit;
        }
    }


    function connectDB_local(){
        try{
            $dsn = 'mysql:host=localhost;dbname=santoukin;charset=utf8';
            $username = 'root';
            $password = "root";
            $pdo = new PDO($dsn, $username, $password);
            return $pdo;
        }catch(PDOException $e){
            echo 'データベース接続に失敗しました。';
            exit;
        }
    }
?>