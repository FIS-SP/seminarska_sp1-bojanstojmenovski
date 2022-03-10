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
        'images' => ["/files/tee.png"]
    ],
    [
        'name' => 'White Tee',
        'description' => 'Poshlost white tee Spring Season 2021',
        'price' => 12,
        'images' => ["/files/tee2.png"]
    ],
];

foreach ($showcasedProducts as $key=>$product) {
?>
    <div class="container p-0">
        <? include "./components/showcased-product.php" ?>
    </div>
<?
}
?>