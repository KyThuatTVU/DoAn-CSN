<!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ẩm thực Phương Nam</title>
    <meta name="description" content="Nhà hàng Ẩm thực Phương Nam cung cấp các món ăn đặc trưng miền Nam, với không gian ấm cúng và phục vụ tận tình.">
    <meta name="keywords" content="Ẩm thực Phương Nam, nhà hàng Trà Vinh, món ăn miền Nam, nhà hàng đặc sản, đặt bàn Trà Vinh">
    


    <!-- Link to Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="img/ẩM THỰC.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>


    <script src="https://cdn.tailwindcss.com"></script>
        <!-- Thêm CSS cho Slick Slider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        
    </head>
    <style>

.about-content h1 {
            font-family: 'Playfair Display', serif;
        }
        .about-content h2, .about-content p {
            font-family: 'Roboto Slab', serif;
        }
        
        /* Add custom font for the navbar text */
        .custom-font {
        font-family: 'Audiowide', sans-serif;
        }

        

        /* Đặt kích thước và kiểu dáng cho slider */
        .slider {
        width: 100%;
        margin: 0px;
    }

    .slider img {
        width: 100%;
        height: auto;
        
    }
/* Mobile Styles */
@media (max-width: 640px) {
    .container {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .am_thuc_item {
        width: 100%; /* Đảm bảo món ăn chiếm toàn bộ chiều rộng */
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    .am_thuc h2 {
        font-size: 2em;
    }

    .am_thuc_content h3 {
        font-size: 1.2em;
    }

    /* Đảm bảo các món ăn không bị lệch */
    .flex {
        flex-wrap: wrap;
        gap: 20px; /* Thêm khoảng cách giữa các món ăn */
    }
}

/* Tablet Styles */
@media (min-width: 641px) and (max-width: 1024px) {
    .am_thuc_item {
        width: 48%;
    }

    .am_thuc h2 {
        font-size: 2.2em;
    }

    .am_thuc_content h3 {
        font-size: 1.3em;
    }
}

/* Desktop Styles */
@media (min-width: 1025px) {
    .am_thuc_item {
        width: 24%;
    }

    .am_thuc h2 {
        font-size: 2.5em;
    }

    .am_thuc_content h3 {
        font-size: 1.4em;
    }
}

    /* Custom styling cho các thiết bị khác nhau */
    @media (max-width: 767px) {
        /* Mobile */
        .slick-3 {
            flex-direction: column; /* Hình ảnh sắp xếp thành hàng dọc */
        }

        .slick-3-item {
            width: 100%; /* Hình ảnh chiếm toàn bộ chiều rộng */
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        /* Máy tính bảng */
        .slick-3-item {
            width: 48%; /* Hình ảnh chiếm 48% chiều rộng trên tablet */
        }
    }

    @media (min-width: 1024px) {
        /* PC */
        .slick-3-item {
            width: 30%; /* Hình ảnh chiếm 30% chiều rộng trên PC */
        }
    }

    .custom-title-h2 {
                font-family: 'iCielBC Downtown', sans-serif;
                font-weight: normal;
                font-style: normal;
                font-display: swap;
                color: #6e453b;
            }

            /* Định dạng cho máy tính bảng (Tablet) */
            @media (min-width: 768px) {
                .row {
                    display: flex;
                    align-items: center;
                }

                .col-lg-6 {
                    flex: 1;
                }

                /* Chỉnh lại kích thước cho phần văn bản */
                .about-content {
                    width: 50%;
                    margin-right: 2rem;
                }

                /* Chỉnh lại kích thước hình ảnh cho máy tính bảng */
                .about-image {
                    width: 50%;
                }
            }

            /* Định dạng cho PC (màn hình lớn) */
            @media (min-width: 1024px) {
                /* Tăng kích thước chữ và độ rộng container */
                .about-content {
                    width: 45%; /* Nhỏ hơn máy tính bảng */
                }

                .about-image {
                    width: 55%;
                }
            }

            /* Custom font */
            @import url('https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap');

            /* Class for custom title font */
            .custom-title {
                font-family: 'Bungee Inline', cursive !important;
                color: #6e453b; /* Màu nâu */
            }
    
            /* Media Queries for Mobile, Tablet, PC */
            /* Mobile */
            @media only screen and (max-width: 640px) {
                .custom-title {
                    font-size: 1.5rem;
                }
    
                .video-icon {
                    font-size: 3rem;
                }
            }
    
            /* Tablet */
            @media only screen and (min-width: 641px) and (max-width: 1024px) {
                .custom-title {
                    font-size: 2.5rem;
                }
    
                .video-icon {
                    font-size: 3.5rem;
                }
            }
    
            /* PC */
            @media only screen and (min-width: 1025px) {
                .custom-title {
                    font-size: 4rem;
                }
    
                .video-icon {
                    font-size: 4rem;
                }
            }

            /* Vị trí container */
#buttons-container {
    position: fixed;
    bottom: 20px; /* Cách lề dưới */
    right: 20px; /* Cách lề phải */
    z-index: 9999; /* Đảm bảo luôn nổi trên các phần tử khác */
}


    </style>
    </head>

    <body>
    <nav
    class="fixed top-0 w-full z-50 bg-[#704539] text-white flex flex-wrap sm:flex-nowrap items-center justify-between px-4 sm:px-6 py-4">

    <!-- Logo -->
    <div class="w-full sm:w-auto flex justify-center sm:justify-start mb-4 sm:mb-0 order-2 sm:order-1">
      <h1 class="font-bold text-2xl sm:text-3xl lg:text-4xl text-[#D8B899] custom-font"><a href="trangchu.html"
          target="_blank" class="hover:underline"></a>PHƯƠNG NAM</h1>
    </div>

    <!-- Hamburger Menu Button (Visible on Mobile) -->
    <div class="absolute top-4 right-4 sm:hidden flex items-center order-1 sm:order-2">
      <button id="menu-btn" class="text-white focus:outline-none">
        <i class="fas fa-bars fa-lg"></i>
      </button>
    </div>

    <!-- Navigation Links (HIDDEN ON MOBILE)-->
    <ul id="nav-links"
      class="hidden sm:flex w-full sm:w-auto flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 lg:space-x-6 text-center sm:text-left text-lg font-bold custom-font order-3">
      <li><a href="gioithieu.html" target="_blank" class="hover:text-[#D8B899]">GIỚI THIỆU</a></li>
      <li><a href="menu.html" target="_blank" class="hover:text-[#D8B899]">THỰC ĐƠN</a></li>
      <li><a href="dathang.html" target="_blank" class="hover:text-[#D8B899]">ĐẶT BÀN</a></li>
      <li><a href="album.html" target="_blank" class="hover:text-[#D8B899]">ALBUM ẢNH</a></li>
      <li><a href="lienhe.html" target="_blank" class="hover:text-[#D8B899]">LIÊN HỆ</a></li>
    </ul>

    <!-- Search Bar (Visible on Desktop) -->
    <div class="hidden sm:flex items-center space-x-4 order-4">
      <div class="bg-[#D8B899] rounded-md px-4 py-1 flex items-center" style="width: 200px;">
        <input id="desktop-search" type="text" placeholder="Tìm kiếm"
          class="bg-transparent text-[#704539] placeholder-[#704539] focus:outline-none custom-font w-full">
        <button id="desktop-search-btn" class="ml-2 text-[#704539]">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>

    </div>
  </nav>

  <!-- Mobile Dropdown Menu -->
  <div id="mobile-menu"
    class="sm:hidden hidden bg-[#704539] text-white py-4 space-y-2 rounded-lg shadow-lg fixed left-0 w-full z-40 text-lg font-bold custom-font text-center">
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
    document.addEventListener('DOMContentLoaded', function () {
      const nav = document.querySelector('nav'); // Lấy phần tử nav
      const mobileMenu = document.getElementById('mobile-menu');
      const mainContent = document.querySelector('.pt-28'); // Lấy phần tử nội dung chính
      const navHeight = nav.offsetHeight; // Lấy chiều cao của nav

      // Điều chỉnh top của menu mobile
      mobileMenu.style.top = `${navHeight}px`;

      // Thêm padding-top cho phần nội dung chính
      mainContent.style.paddingTop = `${navHeight + 35}px`; // 16px là khoảng cách thêm
    });
  </script>
      
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


    <!-- Slideshow Container -->
    <!-- Slider chứa các ảnh -->
    <!-- Slideshow Container -->
<!-- Slider chứa các ảnh -->
<div class="slider" style="margin-top: 74px">
    <div><img src="https://luuanh.vercel.app/amthucphuongnam/Picture2.png" alt="Image 1"></div>
    <div><img src="https://luuanh.vercel.app/amthucphuongnam/ran.png" alt="Image 2"></div>
    <div><img src="img/nen2.jpg" alt="Image 3"></div>
</div>

    <!-- Thêm thư viện jQuery và Slick Slider -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <div id="about-us" class="relative bg-[#f3efe2] py-16 px-4 lg:px-16">
    <div class="relative z-20">
        <!-- Title Section với class riêng -->
        <h2 class="custom-title-h2 text-center text-4xl mb-4 font-[Audiowide]">
            <span>VỀ CHÚNG TÔI</span>
        </h2><br>

        <!-- Content and Images -->
        <div class="row">
            <!-- Text content on the left -->
            <div class="col-lg-6 about-content max-w-lg mx-auto lg:mx-0 lg:w-5/12">
                <h1 class="text-3xl text-[#6e453b] font-bold" style="font-family: 'Lora', serif;">Phương Nam - Ngon như Mẹ nấu!</h1>
                <h2 class="text-xl text-[#5c3b2c] mt-2" style="font-family: 'Lora', serif;">Nhà hàng cơm Việt, quán cơm gia đình ngon tại Trà Vinh.</h2>
                <p class="text-lg text-[#4d4d4d] mt-4 leading-relaxed" style="font-family: 'Lora', serif;">Tại <strong>Phương Nam</strong>, triết lý của chúng tôi rất đơn giản: chia sẻ hương vị và văn hóa thưởng thức cơm Việt tới tất cả mọi người. Chúng tôi làm điều này bằng việc sử dụng nguồn nguyên liệu tươi sạch nhất, và chế biến chúng qua đôi tay của những người đầu bếp tận tâm.</p>
                <p class="text-lg text-[#4d4d4d] mt-4 leading-relaxed" style="font-family: 'Lora', serif;">Không gian tại nhà hàng cơm Phương Nam được lấy cảm hứng từ những giá trị truyền thống của Việt Nam kết hợp với những thứ hiện đại để tạo nên một cảm giác xưa cũ kết hợp cùng những thứ mới mẻ.</p>
                <p class="text-lg text-[#4d4d4d] mt-4 leading-relaxed" style="font-family: 'Lora', serif;">Với chủ đạo là gỗ và cây, những thứ gắn liền nhất với thiên nhiên sẽ khiến trải nghiệm dùng bữa thực sự khác biệt!</p>
            </div>
        
            <div class="col-lg-6 about-image w-full lg:w-5/12 mt-1 lg:mt-0 mx-auto"> <!-- Sử dụng mx-auto để căn giữa -->
                <div class="relative w-full pb-[48%] bg-cover bg-center rounded-md" style="background-image: url('img/hinhtruyenthong2.jpg');"></div>
            </div>
            
        </div>
        
    </div>
    </div>

    <script>
        // GSAP animation script
        gsap.registerPlugin(ScrollTrigger);
    
        // Animate about-content with infinite effect
        gsap.fromTo(".about-content", 
            { opacity: 0, y: 50 }, 
            { opacity: 1, y: 0, duration: 2, ease: "power2.out", 
              scrollTrigger: {
                trigger: ".about-content",
                start: "top 85%",
                toggleActions: "play none none none",
                onEnter: () => gsap.fromTo(".about-content", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }), // Reset animation on enter
                onLeaveBack: () => gsap.fromTo(".about-content", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }) // Reset animation when scrolling back
              }
            });
    
        // Animate about-image with infinite effect
        gsap.fromTo(".about-image", 
            { opacity: 0, y: 50 }, 
            { opacity: 1, y: 0, duration: 2, ease: "power2.out", 
              scrollTrigger: {
                trigger: ".about-image",
                start: "top 85%",
                toggleActions: "play none none none",
                onEnter: () => gsap.fromTo(".about-image", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }), // Reset animation on enter
                onLeaveBack: () => gsap.fromTo(".about-image", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }) // Reset animation when scrolling back
              }
            });
    </script>
   
   <script src="https://cdn.jsdelivr.net/npm/fireworks-js@latest/dist/fireworks.js"></script>

