<?php
$isEntry = false;
include "../inc/inc.header.php";
?>
    <div class="store-layout">
        <div class="container row m-0">
            <div class="main-title col-12">
                <h2>Poshlost Shop</h2>
            </div>

            <div class="store-filter-container col-lg-3"></div>

            <div class="store-products-container col-lg-9">
                <?
                include __DIR__ . "/../inc/products-dummy-data.php";

                if ($products) {
                    ?>
                    <div class="store-products-list">
                        <?
                        foreach ($products as $product) {
                            ?>
                            <div class="product-card">
                                <div class="product-card__initial">
                                    <div class="product-image">
                                        <img src="<?= $product['images'][0] ?>" alt="<?= $product['name'] ?>">
                                    </div>
                                    <span class="product-title"><?= $product['name'] ?></span>
                                    <span class="product-price"><?= $product['price'] ?>&euro;</span>
                                </div>

                                <div class="product-card__additional">
                                    <form action="add-to-cart">
                                        <input type="number" value="1" class="quantity-input">
                                        <button type="submit" class="add-to-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <?
                }
                ?>
            </div>
        </div>
    </div>
<?
include "../inc/inc.footer.php";