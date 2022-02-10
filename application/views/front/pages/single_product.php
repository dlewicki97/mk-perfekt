<section class="single-product">
    <div class="d-flex flex-wrap">
        <div class="col-12 col-lg-6">
            <div class="bg-picture lazy single-product-photo main-product-photo" title="<?= $sub_product->alt ?>" data-bg="<?= file_url($sub_product->photo) ?>">
                <a data-lightbox="gallery" href="<?= file_url($sub_product->photo) ?>">
                    <div class="mask"><img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>" alt="<?= $layout_elements->alt2 ?>"></div>
                </a>
            </div>
        </div>

        <div class="col-12 col-lg-6 px-0 px-lg-5">
            <h3 class="single-product-title"><?= $sub_product->description_title ?></h3>
            <div class="single-product-description">
                <?= $sub_product->description1 ?>
            </div>
        </div>


        <div class="col-12 col-lg-6 mt-3">
            <div class="d-flex flex-wrap single-product-gallery">
                <?php $j = 0;
                foreach ($gallery as $photo) : ?>
                    <div class="col-4 <?php if ($j == 0) echo 'pl-0';
                                        elseif ($j == 2) echo 'pr-0';  ?>">
                        <div class="bg-picture lazy single-product-photo gallery" data-bg="<?= file_url($photo->photo) ?>" title="<?= $photo->alt ?>">
                            <a data-lightbox="gallery" data-title="<?= $photo->alt ?>" href="<?= file_url($photo->photo) ?>">
                                <div class="mask"><img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>" alt="<?= $layout_elements->alt2 ?>"></div>
                            </a>
                        </div>
                    </div>
                <?php if ($j == 2) $j = 0;
                    else $j++;
                endforeach; ?>
            </div>
        </div>

        <div class="col-12 col-lg-6 px-0 px-lg-5 mt-3 align-items-center d-flex">
            <div class="single-product-description ">
                <?= $sub_product->description2 ?>
            </div>
        </div>



        <div class="d-flex flex-wrap w-100 mt-5">
            <!-- <div class="col-12 col-lg-6">
                <h3 class="single-product-title"><?= $products_desc->colors ?></h3>
                <div class="d-flex flex-wrap">
                    <?php foreach ($colors as $i => $color) : ?>
                        <div class="col-4 <?php if ($i == 0) echo 'pl-0';
                                            elseif ($i == 2) echo 'pr-0';  ?>">
                            <div class="bg-picture lazy single-product-photo gallery" data-bg="<?= file_url($color->photo) ?>" title="<?= $color->alt ?>">
                                <a data-lightbox="colors" href="<?= file_url($color->photo) ?>">
                                    <div class="mask"><img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>" alt="<?= file_url($layout_elements->photo2) ?>"></div>
                                </a>
                            </div>
                            <div class="single-product-color-title mt-1"><?= $color->title ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div> -->
            <div class="col-12 col-lg-12 px-0 px-lg-5 mt-5 mt-lg-0">
                <h3 class="single-product-title"><?= $products_desc->technical_data ?></h3>

                <div class="single-product-table">
                    <?php foreach ($technical_data as $data) : ?>
                        <div class="single-product-table-row">
                            <div><?= $data->title ?></div>
                            <div><strong><?= $data->value ?></strong></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center mt-4">
                    <a target="_blank" href="<?= $sub_product->link ?>">
                        <button class="button outline hover-desc"><?= $sub_product->button_name ?></button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="like-product">
    <div class="bg-picture lazy" title="<?= $product_section_below->alt ?>" data-bg="<?= file_url($product_section_below->photo) ?>">
        <div class="mask"></div>
        <div class="position-relative mr-4" style="font-size: .9rem"><?= $product_section_below->title ?></div>
        <a href="<?= $product_section_below->link ?>">
            <button class="button first text-hover position-relative"><?= $product_section_below->button_name ?></button>
        </a>
    </div>
</section>