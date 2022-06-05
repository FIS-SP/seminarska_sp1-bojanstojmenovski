<?php
$position = $key % 2 == 0 ? 'left' : 'right';
?>
<div class="showcased-product image-<?=$position?>">
    <div class="product-image" data-aos="fade-<?= $position == 'left' ? 'right' : 'left' ?>" data-aos-once="true">
        <div class="image-wrapper">
            <img src="<?= $product['images'][0] ?>" alt="Product Image">
        </div>
        <?
        if ($product['after']) {
            ?>
            <img src="<?= $product['after'] ?>"
                 alt="decoration"
                 class="img-decoration"
                 data-aos="fade-<?= $position == 'left' ? 'right' : 'left' ?>"
                 data-aos-once="true"
                 data-aos-delay="200"
            >
            <?
        }
        ?>
    </div>
    <div class="product-content" data-aos="fade-<?= $position ?>" data-aos-once="true">
        <h3 class="product-name"><?= $product['name'] ?></h3>
        <p class="product-description"><?= $product['description'] ?></p>
        <div class="product-tools">
            <span class="product-price"><?= $product['price'] ?>&euro;</span>
            <a href="" class="btn btn-primary add-to-cart">Buy now</a>
        </div>
    </div>
</div>