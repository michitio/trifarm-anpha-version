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
        $recommends = $this->ModelProduct->getProductListLimit(18, 0);
        $hotsale = $this->ModelProduct->getProductListLimit(6, 3);
        $info = ['home', 'index'];

        include "views/basepage.php";
    }
}
