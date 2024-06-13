<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
foreach($data['css'] as $style) {
    echo '<link rel="stylesheet" href="'._WEB_ROOT.'/public/clients/css/'.$style.'.css">';
}
?>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/clients/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="brand-container">
                <h1 class="name-shop"><a href="http://localhost:8088/web/home">Angel&BB</a></h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active"><a href="http://localhost:8088/web/category/girl">Nữ</a>
                    </li>
                    <li class="menu-list-item"><a href="http://localhost:8088/web/category/boy">Nam</a></li>
                    <li class="menu-list-item"><a href="">Bán chạy</a></li>
                    <li class="menu-list-item"><a href="">Giảm giá</a></li>
                </ul>
            </div>
            <div class="account-container">
                <a href="http://localhost:8088/web/cart"><button class="cart-text"><i
                            class="fa-solid fa-cart-shopping"></i></button></a>
                <?php
if(isset($_SESSION['user'])) {
    echo '<button class="profile-text"><i class="fa-solid fa-user"></i> Profile</i></button>
    <div class="profile-dropdown dropdown-active">
        <ul>
            <li style="margin-top: 10px"><a href="http://localhost:8088/web/account/profile">Thông tin</a>
            </li>
            <li><a href="http://localhost:8088/web/auth/logout">Đăng xuất</a></li>
        </ul>
    </div>';
}
else {
    echo '<a href="http://localhost:8088/web/auth/login"><button class="profile-text">Đăng nhập</button></a>';
}
?>
            </div>
        </div>
    </div>