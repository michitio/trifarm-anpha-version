<div class="search-side">
    <nav class="search__category search__item">
        <h3 class="search__heading">
            <i class="search__heading-icon ri-menu-4-line"></i>
            <span class="search__heading-title">danh mục sản phẩm</span>
        </h3>

        <ul class="category-list">
            <li class="category-item">
                <a href="#" class="category-item__link">Tất cả sản phẩm</a>
            </li>
            <li class="category-item">
                <a href="#" class="category-item__link">Gạo, nếp</a>
            </li>
            <li class="category-item">
                <a href="#" class="category-item__link">Thực phẩm ăn liền</a>
            </li>
            <li class="category-item category-item--active">
                <a href="#" class="category-item__link">Rượu</a>
            </li>
            <li class="category-item">
                <a href="#" class="category-item__link">Khác</a>
            </li>
        </ul>
    </nav>

    <nav class="search__place search__item">
        <h3 class="search__heading">
            <i class="search__heading-icon ri-map-pin-2-line"></i>
            <span class="search__heading-title">nơi bán</span>
        </h3>

        <ul class="place-list">
            <li class="place-item">
                <input class="place-item__check" type="checkbox" id="checkbox1" name="checkbox1" value="daklak">
                <label class="place-item__label" for="checkbox1"><span></span>Đắk Lắk</label>
            </li>

            <li class="place-item">
                <input class="place-item__check" type="checkbox" id="checkbox2" name="checkbox2" value="hochiminh">
                <label class="place-item__label" for="checkbox2"><span></span>Hồ Chí Minh</label>
            </li>

            <li class="place-item">
                <input class="place-item__check" type="checkbox" id="checkbox3" name="checkbox3" value="hanoi">
                <label class="place-item__label" for="checkbox3"><span></span>Hà Nội</label>
            </li>

            <li class="place-item">
                <input class="place-item__check" type="checkbox" id="checkbox4" name="checkbox4" value="thainguyen">
                <label class="place-item__label" for="checkbox4"><span></span>Thái Nguyên</label>
            </li>

            <li class="place-item">
                <input class="place-item__check" type="checkbox" id="checkbox5" name="checkbox5" value="danang">
                <label class="place-item__label" for="checkbox5"><span></span>Đà Nẵng</label>
            </li>

        </ul>
    </nav>

    <nav class="search__price search__item">
        <h3 class="search__heading">
            <i class="search__heading-icon ri-wallet-line"></i>
            <span class="search__heading-title">giá</span>
        </h3>

        <ul class="price-list">
            <li class="price-item price-item--active">
                <a href="#" class="price-item__link">Dưới 150.000</a>
            </li>
            <li class="price-item">
                <a href="#" class="price-item__link">150.000 — 550.000</a>
            </li>
            <li class="price-item">
                <a href="#" class="price-item__link">Trên 550.000</a>
            </li>
            <div class="price-choose price-item">
                <label class="price-item__link" for="price-start">Chọn khoảng giá</label>
                <div class="price-box">
                    <input id="price-start" type="text" value="0" onfocus="saveValue(event)" onkeyup="formatStringPrice(event)">
                    <span>-</span>
                    <input id="price-end" type="text" value="0" onfocus="saveValue(event)" onkeyup="formatStringPrice(event)">
                    <input type="hidden" id="price-hidden" value="">
                </div>
                <a href="#" class="price-submit">Áp dụng</a>
            </div>
        </ul>
    </nav>

    <nav class="search__react search__item">
        <h3 class="search__heading">
            <i class="search__heading-icon ri-star-line"></i>
            <span class="search__heading-title">đánh giá</span>
        </h3>

        <ul class="react-list">
            <li class="react-item">
                <a href="#" class="react-item__link">
                    <div class="product__rating">
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                    </div>

                    <span>từ 5 sao</span>
                </a>
            </li>
            <li class="react-item react-item--active">
                <a href="#" class="react-item__link">
                    <div class="product__rating">
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>

                    <span>từ 4 sao</span>
                </a>
            </li>
            <li class="react-item">
                <a href="#" class="react-item__link">
                    <div class="product__rating">
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="product__rating-yellow ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>

                    <span>từ 3 sao</span>
                </a>
            </li>
        </ul>
    </nav>
</div>