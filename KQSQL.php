<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost"; // Tên máy chủ (thường là localhost)
$username = "lbfhcaxb_cua_hang"; // Tên người dùng MySQL
$password = "Q4dmJ2FKnDxJVFwgwMdz"; // Mật khẩu của người dùng MySQL
$dbname = "lbfhcaxb_cua_hang"; // Tên cơ sở dữ liệu bạn muốn kết nối

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Đảm bảo kết nối sử dụng UTF-8MB4
$conn->set_charset("utf8mb4");

// Khởi tạo giá trị mặc định cho $result
$search = '';
$result = null;

// Kiểm tra và lấy từ khóa tìm kiếm từ URL
if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
    $search = trim($_GET['keyword']); // Lấy từ khóa từ query parameter 'keyword' và loại bỏ khoảng trắng thừa

    // Sử dụng prepared statement để tránh SQL Injection
    $stmt = $conn->prepare("
        SELECT id, loai_mon, ten_mon_an, gia,dac_san,  hinh_anh
        FROM thuc_don
        WHERE loai_mon LIKE ?
        GROUP BY ten_mon_an
    ");
    if ($stmt) {
        $searchTerm = "%" . $search . "%";
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        die("Lỗi truy vấn: " . $conn->error);
    }
} else {
    // Nếu không có từ khóa, hiển thị tất cả món ăn (loại bỏ trùng lặp)
    $result = $conn->query("
        SELECT id, loai_mon, ten_mon_an, gia, dac_san,  hinh_anh
        FROM thuc_don
        GROUP BY ten_mon_an
    ");
    if (!$result) {
        die("Lỗi truy vấn: " . $conn->error);
    }
}

// Không đóng kết nối ngay tại đây vì cần dùng $result bên dưới
?>


<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tìm kiếm - Nhà Hàng Phương Nam</title>
    <link rel="icon" type="image/x-icon" href="img/ẩM THỰC.png" />

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
  <nav class="bg-[#704539] text-white flex items-center justify-between px-4 sm:px-6 py-4 fixed top-0 left-0 w-full z-50 shadow-lg">
        <div class="flex flex-col items-center">
          <!-- Logo -->
          <h1 class="font-bold text-2xl sm:text-3xl lg:text-4xl text-[#D8B899] custom-font">
            <a href="index.php" target="_self" class="hover:underline">PHƯƠNG NAM</a>
          </h1>
      
          <!-- Tên người dùng -->
          <div id="auth-bar" class="hidden mt-4">
            <p id="ten-nguoi-dung" class="text-white text-sm sm:text-base"></p>
          </div>
        </div>
      
        <!-- Hamburger Menu Button (Visible on Mobile and Tablet) -->
        <div class="sm:hidden">
          <button id="menu-btn" class="text-white focus:outline-none">
            <!-- Hamburger Icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      
        <!-- Desktop Navigation Links -->
        <div id="nav-links"
          class="hidden sm:flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 lg:space-x-6 text-lg font-bold custom-font">
          <a href="gioithieu.html" target="_self" class="hover:text-[#D8B899]">GIỚI THIỆU</a>
          <a href="menu.html" target="_self" class="hover:text-[#D8B899]">THỰC ĐƠN</a>
          <a href="dathang.html" target="_self" class="hover:text-[#D8B899]">ĐẶT BÀN</a>
          <a href="album.html" target="_self" class="hover:text-[#D8B899]">ALBUM ẢNH</a>
          <a href="lienhe.php" target="_self" class="hover:text-[#D8B899]">LIÊN HỆ</a>
        </div>
      
        <!-- Search Bar (Visible on Desktop) -->
        <div class="hidden sm:flex items-center space-x-4">
          <div class="bg-[#D8B899] rounded-md px-4 py-1 flex items-center" style="width: 200px;">
            <input id="desktop-search" type="text" placeholder="Tìm kiếm"
              class="bg-transparent text-[#704539] placeholder-[#704539] focus:outline-none custom-font w-full">
            <button id="desktop-search-btn" class="ml-2 text-[#704539]">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </nav>
      
      <!-- Mobile Dropdown Menu -->
      <div id="mobile-menu"
        class="sm:hidden hidden bg-[#704539] text-white py-4 space-y-2 rounded-lg shadow-lg fixed top-16 left-0 w-full z-40 text-lg font-bold custom-font text-center">
        <!-- Mobile Search Bar -->
        <div class="bg-[#D8B899] rounded-md px-4 py-2 mx-4 flex items-center">
          <input id="mobile-search" type="text" placeholder="Tìm kiếm"
            class="w-full bg-transparent text-[#704539] placeholder-[#704539] focus:outline-none custom-font">
          <button id="mobile-search-btn" class="ml-2 text-[#704539]">
            <i class="fas fa-search"></i>
          </button>
        </div>
      
        <!-- Mobile Navigation Links -->
        <a href="gioithieu.html" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">GIỚI THIỆU</a>
        <a href="menu.html" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">THỰC ĐƠN</a>
        <a href="dathang.html" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">ĐẶT BÀN</a>
        <a href="album.html" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">ALBUM ẢNH</a>
        <a href="lienhe.php" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">LIÊN HỆ</a>
      </div>
    <!-- Containe nút -->
<div id="buttons-container" class="fixed bottom-5 right-5 flex flex-col items-center space-y-4">
    <!-- Nút đăng nhập -->
    <div id="login-button" class="relative group">
        <a href="login.php" 
           class="floating-btn w-16 h-16 rounded-full flex items-center justify-center bg-gradient-to-r from-blue-500 to-blue-700 text-white overflow-hidden">
            <img src="https://png.pngtree.com/png-vector/20191110/ourmid/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg" alt="Đăng nhập" class="button-image w-full h-full object-cover">
        </a>
        <span class="tooltip absolute bottom-full mb-2 px-3 py-2 text-sm text-white bg-gray-800 rounded-lg shadow-lg whitespace-nowrap">
            Mời bạn đăng nhập
        </span>
    </div>

    <!-- Nút đăng ký -->
    <div id="signup-button" class="relative group">
        <a href="register.php" 
           class="floating-btn w-16 h-16 rounded-full flex items-center justify-center bg-gradient-to-r from-green-500 to-green-700 text-white overflow-hidden">
            <img src="https://png.pngtree.com/png-clipart/20231118/original/pngtree-subscribe-icon-contract-photo-png-image_13614905.png" alt="Đăng ký" class="button-image w-full h-full object-cover">
        </a>
        <span class="tooltip absolute bottom-full mb-2 px-3 py-2 text-sm text-white bg-gray-800 rounded-lg shadow-lg whitespace-nowrap">
            Mời bạn đăng ký
        </span>
    </div>

    <!-- Nút đăng xuất -->
    <div id="logout-button" class="relative group hidden">
        <a href="index.php" 
           class="floating-btn w-16 h-16 rounded-full flex items-center justify-center bg-gradient-to-r from-red-500 to-red-700 text-white overflow-hidden">
            <img src="https://cdn-icons-png.flaticon.com/512/1828/1828479.png" alt="Đăng xuất" class="button-image w-full h-full object-cover">
        </a>
        <span class="tooltip absolute bottom-full mb-2 px-3 py-2 text-sm text-white bg-gray-800 rounded-lg shadow-lg whitespace-nowrap">
            Đăng xuất
        </span>
    </div>
</div>

<style>
    
/* Hiệu ứng nút */
.floating-btn {
    position: relative;
    width: 64px; /* Kích thước nút */
    height: 64px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3), 0 0 30px rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease-in-out;
    animation: pulse 1.5s infinite; /* Hiệu ứng chớp */
}

