<?php
require_once __DIR__ . '/DBConnect.php';

$Favorability = 0;

session_start();
$sql = "select * from Bathing_log ORDER BY id DESC;";
$stmt = $pdo->prepare($sql);
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
            $Favorability += 10;
        }else{
            $Favorability -= 10;
        }
    }
    $now_day = $log['date'];
    $i++;
}
$i++;
$now_day = substr($now_day, 0, 10);
if($_SESSION['bathing_flag'] == 1){
    $_SESSION['bathing_flag'] = 0;
    $Favorability += 10;
}else{
    $Favorability -= 10;
}


$sql = "UPDATE users set Favorability=:Favorability WHERE id = 1";
$stmt = $pdo -> prepare($sql);
$stmt -> bindValue(':Favorability', $Favorability);
$stmt -> execute();


?>