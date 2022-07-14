<?php
session_start();
$buyflag = $_COOKIE['buyflag'];
$costume = $_COOKIE['costume'];
setcookie('buyflag', "", time() - 3600);
setcookie('costume', "", time() - 3600);
echo $buyflag;
echo $costume;
?>