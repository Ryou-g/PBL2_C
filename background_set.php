<?php
require_once __DIR__ . '/DBConnect.php';

$sql ="SELECT apply_background AS background_name, background_path
FROM background JOIN users ON background_name=apply_background";

$haikei = 0;


if(isset($haikei)){

}else{
  $haikei = $sql['apply_background'];

}

$stmt=$pdo->prepare($sql);
$stmt -> bindValue(':background_path',$haikei,PDO::PARAM_INT);
$stmt->execute();
$path = $stmt->fetch();
$path = $path['background_path'];
?>