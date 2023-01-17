<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="./CSS/dress_up_finish.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Fredoka+One&family=Lilita+One&family=Londrina+Outline&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
  <head>
    <meta charset="UTF-8">
    <title>衣装着せ替え完了画面</title>
  </head>
  <body>
  <div class="header">
  <?php
require_once 'header.php';
?>
</div>
<div class="md_transition"></div>
  <div>
  <img src="./images/pop1.jpg" class="background_1">
  <div class="background_2" >
    <?php
    $setcos = $_COOKIE['setcos'];
    if($setcos == 1){
    ?>
    <img id="image" src="./images/coat2.png" class=background_2>
    <?php
    }
    elseif($setcos == 2){
    ?>
    <img id="image" src="./images/dress2.png" class=background_2>
    <?php
    }
    elseif($setcos == 3){
    ?>
    <img id="image" src="./images/maid2.png" class=background_2>
    <?php
    }elseif($setcos == 4){
    ?>
    <img id="image" src="./images/uniform2.png" class=background_2>
    <?php
    }
    ?>
  </div>


      <a div class="only-background">着せ替え<br>完了！</div><a>


  </div>
  </body>
  <?php
require_once 'footer.php';
?>
</html>
