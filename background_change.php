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
  
<img id ="image" src="./images/dressbuy_buckground.png" class="background_1">
  <div class="background_2" >
    <img id="target" src="./images/background.jpeg" class=background_2>
  </div>
  <div class="header">
  <?php 
require_once 'header.php';
?>
</div>
<div class="button001">

	<a onclick="OnButtonClick();">着せ替える</a>

</div>

<div class="container">
    <div class="grid-item" onclick="changeImages1()"><img src="./images/telmare.jpg" class="background3"></div>
    <div class="grid-item" onclick="changeImages2()"><img src="./images/background.jpeg" class="background3"></div>
    <div class="grid-item" onclick="changeImages3()"><img src="./images/japanese.jpg"  class="background3"></div>
    <div class="grid-item" onclick="changeImages4()"><img src="./images/apart.jpg"  class="background3"></div>
    
</div>
<script>
    var img;
    function changeImages1(){
    img = document.getElementById("image");
    img.src = "./images/telmare.jpg";
  }

    function changeImages2(){
    img = document.getElementById("image");
    img.src = "./images/background.jpeg";
  }

    function changeImages3(){
    img = document.getElementById("image");
    img.src = "./images/japanese.jpg";
  }

    function changeImages4(){
    img = document.getElementById("image");
    img.src = "./images/apart.jpg";
  }


  function OnButtonClick() {
   
   if ( image = "background_3"){
     var target_1 = document.getElementById("target_1");
     target_1.innerHTML = " セット中";
   }
   else if (image="background_3"){
     var target_2 = document.getElementById("target_2");
     target_2.innerHTML = "セット中";
   }
   else if(  image= "background_3"){
     var target = document.getElementById("target_3");
     target.innerHTML = "セット中";
   }
   else if(image="background_3"){
     var target = document.getElementById("target_4");
     target.innerHTML = "セット中";
   }

   
   
  }
</script>

  </body>
  <?php 
require_once 'footer.php';
?>
</html>