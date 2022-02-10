    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5"><?= "Kategoria: $product->title, Marka: $brand->title" ?></h4>
            <p class="mg-b-0"><?php echo subtitle(); ?></p>
            <hr>
        </div>

        <div class="br-pagebody mg-t-0 pd-x-30">
            <?php if (isset($_SESSION['flashdata'])) : ?>
            <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
            <?php endif; ?>

            <form class="form-layout form-layout-2"
                action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/save_sub_products/<?php echo $brand->id . '/' . $product->id; ?>"
                method="post" enctype="multipart/form-data">
                <input type="hidden" name="brand_id" value="<?= $brand->id ?>">
                <input type="hidden" name="product_id" value="<?= $product->id ?>">

                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-12 pr-0">
                                <div class="form-group" style="overflow-x: hidden;">
                                    <label class="form-control-label">Wybierz produkty: <a
                                            href="<?= base_url('panel/sub_products') ?>">
                                            Dodaj nowy produkt</a></label>
                                    <select class="form-control select2-show-search " multiple name="sub_products[]">
                                        <?php foreach ($sub_products as $sub_product) : ?>
                                        <option
                                            <?php if (is_sub_product_selected($sub_product->id, $brand->id, $product->id)) echo 'selected'; ?>
                                            value="<?= $sub_product->id; ?>">
                                            <?= $sub_product->title; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-layout-footer bd pd-20  bd-t-0-force">
                                    <button class="btn btn-info" type="submit">Zapisz</button>
                                    <button class="btn btn-secondary"
                                        onclick="window.history.go(-1); return false;">Anuluj</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>