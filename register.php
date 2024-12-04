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

<form method="POST" action="register.php">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <label for="username">Tên người dùng:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Đăng ký</button>
</form>
<?php
// Kiểm tra xem có thông báo gì không
if (isset($_GET['status']) && $_GET['status'] === 'success') {
    echo "<p>Đăng ký thành công! Bạn có thể đăng nhập ngay.</p>";
}
?>

<!-- Nội dung trang chủ -->
<h1>Chào mừng đến với trang chủ!</h1>
<p>Để đăng nhập, vui lòng nhập thông tin của bạn.</p>

<!-- Link đến trang đăng nhập -->
<a href="login.php">Đăng nhập</a>
