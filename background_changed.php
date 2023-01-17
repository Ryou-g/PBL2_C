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
   <link rel="stylesheet" href="CSS/background_changed.css">
   <title>背景変更完了画面</title>
</head>
<body>
<img src="<?php echo $path; ?>" class="background_1">
<img src="<?php echo $cos_path?>" class="background_2">
<div class="header">
<div class='name_chenge'>
  <p>背景変更が完了しました！</p>
</div>
<?php require_once "./footer.php"; ?>
</body>
</div>
</html>
