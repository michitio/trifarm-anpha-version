<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/base.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <?php require_once "header/header.php" ?>

        <div class="main">
            <div class="nav-side">
                <!-- <?php include_once "menu.php" ?> -->
            </div>

            <div class="content">
                <?php
                // if ($index == 0)
                include_once "main/productlist.php";
                // else
                //     include_once "detailproduct.php";
                ?>
            </div>
        </div>

        <?php require_once "footer/footer.php" ?>

    </div>


    <style>
        .nav-side {
            width: 20%;
        }

        .content {
            flex: 1;
        }
    </style>
</body>

</html>