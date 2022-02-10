<section class="products">
    <div class="d-flex flex-wrap products-row">
        <?php foreach ($towns as $i => $key) : ?>
            <div class="col-12 col-lg-3 mb-5 <?php if ($i == 0) echo 'pl-0 pr-0 pr-lg-3';
                                                elseif ($i == count($towns) - 1) echo 'pr-0 pl-0 pl-lg-3';
                                                else echo 'p-0 p-lg-3' ?> ">
                <div class="header-li ">
                    <div class="products-title">
                        <?= $key->title ?>
                        <div class="header-border"></div>
                    </div>
                </div>

                <div class="bg-picture lazy products-photo" title="<?= $key->alt ?>" data-bg="<?= file_url($key->photo) ?>">
                    <a href="<?= base().'dla-regionu/'.slug($key->title).'/'.$key->id ?>">
                        <div class="mask">
                            <img class="lazy" data-src="<?= file_url($key->photo2) ?>" alt="<?= $key->alt ?>">
                        </div>
                    </a>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</section>