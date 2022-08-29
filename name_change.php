<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/name_change.css">
   <title>my_page</title>
</head>
<body>
<img src="./images/background.jpeg" class="background_1">
<img src="./images/woman.png" class="background_2">
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
