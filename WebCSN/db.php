<?php
// Cấu hình kết nối cơ sở dữ liệu
$host = "localhost"; // Tên máy chủ (thường là localhost)
$user = "lbfhcaxb_user_management"; // Tên người dùng MySQL
$pass = "qagRycB4YrPvCvsLx3qV"; // Mật khẩu của người dùng MySQL
$db = "lbfhcaxb_user_management"; // Tên cơ sở dữ liệu bạn muốn kết nối

// Kết nối cơ sở dữ liệu bằng PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage());
}
?>
