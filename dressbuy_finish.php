<?php
require_once __DIR__ . '/dressbuy_finish_db.php';
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>衣装購入完了画面</title>
  </head>
  <link rel="stylesheet" href="./CSS/dressbuy_finish.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Fredoka+One&family=Lilita+One&family=Londrina+Outline&family=Rubik+Moonrocks&display=swap" rel="stylesheet">

  <body>
  
  <img src="./images/dressbuy_buckground.png" class="background_1">
  <div class="background_2" >
    <?php
    if($buyflag == 0 && $costume == 1){
    ?>
    <img id="image" src="./images/adult.png" class=background_2>
    <?php
    }
    if($buyflag == 0 && $costume == 2){
    ?>
    <img id="image" src="./images/sexy.png" class=background_2>
    <?php
    }
    if($buyflag == 0 && $costume == 3){
    ?>
    <img id="image" src="./images/sick.png" class=background_2>
    <?php
    }
    if($buyflag == 0 && $costume == 4){
    ?>
    <img id="image" src="./images/neautral.png" class=background_2>
    <?php
    }
    ?>
  </div>
  <div class="header">
<?php 
require_once 'header.php';
?>
</div>
<div  class="fadeIn">
  <?php
  if($buyflag == 1){
  ?>
  <a div class="only-background">購入エラー<br>残高を確認してください</div></a>
  <script>
  setTimeout(
    function(){
  window.location.href = './dressbuy.php';
  }, 1.5*1000);
  </script> 
  <?php
  }
  else if($buyflag == 2){
  ?>
  <a div class="only-background">購入エラー<br>既に購入された衣装です</div></a>
  <script>
  setTimeout(
    function(){
  window.location.href = './dressbuy.php';
  }, 1.5*1000);
  </script>  
  <?php
  }
  else{
  ?>
  <a div class="only-background">GET !!</div></a>
  <?php
  }
  ?> 

</div>
  </body>
  <?php 
require_once 'footer.php';
?>
</html>