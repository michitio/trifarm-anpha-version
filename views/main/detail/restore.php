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