<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="../view/fontawesome-free-6.1.1-web/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/grid.css">
    <link rel="stylesheet" href="../view/css/cart.css" />
    <link rel="stylesheet" href="../view/css/log.css" />
    <link rel="stylesheet" href="../view/css/profile.css" />
    <link rel="stylesheet" href="../view/css/main.css">
    <link rel="stylesheet" href="../view/css/trangchu.css" />
</head>

<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="grid wide">
                <div class="header__wrapper">
                    <div class="header__actions">
                        <div class="header__actions-menu">
                            <i class="fa-solid fa-bars header__actions-menu-icon"></i>
                            <h3 class="header__actions-menu-title">Menu</h3>
                        </div>
                        <div class="header__actions-search">
                            <button class="header__actions-btn-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            <input type="text" class="header__actions-search-input" placeholder="Search">
                        </div>
                    </div>
                    <!-- header logo -->
                    <a href="../controller/index.php" class="header__logo">
                        <img src="../view/images/logo-chinh.jpg" alt="" class="header__logo-img">
                    </a>
                    <!-- header actions information-->
                    <div class="header__information">
                        <ul class="header__information-list">
                            <li class="header__information-item">
                                <a href="?act=login_register" class="header__information-link">
                                    <i class="fa-regular fa-user"></i>
                                </a>
                            </li>
                            <li class="header__information-item">
                                <a href="#" class="header__information-link ting">
                                    <i class="fa-regular fa-bell"></i>
                                    <span class="header__information-count-information">2</span>
                                </a>
                            </li>
                            <li class="header__information-item">
                                <a href="#" class="header__information-link">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </li>
                            <li class="header__information-item">
                                <a href="../controller/index.php?act=cart" class="header__information-link cart">
                                    <svg viewBox="0 0 26.6 25.6" class="header__information-link-cart">
                                        <polyline fill="none" points="2 1.7 5.5 1.7 9.6 18.3 21.2 18.3 24.6 6.1 7 6.1"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="2.5"></polyline>
                                        <circle cx="10.7" cy="23" r="2.2" stroke="none"></circle>
                                        <circle cx="19.7" cy="23" r="2.2" stroke="none"></circle>
                                    </svg>
                                    <span class="header__information-count-cart">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end Header -->