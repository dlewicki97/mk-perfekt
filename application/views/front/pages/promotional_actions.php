<section class="products">
    <div class="d-flex flex-wrap products-row">
        <?php foreach ($promotional_actions as $i => $row) : ?>
        <div class="col-12 col-lg-3 <?php if ($i == 0) echo 'pl-0 pr-0 pr-lg-3';
                                        elseif ($i == count($promotional_actions) - 1) echo 'pr-0 pl-0 pl-lg-3';
                                        else echo 'p-0 p-lg-3' ?> ">
            <div class="header-li ">
                <div class="products-title">
                    <?= $row->title ?>
                    <div class="header-border"></div>
                </div>
            </div>

            <div class="bg-picture lazy products-photo" title="<?= $row->alt ?>" data-bg="<?= file_url($row->photo) ?>">
                <a href="<?= base() . "akcje-promocyjne/" . slug($row->title) . "/$row->id" ?>">
                    <div class="mask">
                        <!-- <img class="lazy" data-src="<?= file_url($layout_elements->photo2) ?>" -->
                        <!-- alt="<?= $layout_elements->alt2 ?>"> -->
                    </div>
                </a>
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