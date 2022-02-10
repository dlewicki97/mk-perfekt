<section class="single_news">
    <div class="d-flex flex-wrap">
        <div class="p-0 p-lg-3 col-12 col-lg-6">
            <div class="bg-picture lazy position-relative" style="height: 300px"
                data-bg="<?= file_url($promotional_action->photo) ?>.webp" title="<?= $promotional_action->alt ?>">
                <a data-lightbox="gallery" href="<?= file_url($promotional_action->photo) ?>.webp">
                    <div class="mask"><img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>"
                            alt="<?= $layout_elements->alt2 ?>"></div>
                </a>
            </div>
        </div>
        <div class="p-0 p-lg-3 col-12 col-lg-6 d-flex flex-column justify-content-center">
            <h3 class="single-product-title"><?= $promotional_action->title ?></h3>
            <div class="single-product-description">
                <?= $promotional_action->description ?>
            </div>
        </div>
        <div class="p-0 p-lg-3 col-12">
            <div class="single-product-description">
                <?= $promotional_action->long_description ?>
            </div>
        </div>
    </div>

    <div class="d-flex flex-wrap">
        <?php foreach ($gallery as $photo) : ?>
        <div class="p-0 p-lg-3 col-12 col-lg-4 mb-4 mb-lg-0">
            <div class="bg-picture lazy position-relative" style="height: 200px" title="<?= $photo->alt ?>"
                data-bg="<?= file_url($photo->photo) ?>.webp">
                <a data-lightbox="gallery" href="<?= file_url($photo->photo) ?>.webp">
                    <div class="mask"><img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>"
                            alt="<?= $layout_elements->alt2 ?>"></div>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>