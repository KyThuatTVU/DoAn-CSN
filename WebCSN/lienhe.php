<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liên Hệ - Nhà Hàng Phương Nam</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font: Audiowide -->
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/ẩM THỰC.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* Apply Audiowide font to h1 */
        h1 {
            font-family: 'Audiowide', sans-serif;
        }
        /* Skin tone background color */
        .bg-skin-tone {
            background-color: #f5d6c6;
        }
        /* Text shadow for clearer visibility */
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        /* Background overlay for the title */
        .title-overlay {
            background-color: rgba(255, 255, 255, 0.8);
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
        }
        /* Brown text color */
        .text-brown {
            color: #6b4226; /* Dark brown color */
        }
        .custom-font {
            font-family: 'Audiowide', sans-serif;
        }
        
    </style>
</head>
<body class="bg-skin-tone">
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
      width: 64px;
      /* Kích thước nút */
      height: 64px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.3), 0 0 30px rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      transition: all 0.3s ease-in-out;
      animation: pulse 1.5s infinite;
      /* Hiệu ứng chớp */
    }

    .floating-btn:hover {
      transform: scale(1.1);
      box-shadow: 0 0 20px rgba(0, 205, 255, 0.8), 0 0 50px rgba(0, 205, 255, 0.5);
    }

    /* Tooltip */
    .tooltip {
      position: absolute;
      bottom: 80px;
      /* Hiển thị phía trên nút */
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

    #logout-button {
      position: fixed;
      /* Đảm bảo nút luôn nổi */
      bottom: 20px;
      /* Đặt vị trí ở góc dưới cùng màn hình */
      right: 20px;
      /* Căn lề phải */
      z-index: 9999;
      /* Giá trị rất cao để không bị ảnh che */
    }

    .album-image:hover {
      z-index: 1;
      /* Đảm bảo ảnh không tăng quá cao */
    }

    .album-image {
      position: relative;
      /* Cần relative để z-index hoạt động */
      z-index: 1;
      /* Giá trị mặc định thấp */
    }

    .album-image:hover {
      z-index: 5;
      /* Đủ cao để hiển thị nổi, nhưng thấp hơn nút logout */
    }

    #buttons-container {
      z-index: 50;
      /* Tăng z-index cho container chứa các nút */
    }

    .floating-btn {
      z-index: 50;
      /* Đảm bảo nút luôn hiển thị trên cùng */
    }

    .album-image {
      z-index: 1;
      /* Giảm z-index của ảnh album */
      position: relative;
    }

    .album-image:hover {
      z-index: 2;
      /* Khi hover vẫn tăng lên nhưng thấp hơn các nút */
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

   <main id="main" class="full">
    <div class="full" id="main-content">
        <!-- Banner Section -->
        <div class="h-96 bg-cover bg-center bg-no-repeat relative flex justify-center items-center" 
            style="background-image: url('https://nhahangvian.com/wp-content/uploads/2023/12/cau-long-bien.jpg')">
            <!-- Lớp nền mờ -->
            <div class="absolute inset-0 bg-[#f0e2e0] bg-opacity-70"></div>
            <!-- Nội dung chữ -->
            <div class="z-10 text-center text-white px-4">
                <!-- Tiêu đề -->
                <h2 class="text-4xl md:text-5xl font-bold text-[#8B4513] drop-shadow-lg mb-4"
                    style="font-family: 'Audiowide', sans-serif;">
                    LIÊN HỆ
                </h2>
                <!-- Phần phụ đề -->
                <p class="text-xl md:text-2xl font-semibold text-[#8B4513] drop-shadow-md"
                    style="font-family: 'Audiowide', sans-serif;">
                    HÃY LIÊN HỆ CHÚNG TÔI ĐỂ BẠN CÓ MỘT TRẢI NGHIỆM TỐT NHẤT NHÉ!
                </p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="section-gap full py-10 bg-[#f9f2ec]">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Contact Info -->
                    <div class="p-6">
                        <h1 class="text-3xl font-bold mb-4">Phương Nam – Cơm ngon tròn vị</h1>
                        <p class="text-lg mb-2"><strong>SDT:</strong> 0904 816 145</p>
                        <p class="text-lg mb-2"><strong>Email:</strong> nhahangphuongnam@gmail.com</p>
                        <p class="text-lg mb-2"><strong>Địa chỉ:</strong> 500 Võ Văn Kiệt, Phường 1, TP Trà Vinh</p>
                        <p class="text-lg"><strong>(Có chỗ để xe ô tô)</strong></p>
                        <p class="text-lg mb-2"><strong>Website:</strong> https://amthucphuongnam.id.vn</p>
                    </div>
                    <!-- Map Section -->
                    <div class="p-6">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3929.812701699307!2d106.32092667503049!3d9.949536290153308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOcKwNTYnNTguMyJOIDEwNsKwMTknMjQuNiJF!5e0!3m2!1svi!2s!4v1730822640422!5m2!1svi!2s"
                            width="100%" 
                            height="400" 
                            class="rounded-lg shadow-lg"
                            style="border:0;"
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
<!-- Feedback Form -->
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="max-w-2xl w-full p-10 bg-white rounded-2xl shadow-lg">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6 uppercase tracking-wide">Liên Hệ</h1>
        <p class="text-center text-gray-600 mb-8">
            Hãy để lại thông tin, chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.
        </p>
        <form id="contactForm" class="space-y-5">

         <!-- Tên khách hàng -->
         <div>
                <label for="ten_khach_hang" class="block text-gray-700 font-medium mb-2">Tên khách hàng:</label>
                <input type="text" id="ten_khach_hang" name="ten_khach_hang"
                    class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm"
                    placeholder="Nhập tên của bạn" required>
            </div>
            <!-- Số điện thoại -->
            <div>
                <label for="so_dien_thoai" class="block text-gray-700 font-medium mb-2">Số điện thoại:</label>
                <input type="text" id="so_dien_thoai" name="so_dien_thoai"
                    class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm"
                    placeholder="Nhập số điện thoại của bạn" required>
                <p id="phoneError" class="text-red-500 text-sm mt-1 hidden">Số điện thoại không hợp lệ! Vui lòng nhập lại.</p>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email:</label>
                <input type="email" id="email" name="email"
                    class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm"
                    placeholder="Nhập email của bạn" required>
                <p id="emailError" class="text-red-500 text-sm mt-1 hidden">Email không hợp lệ! Vui lòng nhập lại.</p>
            </div>

             <!-- Nội dung đánh giá -->
             <div>
                <label for="noi_dung_danh_gia" class="block text-gray-700 font-medium mb-2">Nội dung liên hệ:</label>
                <textarea id="noi_dung_danh_gia" name="noi_dung_danh_gia" rows="4"
                    class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm"
                    placeholder="Nhập nội dung liên hệ" required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-bold py-4 px-6 rounded-lg transition duration-300 shadow-lg">
                Gửi Liên Hệ
            </button>
        </form>
    </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function (event) {
        // Lấy giá trị của số điện thoại và email
        const phoneInput = document.getElementById('so_dien_thoai').value.trim();
        const emailInput = document.getElementById('email').value.trim();

        // Regular expressions để kiểm tra
        const phoneRegex = /^[0-9]{10,11}$/; // Số điện thoại từ 10-11 chữ số
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Email hợp lệ

        // Lấy phần hiển thị lỗi
        const phoneError = document.getElementById('phoneError');
        const emailError = document.getElementById('emailError');

        let isValid = true;

        // Kiểm tra số điện thoại
        if (!phoneRegex.test(phoneInput)) {
            phoneError.classList.remove('hidden');
            isValid = false;
        } else {
            phoneError.classList.add('hidden');
        }

        // Kiểm tra email
        if (!emailRegex.test(emailInput)) {
            emailError.classList.remove('hidden');
            isValid = false;
        } else {
            emailError.classList.add('hidden');
        }

        // Nếu có lỗi, ngăn form gửi đi
        if (!isValid) {
            event.preventDefault(); // Ngăn gửi form
            alert("Vui lòng nhập lại thông tin hợp lệ!");
        }
    });
