<section class="products">
    <div class="d-flex flex-wrap products-row">
        <?php foreach ($products as $i => $product) : ?>
            <div class="col-12 col-lg-3 mb-5 <?php if ($i == 0) echo 'pl-0 pr-0 pr-lg-3';
                                                elseif ($i == count($products) - 1) echo 'pr-0 pl-0 pl-lg-3';
                                                else echo 'p-0 p-lg-3' ?> ">
                <div class="header-li ">
                    <div class="products-title">
                        <?= $product->title ?>
                        <div class="header-border"></div>
                    </div>
                </div>

                <div class="bg-picture lazy products-photo" title="<?= $product->alt ?>" data-bg="<?= file_url($product->photo) ?>">
                    <a href="<?= base() . "produkty-kategoria/$product->id/" . slug($product->title) ?>">
                        <div class="mask">
                            <img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>" alt="<?= $layout_elements->alt2 ?>">
                        </div>
                    </a>
                </div>

                <div class="products-list">
                    <?php foreach ($brands[$product->id] as $brand) : ?>
                        <div class="header-li brand" title="Kliknij, aby rozwinąć listę!">
                            <div>
                                <div class="header-border"></div>
                                <div class="product-list-item"><?= $brand->title ?></div>
                            </div>
                        </div>

                        <div class="pl-5 products-dropdown">
                            <?php foreach ($sub_products[$product->id][$brand->id] as $sub_product) : ?>
                                <div class="header-li">
                                    <a class="sub-product-link" href="<?= base() . implode('/', ['produkty', $sub_product->sub_product_id, slug($sub_product->title)])  ?>">
                                        <div>
                                            <div class="header-border"></div>
                                            <div class="product-list-item"><?= $sub_product->title ?></div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</section>

<script>
    let highestProductTitle = 0;
    setProductTitlesHeight();
    window.addEventListener('resize', () => setProductTitlesHeight());

    function setProductTitlesHeight() {
        [...document.getElementsByClassName('products-title')].forEach(title => {
            title.getBoundingClientRect().height > highestProductTitle ? highestProductTitle = title
                .getBoundingClientRect().height : true
        });
        [...document.getElementsByClassName('products-title')].forEach(title => {
            title.style.height = highestProductTitle + 'px';
        });
    }
</script>