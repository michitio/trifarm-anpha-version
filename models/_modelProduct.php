<?php
require_once "modules/db_module.php";
require_once "models/product.php";
require_once "models/_modelCategory.php";

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

    public function searchFilter($key)
    {
        $rawData = $this->queryProduct("SELECT * FROM tb_product WHERE `name` LIKE '%" . $key . "%'");

        $cateArr = [];
        foreach ($rawData as $product) {
            array_push($cateArr, $product->getIdCategory());
        }

        // category
        $cateArr = array_unique($cateArr);
        sort($cateArr);

        $category = [];
        $this->ModelCategory = new ModelCategory();

        foreach ($cateArr as $cate) {
            array_push($category, $this->ModelCategory->getCategory($cate));
        }

        // location
        $location = [];
        foreach ($rawData as $product) {
            array_push($location, $product->getLocation());
        }

        $location = array_unique($location);
        sort($location);

        // price
        $price = [];
        $price['max'] = $rawData[0]->getPrice();
        $price['min'] = $rawData[0]->getPrice();
        foreach ($rawData as $product) {
            if ($product->getPrice() > $price['max']) {
                $price['max'] = $product->getPrice();
            } elseif ($product->getPrice() < $price['min']) {
                $price['min'] = $product->getPrice();
            }
        }

        $result = [];
        $result['category'] = $category;
        $result['location'] = $location;
        $result['price'] = $price;
        return $result;
    }
}
