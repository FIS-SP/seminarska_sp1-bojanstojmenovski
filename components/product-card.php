<div class="product-card">
    <div class="product-card__top">

        <div class="product-image">
            <img src="<?= $product['images'][0] ?>" alt="<?= $product['name'] ?>">
        </div>

        <div class="product-actions">
            <form name="add-to-favorites" method="POST">
                <input type="hidden" name="product-id" value="<?= $product['id'] ?>">
                <button type="button" class="add-to-favorites action">
                    <i class="fa-light fa-heart"></i>
                </button>
            </form>
            <a href="/layouts/product.php?product_id=<?= $product['id'] ?>" class="add-to-cart action">
                <i class="fa-light fa-cart-shopping"></i>
            </a>
        </div>

    </div>

    <div class="product-card__bottom">

        <div class="basic-info">
            <span class="product-title"><?= $product['name'] ?></span>
            <span class="product-price"><?= $product['price'] ?>&euro;</span>
        </div>

        <div class="actions-status">
            <!--            <i class="fa-solid fa-heart favorites-added"></i>-->
            <!--            <i class="fa-solid fa-cart-circle-check cart-added"></i>-->
        </div>

    </div>
</div>