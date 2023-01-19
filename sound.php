<?php
require_once __DIR__ . '/background_set.php';
require_once __DIR__ . '/charSetDB.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>サウンド設定画面</title>
</head>
<link rel="stylesheet" href="./CSS/sound.css">
<body>
  <img src="<?php echo $path; ?>" class="background_1">
  <img src="<?php echo $cos_path?>" class="background_2">
  <div class="header">
    <?php
      require_once "./header.php";
    ?>
  </div>
<script>
  window.addEventListener('DOMContentLoaded', function(){
  const btn_play = document.getElementById("btn_play");
  const btn_mute = document.getElementById("btn_mute");
  const slider_volume = document.getElementById("volume");
  const audioElement = document.querySelector("audio");

  // ボリュームの初期設定
  audioElement.volume = slider_volume.value;

  btn_play.addEventListener("click", e => {
    audioElement.play();
  });

  btn_mute.addEventListener("click", e => {

    if( audioElement.muted ) {
      audioElement.muted = false;
      btn_mute.textContent = "消音";
    } else {
      audioElement.muted = true;
      btn_mute.textContent = "消音解除";
    }
  });

  slider_volume.addEventListener("input", e => {
    audioElement.volume = slider_volume.value;
  });
});
</script>
  <table class="setting">
    <tr>
      <td class="mojibox">BGM<br>
        <audio src="./sound/温泉へようこそ.mp3" type="audio/mpeg" preload="auto" loop>
        </audio>
        <button id="btn_play">再生</button>
        <button id="btn_mute">消音</button>
        <input type="range" id="volume" value="0.5" min="0.0" max="1.0" step="0.1">
      </td>
    </tr>
  </table>
</body>

  <div class="footer">
  <?php
require_once "./footer.php";
?>
</div>
</html>
