<?php

class Controller
{
    public $model;
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
    }

    public function invoke()
    {
        /*         if (!isset($_GET["id"])) {
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
 */
        $url = isset($_GET["url"]) ? explode("/", filter_var(trim($_GET["url"]))) : ""; // Array ( [0] => home )

        // Controller
        if (isset($url[0]) && file_exists("./controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "./controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Params
        $this->params = $url ? array_values($url) : [];

        //public/home/index
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
