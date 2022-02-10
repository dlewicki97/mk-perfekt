    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
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
                            <!-- set -->
                            <div class="col-md-6 pr-0">
                                <div class="form-group">
                                    <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title"
                                        value="<?php echo @$value->title; ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6 px-0">
                                <div class="form-group bd-l-0-force">
                                    <label class="form-control-label">Podtytuł:</label>
                                    <input class="form-control" type="text" name="subtitle"
                                        value="<?php echo @$value->subtitle; ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force" style="overflow-x: hidden;">
                                    <label class="form-control-label">Wybierz kategorie: <a target="_blank"
                                            href="<?= base_url('panel/downloads_categories') ?>">
                                            Dodaj nową kategorię</a></label>
                                    <select class="form-control select2-show-search " multiple
                                        name="downloads_categories[]">
                                        <?php foreach ($downloads_categories as $download_category) : ?>
                                        <option
                                            <?php if (is_download_category_selected($download_category->id, @$value->id)) echo 'selected'; ?>
                                            value="<?= $download_category->id; ?>"><?= $download_category->title; ?>
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
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <div class="form-group bd-l-0-force">
                                <?php if (@$value->file) : ?>
                                <a download
                                    href="<?php echo base_url() . 'uploads/' . @$value->file ?>"><?= explode('/', @$value->file)[1]  ?></a>

                                <?php endif; ?>
                                <label id="infoFile1" class="form-control-label"></label>
                                <label class="form-control-label">Plik:</label>
                                <input type="hidden" id="name_file_1" name="name_file_1">
                                <label class="custom-file">
                                    <input type="file" id="file_1" class="custom-file-input" name="file_1"
                                        onchange="uploadFile(1);">
                                    <span class="custom-file-control custom-file-control-inverse"></span>
                                </label>
                            </div>
                        </div><!-- col-12 -->

                    </div>
                </div><!-- row -->
            </form><!-- form-layout -->


            <script>
            function uploadFile(n) {
                document.getElementById('infoFile' + n).innerHTML =
                    '<span class="text-center"><i class="fas fa-spinner fa-pulse loader"></i></span>';
                setTimeout(function() {
                    document.getElementById('infoFile' + n).innerHTML =
                        '<span class="text-success"><i class="fas fa-check"></i> Plik został przygotowany do wysłania</span>';
                }, 200);
            }
            </script>