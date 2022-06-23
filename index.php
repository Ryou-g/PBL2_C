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

  <img src="./images/background.jpeg" class="background_1">
  <img src="./images/woman.png" class="background_2">
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
