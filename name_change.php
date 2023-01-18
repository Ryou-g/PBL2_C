<?php
require_once __DIR__ . '/background_set.php';
require_once __DIR__ . '/charSetDB.php';
?>


<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/name_change.css">
   <title>name_change</title>
</head>
<body>
<img src="<?php echo $path; ?>" class="background_1">
<img src="<?php echo $cos_path ?>" class="background_2">
<div class="header">
<?php require_once __DIR__ . '/header.php'; ?>

<?php

require_once __DIR__ . '/DBConnect.php';

$name = $_POST['name'];

$sql = "UPDATE users SET user_name = :user_name";

$stmt = $pdo->prepare($sql);//sql実行準備

$stmt -> bindValue(':user_name',$name,PDO::PARAM_STR);

$stmt->execute();//sqlの実行

?>
<div class='name_chenge'>
  <p>名前変更が完了しました！</p>
  <p><?php echo $name ?></p>
</div>
<?php require_once "./footer.php"; ?>
</body>
</div>
</html>
