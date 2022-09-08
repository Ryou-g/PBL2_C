<?php

require_once __DIR__ . '/DBConnect.php';//DBへの接続

$sql = "SELECT * FROM users WHERE id = id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$name = $stmt->fetchAll();
foreach($name as $val){

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>キャラクター画面</title>
</head>
<link rel="stylesheet" href="./CSS/character.css">
<body class="is_fade" >

    <!-- JS -->
<script>
var fixLoad = function(){
    document.body.classList.remove("is_fade");
    document.body.classList.remove("is_remove");
}
setTimeout(fixLoad, 100);
</script>

<?php
require_once __DIR__ . '/character_db.php';
?>

<img src="./images/background.jpeg" class="background_1">
<img src="./images/woman.png" class="background_2">
<div class="header">
<?php
  require_once 'header.php';
?>

</div>
<div class="md_transition"></div>
<!--好感度DBここから-->
<div class="fan-box">
  <p>次の好感度まであと3回</p>


  <div style="background-color: #41A077; border-radius: 10px;">
    <div style="background-color: #61EDB0; border-radius: 10px; height:10px; --w:<?php echo $Favorability ?>%;"></div>


  </div>
</div>
<!--好感度DBここまで-->
<!--Twitter共有ボタンここから-->
<a href="https://twitter.com/intent/tweet?url=http://localhost/PBL2/character.php&text=わたしのおふろっちはこんな感じです。" target="blank_">
  <img src="./icon/Twitter.png" class="icon">
</a>
<!--Twitter共有ボタンここまで-->
<!--キャラクターDBここから-->
<div class="moji-box">
  <p>名前:<?php echo $val['user_name']; ?></p>
  <br>
  <p>年齢:22歳</p>
  <br>
  <p>現在の好感度：普通</p>
  <br>
  <p>現在のお風呂：露天風呂</p>
</div>
<!--キャラクターDBここまで-->
</body>
<div class="footer">
<?php
  require_once 'footer.php';
?>
</div>
</html>
