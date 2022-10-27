<div class="main container">
    <div class="nav-side">
        <?php include_once "menu.php" ?>
    </div>

    <div class="content">
        <?php
        include_once "productlist.php";
        ?>
    </div>
</div>


<style>
    .main {
        display: flex;
        margin-top: 16px;
    }

    .nav-side {
        width: 20%;
    }

    .content {
        flex: 1;
    }
</style>

<!-- controller -->
<!--         if (!isset($_GET["id"])) {
            $index = 0;

            if (isset($_GET['category'])) {
                $categories = [$this->model->getCategory($_GET['category'])];
                $products = [$this->model->getProductListByCategory($_GET['category'])];
            } else {
                $categories = $this->model->getCategoryList();
                $products = array();
                foreach ($categories as $category) {
                    $temp = $this->model->getProductListByCategory($category->getId());
                    array_push($products, $temp);
                }
            }
        } else {
            $index = 1;
            $product = $this->model->getProduct($_GET["id"]);
        }

        include "views/basepage.php";
-->