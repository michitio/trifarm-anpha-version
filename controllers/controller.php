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
        $index = 'http://localhost/trifarm-anpha-version';

        // http://www.example.com/[detail/product/id=5~name=helo]

        $url = [];

        if (isset($_GET["url"])) {
            $urlString = trim($_GET["url"]);
            $urlString = filter_var($urlString, FILTER_SANITIZE_URL);

            $temp = explode("/", $urlString);
            $page = $temp[0];
            array_push($url, $page);

            if (isset($temp[1])) {
                $method = $temp[1];
                array_push($url, $method);
            }

            if (isset($temp[2])) {
                $param = $temp[2];
                array_push($url, $param);
            }

        }


        // Controller
        if (isset($url[0]) && file_exists("./controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
        }

        require_once "./controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            } else {
                $this->controller = 'notfound';
                // header("Location: $index");
                require_once "./controllers/" . $this->controller . ".php";
                $this->controller = new $this->controller;
            }
        }

        // $temp = explode("=", $temp[2]);
        // $_GET[$temp[0]] = temp[1];
        // $_GET['name'] = 'trung';

        // echo $temp[0];
        // echo $temp[1];

        // Params
        $this->params = [];

        // gọi hàm dẫn đến controller phụ (home, detail, search) 
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
