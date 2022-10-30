<?php
require_once "modules/db_module.php";
require_once "models/product.php";

class ModelProduct
{
    private function queryProduct($query)
    {
        $result = executeQuery($query);
        $data = [];
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product(
                $rows["id"],
                $rows["name"],
                $rows["img"],
                $rows["desc"],
                $rows["price"],
                $rows["old_price"],
                $rows["location"],
                $rows["star"],
                $rows["review"],
                $rows["sold"],
                $rows["unit"],
                $rows["id_category"]
            );
            array_push($data, $product);
        }
        return $data;
    }

    public function getProductList()
    {
        return $this->queryProduct("SELECT * FROM tb_product");
    }

    public function getProductListLimit($num, $page)
    {
        return $this->queryProduct("SELECT * FROM tb_product limit " . $page . ", " . $num);
        // $data;
    }

    public function getProductListByCategory($id_cate)
    {
        return $this->queryProduct("SELECT * FROM tb_product WHERE id_category=" . $id_cate);
    }

    public function getProduct($id)
    {
        $allProduct = $this->getProductList();
        foreach ($allProduct as $product)
            if ($product->getId() === $id)
                return $product;

        return null;
    }

    public function searchProduct($key)
    {
        return $this->queryProduct("SELECT * FROM tb_product WHERE `name` LIKE '%" . $key . "%'");
    }
}
