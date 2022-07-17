<?php
    include_once('../model/connect.php');
    include_once('../model/product.php');
    
    include_once('../view/header.php'); // Header

    if(isset($GET['act'])){
        $act = $GET['act'];
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
    }

    include_once('../view/footer.php'); //Footer
?>