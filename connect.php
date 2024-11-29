<?php
// Thông tin cấu hình kết nối
$servername = "localhost"; // Tên máy chủ (thường là localhost)
$username = "lbfhcaxb_cua_hang"; // Tên người dùng MySQL
$password = "Q4dmJ2FKnDxJVFwgwMdz"; // Mật khẩu MySQL
$dbname = "lbfhcaxb_cua_hang"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Đảm bảo kết nối sử dụng bộ mã hóa utf8mb4 để hỗ trợ tiếng Việt
$conn->set_charset("utf8mb4");

// Truy vấn dữ liệu từ bảng thuc_don
$sql = "SELECT id, loai_mon, ten_mon_an, gia, dac_san, hinh_anh FROM thuc_don";
$result = $conn->query($sql);

// Kiểm tra và hiển thị kết quả
if ($result && $result->num_rows > 0) {
    // Lặp qua từng hàng dữ liệu
    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    echo "<tr>
            <th>ID</th>
            <th>Loại Món</th>
            <th>Tên Món Ăn</th>
            <th>Giá</th>
            <th>Đặt sản</th>
            <th>Hình ảnh</th>
          </tr>";
    while ($row = $result->fetch_assoc()) {
        // Kiểm tra và xử lý giá trị NULL trong cột 'gia'
        $gia = $row["gia"] !== NULL ? number_format($row["gia"], 0, ',', '.') . " VND" : 'Chưa có giá';

        // Hiển thị từng dòng dữ liệu
        echo "<tr>
                <td>" . htmlspecialchars($row["id"]) . "</td>
                <td>" . htmlspecialchars($row["loai_mon"]) . "</td>
                <td>" . htmlspecialchars($row["ten_mon_an"]) . "</td>
                 <td>" . htmlspecialchars($row["dac_san"]) . "</td>
                   <td>" . htmlspecialchars($row["hinh_anh"]) . "</td>

                <td>" . $gia . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu.";
}

// Đóng kết nối
$conn->close();
?>
