<h1>Chuyên mục Sách</h1>
<div class="grid">
    <div class="card"><h3>Bài viết miễn phí 1</h3><p>Nội dung...</p></div>
    <div class="card vip">
        <h3>[VIP] Bí mật tư duy triệu phú</h3>
        <?php if(isset($_SESSION['is_vip'])): ?>
            <p>Nội dung độc quyền dành cho bạn!</p>
        <?php else: ?>
            <div class="lock-overlay"><a href="index.php?page=login_vip">Đăng ký VIP để xem</a></div>
        <?php endif; ?>
    </div>
</div>