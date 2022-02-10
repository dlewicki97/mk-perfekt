    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5"><?= $sub_product->title ?> - Dane techniczne</h4>
            <p class="mg-b-0"><?php echo subtitle(); ?></p>
            <hr>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-0 pd-x-30">
            <?php if (isset($_SESSION['flashdata'])) : ?>
            <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
            <?php endif; ?>

            <form class="form-layout form-layout-2"
                action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo "$sub_product->id/" . @$value->id; ?>"
                method="post" enctype="multipart/form-data">

                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-6 pr-0">
                                <div class="form-group">
                                    <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title"
                                        value="<?php echo @$value->title; ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6 px-0">
                                <div class="form-group bd-l-0-force ">
                                    <label class="form-control-label">Wartość:</label>
                                    <input class="form-control" type="text" name="value"
                                        value="<?php echo @$value->value; ?>">
                                </div>
                            </div><!-- col-4 -->
                        </div> <!-- set -->
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label mg-b-0-force">Pod Produkt: <span
                                            class="tx-danger">*</span>
                                    </label>
                                    <select id="select2-a" class="form-control select2-show-search"
                                        name="sub_product_id" data-placeholder="Wybierz produkt" required>
                                        <?php foreach ($sub_products as $single_sub_product) : ?>
                                        <option value="<?= $single_sub_product->id ?>"
                                            <?php if (@$value->sub_product_id == $single_sub_product->id) echo 'selected';
                                                                                            elseif (!isset($value)) if ($single_sub_product->id == $sub_product->id) echo 'selected' ?>>
                                            <?= $single_sub_product->title ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- set -->
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-layout-footer bd pd-20 bd-t-0-force">
                                    <button class="btn btn-info" type="submit">Zapisz</button>
                                    <button class="btn btn-secondary"
                                        onclick="window.history.go(-1); return false;">Anuluj</button>
                                </div><!-- form-group -->
                            </div>
                        </div>
                    </div>

                </div><!-- row -->
            </form><!-- form-layout -->