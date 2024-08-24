<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
include 'config.php';

$id = $_GET['id'];

if ($id) {
  $sql = "DELETE FROM contents WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  if ($stmt->execute(['id' => $id])) {
    echo json_encode(['message' => 'Content deleted']);
  } else {
    echo json_encode(['message' => 'Failed to delete content']);
  }
} else {
  echo json_encode(['message' => 'Invalid ID']);
}
?>