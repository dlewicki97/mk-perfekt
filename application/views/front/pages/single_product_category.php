<section class="single-product-category py-5">
    <div class="d-flex flex-wrap">
        <div class="col-12 col-lg-6">
            <a data-lightbox="product-category" href="<?= file_url($product->photo) ?>">
                <div data-bg="<?= file_url($product->photo) ?>" alt="<?= $product->alt ?>"
                    class="lazy bg-picture product-photo">
                </div>
            </a>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center">
            <h3 class="single-product-title"><?= $product->title ?></h3>
        </div>
        <div class="col-12">
            <div class="single-product-description"><?= $product->description ?></div>
            <div class="text-center mt-4">
                <?php if ($product->link) : ?>
                <a target="_blank" href="<?= $product->link ?>">
                    <button class="button outline hover-desc"><?= $product->button_name ?></button>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>