.floating-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 0 20px rgba(0, 205, 255, 0.8), 0 0 50px rgba(0, 205, 255, 0.5);
}

/* Tooltip */
.tooltip {
    position: absolute;
    bottom: 80px; /* Hiển thị phía trên nút */
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s ease-in-out;
}

.floating-btn:hover .tooltip {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const loginButton = document.getElementById('login-button');
        const signupButton = document.getElementById('signup-button');
        const logoutButton = document.getElementById('logout-button');

        // Kiểm tra trạng thái đăng nhập từ server
        fetch('check.php')
            .then(response => response.json())
            .then(data => {
                if (data.isLoggedIn) {
                    loginButton.classList.add('hidden');
                    signupButton.classList.add('hidden');
                    logoutButton.classList.remove('hidden');
                } else {
                    loginButton.classList.remove('hidden');
                    signupButton.classList.remove('hidden');
                    logoutButton.classList.add('hidden');
                }
            })
            .catch(error => {
                console.error("Lỗi khi kiểm tra trạng thái đăng nhập:", error);
            });
    });
</script>
<link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>


<!-- Mobile Dropdown Menu (Visible when Hamburger Menu is clicked) -->
<div id="mobile-menu"
    class="sm:hidden hidden bg-[#704539] text-white py-4 space-y-2 rounded-lg shadow-lg mx-4 mt-2 text-lg font-bold custom-font text-center">

    <!-- Mobile Search Bar -->
    <div class="bg-[#D8B899] rounded-md px-4 py-2 mx-4 flex items-center">
        <input id="mobile-search" type="text" placeholder="Tìm kiếm"
            class="w-full bg-transparent text-[#704539] placeholder-[#704539] focus:outline-none custom-font">
        <button id="mobile-search-btn" class="ml-2 text-[#704539]">
            <i class="fas fa-search"></i>
        </button>
    </div>

    <!-- Mobile Navigation Links -->
    <a href="gioithieu.html" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">GIỚI THIỆU</a>
    <a href="menu.html" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">THỰC ĐƠN</a>
    <a href="dathang.html" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">ĐẶT BÀN</a>
    <a href="album.html" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">ALBUM ẢNH</a>
    <a href="lienhe.php" target="_self" class="block px-4 py-2 hover:bg-[#D8B899] rounded">LIÊN HỆ</a>

  
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Các phần tử DOM
    const loginBtn = document.getElementById("login-button");
    const signupBtn = document.getElementById("signup-button");
    const logoutBtn = document.getElementById("logout-button");
    const userNameDisplay = document.getElementById("ten-nguoi-dung");
    const authBar = document.getElementById('auth-bar');
    const logo = document.querySelector('h1');

    // Cập nhật giao diện dựa trên trạng thái đăng nhập
    function updateAuthButtons(isLoggedIn, userName = '') {
        if (isLoggedIn) {
            // Nếu người dùng đã đăng nhập
            userNameDisplay.textContent = userName; // Hiển thị tên người dùng
            authBar.classList.remove('hidden');
            logo.classList.add('mt-4'); // Dời logo xuống
            loginBtn.classList.add("hidden");
            signupBtn.classList.add("hidden");
            logoutBtn.classList.remove("hidden");
        } else {
            // Nếu người dùng chưa đăng nhập
            userNameDisplay.textContent = ''; // Ẩn tên người dùng
            authBar.classList.add('hidden');
            logo.classList.remove('mt-4');
            loginBtn.classList.remove("hidden");
            signupBtn.classList.remove("hidden");
            logoutBtn.classList.add("hidden");
        }
    }

    // Gọi đến PHP để kiểm tra trạng thái đăng nhập
    fetch('check.php')
        .then(response => response.json())
        .then(data => {
            updateAuthButtons(data.isLoggedIn, data.username);
        })
        .catch(error => {
            console.error("Lỗi khi kiểm tra trạng thái đăng nhập:", error);
        });

    // Xử lý sự kiện nút đăng nhập
    loginBtn.addEventListener("click", (e) => {
        window.location.href = "login.php";
    });

    // Xử lý sự kiện nút đăng ký
    signupBtn.addEventListener("click", (e) => {
        window.location.href = "register.php";
    });

    // Xử lý sự kiện nút đăng xuất
    logoutBtn.addEventListener("click", () => {
        fetch('dangxuat.php', { method: 'POST' })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Bạn đã thoát!");
                    updateAuthButtons(false); // Cập nhật lại giao diện
                } else {
                    alert("Có lỗi xảy ra khi đăng xuất. Vui lòng thử lại.");
                }
            })
            .catch(error => {
                console.error("Lỗi khi thoát:", error);
            });
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>

