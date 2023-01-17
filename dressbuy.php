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
<?php
session_start();
?>

      <!-- JS -->
<script>
var fixLoad = function(){
    document.body.classList.remove("is_fade");
    document.body.classList.remove("is_remove");
}
setTimeout(fixLoad, 100);
</script>

  <img src="./images/pop1.jpg" class="background_1">
  <div class="background_2" >
    <!-- <img id="image" src="./images/sexy.png" class=background_2> -->
    <img id="image" src="./images/coat1.png" class=background_2>

  </div>
  <div class="header">
  <?php
require_once 'header.php';
?>
</div>
<div class="md_transition"></div>

<div class="button001">
  <form method="POST" name="form1" action="dressbuy_db.php">
    <input type="hidden" name="example" id="example-id">
    <a href="javascript:form1.submit()">購入する</a>
  </form>

</div>

<div class="container">
    <div class="grid-item" onclick="changeImages1()"><p>風呂メイド1</p><img src="./images/coat1.png" class="background_3"><p class="price">￥120</p></div>
    <div class="grid-item" onclick="changeImages2()"><p>風呂メイド2</p><img src="./images/dress1.png"  class="background_3"><p class="price">￥120</p></div>
    <div class="grid-item" onclick="changeImages3()"><p>風呂メイド3</p><img src="./images/maid1.png"  class="background_3"><p class="price">￥120</p></div>
    <div class="grid-item" onclick="changeImages4()"><p>風呂メイド4</p><img src="./images/uniform1.png"  class="background_3"><p class="price">￥120</p></div>

</div>
<script>
    var img;
    // まず隠しフィールド要素を取得
    const hiddenField = document.getElementById('example-id');
    hiddenField = "./images/coat1.png";
    function changeImages1(){
    img = document.getElementById("image");
    img.src = "./images/coat1.png";
    // 値をセット
    hiddenField.value = "./images/coat1.png";
  }

    function changeImages2(){
    img = document.getElementById("image");
    img.src = "./images/dress1.png";
    hiddenField.value = "./images/dress1.png";
  }

    function changeImages3(){
    img = document.getElementById("image");
    img.src = "./images/maid1.png";
    hiddenField.value = "./images/maid1.png";

  }

    function changeImages4(){
    img = document.getElementById("image");
    img.src = "./images/uniform1.png";
    hiddenField.value = "./images/uniform1.png";
  }
</script>



  </body>
  <div class="footer">
  <?php
require_once 'footer.php';
?>
</div>
</html>