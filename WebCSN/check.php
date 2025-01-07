<?php
session_start();

// Kiểm tra trạng thái đăng nhập
$isLoggedIn = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
// Lấy username từ session nếu đã đăng nhập
$username = $isLoggedIn && isset($_SESSION['usernames']) ? $_SESSION['usernames'] : null;

// Phản hồi dưới dạng JSON
header('Content-Type: application/json');
echo json_encode([
    'isLoggedIn' => $isLoggedIn,
    'username' => $username
]);
?>