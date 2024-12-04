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

<form method="POST" action="login.php">
    <label for="username">Tên người dùng:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Đăng nhập</button>
</form>

<?php
session_start();
// Sau khi xác thực đăng nhập thành công
if ($loginSuccess) {
    // Cập nhật trạng thái đăng nhập vào localStorage trên trình duyệt
    $_SESSION['is_logged_in'] = true;
    // Chuyển hướng đến trang chủ
    header("Location: index.php"); // Hoặc trang bạn muốn chuyển hướng
    exit;
} else {
    echo "Thông tin đăng nhập không chính xác!";
}
?>



