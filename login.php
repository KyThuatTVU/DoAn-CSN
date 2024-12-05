<?php
session_start();
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

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Kiểm tra dữ liệu không rỗng
    if (empty($username) || empty($password)) {
        die("Vui lòng nhập tên người dùng và mật khẩu.");
    }

    try {
        // Tìm kiếm người dùng trong cơ sở dữ liệu
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra mật khẩu
        if ($user && password_verify($password, $user['password'])) {
            echo "Đăng nhập thành công! Chào, " . htmlspecialchars($username);
            $_SESSION['is_logged_in'] = true;
            $_SESSION['usernames'] = $user['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Tên người dùng hoặc mật khẩu không đúng!";
        }
    } catch (PDOException $e) {
        die("Lỗi truy vấn: " . $e->getMessage());
    }
}
?>

<?php
include 'db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT username, password_hash FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password_hash'])) {
        echo "Đăng nhập thành công!";
        // Chuyển hướng đến trang người dùng sau khi đăng nhập thành công
        $_SESSION['is_logged_in'] = true;
        $_SESSION['usernames'] = $user['username']; // Đúng cách để lưu tên người dùng
        header('Location: index.php');
        exit;
    } else {
        echo "Tên người dùng hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 via-[#f9e8de] to-gray-200 min-h-screen flex items-center justify-center">

    <!-- Login Form Container -->
    <div class="bg-white shadow-2xl rounded-lg max-w-md w-full p-8">
        <!-- Form Header -->
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-[#704539]">Đăng nhập</h2>
            <p class="text-gray-500 text-sm">Hãy nhập thông tin đăng nhập của bạn!</p>
        </div>

        <!-- Form Body -->
        <form method="POST" action="login.php" class="space-y-6">
            <!-- Username Field -->
            <div>
                <label for="username" class="block text-sm font-semibold text-gray-700 mb-2">Tên người dùng:</label>
                <input 
                    type="text" 
                    name="username" 
                    id="username" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[#704539] focus:border-[#704539] transition-all duration-200" 
                    placeholder="Nhập tên người dùng" 
                    required>
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Mật khẩu:</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[#704539] focus:border-[#704539] transition-all duration-200" 
                    placeholder="Nhập mật khẩu" 
                    required>
            </div>

            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full bg-[#704539] text-white py-2 px-4 rounded-lg shadow hover:bg-opacity-90 transition-all duration-200">
                    Đăng nhập
                </button>
            </div>
        </form>

        <!-- Error Message -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();

            // Xử lý đăng nhập
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Giả sử xác thực (thay bằng code logic xác thực thực tế)
            $loginSuccess = ($username === 'admin' && $password === '123456'); // Thay bằng logic của bạn

            if ($loginSuccess) {
                $_SESSION['is_logged_in'] = true;
                header("Location: index.php"); // Chuyển hướng đến trang chủ
                exit;
            } else {
                echo '<p class="text-center text-red-500 mt-4">Thông tin đăng nhập không chính xác!</p>';
            }
        }
        ?>
    </div>
</body>
</html>



