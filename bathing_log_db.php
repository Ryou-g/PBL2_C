<?php

require_once __DIR__ . './DBconnect.php';

$sql = "select * from bathing_log";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$logs = $stmt->fetchall();


?>


