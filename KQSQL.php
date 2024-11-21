<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost"; // Tên máy chủ (thường là localhost)
$username = "lbfhcaxb_cua_hang";        // Tên người dùng MySQL (thường là root)
$password = "Q4dmJ2FKnDxJVFwgwMdz";            // Mật khẩu của người dùng MySQL
$dbname = "lbfhcaxb_cua_hang";  // Tên cơ sở dữ liệu bạn muốn kết nối


// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {=
    die("Kết nối thất bại: " . $conn->connect_error);
}

// ... existing database connection code ...

$search = '';

// Kiểm tra và lấy từ khóa tìm kiếm từ URL
if (isset($_GET['keyword'])) {
    $search = $_GET['keyword'];  // Lấy từ khóa từ query parameter 'keyword'

    // Tránh SQL Injection bằng prepared statement
    $stmt = $conn->prepare("SELECT id, loai_mon, ten_mon_an, gia_vua, gia_nho FROM thuc_don WHERE ten_mon_an LIKE ?");
    $searchTerm = "%" . $search . "%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // Nếu không có từ khóa, hiển thị tất cả món ăn
    $result = $conn->query("SELECT id, loai_mon, ten_mon_an, gia_vua, gia_nho FROM thuc_don");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tìm kiếm - Nhà Hàng Phương Nam</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font: Audiowide -->
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/ẨM THỰC.png"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>

    <style>
      /* Áp dụng font Audiowide cho h1 */
      h1 {
        font-family: 'Audiowide', sans-serif;
      }
      .custom-font {
        font-family: 'Audiowide', sans-serif;
      }
    </style>
  </head>
  <body>
    <nav class="bg-[#704539] text-white flex items-center justify-between px-4 sm:px-6 py-4">
      <div class="flex items-center">
        <h1 class="font-bold text-2xl sm:text-3xl lg:text-4xl text-[#D8B899] custom-font">
          <a href="index.html" target="_blank" class="hover:underline">PHƯƠNG NAM</a>
        </h1>
      </div>
      <div class="sm:hidden">
          <button id="menu-btn" class="text-white focus:outline-none">
              <!-- Hamburger Icon -->
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
          </button>
      </div>

      <!-- Desktop Navigation Links -->
      <div id="nav-links" class="hidden sm:flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 lg:space-x-6 text-lg font-bold custom-font">
          <a href="gioithieu.html" target="_blank" class="hover:text-[#D8B899]">GIỚI THIỆU</a>
          <a href="menu.html" target="_blank" class="hover:text-[#D8B899]">THỰC ĐƠN</a>
          <a href="dathang.html" target="_blank" class="hover:text-[#D8B899]">ĐẶT BÀN</a>
          <a href="album.html" target="_blank" class="hover:text-[#D8B899]">ALBUM ẢNH</a>
          <a href="lienhe.html" target="_blank" class="hover:text-[#D8B899]">LIÊN HỆ</a>
      </div>

      <!-- Search Bar (Visible on Desktop) -->
      <div class="hidden sm:flex items-center space-x-4">
<form action="" method="GET" class="flex items-center space-x-4">
    <div class="bg-[#D8B899] rounded-md px-4 py-1">
        <input type="text" name="keyword" value="<?php echo htmlspecialchars($search); ?>" 
               placeholder="Tìm kiếm" class="bg-transparent text-[#704539] placeholder-[#704539] focus:outline-none custom-font">
    </div>
    <button type="submit" class="bg-[#704539] text-white rounded px-4 py-1">Tìm kiếm</button>
</form>
      </div>
    </nav>
    <div id="mobile-menu" class="sm:hidden hidden bg-[#704539] text-white py-4 space-y-2 rounded-lg shadow-lg mx-4 mt-2 text-lg font-bold custom-font text-center">
      <a href="gioithieu.html" target="_blank" class="block px-4 py-2 hover:bg-[#D8B899] rounded">GIỚI THIỆU</a>
      <a href="menu.html" target="_blank" class="block px-4 py-2 hover:bg-[#D8B899] rounded">THỰC ĐƠN</a>
      <a href="dathang.html" target="_blank" class="block px-4 py-2 hover:bg-[#D8B899] rounded">ĐẶT BÀN</a>
      <a href="album.html" target="_blank" class="block px-4 py-2 hover:bg-[#D8B899] rounded">ALBUM ẢNH</a>
      <a href="lienhe.html" target="_blank" class="block px-4 py-2 hover:bg-[#D8B899] rounded">LIÊN HỆ</a>
  </div>

  <script>
      // Toggle mobile menu visibility
      document.getElementById('menu-btn').addEventListener('click', function() {
          const mobileMenu = document.getElementById('mobile-menu');
          mobileMenu.classList.toggle('hidden');
      });
  </script>

    <div class="container mx-auto my-8 p-4">
      <?php if ($result !== null): ?>
        <?php if ($result->num_rows > 0): ?>
          <h2 class="text-xl font-bold mb-4 text-center text-[#704539]">Kết quả tìm kiếm cho: "<?php echo htmlspecialchars($search); ?>"</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while ($row = $result->fetch_assoc()): ?>
              <div class="bg-[#D8B899] p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <h3 class="text-lg font-semibold text-[#704539]"><?php echo htmlspecialchars($row['ten_mon_an']); ?></h3>
                <p class="text-sm text-gray-600"><?php echo htmlspecialchars($row['loai_mon']); ?></p>
                <div class="mt-2 text-lg font-bold text-[#704539]">
                  <span>Giá Vừa: <?php echo number_format($row['gia_vua']); ?>đ</span><br>
                  <span>Giá Nhỏ: <?php echo number_format($row['gia_nho']); ?>đ</span>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php else: ?>
          <p class="text-center text-lg text-red-600">Không có món ăn nào với từ khóa "<?php echo htmlspecialchars($search); ?>".</p>
        <?php endif; ?>
      <?php else: ?>
        <p class="text-center text-lg">Vui lòng nhập từ khóa tìm kiếm để bắt đầu.</p>
      <?php endif; ?>
    </div>
  </body>
</html>
