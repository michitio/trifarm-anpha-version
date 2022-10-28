<?php

require_once "models/_modelProduct.php";
require_once "models/_modelCategory.php";

class detail
{

    public $ModelProduct;
    public $ModelCategory;

    function __construct()
    {
        $this->ModelProduct = new ModelProduct();
        $this->ModelCategory = new ModelCategory();
    }

    public function product($id)
    {
        $product = $this->ModelProduct->getProduct($id);
        $category = $this->ModelCategory->getCategory($product->getIdCategory());
        $info = ['detail', 'product'];

        include "views/basepage.php";
    }
}
