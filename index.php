<?php
require_once __DIR__ . '/background_set.php';
require_once __DIR__ . '/setQuotedb.php';


?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ホーム画面</title>
  </head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./CSS/index.css">


  <body class="is_fade" >

    <!-- JS -->
<script>
var fixLoad = function(){
    document.body.classList.remove("is_fade");
    document.body.classList.remove("is_remove");
}
setTimeout(fixLoad, 100);
</script>

  <img src="<?php echo $path; ?>" class="background_1">
  <img src="<?php echo $cos_path?>" class="background_2">
  <img src = "./images/out1.png" class="background_3">
  <p><?php echo $quote; ?></p>
  <div class="header">
  <?php
require_once './header.php';
?>
</div>
  <div class="md_transition"></div>

  </body>
  <div class="footer">
  <?php
require_once 'footer.php';
?>
</div>
</html>
