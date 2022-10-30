<div class="search-side">
    <nav class="search__category search__item">
        <h3 class="search__heading">
            <i class="search__heading-icon ri-menu-4-line"></i>
            <span class="search__heading-title">danh mục sản phẩm</span>
        </h3>

        <ul class="category-list">
            <li class="category-item radio-box-item">
                <input type='radio' hidden id='option1' name='category' value='option1'>
                <label for='option1' class='category-item__link'>Tất cả sản phẩm</label>
            </li>

            <li class="category-item radio-box-item">
                <input type='radio' hidden id='option2' name='category' value='option2' checked>
                <label for='option2' class='category-item__link'>Gạo, nếp</label>
            </li>

            <li class="category-item radio-box-item">
                <input type='radio' hidden id='option3' name='category' value='option3'>
                <label for='option3' class='category-item__link'>Thực phẩm ăn liền</label>
            </li>

            <li class="category-item radio-box-item">
                <input type='radio' hidden id='option4' name='category' value='option4'>
                <label for='option4' class='category-item__link'>Rượu</label>
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
            <li class="price-item radio-box-item">
                <input type='radio' hidden id='option5' name='price' value='option5' checked>
                <label for='option5' class='price-item__link'>Dưới 100.000</label>
            </li>

            <li class="price-item radio-box-item">
                <input type='radio' hidden id='option6' name='price' value='option6'>
                <label for='option6' class='price-item__link'>100.000 — 300.000</label>
            </li>

            <li class="price-item radio-box-item">
                <input type='radio' hidden id='option7' name='price' value='option7'>
                <label for='option7' class='price-item__link'>Trên 300.000</label>
            </li>

            <li class="price-item radio-box-item">
                <input type='radio' hidden id='option8' name='price' value='option8'>
                <label for='option8' class='price-item__link'>Chọn khoảng giá</label>
                <div class="price-box">
                    <input id="price-start" type="text" value="0" onfocus="saveValue(event)" onkeyup="formatStringPrice(event)">
                    <span>-</span>
                    <input id="price-end" type="text" value="0" onfocus="saveValue(event)" onkeyup="formatStringPrice(event)">
                    <input type="hidden" id="price-hidden" value="">
                </div>
                <a href="#" class="price-submit">Áp dụng</a>
            </li>

        </ul>
    </nav>

    <nav class="search__react search__item">
        <h3 class="search__heading">
            <i class="search__heading-icon ri-star-line"></i>
            <span class="search__heading-title">đánh giá</span>
        </h3>

        <ul class="react-list">
            <li class="react-item radio-box-item">
                <input type='radio' hidden id='option9' name='react' value='option9' checked>
                <label for='option9' class='react-item__link'>
                    <div class="product__rating">
                        <i class="product__rating-yellow ri-star-fill"></i>
                    </div>

                    <span>Tất cả</span>
                </label>
            </li>

            <ul class="react-list">
                <li class="react-item radio-box-item">
                    <input type='radio' hidden id='option10' name='react' value='option10'>
                    <label for='option10' class='react-item__link'>
                        <div class="product__rating">
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                        </div>

                        <span>từ 5 sao</span>
                    </label>
                </li>

                <li class="react-item radio-box-item">
                    <input type='radio' hidden id='option11' name='react' value='option11'>
                    <label for='option11' class='react-item__link'>
                        <div class="product__rating">
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>

                        <span>từ 4 sao</span>
                    </label>
                </li>

                <li class="react-item radio-box-item">
                    <input type='radio' hidden id='option12' name='react' value='option12'>
                    <label for='option12' class='react-item__link'>
                        <div class="product__rating">
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="product__rating-yellow ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>

                        <span>từ 3 sao</span>
                    </label>
                </li>
            </ul>
    </nav>
</div>