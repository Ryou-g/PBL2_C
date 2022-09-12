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
  <?php
  require_once __DIR__ . '/DBConnect.php';

  $user_id = 1;
  $sql = "select * FROM users WHERE id = :user_id";
  $stmt = $pdo -> prepare($sql);
  $stmt -> bindValue(':user_id', $user_id);
  $stmt -> execute();
  $user = $stmt -> fetch();
  ?>
  <img src="./images/dressbuy_buckground.png" class="background_1">
  <div class="background_2" >
    <?php if($user['apply_costume'] == 1){ ?>
    <img id="image" src="./images/adult.png" class=background_2>
    <?php } ?>
    <?php if($user['apply_costume'] == 2){ ?>
    <img id="image" src="./images/sexy.png" class=background_2>
    <?php } ?>
    <?php if($user['apply_costume'] == 3){ ?>
    <img id="image" src="./images/sick.png" class=background_2>
    <?php } ?>
    <?php if($user['apply_costume'] == 4){ ?>
    <img id="image" src="./images/neautral.png" class=background_2>
    <?php } ?>
    
  </div>
  <div class="header">
  <?php 
require_once 'header.php';
?>
</div>
<div class="button001">
<form method="POST" name="form1" action="dress_up_db.php">
  <input type="hidden" name="example" id="example">
	<a href="javascript:form1.submit()">着せ替える</a>
</form>
</div>


<div class="container">
    <div class="grid-item" onclick="changeImages1()"><p>風呂メイド1</p><img src="./images/adult.png" class="background_3"></div>
    <div class="grid-item" onclick="changeImages2()"><p>風呂メイド2</p><img src="./images/sexy.png" class="background_3"></div>
    <div class="grid-item" onclick="changeImages3()"><p>風呂メイド3</p><img src="./images/sick.png"  class="background_3"></div>
    <div class="grid-item" onclick="changeImages4()"><p>風呂メイド4</p><img src="./images/neautral.png"  class="background_3"></div>

    
</div>
<script>
  /*  衣装切り替え*/ 
    var img;
    const hiddenField = document.getElementById('example');
    function changeImages1(){
    img = document.getElementById("image");
    img.src = "./images/adult.png";
    // 値をセット
    hiddenField.value = "./images/adult.png";
  }

    function changeImages2(){
    img = document.getElementById("image");
    img.src = "./images/sexy.png";
    hiddenField.value = "./images/sexy.png";
  }

    function changeImages3(){
    img = document.getElementById("image");
    img.src = "./images/sick.png";
    hiddenField.value = "./images/sick.png";
  }

    function changeImages4(){
    img = document.getElementById("image");
    img.src = "./images/neautral.png";
    hiddenField.value = "./images/neautral.png";
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