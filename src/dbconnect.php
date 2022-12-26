<?php

$dsn = 'mysql:host=db;dbname=posse;charset=utf8mb4;';
$user = 'root';
$password = 'root';

try {
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit();
}




?>