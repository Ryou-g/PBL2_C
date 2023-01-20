<?php
require_once __DIR__ . '/DBConnect.php';

$Favorability = 50;


$sql = "select * from Bathing_log ORDER BY id DESC;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$logs = $stmt->fetchall();

$now_day = 0;
$log_list = array();
$i = 0;
$_SESSION['bathing_flag'] = 0;
if(!empty($logs)){
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
                $Favorability += 5;
            }else{
                $Favorability -= 20;
            }
        }
        $now_day = $log['date'];
        $i++;
    }
    if($log['status_number'] == 1 && $log['button_censor'] == 1){
        $_SESSION['bathing_flag'] = 1;
    }
    $i++;
    $now_day = substr($now_day, 0, 10);
    if($_SESSION['bathing_flag'] == 1){
        $_SESSION['bathing_flag'] = 0;
        $Favorability += 5;
    }else{
        $Favorability -= 20;
    }


    $sql_1 = "UPDATE Users set Favorability=:Favorability WHERE id = 1";
    $stmt_1 = $pdo -> prepare($sql_1);
    $stmt_1 -> bindValue(':Favorability', $Favorability);
    $stmt_1 -> execute();
}


?>