</head>
<style>
  /* Các style khác giữ nguyên */

  /* Container cho pháo hoa */
  #firework-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 0;
  }
</style>

<body>
    

    <div id="firework-container"></div>

    <script>
        const container = document.getElementById('firework-container')
        const fireworks = new Fireworks(container, {
            // options tùy chỉnh
            autoresize: true,
            opacity: 0.8,
            acceleration: 1.05,
            friction: 0.97,
            gravity: 1.5,
            particles: 100,
            traceLength: 3,
            traceSpeed: 10,
            explosion: 6,
            intensity: 30,
            flickering: 50,
            lineStyle: 'round',
            hue: {
                min: 0,
                max: 360
            },
            delay: {
                min: 30,
                max: 60
            },
            rocketsPoint: {
                min: 50,
                max: 50
            },
            lineWidth: {
                explosion: {
                    min: 1,
                    max: 3
                },
                trace: {
                    min: 1,
                    max: 2
                }
            },
            brightness: {
                min: 50,
                max: 80
            },
            decay: {
                min: 0.015,
                max: 0.03
            },
            mouse: {
                click: false,
                move: false,
                max: 1
            }
        })
        fireworks.start()
        setTimeout(() => {
            fireworks.stop()
        }, 10000); // 7 giây
    </script>


