    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Lista produktów</h4>
            <p class="mg-b-0"><?php echo subtitle(); ?></p>
            <hr>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-0 pd-x-30">
            <?php if (isset($_SESSION['flashdata'])) : ?>
            <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
            <?php endif; ?>

            <form class="form-layout form-layout-2"
                action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo @$value->id; ?>"
                method="post" enctype="multipart/form-data">

                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title"
                                        value="<?php echo @$value->title; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Marka: </label>
                                    <input class="form-control" type="text" name="brand"
                                        value="<?php echo @$value->brand; ?>">
                                </div>
                            </div>

                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Link przycisku: </label>
                                    <input class="form-control" type="text" name="link"
                                        value="<?php echo @$value->link; ?>">
                                </div>
                            </div>
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Napis na przycisku: </label>
                                    <input class="form-control" type="text" name="button_name"
                                        value="<?php echo @$value->button_name; ?>">
                                </div>
                            </div>

                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Tytuł opisu: </label>
                                    <input class="form-control" type="text" name="description_title"
                                        value="<?php echo @$value->description_title; ?>">
                                </div>
                            </div>

                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Opis 1: </label>
                                    <textarea class="summernote" type="text"
                                        name="description1"><?php echo @$value->description1; ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 pr-0">
                                <div class="form-group">
                                    <label class="form-control-label">Opis 2: </label>
                                    <textarea class="summernote" type="text"
                                        name="description2"><?php echo @$value->description2; ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Opis SEO: </label>
                                    <textarea class="summernote" type="text"
                                        name="meta_description"><?php echo @$value->meta_description; ?></textarea>
                                </div>
                            </div>

                            <!-- <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label mg-b-0-force">Produkt: <span
                                            class="tx-danger">*</span>
                                    </label>
                                    <select id="select2-a" class="form-control select2-show-search" name="product_id"
                                        data-placeholder="Wybierz produkt" required>
                                        <?php foreach ($products as $single_product) : ?>
                                        <option value="<?= $single_product->id ?>"
                                            <?php if (@$value->product_id == $single_product->id) echo 'selected';
                                            elseif (!isset($value)) if ($single_product->id == $product->id) echo 'selected' ?>>
                                            <?= $single_product->title ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div> -->

                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label mg-b-0-force">Kolory (dostępne w zakładce: <a
                                            href="<?= base() . 'panel/colors' ?>">Kolory</a> ): <span
                                            class="tx-danger">*</span>
                                    </label>
                                    <select class="form-control select2 colors-select" name="colors[]" multiple
                                        data-placeholder="Wybierz kolor">
                                        <?php foreach ($colors as $color) : ?>
                                        <option
                                            <?php if (color_in_selected_colors($selected_colors, $color)) echo 'selected' ?>
                                            value="<?= $color->id ?>"><?= $color->title ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>

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
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <div id="photoViewer_1" class="form-group bd-l-0-force text-center delete_photo cursor"
                                onclick="clear_box(1);">
                                <?php if (@$value->photo != '') {
                                    echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo . '" width=75%>';
                                } else {
                                    echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                                } ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bd-l-0-force bd-t-0-force ">
                                <label class="form-control-label">Zdjęcie:</label>
                                <input type="hidden" id="name_photo_1" name="name_photo_1">
                                <button type="button" class="btn btn-info white w-100"
                                    onclick="openModal(1);">Dodaj</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="photoViewer_1" class="form-group  bd-l-0-force bd-t-0-force ">
                                <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                                <input class="form-control" type="text" name="alt" value="<?php echo @$value->alt; ?>">
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <?php $this->load->view('back/forms/double_modal'); ?>
            </form><!-- form-layout -->