<script>
    window.addEventListener("load", function() {
        // Hiệu ứng cho desktop navigation links khi trang tải
        gsap.set("#nav-links a", { opacity: 0, y: 20 }); // Khởi tạo: ẩn và đẩy xuống dưới
        gsap.to("#nav-links a", {
            opacity: 1,
            y: 0,
            duration: 1.5,
            stagger: 0.2, // Hiệu ứng theo thứ tự từng mục
            ease: "power3.out",
            delay: 0.5 // Đợi một chút rồi mới thực hiện
        });

        // Hiệu ứng cho mobile menu khi hiển thị
        gsap.set("#mobile-menu", { opacity: 0, y: -50 }); // Khởi tạo: ẩn và đẩy lên trên
        gsap.to("#mobile-menu", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power3.out",
            delay: 0.3, // Đợi một chút rồi mới thực hiện
        });

        // Hiệu ứng khi hover trên các liên kết menu
        gsap.utils.toArray("#nav-links a").forEach(link => {
            // Lấy màu sắc ban đầu của liên kết
            const defaultColor = getComputedStyle(link).color;

            link.addEventListener("mouseenter", () => {
                gsap.to(link, {
                    scale: 1.1,
                    color: "#D8B899", // Thay đổi màu khi hover
                    duration: 0.3
                });
            });
            link.addEventListener("mouseleave", () => {
                gsap.to(link, {
                    scale: 1,
                    color: defaultColor, // Trả lại màu ban đầu khi bỏ qua hover
                    duration: 0.3
                });
            });
        });
    });