<link rel="stylesheet" href="styles.css">
    <div class="am_thuc py-12 bg-orange-50">
        <h2 class="font-bold text-3xl sm:text-4xl text-[#D8B899] custom-font text-center mx-auto">
            ĐẶT SẢN PHƯƠNG NAM
        </h2><br>
        <div class="flex flex-wrap gap-4 justify-center">
            <!-- Món ăn 1 -->
            <div class="am_thuc_item text-center bg-white rounded-lg shadow-md p-6">
                <div class="am_thuc_img mb-4 p-2 border-2 border-orange-300 rounded-lg">
                   <a href="thitrang.html" target="_self"><img src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-04.png" alt="Thịt rang cháy cạnh" class="w-full h-auto rounded-lg"></a>
                </div>
                <div class="am_thuc_content">
                    <h3 class="text-3xl font-extrabold text-[#8b5e34] leading-tight">Thịt rang cháy cạnh</h3>
                    <p class="text-lg text-gray-700 mt-2 font-medium leading-relaxed">Từng miếng thịt được thái vừa vặn, đảo qua lớp lửa để các mặt xém cạnh, khi lên màu vàng nâu đẹp mắt cùng lớp bì giòn hấp dẫn.</p>
                    
                </div>
            </div>
    
            <!-- Món ăn 2 -->
            <div class="am_thuc_item text-center bg-white rounded-lg shadow-md p-6">
                <div class="am_thuc_img mb-4 p-2 border-2 border-orange-300 rounded-lg">
                    <a href="cabong.html" target="_self"><img src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-03.png" alt="Cá bống chiên giòn" class="w-full h-auto rounded-lg"></a>
                </div>
                <div class="am_thuc_content">
                    <h3 class="text-3xl font-extrabold text-[#8b5e34] leading-tight">Cá bống chiên giòn</h3>
                    <p class="text-lg text-gray-700 mt-2 font-medium leading-relaxed">Cần chỉnh ở nhiệt độ dầu sôi vừa phải, từng miếng cá bống nhỏ được ướp vừa vặn, tẩm mình đến khi cho ra được màu vàng đẹp mắt nhất.</p>
                </div>
            </div>
    
            <!-- Món ăn 3 -->
            <div class="am_thuc_item text-center bg-white rounded-lg shadow-md p-6">
                <div class="am_thuc_img mb-4 p-2 border-2 border-orange-300 rounded-lg">
                    <a href="thitkho.html" target="_self"><img src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-01.png" alt="Thịt kho trứng cút" class="w-full h-auto rounded-lg"></a>
                </div>
                <div class="am_thuc_content">
                    <h3 class="text-3xl font-extrabold text-[#8b5e34] leading-tight">Thịt kho trứng cút</h3>
                    <p class="text-lg text-gray-700 mt-2 font-medium leading-relaxed">Từng miếng thịt ba chỉ được chọn lọc, tẩm ướp theo đúng hương vị chuẩn miền Bắc cùng nước hàng đặc trưng.</p>
                </div>
            </div>
    
            <!-- Món ăn 4 -->
            <div class="am_thuc_item text-center bg-white rounded-lg shadow-md p-6">
                <div class="am_thuc_img mb-4 p-2 border-2 border-orange-300 rounded-lg">
                    <a href="canhmongtoi.html" target="_self">   <img src="https://nhahangvian.com/wp-content/uploads/2023/12/Anh-mon-an-02.png" alt="Canh cua mùng tơi" class="w-full h-auto rounded-lg"></a>
                </div>
                <div class="am_thuc_content">
                    <h3 class="text-3xl font-extrabold text-[#8b5e34] leading-tight">Canh cua mùng tơi</h3>
                    <p class="text-lg text-gray-700 mt-2 font-medium leading-relaxed">Bát canh cua nóng hổi, thơm mùi gạch cua đem lại cảm giác đồng quê quen thuộc, cảm giác của hương vị quê hương.</p>
                </div>
            </div>
        </div>
    </div>


    <script>
         // Animate about-image with infinite effect
         gsap.fromTo(".am_thuc_img", 
            { opacity: 0, y: 50 }, 
            { opacity: 1, y: 0, duration: 2, ease: "power2.out", 
              scrollTrigger: {
                trigger: ".am_thuc_img",
                start: "top 85%",
                toggleActions: "play none none none",
                onEnter: () => gsap.fromTo(".am_thuc_img", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }), // Reset animation on enter
                onLeaveBack: () => gsap.fromTo(".am_thuc_img", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }) // Reset animation when scrolling back
              }
            });

             // Animate about-image with infinite effect
        gsap.fromTo(".am_thuc_content", 
            { opacity: 0, y: 50 }, 
            { opacity: 1, y: 0, duration: 2, ease: "power2.out", 
              scrollTrigger: {
                trigger: ".am_thuc_content",
                start: "top 85%",
                toggleActions: "play none none none",
                onEnter: () => gsap.fromTo(".am_thuc_content", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }), // Reset animation on enter
                onLeaveBack: () => gsap.fromTo(".am_thuc_content", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }) // Reset animation when scrolling back
              }
            });
        
    </script>
     <!--phần 5-->
     <div class="bg-[#dfd3c3] p-8">
        <div class="container mx-auto">
            <!-- Tiêu đề nằm chính giữa -->
            <h2 class="font-bold text-3xl sm:text-4xl text-[#4E342E] custom-font text-center mx-auto">
                KHÔNG GIAN NHÀ HÀNG
            </h2><br>
    
            <!-- Hình ảnh -->
            <div class="slick-3 flex gap-8 justify-center items-center">
                <!-- Hình ảnh 1 -->
                <div class="slick-3-item border-8 border-[#0000001a] rounded-[25px] p-2">
                    <a href="https://luuanh.vercel.app/amthucphuongnam/2.jpg"
                       data-lightbox="restaurant-gallery" data-title="Không gian nhà hàng 1">
                        <img class="w-full rounded-[25px]" src="https://luuanh.vercel.app/amthucphuongnam/2.jpg" alt="Không gian nhà hàng 1">
                    </a>
                </div>
                <!-- Hình ảnh 2 -->
                <div class="slick-3-item border-8 border-[#0000001a] rounded-[25px] p-2">
                    <a href="https://luuanh.vercel.app/amthucphuongnam/Kg1.jpg"
                       data-lightbox="restaurant-gallery" data-title="Không gian nhà hàng 2">
                        <img class="w-full rounded-[25px]" src="https://luuanh.vercel.app/amthucphuongnam/Kg1.jpg" alt="Không gian nhà hàng 2">
                    </a>
                </div>
                <!-- Hình ảnh 3 -->
                <div class="slick-3-item border-8 border-[#0000001a] rounded-[25px] p-2">
                    <a href="https://luuanh.vercel.app/amthucphuongnam/Kg2.jpg"
                       data-lightbox="restaurant-gallery" data-title="Không gian nhà hàng 3">
                        <img class="w-full rounded-[25px]" src="https://luuanh.vercel.app/amthucphuongnam/Kg2.jpg" alt="Không gian nhà hàng 3">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    
    <script>
        
        // Animate about-image with infinite effect
        gsap.fromTo(".slick-3-item", 
            { opacity: 0, y: 50 }, 
            { opacity: 1, y: 0, duration: 2, ease: "power2.out", 
              scrollTrigger: {
                trigger: ".slick-3-item",
                start: "top 85%",
                toggleActions: "play none none none",
                onEnter: () => gsap.fromTo(".slick-3-item", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }), // Reset animation on enter
                onLeaveBack: () => gsap.fromTo(".slick-3-item", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }) // Reset animation when scrolling back
              }
            });
    </script>
    
    


    <!--phần 6-->
