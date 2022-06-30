<?php

//DB接続設定
$dsn = 'mysql:dbname=ohurocchi;host=localhost;charset=utf8mb4';
$user = 'ohurocchi';
$password = 'password';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (Exception $e) {
    echo 'Error' . $e->getMessage();
    die();
}
