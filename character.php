<?php

require_once __DIR__ . '/DBConnect.php';//DBへの接続
require_once __DIR__ . '/background_set.php';
require_once __DIR__ . '/charSetDB.php';
require_once __DIR__ . '/setQuotedb.php';

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

<img src="<?php echo $path; ?>" class="background_1">
<img src="<?php echo $cos_path?>" class="background_2">
<div class="header">
<?php
  require_once 'header.php';
?>
</div>
<div class="md_transition"></div>

<!--好感度DBここから-->
<div class="fan-box">

<?php
if($Favorability>=1 && $Favorability<=19){
  echo "好感度：最悪";
}elseif($Favorability>=20 && $Favorability<=49){
  echo "好感度：悪い";
}elseif($Favorability>=50 && $Favorability<=99){
  echo "好感度：普通";
}elseif($Favorability>=100 && $Favorability<=149){
  echo "好感度：良い";
}elseif($Favorability>=150 && $Favorability<=199){
  echo "好感度：最高";
}elseif($Favorability>=200){
  echo "MAX";
  $sql_3="UPDATE users SET Favorability =100 WHERE id=1" ;
  $stmt_2 = $pdo -> prepare($sql_3);
  $stmt_2 -> execute();
}else{
  echo "0";
  $sql_4="UPDATE users SET Favorability = 0 WHERE id=1" ;
  $stmt_3 = $pdo -> prepare($sql_4);
  $stmt_3 -> execute();
}
?>
  <div style="background-color: #41A077; border-radius: 10px;" class="fan-var">
    <div style="background-color: #61EDB0; border-radius: 10px; height:10px; --w:<?php echo $Favorability ?>%;"></div>

  </div>
</div>
<!--好感度DBここまで-->
<!--Twitter共有ボタンここから-->
<a  class="twitter" href="https://twitter.com/intent/tweet?url=http://localhost/PBL2/character.php&text=わたしのおふろっちはこんな感じです。" target="blank_">
  <img src="./icon/Twitter.png" class="icon">
</a>
<!--Twitter共有ボタンここまで-->
<!--キャラクターDBここから-->
<div class="moji-box">
  <p>名前: キャラの名前</p>
  <br>
  <p>年齢:22歳</p>
  <br>
  <p><?php
  if($Favorability>=1 && $Favorability<=19){
    echo "好感度：最悪";
  }elseif($Favorability>=20 && $Favorability<=49){
    echo "好感度：悪い";
  }elseif($Favorability>=50 && $Favorability<=99){
    echo "好感度：普通";
  }elseif($Favorability>=100 && $Favorability<=149){
    echo "好感度：良い";
  }elseif($Favorability>=150 && $Favorability<=199){
    echo "好感度：最高";
  }elseif($Favorability>=200){
    echo "MAX";
    $sql_3="UPDATE users SET Favorability =200 WHERE id=1" ;
    $stmt_2 = $pdo -> prepare($sql_3);
    $stmt_2 -> execute();
  }else{
    echo "0";
    $sql_4="UPDATE users SET Favorability = 0 WHERE id=1" ;
    $stmt_3 = $pdo -> prepare($sql_4);
    $stmt_3 -> execute();
  }
  ?></p>
  <br>
</div>
<!--キャラクターDBここまで-->

<div class="footer">
<?php
  require_once 'footer.php';
?>
</div>
</body>
</html>
