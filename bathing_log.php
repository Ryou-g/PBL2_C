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
 ?>
 </div>

 <?php
 require_once __DIR__ . '/bathing_log_db.php';
?>

<body>


<div class="cp_ipselect">
<form method='POST' action='bathing_log.php'>
<select name="month" class="cp_sl06" style="text-align:center;"  required>
<option value="月を選択して下さい" hidden disabled selected></option>
<option value="<?php echo $bathlog['date'],$bathlog['status'] ?>">全月</option>
<option value="">1月</option>
<option value="2">2月</option>
<option value="3">3月</option>
<option value="4">4月</option>
<option value="">5月</option>
<option value="">6月</option>
<option value="7">7月</option>
<option value="8">8月</option>
<option value="">9月</option>
<option value="">10月</option>
<option value="">11月</option>
<option value="">12月</option>
</select>
<input type='submit' value='送信' />
</form>
<span class="cp_sl06_highlight" ></span>
<span class="cp_sl06_selectbar"></span>
<label class="cp_sl06_selectlabel"></label>
</div>

<table class="setting">
<?php
$month = $_POST["month"];
$time1 = strtotime('2022-08-00');
foreach($log_list as $bathlog){
if ($month === "8") { ?>

  <tr>
  <td class="mojibox"><class="moji"><?php echo $bathlog['date'],$bathlog['status'] ?></td>
  </tr>
  <?php
} else { 
  ?>
  <tr>
  <td class="mojibox"><class="moji"><?php echo $bathlog['date'],$bathlog['status'] ?></td>
  </tr>
<?php
  }
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
