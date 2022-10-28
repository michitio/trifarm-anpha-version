<html lang="en">
<?php
$index = 'http://localhost/trifarm-anpha-version';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <h1 class="large-number">
            4<span class="center-number">0</span>4
        </h1>
        <span>Ooopps</span>
        <p>Trang bạn yêu cầu không tìm thấy. Về trang chủ thôi</p>
        <a href="<?php echo $index ?>" class="btn-home">Trang chủ</a>
    </div>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #29a143;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,
                    #57ce99,
                    #29a143,
                    #2DBF4B);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right,
                    #5bc571,
                    #24ad40);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .box {
            width: 80%;
            height: 80%;
            background-color: #e9ecef;
            text-align: center;
            border-radius: 10px;
            -webkit-box-shadow: -5px -1px 36px -3px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -5px -1px 36px -3px rgba(0, 0, 0, 0.75);
            box-shadow: -5px -1px 36px -3px rgba(0, 0, 0, 0.75);
        }

        .box .large-number,
        .box .center-number {
            font-size: 250px;
            color: #14a130;
            font-weight: 800;
            margin: 0;
        }

        .box .center-number {
            -webkit-clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        .box span {
            font-size: 32px;
            color: #666;
        }

        .box p {
            font-size: 18px;
            margin-bottom: 70px;
            color: #444;
        }

        .box .btn-home {
            text-decoration: none;
            color: #ffffff;
            background-color: #14a130;
            padding: 10px 20px;
            border-radius: 8px;
            text-transform: uppercase;
        }

        .box .btn-home:hover {
            opacity: 0.8;
        }

        @media (max-width: 767px) {

            .box .large-number,
            .box .center-number {
                font-size: 150px;
                margin-top: 40px;
                margin-bottom: 64px;
            }

            .box p {
                margin-bottom: 108px;
            }
        }
    </style>
</body>

</html>