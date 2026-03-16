document.addEventListener('DOMContentLoaded', () => {
    // 1. Hiệu ứng xuất hiện dần (Fade-in) khi cuộn trang
    const cards = document.querySelectorAll('.card');
    
    const revealOnScroll = () => {
        const triggerBottom = window.innerHeight / 5 * 4;
        cards.forEach(card => {
            const cardTop = card.getBoundingClientRect().top;
            if (cardTop < triggerBottom) {
                card.style.opacity = "1";
                card.style.transform = "translateY(0)";
            }
        });
    };

    // Thiết lập trạng thái ban đầu cho cards
    cards.forEach(card => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        card.style.transition = "all 0.6s ease-out";
    });

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Gọi ngay khi load trang

    // 2. Hiệu ứng rung (Shake) khi click vào bài viết bị khóa
    const lockedPosts = document.querySelectorAll('.vip');
    lockedPosts.forEach(post => {
        const overlay = post.querySelector('.lock-overlay');
        if (overlay) {
            overlay.addEventListener('click', (e) => {
                // Hiệu ứng rung nhẹ để cảnh báo
                post.style.animation = "shake 0.5s";
                setTimeout(() => {
                    post.style.animation = "";
                }, 500);
            });
        }
    });

    // 3. Hiệu ứng nút bấm khi di chuột (Hover Scale)
    const buttons = document.querySelectorAll('button, .btn-vip');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            btn.style.transform = "scale(1.05)";
            btn.style.transition = "transform 0.2s";
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = "scale(1)";
        });
    });
});

// 4. Hàm hiển thị thông báo đẹp (Toast Notification)
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.innerText = message;
    toast.style.position = 'fixed';
    toast.style.bottom = '20px';
    toast.style.right = '20px';
    toast.style.padding = '12px 25px';
    toast.style.borderRadius = '5px';
    toast.style.color = 'white';
    toast.style.zIndex = '1000';
    toast.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)';
    toast.style.backgroundColor = type === 'success' ? '#2ecc71' : '#e74c3c';
    toast.style.animation = 'slideIn 0.5s ease-out';

    document.body.appendChild(toast);

    setTimeout(() => {
        toast.style.animation = 'fadeOut 0.5s forwards';
        setTimeout(() => toast.remove(), 500);
    }, 3000);
}

// Kiểm tra nếu có tham số status=success trên URL thì hiện Toast
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get('status') === 'success') {
    showToast("Đăng ký thành viên Pro thành công!");
}