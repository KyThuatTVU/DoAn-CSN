<?php
// Thông tin cấu hình kết nối
$servername = "localhost"; // Tên máy chủ (thường là localhost)
$username = "lbfhcaxb_cua_hang";        // Tên người dùng MySQL (thường là root)
$password = "Q4dmJ2FKnDxJVFwgwMdz";            // Mật khẩu của người dùng MySQL
$dbname = "lbfhcaxb_cua_hang";  // Tên cơ sở dữ liệu bạn muốn kết nối


// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Đảm bảo kết nối sử dụng bộ mã hóa utf8mb4 để tránh lỗi tiếng Việt
$conn->set_charset("utf8mb4");

// Truy vấn dữ liệu từ bảng thuc_don
$sql = "SELECT id, loai_mon, ten_mon_an, gia_vua, gia_nho FROM thuc_don";
$result = $conn->query($sql);

// Kiểm tra và hiển thị kết quả
if ($result->num_rows > 0) {
    // Lặp qua từng hàng dữ liệu
    while ($row = $result->fetch_assoc()) {
        // Kiểm tra và xử lý giá trị NULL
        $gia_vua = $row["gia_vua"] !== NULL ? $row["gia_vua"] : 'Chưa có giá';
        $gia_nho = $row["gia_nho"] !== NULL ? $row["gia_nho"] : 'Chưa có giá';

        // Hiển thị thông tin món ăn
        echo "ID: " . $row["id"] . " - Loại món: " . $row["loai_mon"] . " - Tên món ăn: " . $row["ten_mon_an"] . 
             " - Giá phần vừa: " . $gia_vua . " - Giá phần nhỏ: " . $gia_nho . "<br>";
    }
} else {
    echo "Không có dữ liệu.";
}

// Đóng kết nối
$conn->close();
?>

