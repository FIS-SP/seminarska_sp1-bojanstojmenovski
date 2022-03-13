<?php
$isEntryPage = true;
?>
<div class="container-fluid p-0">
    <? include "./components/hero-video.php" ?>
</div>

<?
$showcasedProducts = [
    [
        'name' => 'Black Tee',
        'price' => 12,
        'description' => 'Poshlost black tee Spring Season 2021',
        'images' => ["/files/products/tee.png"],
        'after' => "/files/random2.png"
    ],
    [
        'name' => 'White Tee',
        'description' => 'Poshlost white tee Spring Season 2021',
        'price' => 12,
        'images' => ["/files/products/tee2.png"],
        'after' => "/files/random.png"
    ],
];

foreach ($showcasedProducts as $key=>$product) {
?>
    <div class="container p-0">
        <? include "./components/showcased-product.php" ?>
    </div>
<?
}

$galleryImages = [
    "../files/majestic.png",
    "../files/nixar.png",
    "../files/nixar2.png",
    "../files/shoot1.png",
    "../files/shoot2.png",
    "../files/miki.png",
];
?>

<div class="container-fluid p-0">
<? include "./components/gallery-slider.php" ?>
</div>