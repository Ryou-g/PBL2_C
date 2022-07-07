<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/my_page.css">
   <title>my_page</title>
</head>
<body>
<img src="./images/background.jpeg" class="background_1">
<img src="./images/woman.png" class="background_2">
<div class="header">
<?php
require_once "./header.php";
?>
</div>
<table class="setting">
            <tr>
              <td class="mojibox"><class="moji">ニックネーム<br><br>ディエゴ</td>
            </tr>
            <tr>
              <td class="mojibox"><class="moji">メールアドレス<br><br>abcd1234@gmail.com</td>
            </tr>
            <tr>
              <td class="mojibox"><class="moji">パスワード<br>＊＊＊＊＊＊＊＊＊＊</td>
            </tr>
            <tr>
              <td class="mojibox"><class="moji"></td>
            </tr>
            <tr>
              <td class="mojibox"><class="moji">マイページ編集</td>
            </tr>z
        </table>

        <div class="sns">z
        <ul class="ss">
            <li class="s-icon"><a href="#">
                <span class="icons1"><ion-icon name="logo-facebook"></ion-icon></span>
            </a></li>
            <li class="s-icon"><a href="#">
                <span class="icons2"><ion-icon name="logo-twitter"></ion-icon></span>
            </a></li>
        </ul>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<div class="footer">
  <?php
require_once "./footer.php";
?>
</div>
</html>
