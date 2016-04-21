<?php include 'src/data.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="src/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<header>
    <h1><?php echo "Shop" ?></h1>
    <nav>
        <ul>
            <li><a href="products.html">Продукты</a></li>
            <li><a href="about.html">О нас</a></li>
            <li><a href="cart.html">Корзина</a></li>
        </ul>
    </nav>
    <div id="cart">
        <?php foreach ($cart->products as $index => $product) { ?>
            <div class="l-grid3">
                <span><?php echo $product->price ?></span>
                <a href="/removeFromCart.php?id=<?php echo $index; ?>">Удалить</a>
            </div>
        <?php } ?>
    </div>
</header>


<nav class="navbar navbar-default ">
    <div class="container-fluid ">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1 ">
            <ul class="nav navbar-nav ">
                <li><a href="# ">Link</a></li>
                <li class="dropdown ">
                    <a href="# " class="dropdown-toggle " data-toggle="dropdown " role="button "
                       aria-haspopup="true " aria-expanded="false ">Dropdown <span class="caret "></span></a>
                    <ul class="dropdown-menu ">
                        <li><a href="# ">Action</a></li>
                        <li><a href="# ">Another action</a></li>
                        <li><a href="# ">Something else here</a></li>
                        <li role="separator " class="divider "></li>
                        <li><a href="# ">Separated link</a></li>
                        <li role="separator " class="divider "></li>
                        <li><a href="# ">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left " role="search ">
                <div class="form-group ">
                    <input type="text " class="form-control " placeholder="Search ">
                </div>
                <button type="submit " class="btn btn-default ">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right ">
                <li class="dropdown ">
                    <a href="# " class="dropdown-toggle " data-toggle="dropdown " role="button "
                       aria-haspopup="true " aria-expanded="false "> В корзине <?php echo count($cart->products) ?>
                        <span class="caret "></span></a>
                    <ul class="dropdown-menu ">
                        <li><a href="# ">Action</a></li>
                        <li><a href="# ">Another action</a></li>
                        <li><a href="# ">Something else here</a></li>
                        <li role="separator " class="divider "></li>
                        <li><a href="# ">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container ">
    <div class="row ">

        <?php foreach ($warehouse->products as $index => $product) { ?>
            <div class="col-sm-6 col-md-4 ">
                <div class="thumbnail ">
                    <img src="<?php echo $product->image ?>">
                    <div class="caption ">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                        <a href="javascript:{} data-id=" 0"></a>
                        <div class="btn-group " role="group " aria-label="... ">
                            <button type="button " class="btn btn-default "><span
                                    class="glyphicon glyphicon-search "></span> О товаре
                            </button>
                            <button type="button " class="btn btn-default "><span
                                    class="glyphicon glyphicon-tree-conifer "></span></button>
                            <a href="/addToCart.php?id=<?php echo $index; ?>" class="btn btn-default ">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--                <span>--><?php //echo $product->price ?><!--</span>-->
        <!--                <a href="/addToCart.php?id=--><?php //echo $index; ?><!--">Купить</a>-->
    </div>
</div>
<div class="buffer"></div>
</div>
<footer>
    &copy; LevelUP
</footer>
</body>
</html>