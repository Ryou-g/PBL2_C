<?php
require_once __DIR__ . '/background_set.php';
require_once __DIR__ . '/charSetDB.php';
?>
<!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/bathing_log.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <title>入浴ログ</title>
</head>

<img src="<?php echo $path; ?>" class="background_1">
<img src="<?php echo $cos_path?>" class="background_2">

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

<option value="" hidden disabled selected>月を選択して下さい</option>
<option value="all">全月</option>
<option value="01">1月</option>
<option value="02">2月</option>
<option value="03">3月</option>
<option value="04">4月</option>
<option value="05">5月</option>
<option value="06">6月</option>
<option value="07">7月</option>
<option value="08">8月</option>
<option value="09">9月</option>
<option value="10">10月</option>
<option value="11">11月</option>
<option value="12">12月</option>
</select>
<input class="search" type='submit' value='検索' />
</form>
</div>

<span class="cp_sl06_highlight" ></span>
<span class="cp_sl06_selectbar"></span>
<label class="cp_sl06_selectlabel"></label>


<table class="setting">
<?php
if($log_list != "error"){
  foreach($log_list as $bathlog){
?>
    <tr>
    <td class="mojibox"><class="moji"><?php echo $bathlog['date']?><br><?php echo $bathlog['status'] ?></td>
    </tr>
  <?php
  }
}else{
  ?>
  <tr>
  <td class="mojibox"><class="moji"><p>データが存在しません</p><br></td>
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
