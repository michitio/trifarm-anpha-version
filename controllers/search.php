<?php

// require_once "models/product.php";
require_once "models/_modelProduct.php";
require_once "models/_modelCategory.php";

class search
{

    public $ModelProduct;
    public $ModelCategory;

    function __construct()
    {
        $this->ModelProduct = new ModelProduct();
        $this->ModelCategory = new ModelCategory();
    }

    public function product($data)
    {
        if (isset($data['index']) && isset($data['keyword'])) {
            $index = $data['index'];
            $keyword = $data['keyword'];
            $category = $data['category'];
            $sort = $data['sort'];
            $location = $data['location'];
            $locationArr = explode('-', $location);
            $star = $data['star'];
            $price = $data['price'];
            $page = $data['page'];
            $priceArr = str_replace("_", "", $price);
            $priceArr = explode('-', $priceArr);

            $products = $this->ModelProduct->searchProduct($keyword, $category, $locationArr, $priceArr, $star, $sort);
            $filter = $this->ModelProduct->searchFilter($keyword);

            $cateList = $filter['category'];
            $locaList = $filter['location'];
            $priceList = $filter['price'];

            $priceList['max'] = number_format($priceList['max'], 0, ',', '.');
            $priceList['min'] = number_format($priceList['min'], 0, ',', '.');

            $info = ['search', 'product'];

            include "views/basepage.php";
        } else {
            $error_log = "search - unset data";
            include "views/notfound/notfound.php";
        }
    }
}