<div class="bg-[#f3efe2]">
    <div class="container mx-auto py-5">
        <!-- Title Section with custom title -->
        <h2 class="text-center mb-4 custom-title">
            <span>TRUYỀN THÔNG</span>
        </h2>

        <!-- Video Section -->
        <div class="max-w-[900px] mx-auto">
            <div class="mb-5 relative overflow-hidden rounded-xl group">
                <a class="block relative" href="https://youtu.be/YbS3nMondqY?si=4ovdWdWKAFRnfN5m" target="_self">
                    <!-- Background Image -->
                    <div class="relative pb-[56.25%] bg-cover bg-center transition-transform duration-300 group-hover:scale-105"
                        style="background-image: url('img/hinh1.jpg');" data-aos="fade-up">
                        <i class="bi bi-play-circle absolute inset-0 flex items-center justify-center text-white text-4xl transition-transform duration-300 group-hover:scale-125"></i>
                    </div>
                </a>
                <!-- Video Title -->
                <h3 class="text-center text-lg font-semibold mt-2">
                    <a class="text-black hover:text-[#6e453b]" href="https://youtu.be/YbS3nMondqY?si=4ovdWdWKAFRnfN5m" target="_self">
                        TraVinh Food Review
                    </a>
                </h3>
            </div>
        </div>
    </div>
