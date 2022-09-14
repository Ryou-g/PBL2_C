 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/bathing_log.css">
    <title>log</title>
</head>

<img src="./images/background.jpeg" class="background_1">
<img src="./images/woman.png" class="background_2">

<div class="header">
<?php
require_once 'header.php';
require_once __DIR__ . '/bathing_log_db.php';
 ?>

</div>
<body>
<table class="setting">
<?php
foreach($log_list as $bathlog){

?>
            <tr>
              <td class="mojibox"><class="moji"><?php echo $bathlog['date'] ?><br><?php echo $bathlog['status'] ?></td>
            </tr> 
<?php
}
?>
</table>

</body>
<div class="footer">
<?php
require_once "./footer.php";
?>
</div>
</html>
