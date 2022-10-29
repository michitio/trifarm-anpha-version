<?php

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

            // $product = $this->ModelProduct->getProduct($id);

            // if ($product == null) {
            //     include "views/notfound/notfound.php";
            // } else {
            //     $category = $this->ModelCategory->getCategory($product->getIdCategory());
                $info = ['search', 'product'];

                include "views/basepage.php";
            // }
        } else
            include "views/notfound/notfound.php";
    }
}
