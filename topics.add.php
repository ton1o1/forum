<?php

$pdo = include('conf/pdo.php');
$title = $_POST['title'];
$date = date('Y-m-d H:i:s');


$sql = "INSERT INTO topics ( creator_id, title, created ) VALUES ( ?, ?, ? );";

$statement = $pdo->prepare($sql);
$statement->execute([1, $title, $date]);

header('Location: topics.php');