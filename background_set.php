<?php
require_once __DIR__ . '/DBConnect.php';

$sql ="SELECT users.apply_background AS background_name, background.background_path FROM users JOIN background ON background.background_name=users.apply_background";

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
