<?php

require_once __DIR__ . '/DBConnect.php';

$sql = "select * from Bathing_log limit 10";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$logs = $stmt->fetchall();

?>


