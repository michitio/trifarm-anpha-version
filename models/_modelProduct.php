<?php
require_once "modules/db_module.php";
require_once "models/product.php";

class ModelProduct
{
    public function getProductList()
    {
        $result = executeQuery("SELECT * FROM tb_product");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product($rows["id"], $rows["name"], $rows["img"], $rows["desc"], $rows["price"], $rows["id_category"]);
            array_push($data, $product);
        }
        return $data;
    }

    public function getProductListByCategory($id_cate)
    {
        $result = executeQuery("SELECT * FROM tb_product WHERE id_category=" . $id_cate);
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product($rows["id"], $rows["name"], $rows["img"], $rows["desc"], $rows["price"], $rows["id_category"]);
            array_push($data, $product);
        }
        return $data;
    }

    public function getProduct($id)
    {
        $allProduct = $this->getProductList();
        foreach ($allProduct as $product)
            if ($product->getId() === $id)
                return $product;

        return null;
    }


}
