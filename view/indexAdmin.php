<?php 
  include "../model/config.php";
  include "../model/product.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../view/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="../view/css/globalStyle.css">
</head>

<body>
    <div id="root">
        <header class="header">
            <h2 class="header__logo">G5 Shoes Admin</h2>
            <div class="header__admin">
                <h3 class="header__admin-title">Hello admin, Tuan</h3>
                <div class="header__admin-avatar">
                    <img src="images/bichavatar.jpg" alt="user-avatar" class="header__admin-img" />
                </div>

                <div class="header__tippy">
                    <ul class="header__tippy-list">
                        <li class="header__tippy-item">
                            <a href="#" class="header__tippy-link">
                                <span class="header__icon">
                                    <i class="fa-solid fa-house header__icon"></i>
                                </span>
                                <span class="header__tippy-title">Trang chủ</span>
                            </a>
                        </li>
                        <li class="header__tippy-item js-btn-modal">
                            <span href="#" class="header__tippy-link">
                                <span class="header__icon">
                                    <i class="fa-solid fa-id-badge header__icon"></i>
                                </span>
                                <span class="header__tippy-title">Quản lý tài khoản</span>
                            </span>
                        </li>
                        <li class="header__tippy-item">
                            <a href="#" class="header__tippy-link">
                                <span class="header__icon">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </span>
                                <span class="header__tippy-title">Đăng xuất</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="sidebar">
                <h2 class="sidebar__title">Category</h2>
                <ul class="category__list">
                    <li class="category__item active">
                        <p class="category__content">
                            <i class="fa-brands fa-product-hunt category__icon"></i>
                            <span class="category__text">Manage Product</span>
                        </p>
                    </li>
                    <li class="category__item">
                        <p class="category__content">
                            <i class="fa-solid fa-message category__icon"></i>
                            <span class="category__text">Manage Comment</span>
                        </p>
                    </li>
                    <li class="category__item">
                        <p class="category__content">
                            <i class="fa-solid fa-user-group category__icon"></i>
                            <span class="category__text">Manage Account</span>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="manage-product js-tab-content active">
                    <nav class="content__nav">
                        <ul class="content__nav-list">
                            
                            <li class="content__nav-item active">
                                <p class="category__content">
                                    <i class="fa-solid fa-square-plus category__icon"></i>
                                    <span class="category__text">Add Product</span>
                                </p>
                            </li>
                            <li class="content__nav-item">
                                <p class="category__content">
                                    <i class="fa-solid fa-file-pen category__icon"></i>
                                    <span class="category__text">Edit Product</span>
                                </p>
                            </li>
                        </ul>

                        <div class="nav__line"></div>
                    </nav>
                    <div class="manage-content">
                        
                        <!-- tab add product -->
                        <div class="manage-content-tab active">
                            <h1 class="manage-content__title">Manage Add Product</h1>
                            <div class="manage-content__wrapper">
                                <form id="form-add-product" action="" method="post" >
                                    <div class="form-box">
                                        <div class="manage-content__box-left">
                                            <div class="form-group">
                                                <label for="" class="form-group__title">Tên sản phẩm</label>
                                                <input type="text" class="form-group__input"
                                                    placeholder="Ex: Nike Cortez SP">
                                                <span class="form-group__error"></span>
                                            </div>
                                            <div class="form-group mt-40">
                                                <label for="" class="form-group__title">Giá sản phẩm</label>
                                                <input type="text" class="form-group__input isPrice"
                                                    placeholder="Ex: Nike Cortez SP">
                                                <span class="form-group__error"></span>
                                            </div>
                                            <div class="form-group mt-40">
                                                <label for="" class="form-group__title">Thương hiệu sản phẩm</label>
                                                <select class="form-group__input">
                                                    <option></option>
                                                    <option>Nike</option>
                                                    <option>Adidas</option>
                                                    <option>Vans</option>
                                                </select>
                                                <span class="form-group__error"></span>
                                            </div>
                                        </div>
                                        <div class="manage-content__box-right">
                                            <div class="form-group">
                                                <label for="" class="form-group__title ">Hình sản phẩm</label>
                                                <label for="#upload" class="file-upload">
                                                    <i class="fa-solid fa-image"></i>
                                                    Upload Image
                                                </label>
                                                <input id="upload" type="file" class="form-group__input input-file"
                                                    placeholder="Ex: Nike Cortez SP">
                                                <span class="form-group__error"></span>
                                            </div>
                                            <div class="form-group mt-40">
                                                <label for="" class="form-group__title">Giá cũ (Không bắt buộc)</label>
                                                <input type="text" class="form-group__input"
                                                    placeholder="Ex: Nike Cortez SP">
                                                <span class="form-group__error"></span>
                                            </div>
                                            <div class="form-group mt-40">
                                                <label for="" class="form-group__title">Mô tả</label>
                                                <input type="text" class="form-group__input"
                                                    placeholder="Ex: Nike Cortez SP">
                                                <span class="form-group__error"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-footer">
                                        <button type="submit" class="btn-submit">Add Product</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- tab edit product -->
                        <div class="manage-content-tab">
                            <h1 class="manage-content__title">Manage Edit Product</h1>
                            <div class="content-tab-edit">
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th class="table__product-id">ID</th>
                                            <th class="table__product-name">Tên sản phẩm</th>
                                            <th   class="table__product-image" >Hình sản phẩm</th>
                                            <th class="table__product-price">Giá Sản phẩm</th>
                                            <th class="table__product-price">Giá cũ sản phẩm</th>
                                            <th class="table__product-brand">Thương hiệu sản phẩm</th>
                                            <th class="table__product-describe">Mô tả sản phẩm</th>
                                            <th class="table__product-edit">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                $query = sanpham_showAll();
                                                foreach ($query as $row) {
                                                    extract($row);
                                                    echo '
                                                       <tr>
                                                       <td>
                                                       <span class="table__tbody-id">'.$maSP.'</span>
                                                   </td>
                                                   <td>
                                                       <span class="table__tbody-name">'.$tenSP.'</span>
                                                   </td>
                                                   <td>
                                                       <div class="table__tbody-img"
                                                           style="background-image: url(../view/images/'.$hinh.')">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <span class="table__tbody-price">'.$giaTien.'</span>
                                                   </td>
                                                   <td>
                                                       <span class="table__tbody-price-old"></span>
                                                   </td>
                                                   <td>
                                                       <span class="table__tbody-brand">'.$tenLoai.'</span>
                                                   </td>
                                                   <td>
                                                       <span class="table__tbody-describe">'.$mota.'</span>
                                                   </td>
                                                  
                                                   <td>
                                                       <a class="table__tbody-link" href="#">Sửa</a>
                                                       <a class="table__tbody-link" href="#">Xoá</a>
                                                   </td>
                                                       </tr>
                                                    ';
                                                }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- content manage product -->
                </div>
                <div class="js-tab-content">
                    <nav class="content__nav">
                        <ul class="content__nav-list">
                            <li class="content__nav-comment-item active">
                                <p class="category__content">
                                    <i class="fa-solid fa-border-all category__icon"></i>
                                    <span class="category__text">All Comment</span>
                                </p>
                            </li>
                            <li class="content__nav-comment-item">
                                <p class="category__content">
                                    <i class="fa-solid fa-comment category__icon"></i>
                                    <span class="category__text">Feedback Comment</span>
                                </p>
                            </li>
                        </ul>

                        <div class="nav__line-comment"></div>
                    </nav>
                    <div class="manage-content">
                        <!-- tab all product -->
                        <div class="manage-content-comment-tab active">
                            <h1 class="manage-content__title">Manage All Comment</h1>
                            <div class="comment-all__wrapper">
                                <div class="scroll-comment">
                                    <div class="comment-all__box">
                                        <div class="comment-all__content">
                                            <div class="comment-all__content-index">1</div>
                                            <div class="comment-all__content-info">
                                                <div class="comment-all__content-info-avatar">
                                                    <img src="images/myavatar.jpg" alt="" class="comment-all__content-info-img">
                                                </div>
                                                <div class="comment-all__content-info-text">
                                                    <h3 class="comment-all__content-info-name">Cao Van Tuan</h3>
                                                    <p class="comment-all__content-info-time">14 phút trước</p>
                                                    <p class="comment-all__content-info-content-comment">Sản phẩm chất lượng tốt, giá bạn ổn lắm shop ạ, Sản phẩm chất lượng tốt, giá bạn ổn lắm shop ạ, Sản phẩm chất lượng tốt, giá bạn ổn lắm shop ạ, Sản phẩm chất lượng tốt, giá bạn ổn lắm shop ạ, hay hay lắm ạ</p>
                                                </div>
                                            </div>
    
                                            <!-- actions remove -->
                                            <div class="comment-all__actions">
                                                <button class="comment-all__actions-btn">Xoá</button>
                                            </div>
                                        </div>
                                        <div class="comment-all__content">
                                            <div class="comment-all__content-index">2</div>
                                            <div class="comment-all__content-info">
                                                <div class="comment-all__content-info-avatar">
                                                    <img src="images/bichavatar.jpg" alt="" class="comment-all__content-info-img">
                                                </div>
                                                <div class="comment-all__content-info-text">
                                                    <h3 class="comment-all__content-info-name">Nguyen Thi Ngoc Bich</h3>
                                                    <p class="comment-all__content-info-time">14 phút trước</p>
                                                    <p class="comment-all__content-info-content-comment">Sản phẩm chất lượng tốt, giá bạn ổn lắm shop ạ, Sản phẩm chất lượng tốt, giá bạn ổn lắm shop ạ</p>
                                                </div>
                                            </div>
    
                                            <!-- actions remove -->
                                            <div class="comment-all__actions">
                                                <button class="comment-all__actions-btn">Xoá</button>
                                            </div>
                                        </div>
                                        <div class="comment-all__content">
                                            <div class="comment-all__content-index">3</div>
                                            <div class="comment-all__content-info">
                                                <div class="comment-all__content-info-avatar">
                                                    <img src="images/bichavatar.jpg" alt="" class="comment-all__content-info-img">
                                                </div>
                                                <div class="comment-all__content-info-text">
                                                    <h3 class="comment-all__content-info-name">Nguyen Thi Ngoc Bich</h3>
                                                    <p class="comment-all__content-info-time">14 phút trước</p>
                                                    <p class="comment-all__content-info-content-comment">❤</p>
                                                </div>
                                            </div>
    
                                            <!-- actions remove -->
                                            <div class="comment-all__actions">
                                                <button class="comment-all__actions-btn">Xoá</button>
                                            </div>
                                        </div>
                                        <div class="comment-all__content">
                                            <div class="comment-all__content-index">2</div>
                                            <div class="comment-all__content-info">
                                                <div class="comment-all__content-info-avatar">
                                                    <img src="images/bichavatar.jpg" alt="" class="comment-all__content-info-img">
                                                </div>
                                                <div class="comment-all__content-info-text">
                                                    <h3 class="comment-all__content-info-name">Nguyen Thi Ngoc Bich</h3>
                                                    <p class="comment-all__content-info-time">14 phút trước</p>
                                                    <p class="comment-all__content-info-content-comment">Sản phẩm chất lượng tốt, giá bạn ổn lắm shop ạ, Sản phẩm chất lượng tốt, giá bạn ổn lắm shop ạ</p>
                                                </div>
                                            </div>
    
                                            <!-- actions remove -->
                                            <div class="comment-all__actions">
                                                <button class="comment-all__actions-btn">Xoá</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="manage-content-comment-tab">
                            <h1 class="manage-content__title">Manage Feedback Comment User</h1>
                            <div class="feedback-wrapper">
                                <div class="feedback-wrapper-content">
                                    <div class="feedback-wrapper-content-info-user">
                                        <div class="feedback-wrapper-content-avatar">
                                            <img src="images/myavatar.jpg" alt="" class="feedback-wrapper-content-img">
                                        </div>
                                        <div class="feedback-wrapper-content-text">
                                            <h3 class="feedback-wrapper-content-name">Cao Van Tuan</h3>
                                            <p class="feedback-wrapper-content-text-content">Sản phẩm chất lượng tốt, giá tiền phù hợp với sinh viên</p>
                                        </div>
                                    </div>
                                    <!-- feedback -->
                                    <div class="wrapper-box-feedback">
                                        <div class="wrapper-actions">
                                            <p class="feedback-wrapper-content-actions">
                                                <span class="feedback-wrapper-content-actions-text">Phản hồi</span>
                                                <i class="fa-solid fa-angle-down feedback-wrapper-content-actions-icon active"></i>
                                                <i class="fa-solid fa-angle-up feedback-wrapper-content-actions-icon"></i>
                                            </p>
                                            <button class="wrapper-actions-remove">Xoá</button>
                                        </div>
                                        <!-- phải đặt id: khác nhau để ko bị warning gg: lấy id của bình luận trong database, vd: form-feedback-id{id database = 1}-->
                                        <form id="form-feedback-id1" action="" method="post" class="form-feedback">
                                            <textarea class="form-feedback-text" placeholder="Viết lời muốn phải hồi tại đây..."></textarea>
                                            <p class="form-feedback-message">
                                                <i class="fa-solid fa-triangle-exclamation form-feedback-icon"></i>
                                                <span class="form-feedback-error"></span>
                                            </p>
                                            <div class="btn-wrapper-feedback">
                                                <button type="submit" class="send-feedback">Gửi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-wrapper">
                                <div class="feedback-wrapper-content">
                                    <div class="feedback-wrapper-content-info-user">
                                        <div class="feedback-wrapper-content-avatar">
                                            <img src="images/bichavatar.jpg" alt="" class="feedback-wrapper-content-img">
                                        </div>
                                        <div class="feedback-wrapper-content-text">
                                            <h3 class="feedback-wrapper-content-name">Nguyen Thi Ngoc Bich</h3>
                                            <p class="feedback-wrapper-content-text-content">Sản phẩm chất lượng tốt, giá tiền phù hợp với sinh viên, đánh giá 5 sao</p>
                                        </div>
                                    </div>
                                    <!-- feedback -->
                                    <div class="wrapper-box-feedback">
                                        <div class="wrapper-actions">
                                            <p class="feedback-wrapper-content-actions">
                                                <span class="feedback-wrapper-content-actions-text">Phản hồi</span>
                                                <i class="fa-solid fa-angle-down feedback-wrapper-content-actions-icon active"></i>
                                                <i class="fa-solid fa-angle-up feedback-wrapper-content-actions-icon"></i>
                                            </p>
                                            <button class="wrapper-actions-remove">Xoá</button>
                                        </div>
                                        <!-- phải đặt id: khác nhau để ko bị warning gg: lấy id của bình luận trong database, vd: form-feedback-id{id database = 2}-->
                                        <form id="form-feedback-id2" action="" method="post" class="form-feedback">
                                            <textarea class="form-feedback-text" placeholder="Viết lời muốn phải hồi tại đây..."></textarea>
                                            <p class="form-feedback-message">
                                                <i class="fa-solid fa-triangle-exclamation form-feedback-icon"></i>
                                                <span class="form-feedback-error"></span>
                                            </p>
                                            <div class="btn-wrapper-feedback">
                                                <button type="submit" class="send-feedback">Gửi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-tab-content">
                    <nav class="content__nav">
                        <ul class="content__nav-list">
                            <li class="content__nav-account-item active">
                                <p class="category__content">
                                    <i class="fa-solid fa-file-lines category__icon"></i>
                                    <span class="category__text">User Account</span>
                                </p>
                            </li>
                            <li class="content__nav-account-item">
                                <p class="category__content">
                                    <i class="fa-solid fa-file-lines category__icon"></i>
                                    <span class="category__text">Member Admin</span>
                                </p>
                            </li>
                        </ul>

                        <div class="nav__line-account"></div>
                    </nav>
                    <div class="manage-content">
                        <!-- tab all product -->
                        <div class="manage-content-account-tab active">
                            <h1 class="manage-content__title">Manage User</h1>
                            <div class="user-wrapper">
                                <div class="user-box">
                                    <table class="table-user">
                                        <thead class="thead-user">
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Actions</th>
                                        </thead>

                                        <tbody class="tbody-user">
                                            <tr class="tbody-row">
                                                <td>
                                                    <span>1</span>
                                                </td>
                                                <td class="col-user-info">
                                                    <div class="user-avatar">
                                                        <img src="images/myavatar.jpg" alt="" class="user-img">
                                                    </div>
                                                    <h3 class="user-name">Cao Van Tuan</h3>
                                                </td>
                                                <td>
                                                    <span>tuancvps19280@fpt.edu.vn</span>
                                                </td>
                                                <td>
                                                    <span>26072002</span>
                                                </td>
                                                <td>
                                                    <button class="action-btn-remove">Xoá</button>
                                                </td>
                                            </tr>
                                            <tr class="tbody-row">
                                                <td>
                                                    <span>2</span>
                                                </td>
                                                <td class="col-user-info">
                                                    <div class="user-avatar">
                                                        <img src="images/bichavatar.jpg" alt="" class="user-img">
                                                    </div>
                                                    <h3 class="user-name">Nguyen Thi Ngoc Bich</h3>
                                                </td>
                                                <td>
                                                    <span>bichntnps19281@fpt.edu.vn</span>
                                                </td>
                                                <td>
                                                    <span>10012002</span>
                                                </td>
                                                <td>
                                                    <button class="action-btn-remove">Xoá</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="manage-content-account-tab">
                            <h1 class="manage-content__title">All Member Admin</h1>
                            <div class="user-wrapper">
                                <div class="user-box">
                                    <table class="table-user">
                                        <thead class="thead-user">
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Decentralization</th>
                                            <th>Mission</th>
                                        </thead>

                                        <tbody class="tbody-user">
                                            <tr class="tbody-row">
                                                <td>
                                                    <span>1</span>
                                                </td>
                                                <td class="col-user-info">
                                                    <div class="user-avatar">
                                                        <img src="images/myavatar.jpg" alt="" class="user-img">
                                                    </div>
                                                    <h3 class="user-name">Cao Van Tuan</h3>
                                                </td>
                                                <td>
                                                    <span>tuancvps19280@fpt.edu.vn</span>
                                                </td>
                                                <td>
                                                    <span>Admin</span>
                                                </td>
                                                <td>
                                                    <span>Quản lý người dùng</span>
                                                </td>
                                            </tr>
                                            <tr class="tbody-row">
                                                <td>
                                                    <span>2</span>
                                                </td>
                                                <td class="col-user-info">
                                                    <div class="user-avatar">
                                                        <img src="images/bichavatar.jpg" alt="" class="user-img">
                                                    </div>
                                                    <h3 class="user-name">Nguyen Thi Ngoc Bich</h3>
                                                </td>
                                                <td>
                                                    <span>bichntnps19281@fpt.edu.vn</span>
                                                </td>
                                                <td>
                                                    <span>Admin</span>
                                                </td>
                                                <td>
                                                    <span>Tư vấn khách hàng</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end manage product -->
                </div>
            </div>
        </div>

        <div class="modal-profile">
            <div class="modal-overlay"></div>
            <div class="modal-wrapper">
                <div class="modal-wrapper-close">
                    <i class="fa-solid fa-circle-xmark modal-wrapper-close-icon"></i>
                </div>
                <h1 class="modal-title">Change Profile</h1>
                <div class="modal-info-current">
                    <div class="modal-info-current-avatar">
                        <img src="images/myavatar.jpg" alt="" class="modal-info-current-img" />
                    </div>
                    <h3 class="modal-info-current-name">Cao Van Tuan</h3>
                    <p class="modal-info-current-desc">Admin</p>
                </div>
                <form id="form-profile" action="" method="post" class="modal-form-profile">
                    <div class="form-group-modal">
                        <label for="" class="form-modal-title">New Your Name</label>
                        <input type="text" autocomplete="username" class="form-modal-input" placeholder="enter new your name">
                        <sapn class="form-modal-error"></sapn>
                    </div>
                    <div class="form-group-modal modal-file">
                        <label for="" class="form-modal-title">New Your Image</label>
                        <input type="file" class="form-modal-input input-modal-file" placeholder="enter new your image">
                        <sapn class="form-modal-error"></sapn>
                        <label class="sticker-file">
                            <i class="fa-solid fa-image"></i>
                            Upload image
                        </label>
                    </div>
                    <div class="form-group-modal">
                        <label for="" class="form-modal-title">New Your Password</label>
                        <input type="password" autocomplete="new-password" class="form-modal-input js-modal-password" placeholder="enter new your password">
                        <sapn class="form-modal-error"></sapn>
                    </div>
                    <div class="form-group-modal">
                        <label for="" class="form-modal-title">Enter New Your Password</label>
                        <input type="password" autocomplete="new-password" class="form-modal-input js-modal-enter-password" placeholder="retype new your password">
                        <sapn class="form-modal-error"></sapn>
                    </div>
                    <div class="modal-submit">
                        <button type="submit" class="modal-btn-submit">Done!</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="../view/js/index.js"></script>
</body>

</html>