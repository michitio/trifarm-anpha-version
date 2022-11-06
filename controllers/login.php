<?php
session_start();

require_once "models/_modelUser.php";

class login
{

    public $ModelUser;

    function __construct()
    {
        $this->ModelUser = new ModelUser();
    }

    public function signup()
    {
        if (
            isset($_POST['fullname'])
            && isset($_POST['username'])
            && isset($_POST['password'])
            && isset($_POST['repassword'])
            && isset($_POST['captcha'])
        ) {
            if (
                $this->validateLenUP($_POST['username']) //username phải lớn hơn 8 và nhỏ hơn 30 kí tự
                && $this->validateLenUP($_POST['password']) //password phải lớn hơn 8 và nhỏ hơn 30 kí tự
                && $_POST['password'] == $_POST['repassword'] //Kiểm tra 2 ô mật khẩu có giống nhau
                && (($_SESSION['captcha_text'] == $_POST['captcha'])) //captcha nhập đúng
            ) {
                //nếu username đã tồn tại trong CSDL
                if ($this->ModelUser->existsUsername($_POST["username"])) {
                    echo "Tên đăng nhập này đã tồn tại, vui lòng chọn tên đăng nhập khác";
                } else {
                    //nếu username chưa tồn tại thì cho đăng kí
                    $this->ModelUser->SignUp($_POST["username"], $_POST["password"], $_POST["fullname"]);
                    echo "Đăng kí thành công!";
                }
            } else {
                //nếu các điều kiện không thoả mãn
                echo "Vui lòng kiểm tra lại thông tin!";
            }
        }
    }

    function validateLenUP($up)
    {
        return strlen($up) >= 8 && strlen($up) <= 30;
    }
}
