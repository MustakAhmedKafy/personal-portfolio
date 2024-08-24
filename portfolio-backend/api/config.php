<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->title) && isset($data->type) && isset($data->content) && isset($data->status)) {
  $title = $data->title;
  $type = $data->type;
  $content = $data->content;
  $status = $data->status;

  $sql = "INSERT INTO contents (title, type, content, status) VALUES (:title, :type, :content, :status)";
  $stmt = $pdo->prepare($sql);
  if ($stmt->execute(['title' => $title, 'type' => $type, 'content' => $content, 'status' => $status])) {
    echo json_encode(['message' => 'Content created']);
  } else {
    echo json_encode(['message' => 'Failed to create content']);
  }
} else {
  echo json_encode(['message' => 'Invalid input']);
}
?>