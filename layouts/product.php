<?php
$isEntry = false;
include "../inc/inc.header.php";
include "../inc/dummy-data.php";
$productId = $_GET['product_id'];
foreach ($products as $p) {
    if ($p['id'] == $productId) $product = $p;
}
?>
    <div class="product-layout">
        <div class="layout-container container">

            <div class="product-image">
                <img src="<?= $product['images'][0] ?>" alt="<?= $product['name'] ?>">
            </div>

            <div class="product-content">

                <div class="content-head">
                    <h2 class="product-title"><?= $product['name'] ?></h2>
                    <div class="stock-status">
                        <span>Sold Out</span>
                    </div>
                </div>

                <div class="product-description"><?= $product['description'] ?></div>

                <div class="product-price"><?= $product['price'] ?>&euro;</div>

                <div class="product-variants">
                    <h4>Choose a size</h4>
                    <form>
                        <div class="product-variant">
                            <input type="radio" name="size" id="size-xl" value="xl">
                            <label for="size-xl">XL</label>
                        </div>
                        <div class="product-variant">
                            <input type="radio" name="size" id="size-l">
                            <label for="size-l">L</label>
                        </div>
                        <div class="product-variant">
                            <input type="radio" name="size" id="size-m">
                            <label for="size-m">M</label>
                        </div>
                        <div class="product-variant">
                            <input type="radio" name="size" id="size-s">
                            <label for="size-s">S</label>
                        </div>
                    </form>
                </div>

                <div class="product-actions">
                    <div class="qty-input">
                        <button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
                        <input class="product-qty" type="number" name="product-qty" min="0" max="10" value="1">
                        <button class="qty-count qty-count--add" data-action="add" type="button">+</button>
                    </div>
                    <button class="btn btn-primary">Add to cart</button>
                </div>
            </div>

        </div>
    </div>
<?
include "../inc/inc.footer.php";