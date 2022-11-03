<div class="filter">
    <p class="filter__header">Kết quả tìm kiếm cho `<?php echo $keyword ?>`</p>
    <div class="filter__action">
        <button class="filter__btn btn">
            <input type='radio' hidden id='default' name='sort' value='default' <?php echo $sort == 'default' ? 'checked' : ''; ?>>
            <label for='default' class='sort-item__link'>Phổ biến</label>
        </button>

        <button class="filter__btn btn">
            <input type='radio' hidden id='newest' name='sort' value='newest' <?php echo $sort == 'newest' ? 'checked' : ''; ?>>
            <label for='newest' class='sort-item__link'>Mới nhất</label>
        </button>

        <button class="filter__btn btn">
            <input type='radio' hidden id='top_seller' name='sort' value='top_seller' <?php echo $sort == 'top_seller' ? 'checked' : ''; ?>>
            <label for='top_seller' class='sort-item__link'>Bán chạy</label>
        </button>

        <button class="filter__btn btn">
            <input type='radio' hidden id='price_desc' name='sort' value='price_desc' <?php echo $sort == 'price_desc' ? 'checked' : ''; ?>>
            <label for='price_desc' class='sort-item__link'>Giá cao đến thấp</label>
        </button>

        <button class="filter__btn btn">
            <input type='radio' hidden id='price_asc' name='sort' value='price_asc' <?php echo $sort == 'price_asc' ? 'checked' : ''; ?>>
            <label for='price_asc' class='sort-item__link'>Giá thấp đến cao</label>
        </button>

        <div class="filter__page">
            <span class="filter__page-num">
                <span class="filter__page-current"><?php echo $page; ?></span> / <?php echo $totalPage; ?>
            </span>

            <div class="filter__page-control">
                <a class="filter__page-btn filter__page-left <?php echo $page == 1 ? 'filter__page-btn--disable' : '' ?>">
                    <i class="filter__page-icon fa-solid fa-chevron-left"></i>
                </a>

                <a class="filter__page-btn filter__page-right <?php echo $page == $totalPage ? 'filter__page-btn--disable' : '' ?>">
                    <i class="filter__page-icon fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    $('.filter__btn.btn').click(function(e) {
        var sort = $(this).find("input").val();
        sort = '~sort=' + sort;

        navigatedLink('sort', sort);
    });

    $('.filter__page-btn').click(function(e) {
        var page = <?php echo $page ?>;
        if ($(this).hasClass("filter__page-left"))
            page--;
        else
            page++;
        page = '~page=' + page;

        navigatedLink('page', page);
    });
</script>