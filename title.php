<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="./CSS/title.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Fredoka+One&family=Lilita+One&family=Londrina+Outline&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
<head>
<meta charset="UTF-8">
<title>タイトル画面</title>
</head>
<body>
<div class="md_transition"></div>
  <div class="rogo" >おふろっち</div> <!-- ここは後々画像になります -->
  <img src="./images/background.jpeg" class="background_1">
  <!--<img src="./images/woman.png" class="background_2">--->


  <div  class="fadeup">
    <!-- ボタンの設置 -->
    <input type="button" value="START" class="only-background" onclick="ring(); location.href='./index.php'">
    <!-- 音声ファイルの読み込み -->
    <audio id="tts">
      <source src= "./sound/decision43.mp3" type="audio/mp3">
    </audio>
  </div>
  <script type="text/javascript">
    function ring(){
      document.getElementById("tts").load();
      document.getElementById("tts").play();
    }
  </script>
</body>
</html>
