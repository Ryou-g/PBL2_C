<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>衣装着せ替え画面</title>
  </head>
  <link rel="stylesheet" href="./CSS/dressbuy.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Fredoka+One&family=Lilita+One&family=Londrina+Outline&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
  
  <body>
  
  <img src="./images/dressbuy_buckground.png" class="background_1">
  <div class="background_2" >
    <img id="image" src="./images/adult.png" class=background_2>
  </div>
  <div class="header">
  <?php 
require_once 'header.php';
?>
</div>
<div class="button001">
	<a onclick="OnButtonClick();">着せ替える</a>
</div>

<div class="container" >
    <div class="grid-item"   onclick="changeImages1()"><p id="target_1">風呂メイド1</p>
    <img src="./images/adult.png"  class="background_3"></div>
    <div class="grid-item"  onclick="changeImages3()"><p id="target_2">風呂メイド3</p>
    <img src="./images/sick.png"  class="background_3"></div>
    <div class="grid-item"   onclick="changeImages4()"><p id="target_3">風呂メイド4</p>
    <img src="./images/neautral.png"  class="background_3"></div>
    <a rel="http://buhidoh.net/?s">
    
</div>
<script>
  /*  衣装切り替え*/ 
    var img;
    
    function changeImages1(){
    img = document.getElementById("image");
    img.src = "./images/adult.png";
    
   
  }

   /* function changeImages2(){
    img = document.getElementById("image");
    img.src = "./images/sexy.png";
    choice = 2;
  }*/

    function changeImages3(){
    img = document.getElementById("image");
    img.src = "./images/sick.png";
  
    
  }

    function changeImages4(){
    img = document.getElementById("image");
    img.src = "./images/neautral.png";
    
  }

  /*  衣装切り替えend*/ 

  /*衣装選択中の表示*/
  


  function OnButtonClick() {
   
    if ( image = "background_3"){
      var target_1 = document.getElementById("target_1");
      target_1.innerHTML = "風呂メイド1 セット中";
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

   /*衣装選択中の表示end*/

</script>

  </body>
  <?php 
require_once 'footer.php';
?>
</html>