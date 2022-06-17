<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/establishment.css">
    <title>設定画面</title>
</head>
<body>
  <div class="header">
  <?php
  require_once 'header.php';
  ?>
</div>
        <table class="setting">
            <tr>
                <td class="moji"><a href="my_page.php">マイページ</a></td>
            </tr>
            <tr>
                <td class="moji"><a href="sound.php">サウンド</a></td>
            </tr>
            <tr>
                <td class="moji"><a href="bathing_log.php">入浴ログ</a></td>
            </tr>
            <tr>
                <td class="moji"><a href="dress_up.php">着せ替え</a></td>
            </tr>
            <tr>
                <td class="moji"><a href="background_change.php">背景を変える</a></td>
            </tr>
        </table>
    <?php 
require_once 'footer.php';
?>
</body>
</html>