<?php
require_once ("../Model/user.model.php");
?>

<?php
$username = $_POST['username'];
$password = $_POST['password'];
$result = Account::Login($username, $password);
if ($result->num_rows > 0) {
    session_start();

    // Thiết lập biến session
    $_SESSION["loggedin"] = true;

    // Chuyển hướng đến trang index.php
    header("location: dashbroad.php");
    exit;
} else {
    // Đăng nhập thất bại
    echo "Đăng nhập thất bại. Vui lòng kiểm tra lại tên đăng nhập và mật khẩu.";
}
?>