</script>

<script>
    // Toggle mobile menu visibility
    document.getElementById('menu-btn').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
<script>
    function handleSearch(inputId) {
        const query = document.getElementById(inputId).value.trim();
        if (query) {
            // Chuyển hướng đến trang PHP tìm kiếm với query string
            window.location.href = `KQSQL.php?keyword=${encodeURIComponent(query)}`;
        } else {
            alert("Vui lòng nhập từ khóa tìm kiếm!");
        }
    }

    // Xử lý sự kiện click nút tìm kiếm
    document.getElementById('desktop-search-btn').addEventListener('click', function () {
        handleSearch('desktop-search');
    });

    document.getElementById('mobile-search-btn').addEventListener('click', function () {
        handleSearch('mobile-search');
    });

    // Xử lý sự kiện nhấn Enter
    ['desktop-search', 'mobile-search'].forEach((id) => {
        document.getElementById(id).addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                handleSearch(id);
            }
        });
    });
</script>
<script>

    function handleSearch(inputId) {
        const query = document.getElementById(inputId).value.trim();
        if (query) {
            // Redirect to PHP search page with query string
            window.location.href = `KQSQL.php?keyword=${encodeURIComponent(query)}`;
        } else {
            alert("Vui lòng nhập từ khóa tìm kiếm!");
        }
    }


    document.getElementById('desktop-search-btn').addEventListener('click', function () {
        handleSearch('desktop-search');
    });

    document.getElementById('mobile-search-btn').addEventListener('click', function () {
        handleSearch('mobile-search');
    });

    // Handle Enter key press
    ['desktop-search', 'mobile-search'].forEach((id) => {
        document.getElementById(id).addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                handleSearch(id);
            }
        });
    });

</script>

<div class="container mx-auto my-8 p-4">
  <?php if ($result !== null): ?>
    <?php if ($result->num_rows > 0): ?>
      <h2 class="text-2xl font-bold mb-6 text-center text-[#704539]">
        Kết quả tìm kiếm cho: "<span class="italic"><?php echo htmlspecialchars($search, ENT_QUOTES, 'UTF-8'); ?></span>"
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php while ($row = $result->fetch_assoc()): ?>
          <?php
          // Kiểm tra và sửa lỗi UTF-8 trên toàn bộ dữ liệu từ MySQL
          foreach ($row as $key => $value) {
              if (!mb_check_encoding($value, 'UTF-8')) {
                  $row[$key] = mb_convert_encoding($value, 'UTF-8', 'ISO-8859-1');
              } else {
                  $row[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); // An toàn XSS
              }
          }
          ?>
          <div class="bg-[#D8B899] p-8 rounded-lg shadow-md hover:shadow-xl hover:scale-105 transform transition-transform duration-300 ease-in-out">
            <a href="chitiet.html?id=<?php echo $row['id']; ?>" class="block">
              <?php 
              // Kiểm tra và hiển thị hình ảnh món ăn
              $imagePath = $row['hinh_anh'];
              if (!empty($imagePath)) {
                    echo "<img src='{$imagePath}' alt='{$row['ten_mon_an']}' class='w-full h-72 object-cover rounded-lg mb-4 hover:opacity-90 transition-opacity'>";
              } else {
                  echo "<div class='w-full h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center'>
                          <span class='text-gray-500'>Chưa có hình ảnh</span>
                        </div>";
              }
              ?>
              
              <h3 class="text-xl font-semibold text-[#704539] mb-2 fix-text hover:text-[#C4581C] transition-colors">
                <?php echo $row['ten_mon_an']; ?>
              </h3>
              <p class="text-sm text-gray-700 mb-4 fix-text">
                <?php echo $row['loai_mon']; ?>
              </p>
              <div class="text-lg font-bold text-[#704539] space-y-2">
                <div>Giá: <span class="text-[#C4581C]"><?php echo number_format($row['gia']); ?>đ</span></div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <div class="flex flex-col items-center justify-center mt-10">
        <p class="text-2xl font-semibold text-[#704539]">Không tìm thấy món ăn nào</p>
        <p class="text-lg text-gray-600 mt-2">
          Từ khóa "<span class="italic"><?php echo htmlspecialchars($search, ENT_QUOTES, 'UTF-8'); ?></span>" không khớp với bất kỳ món ăn nào. Vui lòng thử lại!
        </p>
        <img src="https://via.placeholder.com/400x300?text=No+Results+Found" alt="No results found" class="mt-6 rounded-lg shadow-lg">
      </div>
    <?php endif; ?>
  <?php else: ?>
    <div class="flex flex-col items-center justify-center mt-10">
      <p class="text-2xl font-semibold text-[#704539]">Vui lòng nhập từ khóa</p>
      <p class="text-lg text-gray-600 mt-2">Hãy nhập từ khóa vào thanh tìm kiếm để bắt đầu.</p>
    </div>
  <?php endif; ?>
