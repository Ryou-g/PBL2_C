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
   <link rel="stylesheet" href="CSS/my_page.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
   <title>my_page</title>
</head>
<body>
<img src="<?php echo $path; ?>" class="background_1">
<img src="<?php echo $cos_path ?>" class="background_2">
<div class="header">
<?php
require_once "./header.php";
?>
</div>
<form action="name_change.php" method="post">
<h2>名前を入力してください。</h2>
  <textarea name="name" cols="40" rows="3" placeholder="変更する名前を入力" required></textarea><br>
  <button type="submit" name="button">変更する</button>
</form>

</main>
</form>
</div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<div class="footer">
  <?php
require_once "./footer.php";
?>
</div>
</html>
