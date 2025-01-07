<?php
// Kết nối cơ sở dữ liệu
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email']; // Lấy email từ form
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Mã hóa mật khẩu

    // Kiểm tra xem tên người dùng hoặc email đã tồn tại chưa
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
    $stmt->execute(['username' => $username, 'email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Nếu người dùng đã tồn tại
        echo "Tên người dùng hoặc email đã tồn tại!";
    } else {
        // Thêm người dùng mới vào cơ sở dữ liệu
        $stmt = $pdo->prepare("INSERT INTO users (email, username, password_hash) VALUES (:email, :username, :password_hash)");
        try {
            $stmt->execute(['email' => $email, 'username' => $username, 'password_hash' => $hashedPassword]);
            // Đăng ký thành công, chuyển hướng về trang chủ và hiển thị thông báo
            header('Location: login.php?status=success');
            exit;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-xl p-10 max-w-lg w-full">
        <h2 class="text-3xl font-extrabold text-center text-amber-700 mb-6 animate-fade-in-down">
            Đăng ký tài khoản
        </h2>
        <form method="POST" action="register.php" class="space-y-6">
            <!-- Email -->
            <div>
                <label for="email" class="block text-base font-medium text-amber-800">Email:</label>
                <input type="email" name="email" id="email" required
                    class="mt-2 block w-full px-4 py-2 border border-amber-300 rounded-lg shadow-sm focus:ring-amber-500 focus:border-amber-500 text-gray-700">
            </div>

            <!-- Tên người dùng -->
            <div>
                <label for="username" class="block text-base font-medium text-amber-800">Tên người dùng:</label>
                <input type="text" name="username" id="username" required
                    class="mt-2 block w-full px-4 py-2 border border-amber-300 rounded-lg shadow-sm focus:ring-amber-500 focus:border-amber-500 text-gray-700">
            </div>

            <!-- Mật khẩu -->
            <div>
                <label for="password" class="block text-base font-medium text-amber-800">Mật khẩu:</label>
                <input type="password" name="password" id="password" required
                    class="mt-2 block w-full px-4 py-2 border border-amber-300 rounded-lg shadow-sm focus:ring-amber-500 focus:border-amber-500 text-gray-700">
            </div>

            <!-- Nút đăng ký -->
            <div class="text-center">
                <button type="submit"
                    class="w-full px-4 py-2 bg-amber-600 text-white rounded-lg shadow-md hover:bg-amber-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-amber-500">
                    Đăng ký
                </button>
            </div>
        </form>

        <!-- Thông báo -->
        <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
            <p class="mt-6 text-center text-amber-700 font-semibold animate-bounce">
                Đăng ký thành công! <br>
                <span class="text-amber-900 font-medium">Chào mừng đến với trang chủ!</span>
            </p>
        <?php endif; ?>

        <!-- Link đến trang đăng nhập -->
        <div class="text-center mt-6">
            <a href="login.php"
                class="text-amber-600 font-semibold hover:text-amber-800 transition duration-300 underline">
                Đăng nhập
            </a>
        </div>
    </div>

    <style>
        @keyframes fade-in-down {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 1s ease-out;
        }
    </style>
</body>
</html>


