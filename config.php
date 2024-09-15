<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "admin"; // Thay bằng tên người dùng MySQL của bạn
$password = "";     // Thay bằng mật khẩu MySQL của bạn
$dbname = "admin"; // Thay bằng tên cơ sở dữ liệu của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