</div>
<footer class="bg-[#644741] text-white p-6">
  <div class="container mx-auto flex flex-wrap justify-center md:justify-between">
      <!-- Cột 1: 1 div chiếm 50% chiều rộng -->
      <div class="w-full md:w-1/2 text-center md:text-left">
          <h3 class="font-[800] text-2xl mb-2 text-[#dfc3aa]">PHƯƠNG NAM – CƠM NGON TRÒN VỊ</h3>
          <p>Hotline: 0904 816 145</p>
          <p>Email: nhahangphuongnamn@gmail.com</p>
          <p>Địa chỉ: 500 Võ Văn Kiệt, Thành phố Trà Vinh, Trà Vinh</p>
          <p>(Có chỗ để xe ô tô)</p>
      </div>

      <!-- Cột 2: 2 div chia đều 50% còn lại -->
      <div class="w-full md:w-1/2 flex flex-col md:flex-row text-center md:text-left mt-6 md:mt-0">
          <!-- Div 1 trong cột 2 -->
          <div class="w-full md:w-1/2 mb-4 md:mb-0">
              <h3 class="font-[800] text-2xl mb-2 text-[#dfc3aa]">Giờ mở cửa</h3>
              <p>Sáng: 10h-14h</p>
              <p>Chiều: 18h - 22h</p>
              <p>Tất cả các ngày trong tuần</p>
          </div>

          <!-- Div 2 trong cột 2 -->
          <div class="w-full md:w-1/2">
              <h3 class="font-[800] text-2xl mb-2 text-[#dfc3aa]">Mạng xã hội</h3>
              <div class="flex justify-center md:justify-start space-x-4">
                  <!-- Icon Facebook -->
                  <a href="https://www.facebook.com/Alodzo100tv" class="text-white text-2xl hover:text-[#dfc3aa]">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M22 12C22 5.372 17.627 1 11 1S1 5.372 1 12c0 5.296 3.688 9.683 8.437 10.729v-7.581H6.172v-3.148h3.265V9.398c0-3.18 1.895-4.927 4.774-4.927 1.385 0 2.837.25 2.837.25v3.121h-1.597c-1.575 0-2.068.978-2.068 1.979v2.359h3.513l-.561 3.148h-2.952v7.581C18.313 21.683 22 17.296 22 12z"/>
                      </svg>
                  </a>
                  <!-- Icon Instagram -->
                  <a href="#instagram" class="text-white text-2xl hover:text-[#dfc3aa]">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.316 3.608 1.29.975.975 1.228 2.242 1.29 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.316 2.633-1.29 3.608-.975.975-2.242 1.228-3.608 1.29-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.316-3.608-1.29-.975-.975-1.228-2.242-1.29-3.608C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.849c.062-1.366.316-2.633 1.29-3.608.975-.975 2.242-1.228 3.608-1.29C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.688 0 8.287.014 7.052.072c-1.566.073-2.97.39-4.133 1.552C1.757 2.784 1.44 4.188 1.367 5.754.922 7.284.922 8.688.922 12s.014 4.287.072 5.522c.073 1.566.39 2.97 1.552 4.133 1.163 1.163 2.567 1.479 4.133 1.552 1.235.058 1.636.072 4.948.072s3.713-.014 4.948-.072c1.566-.073 2.97-.39 4.133-1.552 1.163-1.163 1.479-2.567 1.552-4.133.058-1.235.072-1.636.072-4.948s-.014-3.713-.072-4.948c-.073-1.566-.39-2.97-1.552-4.133C19.87.39 18.466.073 16.9.072 15.665.014 15.264 0 12 0z"/>
                          <path d="M12 5.838A6.162 6.162 0 0 0 5.838 12 6.162 6.162 0 0 0 12 18.162 6.162 6.162 0 0 0 18.162 12 6.162 6.162 0 0 0 12 5.838zm0 10.162A4.003 4.003 0 0 1 8 12a4.003 4.003 0 0 1 4-4 4.003 4.003 0 0 1 4 4 4.003 4.003 0 0 1-4 4zm6.406-10.845a1.44 1.44 0 1 1 0-2.879 1.44 1.44 0 0 1 0 2.879z"/>
                      </svg>
                  </a>
                  <!-- Icon Twitter -->
                  <a href="#twitter" class="text-white text-2xl hover:text-[#dfc3aa]">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M22.46 6c-.77.35-1.61.59-2.46.69.89-.53 1.58-1.37 1.91-2.37-.84.49-1.78.84-2.78 1.03a4.33 4.33 0 0 0-7.59 3.93c-3.6-.18-6.79-1.91-8.92-4.53A4.33 4.33 0 0 0 3.55 9c-.17 1.4.35 2.78 1.31 3.73-.69-.02-1.34-.21-1.9-.52v.05c0 1.96 1.39 3.64 3.27 4.02-.66.18-1.36.22-2.06.08.58 1.83 2.25 3.16 4.23 3.19a8.68 8.68 0 0 1-5.35 1.84c-.35 0-.7-.02-1.04-.07A12.27 12.27 0 0 0 8 21c7.88 0 12.2-6.53 12.2-12.2 0-.19-.01-.37-.02-.56.83-.59 1.55-1.33 2.13-2.17z"/>
                      </svg>
                  </a>
                  <!-- Icon YouTube -->
                  <!-- Sử dụng Font Awesome cho biểu tượng YouTube -->
