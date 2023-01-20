<?php
require_once __DIR__ . '/DBConnect.php';

$sql ="SELECT Users.apply_background AS background_name, Background.background_path FROM Users JOIN Background ON Background.background_name=Users.apply_background";

$haikei = 0;


if(isset($haikei)){

}else{
  $haikei = $sql['apply_background'];

}

$stmt=$pdo->prepare($sql);
//$stmt -> bindValue(':background_path',$haikei,PDO::PARAM_INT);
$stmt->execute();
$path = $stmt->fetch();
$path = $path['background_path'];
?>
