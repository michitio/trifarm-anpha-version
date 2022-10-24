<?php

require_once "models/modelProduct.php";
require_once "models/modelCategory.php";

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
        $categories = $this->model->getCategoryList();
        $products = array();
        foreach ($categories as $category) {
            $temp = $this->model->getProductListByCategory($category->getId());
            array_push($products, $temp);
        }

        include "views/basepage.php";
    }
}
