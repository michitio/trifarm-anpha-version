<div class="content__container container">
    <div class="detail row">
        <div class="product__image col-xl-5">
            <div class="product__img-wraper">
                <div style='background: center / contain no-repeat url(<?php echo $product->getImg() ?>);' class='product__img'></div>
            </div>
        </div>

        <div class="product__info col-xl-7">
            <h1 class="product__name"><?php echo $product->getName() ?></h1>

            <div class="product__location">
                <span class="product__location-label">Xuất xứ:</span>
                <a href="#" class="product__location-link">Việt Nam</a>
            </div>

            <div class="product__react">

                <a href="#" class="product__rating">
                    <span class="product__rating-desc">4.2</span>
                    <i class="product__rating-yellow ri-star-fill"></i>
                    <i class="product__rating-yellow ri-star-fill"></i>
                    <i class="product__rating-yellow ri-star-fill"></i>
                    <i class="product__rating-yellow ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </a>

                <a href="#" class="product__review">
                    <span class="product__review-desc">561</span>
                    <span class="product__review-label">Đánh Giá</span>
                </a>

                <a href="#" class="product__sold">
                    <span class="product__sold-desc">1500</span>
                    <span class="product__sold-label">Đã Bán</span>
                </a>

            </div>

            <div class="product__price">
                <p class="product__price-new"><?php echo ($product->getPrice() + 5000) ?></p>
                <p class="product__price-old"><?php echo $product->getPrice() ?></p>
            </div>

            <div class="product__modify">
                <span class="product__modify-label">Dung tích:</span>
                <span class="product__modify-choosing">500ml</span>

                <div class="product__modify-option">
                    <button class="product__modify-btn-active product__modify-btn">500 ml</button>
                    <button class="product__modify-btn">1 lít</button>
                </div>
            </div>

            <div class="product__ship separator__top">
                <div class="product__ship-address">
                    <span class="product__ship-label">Giao đến</span>
                    <span class="product__ship-choosing">P.Bến Nghé, Q.1, Hồ Chí Minh</span> -
                    <a class="product__ship-change" href="#">Đổi địa chỉ</a>
                </div>
                <div class="product__ship-time-price">
                    <img class="product__ship-img" src="<?php echo $index ?>/assets/img/shipper/jnt-express.png" alt="">
                    <div class="product__ship-info">
                        <span class="product__ship-time">Ngày mai, trước 9:00</span>
                        <span class="product__ship-price">
                            <span class="product__ship-price-label">Phí vận chuyển:</span>
                            <span class="product__ship-price-new">0₫</span>
                            <span class="product__ship-price-old">14.000₫</span>
                        </span>
                    </div>
                </div>

            </div>

            <div class="product__quantity separator__top">
                <span class="product__quantity-label">Số lượng</span>
                <div class="product__quantity-wrapper">
                    <div class="product__quantity-box">
                        <div class="product__quantity-decrease">
                            <i class="ri-subtract-line"></i>
                        </div>
                        <input class="product__quantity-input" type="text" value="1">
                        <div class="product__quantity-increase">
                            <i class="ri-add-fill"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product__action">
                <a class="product__action-add product__action-btn" href="#">Thêm Vào Giỏ</a>
                <a class="product__action-buy product__action-btn" href="#">Mua Ngay</a>
            </div>
        </div>

    </div>
</div>

<script src="<?php echo $index ?>/assets/js/formatPrice.js"></script>