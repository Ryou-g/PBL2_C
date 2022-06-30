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
require_once "./header.php";
?>
</div>
<body>
<table class="setting">
            <tr>
              <td class="mojibox"><class="moji">2022/06/01<br>お風呂に入りました　19:05</td>
            </tr>
            <tr>
              <td class="mojibox"><class="moji">お風呂から出ました　19:37</td>
            </tr>
            <tr>
              <td class="mojibox"><class="moji">2022/06/02<br>お風呂に入りませんでした　23:59</td>
            </tr>
            <tr>
              <td class="mojibox"><class="moji">2022/06/03</td>
            </tr>
            <tr>
              <td class="mojibox"><class="moji"></td>
            </tr>
        </table>
</body>
<div class="footer">
<?php
require_once "./footer.php";
?>
</div>
</html>
