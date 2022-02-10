<section class="offers">
    <div class="bg-picture lazy offers-bg" title="<?= $products_desc->alt ?>"
        data-bg="<?= file_url($products_desc->photo) ?>">
        <div class="mask"></div>
        <div class="d-flex flex-wrap offers-row">
            <div class="col-12">
                <h3 class="section-title"><?= $products_desc->title ?></h3>
                <p class="section-subtitle"><?= $products_desc->subtitle ?></p>
            </div>
            <?php foreach ($products as $i => $product) : ?>
            <div class="col-12 col-lg-3 <?php if ($i == 0) echo 'pl-0';
                                            elseif ($i == count($products) - 1) echo 'pr-0'; ?>">
                <div class="bg-picture lazy offer-photo" title="<?= $product->alt ?>"
                    data-bg="<?= file_url($product->photo) ?>.webp">
                    <div class="mask bg-picture lazy" title="<?= $products_desc->alt2 ?>"
                        data-bg="<?= file_url($products_desc->photo2) ?>.webp">
                        <div class="position-relative d-flex  w-100 h-100">
                            <div class="offer-title"><?= $product->title ?></div>
                            <div class="offer-button bg-picture lazy" title="<?= $products_desc->alt3 ?>"
                                data-bg="<?= file_url($products_desc->photo3) ?>.webp">
                                <a href="<?= base() . "produkty-kategoria/$product->id/" . slug($product->title) ?>">
                                    <div class="mask">
                                        <img class="lazy" data-src="<?= file_url($products_desc->photo4) ?>"
                                            alt="<?= $products_desc->alt4 ?>">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>


            <div class="col-12 text-center mt-4">
                <a href="<?= $products_desc->link ?>">
                    <button class="button outline hover-desc"><?= $products_desc->button_name ?></button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="realizations">
    <h3 class="section-title"><?= $realizations_desc->title ?></h3>
    <p class="section-subtitle"><?= $realizations_desc->subtitle ?></p>


    <div class="owl-carousel owl-carousel1">
        <?php foreach ($realizations as $realizations_row) : ?>
        <div class="d-flex flex-wrap realizations-row">
            <?php foreach ($realizations_row as $realization) : ?>
            <div class="col-12 col-lg-3">
                <div class="bg-picture lazy realizations-photo" title="<?= $realization->alt ?>"
                    data-bg="<?= file_url($realization->photo) ?>.webp">
                    <a data-lightbox="realizations" href="<?= file_url($realization->photo) ?>">
                        <div class="mask">
                            <img class="lazy magnify" height="0" data-src="<?= file_url($layout_elements->photo2) ?>"
                                alt="<?= $layout_elements->alt2 ?>">
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>


        </div>
        <?php endforeach; ?>
    </div>
    <div class="d-flex flex-wrap">
        <div class="col-12 text-center mt-4">
            <a href="<?= $realizations_desc->link ?>">
                <button class="button outline hover-desc"><?= $realizations_desc->button_name ?></button>
            </a>
        </div>
    </div>
</section>

<section class="brands">
    <h3 class="section-title"><?= $brands_desc->title ?></h3>
    <p class="section-subtitle"><?= $brands_desc->subtitle ?></p>

    <div class="owl-carousel owl-carousel2 brands-row">
        <?php foreach ($brands as $i => $brand) : ?>
        <div class="col-12">
            <a href="<?= base() . "marki/$brand->id/" . slug($brand->title) ?>">
                <div class="bg-picture  brand-photo <?php if ($i != 0) echo 'border-left-0' ?>">
                    <img class="owl-lazy" style="height: <?= $brand->size ?>" data-src="<?= file_url($brand->photo) ?>"
                        alt="<?= $brand->alt ?>">
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="news">
    <h3 class="section-title"><?= $news_desc->title ?></h3>
    <p class="section-subtitle"><?= $news_desc->subtitle ?></p>

    <div class="news-row flex-wrap d-flex">
        <?php foreach ($news as $i => $info) : ?>
        <div class="col-12 col-lg-4 <?php if ($i == 0) {
                                            echo 'pl-0';
                                        } elseif ($i == count($news) - 1) {
                                            echo 'pr-0';
                                        }
                                        ?> pl-0">
            <div>
                <div class="bg-picture lazy news-photo" title="<?= $info->alt ?>"
                    data-bg="<?= file_url($info->photo) ?>.webp"></div>
                <p class="news-date"><?= $info->created ?></p>
                <h4 class="news-title"><?= $info->title ?></h4>
                <div class="news-description"><?= substr($info->description, 0, 100);
                                                    if (strlen($info->description) > 100) {
                                                        echo '...';
                                                    }
                                                    ?></div>

            </div>
            <div>
                <a href="<?= base() . "aktualnosci/$info->id/" . slug($info->title) ?>">
                    <button class="button first text-hover"><?= $info->button_name ?></button>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>