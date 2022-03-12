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