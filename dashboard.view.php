<section  class="homepage-slider" id="home-slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="./img/banner/banner-1.jpg" alt="" />
            </li>
            <li>
                <img src="./img/banner/banner-2.jpg" alt="" />
                <div class="intro">
                    <h1>Mid season sale</h1>
                    <p><span>Up to 50% Off</span></p>
                    <p><span>On selected items online and in stores</span></p>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="header_text">
    We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates.
    <br/>Don't miss to use our cheap abd best bootstrap templates.
</section>

<div class="main-content container-fluid" id="wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 pull-left">
                            <h4>FEATURE PRODUCTS</h4>
                        </div>
                        <div class="col-mid-6 pull-right nav-controll">
                            <a href="/products/index.php" class="bnt btn-sm btn-success">more</a>
                            <a class="left btn btn-group-sm" href="#myCarousel" data-slide="prev">Prev</a>
                            <a class="right btn btn-group-sm" href="#myCarousel" data-slide="next">Next</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <?php foreach($products1 as $product): ?>
                                            <div class="col-md-3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="#">
                                                            <img src=<?= $product->product_img_link ?> alt="" />
                                                        </a>
                                                    </p>
                                                    <a href="#" class="title"><?= $product->title ?></a>
                                                    <br/>
                                                    <a href="#" class="category"><?= $product->description ?></a>
                                                    <p class="price old-price">$<?= $product->price ?></p>
                                                    <p class="price">$<?= $product->offered_price ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="item">
                                        <?php foreach($products2 as $product): ?>
                                            <div class="col-md-3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="#">
                                                            <img src=<?= $product->product_img_link ?> alt="" />
                                                        </a>
                                                    </p>
                                                    <a href="#" class="title"><?= $product->title ?></a>
                                                    <br/>
                                                    <a href="#" class="category"><?= $product->description ?></a>
                                                    <p class="price old-price">$<?= $product->price ?></p>
                                                    <p class="price">$<?= $product->offered_price ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 pull-left">
                            <h4>LATEST PRODUCTS</h4>
                        </div>
                        <div class="col-mid-6 pull-right nav-controll">
                            <a href="/products/index.php" class="bnt btn-sm btn-success">more</a>
                            <a class="left btn btn-group-sm" href="#myCarousel-2" data-slide="prev">Prev</a>
                            <a class="right btn btn-group-sm" href="#myCarousel-2" data-slide="next">Next</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="myCarousel-2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <?php foreach($recent_products1 as $product): ?>
                                            <div class="col-md-3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="#">
                                                            <img src=<?= $product->product_img_link ?> alt="" />
                                                        </a>
                                                    </p>
                                                    <a href="#" class="title"><?= $product->title ?></a>
                                                    <br/>
                                                    <a href="#" class="category"><?= $product->description ?></a>
                                                    <p class="price old-price">$<?= $product->price ?></p>
                                                    <p class="price">$<?= $product->offered_price ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="item">
                                        <?php foreach($recent_products2 as $product): ?>
                                            <div class="col-md-3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="#">
                                                            <img src=<?= $product->product_img_link ?> alt="" />
                                                        </a>
                                                    </p>
                                                    <a href="#" class="title"><?= $product->title ?></a>
                                                    <br/>
                                                    <a href="#" class="category"><?= $product->description ?></a>
                                                    <p class="price old-price">$<?= $product->price ?></p>
                                                    <p class="price">$<?= $product->offered_price ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row feature_box">
        <div class="col-md-4 service">
            <div>
                <img src="./images/feature/feature_img_1.png">
                <h4>Buy Product</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
            </div>
        </div>
        <div class="col-md-4 service">
            <div>
                <img src="./images/feature/feature_img_2.png">
                <h4>Review Product</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
            </div>
        </div>
        <div class="col-md-4 service">
            <div>
                <img src="./images/feature/feature_img_3.png">
                <h4>Check Product</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
            </div>
        </div>

    </div>

    <div class="row brands">
        <div class="row">
            <div class="col-md-12">
                <h4>MANUFACTURES</h4>
            </div>

        </div>
        <div class="row">
            <div class="col-md-2">
                <img src="./images/brands/logo1.png">
            </div>
            <div class="col-md-2">
                <img src="./images/brands/logo2.png">
            </div>
            <div class="col-md-2">
                <img src="./images/brands/logo3.png">
            </div>
            <div class="col-md-2">
                <img src="./images/brands/logo4.png">
            </div>
            <div class="col-md-2">
                <img src="./images/brands/logo5.png">
            </div>
            <div class="col-md-2">
                <img src="./images/brands/logo6.png">
            </div>
        </div>
    </div>

    <div class="row footer">
        <div class="col-md-3">
            <h4>Navigation</h4>
            <ul class="nav">
                <li><a href="#">Homepage</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contac Us</a></li>
                <li><a href="#">Your Cart</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>

        <div class="col-md-4">
            <h4>My Account</h4>
            <ul class="nav">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">Wish List</a></li>
                <li><a href="#">Newsletter</a></li>
            </ul>
        </div>

        <div class="col-md-5">
            <p class="logo"><img src="./img/logo.png" class="site_logo" alt=""></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
            <br>
            <span class="social_icons">
                <a class="facebook" href="#">Facebook</a>
                <a class="twitter" href="#">Twitter</a>
                <a class="skype" href="#">Skype</a>
                <a class="vimeo" href="#">Vimeo</a>
            </span>
        </div>
    </div>
</div>