<h1>Add new Product</h1>

<form action="/products/save.php" method="post">

    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input class="form-control" type="text" name="description">
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input class="form-control" type="number" name="price">
    </div>

    <div class="form-group">
        <label for="offered_price">Offered Price</label>
        <input class="form-control" type="number" name="offered_price">
    </div>

    <div class="form-group">
        <label for="product_img_link">Product image link</label>
        <input class="form-control" type="text" name="product_img_link">
    </div>

    <div class="form-group">
        <button class="form-control btn btn-success" type="submit">Submit</button> <br>
    </div>

</form>