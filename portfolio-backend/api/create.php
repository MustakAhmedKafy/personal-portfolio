<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

// Handle OPTIONS request (preflight request)
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  exit(0);
}

// Your code to handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Assuming you are sending JSON data
  $data = json_decode(file_get_contents('php://input'), true);
  $title = $data['title'] ?? '';
  $content = $data['content'] ?? '';
  $status = $data['status'] ?? '';

  // Database connection and insertion code here

  echo json_encode(['success' => true]);
}
?>