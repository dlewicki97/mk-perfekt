    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
    </div><!-- d-flex -->

    <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
            <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>

        <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="row"> 
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Tytuł formularza: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="form_title" value="<?php echo @$value->form_title; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Podtytuł formularza:</label>
                                <input class="form-control" type="text" name="form_subtitle" value="<?php echo @$value->form_subtitle; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">NIP:</label>
                                <input class="form-control" type="text" name="nip" value="<?php echo @$value->nip; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">REGON:</label>
                                <input class="form-control" type="text" name="regon" value="<?php echo @$value->regon; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Adres e-mail:</label>
                                <input class="form-control" type="text" name="email" value="<?php echo @$value->email; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Numer telefonu:</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo @$value->phone; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Treść wiadomości:</label>
                                <input class="form-control" type="text" name="message" value="<?php echo @$value->message; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Napis na przycisku:</label>
                                <input class="form-control" type="text" name="button_name" value="<?php echo @$value->button_name; ?>">
                            </div>
                        </div>
                    </div> 
                    
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-r-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php $names = ['Ikona adresu', 'Ikona telefonu', 'Ikona maila', 'Ikona NIP', 'Ikona REGON', 'Placeholder awataru', 'Ikona scrollowania']; for($i=1 ; $i<8 ; $i++): ?>
                        <div class="col-md-12">
                            <div id="photoViewer_<?= $i ?>" class="form-group  text-center delete_photo cursor" onclick="clear_box(<?= $i ?>);">
                                <?php if(@get_object_vars(@$value)["photo". ($i==1 ? '' : $i) ] != '') {
                                    echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @get_object_vars(@$value)["photo". ($i==1 ? '' : $i) ] . '" width=75%>';
                                } else {
                                    echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                                } ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group  bd-t-0-force ">
                                <label class="form-control-label"><?= $names[$i-1] ?>:</label>
                                <input type="hidden" id="name_photo_<?= $i ?>" name="name_photo_<?= $i ?>">
                                <button type="button" class="btn btn-info white w-100" onclick="openModal(<?= $i ?>);">Dodaj</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="photoViewer_<?= $i ?>" class="form-group <?php if($i != count($names)) echo 'bd-b-0-force' ?>  bd-t-0-force ">
                                <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                                <input class="form-control" type="text" name="alt<?= $i==1 ? '' : $i ?>" value="<?php echo @get_object_vars(@$value)["alt". $i==1 ? '' : $i ]; ?>">
                            </div>
                        </div>
                    <?php endfor; ?>
                    
                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
          </form><!-- form-layout -->