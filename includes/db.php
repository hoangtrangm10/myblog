<?php
$host = "127.0.0.1";
$user = "XIU"; 
$pass = "xungkhium10"; // Nhập mật khẩu bạn dùng để mở Workbench
$dbname = "database";
$port = 3306; // Cổng mặc định của Workbench

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>