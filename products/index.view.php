<div class="row">
    <div class="item">
    <?php foreach($products as $product): ?>
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
                <p class="price">$<?= $product->price ?></p>
                <p class="price">$<?= $product->offered_price ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>