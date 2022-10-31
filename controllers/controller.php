<?php

class Controller
{
    public $model;
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    public $index = 'http://localhost/trifarm-anpha-version';

    public function __construct()
    {
    }

    public function invoke()
    {

        // header("Location: $index");
        // http://www.example.com/[detail/product/id=5]
        // http://www.example.com/[search/product/name=nho~category=1~location=vietnam~price=100-300~star=4~option=new]

        $index = $this->index;
        $url = [];
        $this->params = [["index" => $this->index]];

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
            $error_log = "controller - error url";
            include "views/notfound/notfound.php";
        } else {
            // gọi hàm dẫn đến controller phụ (home, detail, search) 
            call_user_func_array([$this->controller, $this->method], $this->params);
        }
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

                // Params
                if (isset($url[2])) {
                    if ($this->getParams($url[2]))
                        $this->params = [$this->getParams($url[2])];
                    else return false;
                };
            } else return false;
        } else return false;

        return true;
    }

    // lấy data params
    public function getParams($rawString)
    {
        $params = [
            "id" => "",
            "key" => "",
            "category" => "",
            "location" => "",
            "price" => "",
            "star" => "",
            "option" => "",
            "index" => $this->index
        ];

        $rawArr = explode("~", $rawString);
        foreach ($rawArr as $element) {
            $temp = explode("=", $element);
            if (array_key_exists($temp[0], $params)) {
                if ($temp[0] == 'key' || $temp[0] == 'location') {
                    // Decode Base64
                    $decodeBase64 = base64_decode(strstr($element, $temp[1]));
                    // Decode URI
                    $decodeURI = urldecode($decodeBase64);
                } else {
                    $decodeURI = $temp[1];
                }
                $params[$temp[0]] = $decodeURI;
            } else {
                return false;
            }
        }

        return $params;
    }
}
