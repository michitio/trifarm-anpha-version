<!-- sign up -->
<div class="sign signup">
    <div class="sign__container">

        <div class="sign__header">
            <h3 class="sign__title">Đăng ký</h3>
            <span class="opacity-hover sign_in_switch sign__switch">Đăng nhập</span>
        </div>

        <div class="sign__form">
            <div class="row">
                <div class="col">
                    <input class="sign__form-input" name="fullname" type="text" placeholder="Họ và tên" />
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input class="sign__form-input" name="username" type="text" placeholder="Tên đăng nhập" />
                </div>
            </div>

            <div class="row gx-4">
                <div class="col">
                    <input class="sign__form-input" name="password" type="password" placeholder="Mật khẩu" />
                </div>

                <div class="col">
                    <input class="sign__form-input" name="repassword" type="password" placeholder="Xác nhận mật khẩu" />
                </div>
            </div>

            <?php
            $url = $index . '/modules/captcha.php';
            $img = $_SERVER["DOCUMENT_ROOT"] . '/trifarm-anpha-version/assets/img/login/captcha_img.png';
            file_put_contents($img, file_get_contents($url));
            ?>

            <div class="row" style="align-items: center;">
                <div class="col-3">
                    <img class="img_captcha" src="<?php echo $index ?>/assets/img/login/captcha_img.png" alt="">
                </div>
                <div class="col" style="margin-left: 24px;">
                    <input class="sign__form-input" name="captcha" type="text" placeholder="Nhập mã xác thực" />
                </div>
            </div>
        </div>

        <div class="sign__info">
            <p class="sign__form-policy">Bằng việc đăng ký, bạn đã đồng ý với TriFarm về
                <a href="" class="opacity-hover sign__form-link">Điều khoản dịch vụ</a> &
                <a href="" class="opacity-hover sign__form-link">Chính sách bảo mật</a>
            </p>
        </div>

        <div class="sign__controls">
            <button class="btnReturn dark-hover btn">TRỞ LẠI</button>
            <button class="btnSignUp opacity-hover btn btn--primary">ĐĂNG KÝ</button>
        </div>
    </div>

    <div class="sign__withsocial">
        <a href="#" class="opacity-hover btn btn btn--withicon">
            <i class="sign__withsocial-icon ri-facebook-fill"></i>
            <span class="sign__withsocial-content">Kết nối với Facebook</span>
        </a>

        <a href="#" class="opacity-hover btn btn btn--withicon">
            <i class="sign__withsocial-icon ri-google-fill"></i>
            <span class="sign__withsocial-content">Kết nối với Google</span>
        </a>
    </div>
</div>

<script>
    $('.btnSignUp').click(function(e) {
        var fullname = $("input*[name='fullname']").val();
        var username = $("input[name='username']").val();
        var password = $("input[name='password']").val();
        var repassword = $("input[name='repassword']").val();
        var captcha = $("input[name='captcha']").val();

        var paramsArr = {
            fullname,
            username,
            password,
            repassword,
            captcha
        };

        // Turn the data object into an array of URL-encoded key/value pairs.
        let urlEncodedData = "",
            urlEncodedDataPairs = [],
            name;
        for (name in paramsArr) {
            urlEncodedDataPairs.push(name + '=' + encodeURIComponent(paramsArr[name]));
        }

        var http = new XMLHttpRequest();
        var url = '<?php echo $index ?>/login/signup';
        var params = urlEncodedDataPairs.join('&');
        http.open('POST', url, true);

        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        http.onreadystatechange = function() { //Call a function when the state changes.
            if (http.readyState == 4 && http.status == 200) {
                alert(http.responseText);
            }
        }
        http.send(params);
    });
</script>