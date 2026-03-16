<div class="auth-container">
    <div class="info-vip">
        <h2>Tại sao nên đăng ký Member Pro?</h2>
        <ul>
            <li>Mở khóa 100% bài viết chuyên sâu.</li>
            <li>Nhận tài liệu Ebook độc quyền.</li>
            <li>Hỗ trợ 1-1 từ Admin.</li>
        </ul>
    </div>
    <div class="forms">
        <form action="auth.php" method="POST">
            <h3>Đăng ký VIP</h3>
            <input type="hidden" name="action" value="register">
            <input type="text" name="fullname" placeholder="Họ tên" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <button type="submit">Đăng ký ngay</button>
        </form>
        <hr>
        <form action="auth.php" method="POST">
            <h3>Đăng nhập</h3>
            <input type="hidden" name="action" value="login">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</div>