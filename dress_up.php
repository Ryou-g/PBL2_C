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
	<a  onclick="OnButtonClick();">着せ替える</a>
</div>

<div class="container" >
    <div class="grid-item"   onclick="changeImages1()"><p id="target1">風呂メイド1</p>
    <img src="./images/adult.png"  class="background_3"></div>
    <div class="grid-item"  onclick="changeImages2()"><p id="target2">風呂メイド2</p>
    <img src="./images/sexy.png"  class="background_3"></div>
    <div class="grid-item"  onclick="changeImages3()"><p id="target3">風呂メイド3</p>
    <img src="./images/sick.png"  class="background_3"></div>
    <div class="grid-item"   onclick="changeImages4()"><p id="target4">風呂メイド4</p>
    <img src="./images/neautral.png"  class="background_3"></div>
    
    
</div>
<script>
  /*  衣装切り替え*/ 
    var img;
    var i;
    function changeImages1(){
    img = document.getElementById("image");
    img.src = "./images/adult.png";
    i=1;
    
  }

    function changeImages2(){
    img = document.getElementById("image");
    img.src = "./images/sexy.png";
    i=2;
  }

    function changeImages3(){
    img = document.getElementById("image");
    img.src = "./images/sick.png";
    i=3;
    
  }

    function changeImages4(){
    img = document.getElementById("image");
    img.src = "./images/neautral.png";
    i=4;
  }

  /*  衣装切り替えend*/ 

  /*衣装選択中の表示*/
  
  var count=0;
 

  function OnButtonClick() {
      
      var target = document.getElementById("target"+i);
      target.innerHTML="セット中" 
      count++;
     
        
        if(count>1){
         //  location.reload();
          var target = document.getElementById("target"+i);
          target.innerHTML="セット中" 
          count=0;
        
      }
      
    }
  

  

   /*衣装選択中の表示end*/

</script>

  </body>
  <?php 
require_once 'footer.php';
?>
</html>