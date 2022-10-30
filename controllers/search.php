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

            $products = $this->ModelProduct->searchProduct($key);

            $info = ['search', 'product'];

            include "views/basepage.php";
        } else {
            $error_log = "search - unset data";
            include "views/notfound/notfound.php";
        }
    }
}
