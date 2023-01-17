<?php
require_once __DIR__ . '/background_set.php';
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>背景着せ替え画面</title>
  </head>
  <link rel="stylesheet" href="./CSS/background_change.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Fredoka+One&family=Lilita+One&family=Londrina+Outline&family=Rubik+Moonrocks&display=swap" rel="stylesheet">

  <body>

  <img id ="image" src="<?php echo $path; ?>" class="background_1">
<div class="background_2" >
    <img id="target" src="<?php echo $path; ?>" class=background_2>
  </div>
  <div class="header">
  <?php
require_once 'header.php';
?>
</div>
<div class="container">
<form action="background_changedb.php" method="post">
    <div class="grid-item" onclick="changeImages1()">
    <input type="submit" name="haikei" value="1">
    <img src="./images/daiyokujo_pc.png" class="background3"></div>
</form>

<form action="background_changedb.php" method="post">
    <div class="grid-item" onclick="changeImages2()">
    <input type="submit" name="haikei" value="2">
    <img src="./images/roten_pc.png" class="background3"></div>
</form>

<form action="background_changedb.php" method="post">
    <div class="grid-item" onclick="changeImages3()">
    <input type="submit" name="haikei" value="3">
    <img src="./images/wafu_pc.png"  class="background3"></div>
</form>

<form action="background_changedb.php" method="post">
    <div class="grid-item" onclick="changeImages4()">
    <input type="submit" name="haikei" value="4">
    <img src="./images/huro_pc.png"  class="background3"></div>
</form>

</div>
  <script>
    var img;
    function changeImages1(){
    img = document.getElementById("image");
    ima.src = "./images/daiyokujo_pc.png"
  }

    function changeImages2(){
    img = document.getElementById("image");
    img.src = "./images/roten_pc.png";
  }

    function changeImages3(){
    img = document.getElementById("image");
    img.src = "./images/wafu_pc.png";
  }

    function changeImages4(){
    img = document.getElementById("image");
    img.src = "./images/huro_pc.png";
  }
  </script>
  </body>
  <?php
require_once 'footer.php';
?>
</html>
