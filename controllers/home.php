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
        // $products = array();
        // foreach ($categories as $category) {
        //     $temp = $this->ModelProduct->getProductListByCategory($category->getId());
        //     array_push($products, $temp);
        // }
        
        $categories = $this->ModelCategory->getCategoryList();
        $recommends = $this->ModelProduct->getProductListLimit(18, 0);
        $info = ['home', 'index'];

        include "views/basepage.php";
    }
}
