<?php

require_once __DIR__ . '/DBConnect.php';

session_start();
date_default_timezone_set('Asia/Tokyo');


if(!isset($_POST['month'])){
    $tmp = '01';
}else{
    $tmp = $_POST['month'];
}
$start_date = '2022-' . $tmp . '-01';
echo $start_date;
$end_date = new DateTime($start_date);
$end_date -> modify("+1 month");        //ひと月足して範囲の終わりを設定
$end_date = $end_date->format(('Y-m-d'));

$sql = "select * from Bathing_log WHERE date BETWEEN :start_date and :end_date ORDER BY id DESC;";
$stmt = $pdo->prepare($sql);
$stmt -> bindValue(':start_date',$start_date);
$stmt -> bindValue(':end_date', $end_date);
$stmt->execute();
$logs = $stmt->fetchall();

$now_day = 0;
$log_list = array();
$i = 0;
$_SESSION['bathing_flag'] = 0;
foreach($logs as $log){
    if($now_day == 0){
        $now_day = $log['date'];
    }
    $now_day2 = $log['date'];
    $now_day = substr($now_day, 0, 10);
    $now_day2 = substr($now_day2, 0, 10);
    $date = new DATETIME($now_day);
    $date2 = new DATETIME($now_day2);
    $diff = $date2->diff($date);
    if($log['status_number'] == 1 && $log['button_censor'] == 1){
        $_SESSION['bathing_flag'] = 1;
    }
    #echo "date=" . $log['date'] . '<br>';
    if($diff->days >= 1){
        if($_SESSION['bathing_flag'] == 1){
            $_SESSION['bathing_flag'] = 0;
            $log_list += array($i=>array("date"=>$now_day,"status"=>"おふろにはいりました"));
        }else{
            $log_list += array($i=>array("date"=>$now_day,"status"=>"おふろに入りませんでした"));
        }
    }
    $now_day = $log['date'];
    $i++;
}
$i++;
$now_day = substr($now_day, 0, 10);
if($_SESSION['bathing_flag'] == 1){
    $_SESSION['bathing_flag'] = 0;
    $log_list += array($i=>array("date"=>$now_day,"status"=>"おふろにはいりました"));
}else{
    $log_list += array($i=>array("date"=>$now_day,"status"=>"おふろに入りませんでした"));
}

?>


