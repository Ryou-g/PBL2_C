<?php
require_once __DIR__ . '/background_set.php';
require_once __DIR__ . '/charSetDB.php';
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ホーム画面</title>
  </head>
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
  <div class="header">
  <?php
require_once 'header.php';
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
