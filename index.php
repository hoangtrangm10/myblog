<?php
session_start();
require_once 'includes/db.php';

include 'views/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'sach', 'lifestyle', 'login_vip'];

if (in_array($page, $allowed_pages)) {
    include "views/$page.php";
} else {
    include "views/home.php";
}

include 'views/footer.php';
?>