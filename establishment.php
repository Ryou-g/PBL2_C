<?php
require_once __DIR__ . '/background_set.php';
require_once __DIR__ . '/charSetDB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/establishment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <title>設定画面</title>
</head>
<body>
  <div class="header">
  <?php
  require_once 'header.php';
  ?>
</div>
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
        <table class="setting">
            <tr>
                <td class="mojibox"><a href="./my_page.php" class="moji">名前変更</a></td>
            </tr>
            <tr>
                <td class="mojibox"><a href="./bathing_log.php" class="moji">入浴ログ</a></td>
            </tr>
            <tr>
                <td class="mojibox"><a href="./dress_up.php" class="moji">着せ替え</a></td>
            </tr>
            <tr>
                <td class="mojibox"><a href="./background_change.php" class="moji">背景を変える</a></td>
            </tr>
        </table>
    <div class="footer">
        <?php
            require_once 'footer.php';
        ?>
    </div>
</body>
</html>
