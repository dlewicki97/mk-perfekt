<section class="downloads">
    <div class="d-flex flex-wrap">
        <?php foreach($downloads as $i => $file): ?>
        <div class="col-12 col-lg-6 <?php if($i%2==0) echo 'pr-0 pr-lg-3'; else echo 'pl-0 pl-lg-3' ?>">
            <div class="download-container">
                <div class="icon-container">
                    <img class="lazy" data-src="<?= file_url($downloads_desc->photo) ?>"
                        alt="<?= $downloads_desc->alt ?>">
                </div>
                <div class="download-content position-relative">
                    <div class="download-titles-container">
                        <div class="download-title"><?= $file->subtitle ?></div>
                        <div class="download-subtitle"><?= $file->title ?></div>
                    </div>
                    <div class="mask"></div>
                    <div class="d-flex">
                        <div class="download-size"><?= (int)$file->size ?> KB</div>
                        <a download href="<?= file_url($file->file) ?>">
                            <div class="download-button">
                                <?= $downloads_desc->icon ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>