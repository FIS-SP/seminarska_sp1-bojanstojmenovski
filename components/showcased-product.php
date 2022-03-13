<div class="showcased-product <?= $key % 2 == 0 ? 'image-left' : 'image-right' ?>">
    <div class="product-image">
        <div class="image-wrapper">
            <img src="<?= $product['images'][0] ?>" alt="Product Image">
        </div>
        <?
        if ($product['after']) {
            ?>
            <img src="<?= $product['after'] ?>" alt="decoration" class="img-decoration">
            <?
        }
        ?>
    </div>
    <div class="product-content">
        <h3 class="product-name"><?= $product['name'] ?></h3>
        <p class="product-description"><?= $product['description'] ?></p>
        <div class="product-tools">
            <span class="product-price"><?= $product['price'] ?>&euro;</span>
            <a href="" class="btn add-to-cart">Buy now</a>
        </div>
    </div>
</div>