</script>




<script>
    // GSAP Animation for form
    gsap.to("#feedback-form", { 
        opacity: 1, 
        duration: 1, 
        y: 0, 
        ease: "power4.out",
        delay: 0.5
    });

    // GSAP Animation for the title
    gsap.from("#form-title", { 
        opacity: 0, 
        y: -50, 
        duration: 1, 
        ease: "bounce.out", 
        delay: 0.5 
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>

</main>

    
<?php
// Kiểm tra phương thức POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = "localhost"; 
    $user = "lbfhcaxb_user_management"; 
    $pass = "qagRycB4YrPvCvsLx3qV"; 
    $db = "lbfhcaxb_user_management"; 
    
    // Tạo kết nối
    $conn = new mysqli($host, $user, $pass, $db);
  
    
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

    // Lấy dữ liệu từ form
    $ten_khach_hang = $conn->real_escape_string($_POST['ten_khach_hang']);
    $so_dien_thoai = $conn->real_escape_string($_POST['so_dien_thoai']);
    $email = $conn->real_escape_string($_POST['email']);
    $noi_dung_danh_gia = $conn->real_escape_string($_POST['noi_dung_danh_gia']);
    $diem_so = (int)$_POST['diem_so'];

    // Chèn dữ liệu vào bảng danh_gia
    $sql = "INSERT INTO danh_gia (ten_khach_hang, so_dien_thoai, email, noi_dung_danh_gia, diem_so)
            VALUES ('$ten_khach_hang', '$so_dien_thoai', '$email', '$noi_dung_danh_gia', $diem_so)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            Swal.fire({
                title: 'Cảm ơn bạn!',
                text: 'Đánh giá của bạn đã được gửi thành công.',
                icon: 'success',
                confirmButtonText: 'Đóng'
            }).then(function() {
                window.location.href = 'index.php'; // Chuyển hướng đến trang chủ hoặc trang khác
            });
        </script>";
    } else {
        echo "<p style='text-align: center; color: red;'>Lỗi: " . $conn->error . "</p>";
    }

    // Đóng kết nối
    $conn->close();
} else {
    echo "Phương thức không hợp lệ.";
}
?>



    <!-- Thêm icon Twitter và YouTube vào footer -->
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

  <script>
    
    // Animate about-image with infinite effect
    gsap.fromTo(".container", 
              { opacity: 0, y: 50 }, 
              { opacity: 1, y: 0, duration: 2, ease: "power2.out", 
                scrollTrigger: {
                  trigger: ".container",
                  start: "top 85%",
                  toggleActions: "play none none none",
                  onEnter: () => gsap.fromTo(".container", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }), // Reset animation on enter
                  onLeaveBack: () => gsap.fromTo(".container", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }) // Reset animation when scrolling back
                }
              });
  </script>
    
</body>
</html>