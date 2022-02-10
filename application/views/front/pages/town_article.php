<section class="about">
    <div class="d-flex flex-wrap justify-content-between mb-5">
        <div class="col-12 col-lg-4">
            <a data-lightbox="about" href="<?= file_url($value->photo) ?>">
                <div class="bg-picture lazy about-photo" title="<?= $value->alt ?>"
                    data-bg="<?= file_url($value->photo) ?>"></div>
            </a>
        </div>
        <div class="col-12 col-lg-7">
            <?php if ($value->title) : ?>
            <h2 class="contact-title"><?= $value->title ?></h2>
            <?php endif; ?>
            <?= $value->short_description ?>
        </div>
    </div>
    <div class="my-4">
    <?= $value->description ?>
    </div>
</section>