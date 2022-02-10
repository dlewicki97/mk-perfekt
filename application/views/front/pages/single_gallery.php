<section class="gallery">
    <div class="d-flex flex-wrap">
        <?php foreach ($realizations as $i => $photo) : ?>
        <div class="col-lg-3 p-0">
            <a data-lightbox="ad-lightbox" href="<?= file_url($photo->photo) ?>">
                <div class="bg-picture lazy" title="<?= $photo->alt ?>" data-bg="<?= file_url($photo->photo) ?>">
                    <div class="mask"><img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>"
                            alt="<?= $layout_elements->alt2 ?>"></div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- <section class="ad-lightbox-modal">
    <div class="ad-lightbox-gallery owl-carousel owl-carousel3">
        <?php foreach ($realizations as $i => $photo) : ?>
        <img class="ad-lightbox-img" src="<?= file_url($photo->photo) ?>" alt="<?= $photo->alt ?>">
        <?php endforeach; ?>
    </div>
    <img class="ad-lightbox-arrow ad-lightbox-arrow-left left" onclick="prev()" src="<?= assets() ?>img/arrow-left.svg" alt="lewo">
    <img class="ad-lightbox-arrow ad-lightbox-arrow-right right" onclick="next()"
        src="<?= assets() ?>img/arrow-right.svg" alt="lewo">
</section> -->