<?php
    include_once('../model/connect.php');
    include_once('../model/product.php');
    
    include_once('../view/header.php'); // Header

    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'index';
    }
    $sanpham = new sanpham();

    switch($act){
        // Code của trang chủ
        case 'index':
            $result = $sanpham->laySP();
            include_once('../view/home.php');
            break;
        case 'cart':
            include_once('../view/cart.php');
            break;
        case 'login_register':
            include_once('../view/login_register.php');
            break;
        case 'profile':
            include_once('../view/profile.php');
            break;
        case 'detail_product':
            include_once('../view/detail_product.php');
            break;
    }

    include_once('../view/footer.php'); //Footer
?>