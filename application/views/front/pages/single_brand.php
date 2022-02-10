<section class="brand-page py-5">
    <div class="d-flex flex-wrap">
        <div class="col-12 col-lg-6 text-left text-lg-right">
            <img data-src="<?= file_url($brand->photo) ?>" alt="<?= $brand->alt ?>" class="lazy brand-logo img-fluid">
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center">
            <h3 class="single-product-title"><?= $brand->title ?></h3>
        </div>
        <div class="col-12">
            <div class="single-product-description mx-0 mx-lg-5"><?= $brand->description ?></div>

            <!-- <div class="d-flex flex-wrap products-row">
                <?php foreach ($sub_products as $i => $sub_product) : ?>
                <div class="col-12 col-lg-3 <?php if ($i == 0) echo 'pl-0 pr-0 pr-lg-3';
                                            elseif ($i == count($sub_products) - 1) echo 'pr-0 pl-0 pl-lg-3';
                                            else echo 'p-0 p-lg-3' ?> ">
                    <div class="header-li ">
                        <div class="products-title">
                            <?= $sub_product->title ?>
                            <div class="header-border"></div>
                        </div>
                    </div>

                    <div class="bg-picture lazy products-photo" title="<?= $sub_product->alt ?>"
                        data-bg="<?= file_url($sub_product->photo) ?>">
                        <a href="<?= base() . "produkty/$sub_product->id/" . slug($sub_product->title) ?>">
                            <div class="mask">
                                <!-- <img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>" -->
            <!-- alt="<?= $layout_elements->alt2 ?>"> -->
        </div>
        </a>
    </div>


    </div>
    <?php endforeach; ?>
    </div> -->
    <div class="text-center mt-4">
        <a target="_blank" href="<?= $brand->link ?>">
            <button class="button outline hover-desc"><?= $brand->button_name ?></button>
        </a>
    </div>
    </div>
    </div>
</section>