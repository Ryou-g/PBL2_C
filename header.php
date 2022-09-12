<?php

require_once __DIR__ . '/DBConnect.php';//DBへの接続

$sql = "SELECT * FROM users WHERE id = id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$name = $stmt->fetchAll();
foreach($name as $val){

}

require_once __DIR__ . '/character_db.php';
?>
<!DOCTYPE html>
<html lang="ja">
    <link rel="stylesheet" href="./CSS/header.css">
    <header>
        <!-- ヘッダー -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
      <div class="kuuhaku">
        <div class="flex">
        <nobr class="rogo"><?php echo $val['user_name']; ?></nobr>
          <div class="fan-var_2">
            <div class="fan-box_2">
              
              <div style="background-color: #41A077; border-radius: 10px;">
                <div style="background-color: #61EDB0; border-radius: 10px; height:10px; --w:<?php echo $Favorability ?>%;"></div>
              </div>
            </div>
          </div>
        </div>
          <strong class="nitiji"><?php echo date('Y') ?>/<?php echo date('m') ?>/<?php echo date('d') ?></strong>

          </div>

    </header>
