<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
include 'config.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id) {
  $sql = "SELECT * FROM contents WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
  $sql = "SELECT * FROM contents";
  $stmt = $pdo->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

echo json_encode($result);
?>