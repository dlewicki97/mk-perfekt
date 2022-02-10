<section class="contact">
    <?php if ($this->session->flashdata('flashdata')) echo $this->session->flashdata('flashdata') ?>
    <div class="d-flex flex-wrap contact-form-row">
        <img class="lazy contact-scroll" data-src="<?= file_url($contact_desc->photo7) ?>"
            alt="<?= $contact_desc->alt7 ?>">
        <div class="col-12 col-lg-6 contact-form-col">
            <h2 class="contact-title"><?= $contact_settings->company ?></h2>
            <div class="contact-block">
                <div class="contact-block-img-container">
                    <img class="lazy" data-src="<?= file_url($contact_desc->photo) ?>" alt="<?= $contact_desc->alt ?>">
                </div>
                <div class="contact-block-text"><a
                        href="https://www.google.com/maps/place/<?= $contact_settings->address ?>,+<?= $contact_settings->zip_code ?>+<?= $contact_settings->city ?>/@51.376667,16.187734,17z/data=!4m5!3m4!1s0x470f6f1717b1f7c5:0xe8a91065bd546736!8m2!3d51.3766667!4d16.1877344?hl=pl"
                        class="account-link"><?= $contact_settings->address ?>, <?= $contact_settings->zip_code ?>
                        <?= $contact_settings->city ?></a></div>
            </div>
            <div class="contact-block">
                <div class="contact-block-img-container">
                    <img class="lazy" data-src="<?= file_url($contact_desc->photo2) ?>"
                        alt="<?= $contact_desc->alt2 ?>">
                </div>
                <div class="contact-block-text"><a class="account-link"
                        href="tel:<?= $contact_settings->phone1 ?>"><?= $contact_settings->phone1 ?></a></div>
            </div>
            <div class="contact-block">
                <div class="contact-block-img-container">
                    <img class="lazy" data-src="<?= file_url($contact_desc->photo3) ?>"
                        alt="<?= $contact_desc->alt3 ?>">
                </div>
                <div class="contact-block-text"><a href="mailto:<?= $contact_settings->email1 ?>"
                        class="account-link"><?= $contact_settings->email1 ?></a></div>
            </div>
            <div class="contact-block">
                <div class="contact-block-img-container">
                    <img class="lazy" data-src="<?= file_url($contact_desc->photo4) ?>"
                        alt="<?= $contact_desc->alt4 ?>">
                </div>
                <div class="contact-block-text"><?= $contact_desc->nip ?> <?= $contact_settings->nip ?></div>
            </div>
            <div class="contact-block">
                <div class="contact-block-img-container">
                    <img class="lazy" data-src="<?= file_url($contact_desc->photo5) ?>"
                        alt="<?= $contact_desc->alt5 ?>">
                </div>
                <div class="contact-block-text"><?= $contact_desc->regon ?> <?= $contact_settings->regon ?></div>
            </div>


            <div class="d-flex flex-wrap">
                <?php foreach ($employees as $employee) : ?>
                <div class="col-12 col-md-6 text-center">
                    <img class="lazy account-avatar"
                        data-src="<?= file_url($employee->photo ? $employee->photo : $contact_desc->photo6)  ?>"
                        alt="<?= $employee->photo ? $employee->alt : $contact_desc->alt6 ?>">
                    <h5 class="account-name"><?= $employee->name ?></h5>
                    <div style="line-height: 20px">
                        <a class="account-link" href="tel:<?= $employee->phone ?>"><?= $employee->phone ?></a>
                        <a class="account-link" href="mailto:<?= $employee->email ?>"><?= $employee->email ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <form id="contact-form" method="post" action="<?= base() . 'mailer/send' ?>">
                <h2 class="contact-title text-left section-title"><?= $contact_desc->form_title ?></h2>
                <p><?= $contact_desc->form_subtitle ?></p>
                <div class="input-group">
                    <label for="email"><?= $contact_desc->email ?></label>
                    <input id="email" name="email" required type="email">
                </div>

                <div class="input-group">
                    <label for="phone"><?= $contact_desc->phone ?></label>
                    <input id="phone" name="phone" required type="text">
                </div>

                <div class="input-group">
                    <label for="message"><?= $contact_desc->message ?> </label>
                    <textarea id="message" name="message" required cols="9"></textarea>
                </div>
                <div class="custom-control custom-checkbox p-0 mb-3">
                    <input type="checkbox" required="" name="rodo1" class="form-check-input" id="rodo1">
                    <label class="form-check-label checkbox-label" for="rodo1"><?= $settings->rodo ?></label>
                </div>
                <div class="custom-control custom-checkbox p-0">
                    <input type="checkbox" required="" name="rodo2" class="form-check-input" id="rodo2">
                    <label class="form-check-label checkbox-label" for="rodo2"><?= $settings->rodo_tel ?></label>
                </div>

                <div class="d-flex flex-wrap" style="margin-top: 2rem">
                    <div class="d-flex justify-content-start justify-content-lg-end w-100">
                        <div>
                            <button type="submit"
                                class="button first text-hover"><?= $contact_desc->button_name ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-12 col-lg-6 map-column">
            <iframe src="<?= $contact_settings->map ?>" width="100%" height="100%" frameborder="0" style="border:0;"
                allowfullscreen=""></iframe>
        </div>
    </div>
</section>