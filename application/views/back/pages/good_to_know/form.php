    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Warto wiedzieć</h4>
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
                                <div class="form-group ">
                                    <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title"
                                        value="<?php echo @$value->title; ?>" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force  ">
                                    <label class="form-control-label">Krótki opis:</label>
                                    <textarea class="summernote"
                                        name="description"><?php echo @$value->description; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force  ">
                                    <label class="form-control-label">Opis:</label>
                                    <textarea class="summernote"
                                        name="long_description"><?php echo @$value->long_description; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force ">
                                    <label class="form-control-label">Opis seo:</label>
                                    <textarea class="summernote"
                                        name="meta_description"><?php echo @$value->meta_description; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-layout-footer bd pd-20 bd-t-0-force">
                                    <button class="btn btn-info" type="submit">Zapisz</button>
                                    <button class="btn btn-secondary"
                                        onclick="window.history.go(-1); return false;">Anuluj</button>
                                </div>
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
                            <div class="form-group  bd-t-0-force bd-l-0-force">
                                <label class="form-control-label">Zdjęcie:</label>
                                <input type="hidden" id="name_photo_1" name="name_photo_1">
                                <button type="button" class="btn btn-info white w-100"
                                    onclick="openModal(1);">Dodaj</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="photoViewer_1" class="form-group  bd-b-0-force bd-t-0-force bd-l-0-force">
                                <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                                <input class="form-control" type="text" name="alt" value="<?php echo @$value->alt; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="photoViewer_2" class="form-group text-center delete_photo cursor bd-l-0-force"
                                onclick="clear_box(2);">
                                <?php if (@$value->photo2 != '') {
                                    echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo2 . '" width=75%>';
                                } else {
                                    echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                                } ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bd-t-0-force bd-l-0-force">
                                <label class="form-control-label">Zdjęcie 2:</label>
                                <input type="hidden" id="name_photo_2" name="name_photo_2">
                                <button type="button" class="btn btn-info white w-100"
                                    onclick="openModal(2);">Dodaj</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="photoViewer_2" class="form-group bd-t-0-force bd-l-0-force">
                                <label class="form-control-label">Tekst alternatywny zdjęcia 2:</label>
                                <input class="form-control" type="text" name="alt2"
                                    value="<?php echo @$value->alt2; ?>">
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <?php $this->load->view('back/forms/double_modal'); ?>
            </form><!-- form-layout -->