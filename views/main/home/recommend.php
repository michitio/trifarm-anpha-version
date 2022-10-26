<!-- content Gợi ý cho bạn -->
<div class="content__container container">
    <h3 class="content__header">
        <i class="content__header-icon ri-user-star-line"></i>
        <span>Gợi ý cho bạn</span>
    </h3>

    <div class="row">

        <?php
        foreach ($recommends as $product) {
            echo "
        <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'>
            <a href='./product/detail.html' class='card'>
                <div style='background: center / contain no-repeat url(" . $product->getImg() . ");' class='card-img-top'></div>
                <div class='card-body'>
                    <h5 class='product__name'>" . $product->getName() . "</h5>

                    <div class='product__rating'>
                        <i class='product__rating-yellow ri-star-fill'></i>
                        <i class='product__rating-yellow ri-star-fill'></i>
                        <i class='product__rating-yellow ri-star-fill'></i>
                        <i class='product__rating-yellow ri-star-fill'></i>
                        <i class='product__rating-yellow ri-star-fill'></i>
                    </div>

                    <div class='product__price'>
                        <p class='product__price-old'>" . ($product->getPrice() + 5000) . " ₫</p>
                        <p class='product__price-new'>" . $product->getPrice() . " ₫</p>
                    </div>
                    <p class='product__sold'>Đã bán 1000+</p>
                </div>
            </a>
        </div>";
        }
        ?>
    </div>

    <a href="#" class="content__container-see-more">Xem thêm</a>
</div>