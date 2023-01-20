<?php
require_once __DIR__ . '/DBConnect.php';


$haikei = $_POST['haikei'];
echo $haikei;

$sql = "UPDATE Users SET apply_background = :apply_background";

$stmt = $pdo->prepare($sql);//sql実行準備

$stmt -> bindValue(':apply_background',$haikei,PDO::PARAM_STR);

$stmt->execute();//sqlの実行

echo $haikei;
header('Location: background_changed.php');
exit;

?>
