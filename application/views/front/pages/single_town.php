<section class="about">
    <div class="d-flex flex-wrap justify-content-between mb-5">
        <div class="col-12 col-lg-4">
            <a data-lightbox="about" href="<?= file_url($town->photo) ?>">
                <div class="bg-picture lazy about-photo" title="<?= $town->alt ?>"
                    data-bg="<?= file_url($town->photo) ?>"></div>
            </a>
        </div>
        <div class="col-12 col-lg-7">
            <?php if ($town->title) : ?>
            <h2 class="contact-title"><?= $town->title ?></h2>
            <?php endif; ?>
            <?= $town->description ?>
        </div>
    </div>
    <div class="d-flex flex-wrap products-row">
    <?php foreach ($articles as $i => $key) : ?>
            <div class="col-sm-6 col-lg-3 mb-5 <?php if ($i == 0) echo 'pl-0 pr-0 pr-lg-3';
                                                elseif ($i == count($articles) - 1) echo 'pr-0 pl-0 pl-lg-3';
                                                else echo 'p-0 p-lg-3' ?> ">
                <div class="header-li ">
                    <div class="products-title">
                        <?= $key->title ?>
                        <div class="header-border"></div>
                    </div>
                </div>

                <div class="bg-picture lazy products-photo" title="<?= $key->alt ?>" data-bg="<?= file_url($key->photo) ?>">
                    <!-- <a href="<?= base().'produkt-region/'.slug($key->title).'/'.$town->id.'/'.$key->id ?>"> -->
                        <div class="">
                            <img class="lazy" data-src="<?= file_url($key->photo2) ?>" alt="<?= $key->alt ?>">
                        </div>
                    <!-- </a> -->
                </div>
                <div><?= mb_substr($key->short_description, 0, 100, 'UTF-8');
                                                    if (strlen($key->short_description) > 100) {
                                                        echo '...';
                                                    }
                                                    ?></div>
                <a href="<?= base().'produkt-region/'.slug($key->title).'/'.$town->id.'/'.$key->id ?>">
                <button class="button outline hover-desc">ZOBACZ WIĘCEJ</button>
            </a>
            </div>

        <?php endforeach; ?>
        </div>
</section>