<?php
$galleryImages = [
    "../files/majestic.png",
    "../files/nixar.png",
    "../files/nixar2.png",
    "../files/shoot1.png",
    "../files/shoot2.png",
    "../files/miki.png",
];
?>

<section class="gallery-images">
    <div class="gallery-slider slick-slider">
        <?
        foreach ($galleryImages as $img) {
        ?>
            <div class="slide-wrapper">
                <div class="slide">
                    <img src="<?= $img ?>" alt="">
                </div>
            </div>
        <?
        }
        ?>
    </div>
</section>