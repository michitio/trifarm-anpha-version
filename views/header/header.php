<div class="header">
    <div class="container">
        <div class="header__wrapper row gx-2">

            <div class="header__search-mobile  col-1  d-md-none">
                <label for="header__search-control" class="header__search-mobile">
                    <i class="header__search-mobile-icon ri-search-line"></i>
                </label>
            </div>

            <div class="header__logo  offset-3 col-3  offset-md-0 col-md-2  col-lg-1-5">
                <a href="<?php echo $index ?>" class="header__logo-link">
                    <img class="header__logo-img" src="<?php echo $index ?>/assets/img/mybrand/trifarm.png" alt="TriFarm">
                </a>
            </div>

            <input type="checkbox" hidden id="header__search-control">
            <label for="header__search-control" class="header__search-panel d-md-none"></label>
            <div class="header__search  d-none  d-md-flex  offset-lg-0-5 col-lg-7">

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

                <button class="primary-bg-hover search__btn btn--primary btn">
                    <i class=" search__icon ri-search-line"></i>
                </button>
            </div>

            <div class="header__account  d-none d-lg-flex col-lg-2">
                <div class="header__account-wrapper">
                    <svg class="account__avt" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                    </svg>

                    <div class="account__text">

                        <!-- đã đăng nhập -->
                        <div class="account__user">
                            <span class="account__text-sm">Tài khoản</span>
                            <span class="account__user-name account__text-lg">Nguyễn Như Trung</span>

                            <ul class="account__user-menu">
                                <li class="dark-hover account__user-item"><a href="">Tài khoản</a></li>
                                <li class="dark-hover account__user-item"><a href="">Đơn mua</a></li>
                                <li class="dark-hover account__user-item account__user-item-sepa"><a href="">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>

                        <!-- chưa đăng nhập -->
                        <div class="account__sign">
                            <span class="account__text-sm sign_up">Đăng ký</span>
                            <span class="account__text-lg sign_in">Đăng nhập</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="header__cart  offset-2 col-1  offset-md-0-25 col-md-0-75  offset-lg-0 col-lg-1  d-flex justify-md-center">
                <div class="cursor-hover header__cart-wrap">
                    <div class="cart__icon" style="background: center / contain no-repeat url(<?php echo $index ?>/assets/img/icons/cart.png);" alt="">
                        <span class="cart__number">4</span>
                    </div>
                    <span class="cart__text  d-none d-lg-block">Giỏ Hàng</span>

                    <div class="cart__list--noitem">
                        <div class="anti-opacity-hover cart__list--noitem-wrap cart__list">
                            <img class="cart__list--noitem-img" src="<?php echo $index ?>/assets/img/cart-empty3.png" alt="">
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
                                    <img class="cart__item-img" src="<?php echo $index ?>/assets/img/category-img/trung.png" alt="">
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
                                    <img class="cart__item-img" src="<?php echo $index ?>/assets/img/category-img/ruou.png" alt="">
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
                                    <img class="cart__item-img" src="<?php echo $index ?>/assets/img/category-img/mut.png" alt="">
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

            <div class="header__menu-mobile  offset-1 col-1  offset-md-0 col-md-1  d-block d-lg-none">
                <label for="header__menu-control" class="  d-flex justify-md-center">
                    <svg class="header__menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z" />
                    </svg>
                </label>

                <input type="checkbox" hidden id="header__menu-control">
                <label for="header__menu-control" class="header__menu-panel"></label>

                <ul class="header__menu-list">

                    <label for="header__menu-control" class="header__menu-close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </label>
                    <div class="header__menu-close--replace"></div>


                    <svg class="account__avt" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                    </svg>
                    <li class="account__user account__user-name header__menu-separate">Nguyễn Như Trung</span>


                    <li class="header__menu-item account__sign sign_up">
                        <a class="header__menu-link" href="">
                            <i class="header__menu-list-icon ri-add-line"></i>
                            <span class="header__menu-text">Đăng ký</span>
                        </a>
                    </li>
                    <li class="header__menu-item header__menu-separate account__sign sign_in">
                        <a class="header__menu-link" href="">
                            <i class="header__menu-list-icon ri-login-circle-line"></i>
                            <span class="header__menu-text">Đăng nhập</span>
                        </a>
                    </li>


                    <li class="header__menu-item account__user">
                        <a class="header__menu-link" href="">
                            <i class="header__menu-list-icon ri-contacts-line"></i>
                            <span class="header__menu-text">Tài khoản</span>
                        </a>
                    </li>

                    <li class="header__menu-item account__user">
                        <a class="header__menu-link" href="">
                            <i class="header__menu-list-icon ri-bill-line"></i>
                            <span class="header__menu-text">Đơn mua</span>
                        </a>
                    </li>


                    <li class="header__menu-item">
                        <a class="header__menu-link" href="">
                            <i class="header__menu-list-icon ri-notification-2-line"></i>
                            <span class="header__menu-text">Thông báo</span>
                        </a>
                    </li>
                    <li class="header__menu-item header__menu-separate">
                        <a class="header__menu-link" href="">
                            <i class="header__menu-list-icon ri-headphone-line"></i>
                            <span class="header__menu-text">Hỗ trợ</span>
                        </a>
                    </li>

                    <li class="header__menu-item account__user">
                        <a class="header__menu-link" href="">
                            <i class="header__menu-list-icon ri-logout-circle-r-line"></i>
                            <span class="header__menu-text">Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="replace-header"></div>

<script>
    function searchHandler() {
        if ($('.search__input').val().trim() != "" && $('.search__input').val().trim() != " ") {
            // Trim
            var rawString = $('.search__input').val().trim();
            // Encode URI
            var searchURI = encodeURIComponent(rawString);
            // Encode Base64
            var searchBase64 = btoa(searchURI);
            // Lưu biến vào link và chuyển trang
            var temp = `<?php echo $index ?>/search/product/key=${searchBase64}`;
            window.location.href = temp;
        }
    }

    $('.search__btn').click(searchHandler);

    $('.search__input').keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            searchHandler();
        }
    });
</script>