</div>

<script>
    
  // Animate about-image with infinite effect
  gsap.fromTo(".relative", 
            { opacity: 0, y: 50 }, 
            { opacity: 1, y: 0, duration: 2, ease: "power2.out", 
              scrollTrigger: {
                trigger: ".relative",
                start: "top 85%",
                toggleActions: "play none none none",
                onEnter: () => gsap.fromTo(".relative", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }), // Reset animation on enter
                onLeaveBack: () => gsap.fromTo(".relative", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 2, ease: "power2.out" }) // Reset animation when scrolling back
              }
            });
</script>

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


    <!-- Mã JavaScript kích hoạt slider -->
    <script>
    $(document).ready(function(){
        $('.slider').slick({
            dots: false,             // Hiển thị chấm định vị dưới slider
            infinite: true,         // Vòng lặp vô hạn
            speed: 500,             // Thời gian chuyển ảnh (500ms)
            slidesToShow: 1,        // Hiển thị 1 ảnh tại một thời điểm
            slidesToScroll: 1,      // Di chuyển qua lại từng ảnh
            autoplay: true,         // Tự động chuyển ảnh
            autoplaySpeed: 3000,    // Thời gian giữa các lần chuyển (3000ms = 3 giây)
            arrows: true,           // Hiển thị mũi tên qua lại
            adaptiveHeight: true    // Tự điều chỉnh chiều cao theo nội dung ảnh
        });
    });

    
    </script>

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
