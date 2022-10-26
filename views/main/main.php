<div class="main container">
    <div class="nav-side">
        <?php include_once "menu.php" ?>
    </div>

    <div class="content">
        <?php
        // if ($index == 0)
        include_once "productlist.php";
        // else
        //     include_once "detailproduct.php";
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