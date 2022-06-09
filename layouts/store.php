<?php
$isEntry = false;
include "../inc/inc.header.php";
?>
    <div class="store-layout">
        <div class="container">
            <div class="row m-0">
                <div class="main-title col-12">
                    <h2>Poshlost Shop</h2>
                </div>

                <!--<div class="store-filter-container col-lg-3">-->
                    <!--<div class="store-filter"></div>-->
                <!--</div>-->

                <div class="store-products-container col-12">
                    <?
                    include __DIR__ . "/../inc/dummy-data.php";

                    if ($products) {
                        ?>
                        <div class="store-products-list">
                            <?
                            foreach ($products as $product) {
                                include __DIR__ . "/../components/product-card.php";
                            }
                            ?>
                        </div>
                        <?
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?
include "../inc/inc.footer.php";