<a href="https://www.youtube.com/@pt-canh8129/featured" class="text-white text-2xl hover:text-[#dfc3aa]">
  <i class="fab fa-youtube h-8 w-8"></i>
</a>

              </div>
          </div>
      </div>
  </div>

  <hr class="my-6 border-[#6e4f45]">

  <!-- Dòng bản quyền -->
  <div class="text-center text-md">
      <p>&copy; 2024 <span class="font-bold">Phương Nam - Cơm ngon tròn vị</span>. All rights reserved.</p>
      <p>
          <a href="#" class="hover:underline">Bảo mật thông tin</a> <span class="text-[#6e4f45]">|</span>
          <a href="#" class="hover:underline">Liên hệ</a>
      </p>
  </div>
</footer>

      <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="max-w-4xl mx-auto p-4">
            <img id="modalImage" src="" alt="" class="max-h-[90vh] max-w-full">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl">&times;</button>
        </div>
    </div>
   
<script>
  // Hàm sửa lỗi ký tự UTF-8
function fixEncoding(text) {
    try {
        // Chuyển dữ liệu lỗi từ dạng bị mã hóa (Latin1) sang UTF-8
        const decoder = new TextDecoder("utf-8", { fatal: true });
        const encoder = new TextEncoder();
        const bytes = encoder.encode(text);
        return decoder.decode(bytes);
    } catch (e) {
        // Nếu không cần sửa lỗi, trả về văn bản gốc
        return text;
    }
}

// Áp dụng sửa lỗi cho tất cả các phần tử chứa văn bản bị lỗi
document.addEventListener("DOMContentLoaded", () => {
    // Chọn tất cả các phần tử chứa dữ liệu cần kiểm tra
    const elements = document.querySelectorAll(".fix-text");

    elements.forEach(el => {
        const originalText = el.textContent.trim();
        el.textContent = fixEncoding(originalText);
    });
});

</script>

  </body>

</html>
