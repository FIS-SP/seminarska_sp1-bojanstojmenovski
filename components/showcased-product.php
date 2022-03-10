<div class="showcased-product <?= $key % 2 == 0 ? 'image-left' : 'image-right' ?>">
    <div class="product-image">
        <img src="<?= $product['images'][0] ?>" alt="Product Image">
    </div>
    <div class="product-content">
        <h3 class="product-name"><?= $product['name'] ?></h3>
        <p class="product-description"><?= $product['description'] ?></p>
        <div class="product-tools">
            <span class="product-price"><?= $product['price'] ?>&euro;</span>
            <a href="" class="btn add-to-cart">Shop now</a>
        </div>
    </div>
</div>