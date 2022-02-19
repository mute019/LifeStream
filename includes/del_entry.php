<?php

require_once './dbconnec.php';
$sql = "DELETE FROM book WHERE adhaar_id=?;";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('s', $_GET['q']);
$stmt->execute();

$conn->close();
header("location: ../profile.php");