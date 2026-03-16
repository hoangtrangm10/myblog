<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Blog Member Pro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav>
        <div class="logo">MY BLOG</div>
        <ul>
            <li><a href="index.php?page=home">Trang chủ</a></li>
            <li><a href="index.php?page=sach">Sách</a></li>
            <li><a href="index.php?page=lifestyle">Lifestyle</a></li>
            <?php if(isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php">Thoát (<?php echo $_SESSION['user_name']; ?>)</a></li>
            <?php else: ?>
                <li><a href="index.php?page=login_vip" class="btn-vip">Đăng nhập/VIP</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<div class="container">