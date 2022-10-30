<!-- content Gợi ý cho bạn -->
<div class="content__container container">
    <h3 class="content__header">
        <i class="content__header-icon ri-medal-2-line"></i>
        <span>Gợi ý cho bạn</span>
    </h3>

    <div class="row">

        <?php
        foreach ($recommends as $product) {
            echo "
        <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'>
            <a href='" . $index . "/detail/product/id=" . $product->getId() . "' class='card'>
                <div style='background: center / contain no-repeat url(" . $product->getImg() . ");' class='card-img-top'></div>
                <div class='card-body'>
                    <h5 class='product__name'>" . $product->getName() . "</h5>

                    <div class='product__rating'>";
            $storeStar = $product->getStar() * 10;
            for ($i = 0; $i < 5; $i++) {
                if ($storeStar >= 100) {
                    echo "<i class='product__rating-yellow ri-star-fill'></i>";
                    $storeStar -= 100;
                } else {
                    echo "<i class='product__rating-yellow ri-star-fill' style='--star-percent: " . $storeStar . "%;'></i>";
                    $storeStar = 0;
                }
            };
            echo "</div>

                    <div class='product__price'>
                        <p class='product__price-old'>" . $product->getOldPrice() . "</p>
                        <p class='product__price-new'>" . $product->getPrice() . "</p>
                    </div>
                    <p class='product__sold'>Đã bán " . $product->getSold() . "</p>
                </div>
            </a>
        </div>";
        }
        ?>
    </div>

    <a href="#" class="content__container-see-more">Xem thêm</a>
</div>