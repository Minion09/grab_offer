<html>
    <head>
        <title>Offer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/flexslider.css">
        <link rel="stylesheet" type="text/css" href="../css/common.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/product-box.css">
        <link rel="stylesheet" type="text/css" href="../css/feature-box.css">
        <link rel="stylesheet" type="text/css" href="../css/brands.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
    </head>

    <body>
        <div id="top-bar" class="container">
            <div class="row">
                <div class="col-md-4">
                    <form method="POST" class="search_form">
                        <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="account pull-right">
                        <ul class="user-menu">
                            <?php if(array_key_exists('user_id',$_SESSION)): ?>
                                <li><a href="/users/sign_out.php">Sign Out</a></li>
                            <?php else: ?>
                                <li><a href="/users/sign_up.php">Sign up</a></li>
                                <li><a href="/users/sign_in.php">Sign in</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <nav class="navbar menu">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img class="menu-logo" src="../img/logo.png">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-2">
                        <ul class="nav navbar-nav">

                            <?php if(array_key_exists('user_role', $_SESSION) && $_SESSION['user_role'] == 'admin'): ?>
                                <li><a href="/products/new.php">Add new product</a></li>
                            <?php endif; ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php

            require $view;

            ?>

        </div>



        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>
    </body>
</html>
