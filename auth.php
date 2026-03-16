<?php
session_start();
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($action == 'register') {
        $fullname = $_POST['fullname'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (fullname, email, password, is_vip) VALUES ('$fullname', '$email', '$hashed_password', 1)";
        if (mysqli_query($conn, $sql)) {
    // Thay vì echo alert, ta điều hướng về trang kèm một tham số
    header("Location: index.php?page=login_vip&status=success");
	}
    } elseif ($action == 'login') {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($res);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['fullname'];
            $_SESSION['is_vip'] = $user['is_vip'];
            header("Location: index.php");
        } else {
            echo "<script>alert('Sai thông tin!'); window.history.back();</script>";
        }
    }
}
?>