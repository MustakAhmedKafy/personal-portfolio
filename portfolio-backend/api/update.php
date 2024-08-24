<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
include 'config.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->id) && isset($data->title) && isset($data->type) && isset($data->content) && isset($data->status)) {
  $id = $data->id;
  $title = $data->title;
  $type = $data->type;
  $content = $data->content;
  $status = $data->status;

  $sql = "UPDATE contents SET title = :title, type = :type, content = :content, status = :status WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  if ($stmt->execute(['title' => $title, 'type' => $type, 'content' => $content, 'status' => $status, 'id' => $id])) {
    echo json_encode(['message' => 'Content updated']);
  } else {
    echo json_encode(['message' => 'Failed to update content']);
  }
} else {
  echo json_encode(['message' => 'Invalid input']);
}
?>