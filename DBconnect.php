<?php

//DB接続設定
$dsn = 'mysql:dbname=ohurocchi;host=localhost;charset=utf8mb4';
$user = 'sample_user1';
$password = 'tyryou1203';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (Exception $e) {
    echo 'Error' . $e->getMessage();
    die();
}
