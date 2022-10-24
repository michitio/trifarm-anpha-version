<?php

require_once "models/_modelProduct.php";
require_once "models/_modelCategory.php";

class home
{

    public $ModelProduct;
    public $ModelCategory;

    function __construct()
    {
        $this->ModelProduct = new ModelProduct();
        $this->ModelCategory = new ModelCategory();
    }

    public function index()
    {
        $categories = $this->ModelCategory->getCategoryList();
        $products = array();
        foreach ($categories as $category) {
            $temp = $this->ModelProduct->getProductListByCategory($category->getId());
            array_push($products, $temp);
        }

        include "views/basepage.php";
    }
}
