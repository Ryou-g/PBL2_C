<?php
require_once __DIR__ . '/DBConnect.php';

$user_id = 1; //ログイン機能実装後、セッションから代入する
$costume_path = $_POST['example'];
$path_array = explode(".png", $costume_path);
$path = substr($path_array[0], 0 , -1);
$path = $path . "1.png";


// costume_pathからidを特定
$sql = "SELECT * FROM Costume WHERE costume_path = :costume_path";
$stmt = $pdo -> prepare($sql);
$stmt -> bindvalue(':costume_path', $path);
$stmt->execute();
$costume = $stmt -> fetch();
var_dump($costume);


//Usersテーブルの情報を更新
$sql = "UPDATE Users SET apply_costume=:costume WHERE id = :user_id";
$stmt = $pdo -> prepare($sql);
$stmt -> bindvalue(':costume',$costume['id']);
$stmt -> bindvalue(':user_id', $user_id);
$stmt -> execute();

setcookie('setcos',$costume['id']);
header("Location: ./dress_up_finish.php");





?>
