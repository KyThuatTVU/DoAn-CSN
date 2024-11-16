<?php
// Thông tin cấu hình kết nối
$servername = "localhost"; // Tên máy chủ (thường là localhost)
$username = "root";        // Tên người dùng MySQL (thường là root)
$password = "";            // Mật khẩu của người dùng MySQL
$dbname = "cua_hang";  // Tên cơ sở dữ liệu bạn muốn kết nối

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} else {
    echo "Kết nối thành công!";
}

// Truy vấn SQL để lấy dữ liệu từ bảng thuc_don
$sql = "SELECT id, loai_mon, ten_mon_an, gia_vua, gia_nho FROM thuc_don";  // Truy vấn lấy các cột từ bảng thuc_don
$result = $conn->query($sql);

// Kiểm tra nếu có kết quả
if ($result->num_rows > 0) {
    // Duyệt qua các dòng kết quả và in ra
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Loại món: " . $row["loai_mon"] . " - Tên món ăn: " . $row["ten_mon_an"] . 
        " - Giá phần vừa: " . $row["gia_vua"] . " - Giá phần nhỏ: " . $row["gia_nho"] . "<br>";
    }
} else {
    echo "Không có dữ liệu.";
}

// Đóng kết nối
$conn->close();
?>
