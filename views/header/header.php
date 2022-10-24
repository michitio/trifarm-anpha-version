<link rel="stylesheet" href="./assets/css/base.css">
<link rel="stylesheet" href="./assets/css/header.css">

<link rel="stylesheet" href="./assets/fonts/fontawesome-v6/css/all.min.css">
<link rel="stylesheet" href="./assets/fonts/remixicon_fonts/remixicon.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">


<div class="header">
    <div class="grid">
        <nav class="navbar">
            <ul class="navbar__list">
                <!-- qr header -->
                <li class="white-text-hover navbar__item navbar__item-qr">
                    <span class="">Tải ứng dụng</span>
                    <div class="navbar__qr">
                        <img class="navbar__qr-img" src="assets/img/downloads-app/qr-download-app.png" alt="qr-download-app">
                        <div class="navbar__qr-app">
                            <a href="#" class="navbar__qr-link">
                                <img class="navbar__qr-app-img" src="assets/img/downloads-app/app-store.png" alt="app-store">
                            </a>
                            <a href="#" class="navbar__qr-link">
                                <img class="navbar__qr-app-img" src="assets/img/downloads-app/google-play.png" alt="google-play">
                            </a>
                        </div>
                    </div>
                </li>
                <!-- kết nối header -->
                <li class="navbar__item">
                    <span class="anti-opacity-hover" style="margin-right: 4px;">Kết nối</span>
                    <i class="opacity-hover navbar__icon fa-brands fa-square-facebook"></i>
                    <i class="opacity-hover navbar__icon fa-brands fa-facebook-messenger"></i>
                </li>
            </ul>

            <ul class="navbar__list">

                <!-- noti header -->
                <li class="white-text-hover navbar__item navbar__item-noti">

                    <div class="">
                        <i class="navbar__icon fa-solid fa-bell"></i>
                        <span class="">Thông báo</span>
                    </div>

                    <div class="navbar__notify">
                        <div class="anti-cursor-hover navbar__notify-header">Thông báo mới nhận</div>
                        <ul class="navbar__notify-list">
                            <li class="navbar__notify-item">
                                <a href="" class="navbar__notify-link">
                                    <img src="./assets/img/noti/hot-sale.png" alt="" class="navbar__notify-img">
                                    <div class="navbar__notify-info">
                                        <p class="navbar__notify-title">Sale 50% sản phẩm bạn có thể cần</p>
                                        <p class="navbar__notify-content">Trái cây, trứng, sữa. Món
                                            gì cũng có, gì cũng rẻ.</p>
                                    </div>
                                </a>
                            </li>

                            <li class="navbar__notify-item">
                                <a href="" class="navbar__notify-link">
                                    <img src="./assets/img/noti/chat.png" alt="" class="navbar__notify-img">
                                    <div class="navbar__notify-info">
                                        <p class="navbar__notify-title">TriFarm mách bạn</p>
                                        <p class="navbar__notify-content">Sản phẩm bạn thích đang giảm sốc! Mua
                                            sắm ngay!</p>
                                    </div>
                                </a>
                            </li>

                            <li class="navbar__notify-item">
                                <a href="" class="navbar__notify-link">
                                    <img src="./assets/img/noti/coupon.png" alt="" class="navbar__notify-img">
                                    <div class="navbar__notify-info">
                                        <p class="navbar__notify-title">Sale giữa tháng sắp đến cùng 4 voucher
                                            hot</p>
                                        <p class="navbar__notify-content">Lưu sớm voucher 15k đơn từ 99k. Săn
                                            ngay voucher 800k đơn từ 2 triệu. Lưu nhanh voucher, săn deal cực
                                            rẻ!</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="opacity-hover navbar__notify-footer">
                            <a href="" class="navbar__notify-footer-link">
                                Xem tất cả
                            </a>
                        </div>
                    </div>
                </li>

                <li class="opacity-hover navbar__item">
                    <i class="navbar__icon fa-sharp fa-solid fa-circle-question"></i>
                    Hỗ trợ
                </li>

                <li class="sign_up navbar__sign white-text-hover navbar__item navbar__item--sepa f-weight-500">
                    Đăng ký</li>
                <li class="sign_in navbar__sign white-text-hover navbar__item f-weight-500">Đăng nhập</li>

                <li class="white-text-hover navbar__user navbar__item">
                    <img src="./assets/img/avt-user/blue.png" alt="" class="navbar__user-avt">
                    <span class="navbar__user-name">Nguyễn Như Trung</span>

                    <ul class="navbar__user-menu">
                        <li class="dark-hover navbar__user-item"><a href="">Tài khoản</a></li>
                        <li class="dark-hover navbar__user-item"><a href="">Đơn mua</a></li>
                        <li class="dark-hover navbar__user-item navbar__user-item-sepa"><a href="">Đăng xuất</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>

        <!-- header-with-search -->
        <div class="header-with-search">
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                    <img class="header__logo-img" src="./assets/img/mybrand/trifarm.png" alt="TriFarm">
                </a>
            </div>

            <div class="header__search">
                <div class="search__input-wraper">
                    <input class="search__input" placeholder="Tìm sản phẩm, danh mục hay thương hiệu mong muốn ..." type="text">

                    <!-- search history -->
                    <div class="header__search-history">
                        <p class="header__search-history-title">Lịch sử tìm kiếm</p>
                        <ul class="header__search-history-list">
                            <li class="dark-hover header__search-history-item">
                                <a href="">Thanh long ruột đỏ</a>
                            </li>
                            <li class="dark-hover header__search-history-item">
                                <a href="">Xoài cát Hoà Lộc</a>
                            </li>
                            <li class="dark-hover header__search-history-item">
                                <a href="">Dưa gang Nhật</a>
                            </li>
                            <li class="dark-hover header__search-history-item">
                                <a href="">Nho xanh Ninh Thuận</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end history -->
                </div>

                <a href="../search/search.html" class="primary-bg-hover search__btn btn--primary btn">
                    <i class=" search__icon ri-search-line"></i>
                </a>
            </div>
            <div class="header__cart">
                <div class="cursor-hover header__cart-wrap">
                    <img class="cart__icon" src="./assets/img/icons/cart.png" alt="">
                    <span class="cart__number">4</span>

                    <div class="cart__list--noitem">
                        <div class="anti-opacity-hover cart__list--noitem-wrap cart__list">
                            <img class="cart__list--noitem-img" src="./assets/img/cart-empty3.png" alt="">
                            <p class="cart__list--noitem-content">Chưa có sản phẩm</p>
                        </div>
                    </div>

                    <div class="cart__list--haveitem">
                        <div class="anti-cursor-hover cart__list">
                            <p class="anti-cursor-hover cart__list-header">Sản phẩm đã thêm</p>

                            <ul class="dark-hover cart__list--item">
                                <!-- cart item -->
                                <li class="cart__item">
                                    <img class="cart__item-img" src="https://amthuc.weba.vn/shop/images/amthuc/product/xoaikeo.png" alt="">
                                    <div class="cart__item-info">
                                        <div class="cart__item-row">
                                            <p class="cart__item-name">Xoài cát Hoà Lộc</p>
                                            <div class="cart__item-price-wraper">
                                                <span class="cart__item-price">53.000đ</span>
                                                <span class="cart__item-multi">x</span>
                                                <span class="cart__item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="cart__item-row">
                                            <span class="cart__item-description">Phân loại: Xoài xanh, 1
                                                kg</span>
                                            <span class="cart__item-remove">Xóa</span>
                                        </div>

                                    </div>
                                </li>

                                <!-- cart item -->
                                <li class="cart__item">
                                    <img class="cart__item-img" src="./assets/img/category-img/trung.png" alt="">
                                    <div class="cart__item-info">
                                        <div class="cart__item-row">
                                            <p class="cart__item-name">Trứng gà công nghiệp VISSAN tiệt trùng
                                            </p>
                                            <div class="cart__item-price-wraper">
                                                <span class="cart__item-price">39.000đ</span>
                                                <span class="cart__item-multi">x</span>
                                                <span class="cart__item-qnt">1</span>
                                            </div>
                                        </div>
                                        <div class="cart__item-row">
                                            <span class="cart__item-description">Phân loại: L, 1 vỉ</span>
                                            <span class="cart__item-remove">Xóa</span>
                                        </div>

                                    </div>
                                </li>

                                <!-- cart item -->
                                <li class="cart__item">
                                    <img class="cart__item-img" src="./assets/img/category-img/ruou.png" alt="">
                                    <div class="cart__item-info">
                                        <div class="cart__item-row">
                                            <p class="cart__item-name">Nước gạo lên men cao cấp</p>
                                            <div class="cart__item-price-wraper">
                                                <span class="cart__item-price">205.000đ</span>
                                                <span class="cart__item-multi">x</span>
                                                <span class="cart__item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="cart__item-row">
                                            <span class="cart__item-description">Phân loại: 310 ml</span>
                                            <span class="cart__item-remove">Xóa</span>
                                        </div>

                                    </div>
                                </li>

                                <!-- cart item -->
                                <li class="cart__item">
                                    <img class="cart__item-img" src="./assets/img/category-img/mut.png" alt="">
                                    <div class="cart__item-info">
                                        <div class="cart__item-row">
                                            <p class="cart__item-name">Mứt dâu Đà Lạt</p>
                                            <div class="cart__item-price-wraper">
                                                <span class="cart__item-price">79.000đ</span>
                                                <span class="cart__item-multi">x</span>
                                                <span class="cart__item-qnt">1</span>
                                            </div>
                                        </div>
                                        <div class="cart__item-row">
                                            <span class="cart__item-description">Phân loại: 500 g</span>
                                            <span class="cart__item-remove">Xóa</span>
                                        </div>

                                    </div>
                                </li>
                            </ul>

                            <a class="primary-bg-hover cart__list--view btn--primary btn">Xem giỏ hàng</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>