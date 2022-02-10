<section class="about">
    <?php foreach ($about as $i => $about_block) : ?>
    <?php if ($i % 2 == 0) : ?>
    <div class="d-flex flex-wrap justify-content-between mb-5">
        <div class="col-12 d-block d-lg-none">
            <a data-lightbox="about" href="<?= file_url($about_block->photo) ?>">
                <div class="bg-picture lazy" style="height: 400px" title="<?= $about_block->alt ?>"
                    data-bg="<?= file_url($about_block->photo) ?>"></div>
            </a>
        </div>
        <div class="col-12 col-lg-7">
            <?php if ($about_block->title) : ?>
            <h2 class="contact-title"><?= $about_block->title ?></h2>
            <?php endif; ?>
            <?= $about_block->description ?>
        </div>
        <div class="col-12 col-lg-4 d-none d-lg-block">
            <a data-lightbox="about" href="<?= file_url($about_block->photo) ?>">
                <div class="bg-picture lazy" title="<?= $about_block->alt ?>"
                    data-bg="<?= file_url($about_block->photo) ?>"></div>
            </a>
        </div>
    </div>
    <?php else : ?>
    <div class="d-flex flex-wrap justify-content-between mb-5">
        <div class="col-12 col-lg-4">
            <a data-lightbox="about" href="<?= file_url($about_block->photo) ?>">
                <div class="bg-picture lazy about-photo" title="<?= $about_block->alt ?>"
                    data-bg="<?= file_url($about_block->photo) ?>"></div>
            </a>
        </div>
        <div class="col-12 col-lg-7">
            <?php if ($about_block->title) : ?>
            <h2 class="contact-title"><?= $about_block->title ?></h2>
            <?php endif; ?>
            <?= $about_block->description ?>
        </div>
    </div>
    <?php endif; ?>

    <?php endforeach; ?>
</section>


<section class="attributes">
    <div class="mask"></div>
    <div class="bg-picture lazy attributes-bg" title="<?= $attributes_bg->alt ?>"
        data-bg="<?= file_url($attributes_bg->photo) ?>">
        <div class="d-flex flex-wrap position-relative">
            <?php foreach ($attributes as $attr) : ?>
            <div class="col-12 col-lg-3 text-center">
                <img class="lazy" data-src="<?= file_url($attr->photo) ?>" alt="<?= $attr->alt ?>">
                <div class="attribute-title"><?= $attr->title ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="interested">
    <div class="mr-3"><?= $interested->title ?></div>
    <a href="<?= $interested->link ?>">
        <button class="button first text-hover"><?= $interested->button_name ?></button>
    </a>
</section>