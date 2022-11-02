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

    public function searchProduct($key, $category, $location, $price, $star, $sort)
    {
        $order = [
            'default' => ' ORDER BY star*sold*review DESC',
            'newest' => ' ORDER BY id DESC',
            'top_seller' => ' ORDER BY sold DESC',
            'price_desc' => ' ORDER BY price DESC',
            'price_asc' => ' ORDER BY price ASC'
        ];

        if ($location[0] != null) {
            $locaString = ' AND (';
            foreach ($location as $keyLoca => $item) {
                if ($keyLoca != 0)
                    $locaString = $locaString . ' OR ';

                $locaString = $locaString . 'location = "' . $item . '"';
            }
            $locaString = $locaString . ')';
            $location = $locaString;
        } else
            $location = "";

        if ($star != "") {
            $star = ' AND star>=' . $star * 10;
        }

        $priceString = ($price[0] == '' ? '' : ' AND price >= ' . $price[0]) . ($price[1] == '' ? '' : ' AND price <= ' . $price[1]);
        $price = $priceString;

        // echo "SELECT * FROM tb_product 
        //     WHERE `name` LIKE '%" . $key . "%' AND `id_category` LIKE '%" . $category . "%'" . $location . $star . $order[$sort];
        return $this->queryProduct("SELECT * FROM tb_product 
            WHERE `name` LIKE '%" . $key . "%' AND `id_category` LIKE '%" . $category . "%'" . $location . $price . $star . $order[$sort]);
    }

    public function searchFilter($key)
    {
        $result = [];

        $rawData = $this->queryProduct("SELECT * FROM tb_product WHERE `name` LIKE '%" . $key . "%'");

        if ($rawData == null) {

            $result['category'] = [];
            $result['location'] = [];
            $result['price'] = ['min' => 0, 'max' => 0];

            return $result;
        }

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

        $result['category'] = $category;
        $result['location'] = $location;
        $result['price'] = $price;
        return $result;
    }
}
