<h1>Chuyên mục Lifestyle</h1>
<div class="grid">
    <div class="card"><h3>Thói quen buổi sáng</h3><p>Nội dung...</p></div>
    <div class="card vip">
        <h3>[VIP] Lộ trình thay đổi bản thân 30 ngày</h3>
        <?php if(isset($_SESSION['is_vip'])): ?>
            <p>Nội dung lộ trình chi tiết...</p>
        <?php else: ?>
            <div class="lock-overlay"><a href="index.php?page=login_vip">Đăng ký VIP để xem</a></div>
        <?php endif; ?>
    </div>
</div>