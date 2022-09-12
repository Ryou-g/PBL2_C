<?php

require_once __DIR__ . '/DBConnect.php';

session_start();
$sql = "select * from Bathing_log ORDER BY id DESC;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$sound = $stmt->fetchall();

?>
