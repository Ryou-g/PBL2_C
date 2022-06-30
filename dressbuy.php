<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>衣装購入画面</title>
  </head>
  <link rel="stylesheet" href="./CSS/dressbuy.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Fredoka+One&family=Lilita+One&family=Londrina+Outline&family=Rubik+Moonrocks&display=swap" rel="stylesheet">

  <body class="is_fade" >

      <!-- JS -->
<script>
var fixLoad = function(){
    document.body.classList.remove("is_fade");
    document.body.classList.remove("is_remove");
}
setTimeout(fixLoad, 100);
</script>

  <img src="./images/dressbuy_buckground.png" class="background_1">
  <div class="background_2" >
    <img id="image" src="./images/sexy.png" class=background_2>
  </div>
  <div class="header">
  <?php
require_once 'header.php';
?>
</div>
<div class="md_transition"></div>

<div class="button001">

	<a href="dressbuy_finish.php">購入する</a>

</div>

<div class="container">
    <div class="grid-item" onclick="changeImages1()"><p>風呂メイド1</p><img src="./images/adult.png" class="background_3"><p class="price">￥120</p></div>
    <div class="grid-item" onclick="changeImages2()"><p>風呂メイド2</p><img src="./images/sexy.png"  class="background_3"><p class="price">￥120</p></div>
    <div class="grid-item" onclick="changeImages3()"><p>風呂メイド3</p><img src="./images/sick.png"  class="background_3"><p class="price">￥120</p></div>
    <div class="grid-item" onclick="changeImages4()"><p>風呂メイド4</p><img src="./images/neautral.png"  class="background_3"><p class="price">￥120</p></div>

</div>
<script>
    var img;
    function changeImages1(){
    img = document.getElementById("image");
    img.src = "./images/adult.png";
  }

    function changeImages2(){
    img = document.getElementById("image");
    img.src = "./images/sexy.png";
  }

    function changeImages3(){
    img = document.getElementById("image");
    img.src = "./images/sick.png";
  }

    function changeImages4(){
    img = document.getElementById("image");
    img.src = "./images/neautral.png";
  }
</script>

  </body>
  <div class="footer">
  <?php
require_once 'footer.php';
?>
</div>
</html>
