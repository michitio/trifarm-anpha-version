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

    public function product()
    {
        // $categories = $this->ModelCategory->getCategoryList();
        if (isset($_GET['id']))
            echo $_GET['id'];
        // if (isset($_GET['name']))
        // echo "hello";
        // echo $_GET['name'];
        // $info = ['detail', 'product', $id];

        // include "views/basepage.php";
    }
}
