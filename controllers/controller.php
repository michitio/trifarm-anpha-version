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

        // header("Location: $index");
        // http://www.example.com/[detail/product/id=5~name=helo]

        $url = [];

        // url handler
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
        } else $url = ['home', 'index'];

        // ngoại lệ url
        if ($url[0] == 'home' && !isset($url[1]))
            $url = ['home', 'index'];

        // xử lý controller không tìm thấy trang + gọi hàm kiểm tra url
        if (!$this->checkValidController($url)) {
            $this->controller = 'notfound';
            require_once "./controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;
        };

        // gọi hàm dẫn đến controller phụ (home, detail, search) 
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // kiểm tra url có hướng đến controller nào không
    public function checkValidController($url)
    {
        if (isset($url[0]) && file_exists("./controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];

            require_once "./controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;

            // Method
            if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->method = $url[1];

                if (isset($url[2])) {
                    $params = [];

                    $tempArr = explode("~", $url[2]);
                    foreach ($tempArr as $element) {
                        $temp = explode("=", $element);
                        array_push($params, $temp[1]);
                    }

                    // Params
                    $this->params = $params;
                };
            } else return false;
        } else return false;

        return true;
    }
}
