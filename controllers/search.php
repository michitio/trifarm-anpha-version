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
        if (isset($data['index']) && isset($data['key'])) {
            $index = $data['index'];
            $key = $data['key'];

            $filter = $this->ModelProduct->searchFilter($key);

            $products = $this->ModelProduct->searchProduct($key);
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
