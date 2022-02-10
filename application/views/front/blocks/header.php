<div class="social-fixed">
    <?php foreach ($social_buttons as $social_button) : ?>
    <a target="_blank" href="<?= $social_button->link ?>">
        <div style="background: <?= $social_button->color ?>"><img style="height: <?= $social_button->header_size ?>"
                class="lazy" data-src="<?= file_url($social_button->photo) ?>" alt="<?= $social_button->alt ?>"></div>
    </a>
    <?php endforeach; ?>
</div>

<header>
    <div class="position-relative">
        <nav class="navbar navbar-expand-lg px-lg-5 px-3 navbar-light fixed-top py-4">
            <a class="navbar-brand" href="<?= base() ?>"><img class="logo lazy"
                    data-src="<?= file_url($settings->logo) ?>" alt="logo"></a>
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mt-4 mt-lg-0 mb-2 mr-auto mr-lg-0 mb-lg-0">
                    <?php foreach ($subpages as $i => $subpage) : ?>
                    <?php if ($subpage->visible) : ?>
                    <li class="nav-item header-li">
                        <a style="text-transform: uppercase;"
                            class="nav-link <?= $this->uri->segment(1) == $subpage->page ? 'active' : '' ?>"
                            href="<?= base() . $subpage->page ?>">
                            <div class="header-border"></div>
                            <?= $subpage->title ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ul>

                <ul class="navbar-nav ml-0 ml-lg-auto">
                    <?php foreach ($header_buttons as $i => $header_button) : ?>
                    <li class="nav-item d-flex align-items-center">
                        <a href="<?= $header_button->link ?>">
                            <button class="button-rounded <?php if ($i % 2 != 0) echo 'invert' ?> first mr-2">
                                <?= $header_button->icon ?>
                                <span><?= $header_button->button_name ?></span>
                            </button>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
        <?php if ($this->uri->segment(1)) : ?>
        <div class="banner lazy bg-picture" title="<?= $current_subpage->alt ?>"
            data-bg="<?= file_url($current_subpage->photo) ?>.webp">
            <div class="mask"></div>
            <h3><?= $title ?></h3>
            <p><?= $subtitle ?></p>
        </div>
        <?php else : ?>
        <div id="slider" class="carousel slide" data-ride="carousel" style="position: unset">
            <ol class="carousel-indicators">
                <?php foreach ($slider as $i => $slide) : ?>
                <li class="bg-ad <?php if ($i == 0) echo 'active' ?>" data-target="#slider" data-slide-to="<?= $i ?>">
                </li>
                <?php endforeach; ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php foreach ($slider as $i => $slide) : ?>
                <?php if ($i > 0) break; ?>
                <div class="carousel-item <?php if ($i == 0) echo 'active' ?>">
                    <div class="bg-picture slider-photo lazy" title="<?= $slide->alt ?>"
                        data-bg="<?= file_url($slide->photo) ?>.webp">
                        <div class="mask">
                            <div class="position-relative">
                                <p class="slider-subtitle"><?= $slide->subtitle ?></p>
                                <h3 class="slider-title"><?= $slide->title ?></h3>
                                <div class="slider-description">
                                    <?= $slide->description ?>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="<?= $slide->link ?>">
                                        <button class="button white hover-first"><?= $slide->button_name ?></button>
                                    </a>
                                    <div class="d-flex">
                                        <a href="#slider" role="button" data-slide="prev">
                                            <div class="slider-prev border-right-0"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 25 25">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path fill="none" stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="20"
                                                                    d="M24.327 12.752H1.05" />
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="20"
                                                                    d="M12.689 24.39v0L1.05 12.752v0L12.689 1.113v0" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></div>
                                        </a>
                                        <a href="#slider" role="button" data-slide="next">
                                            <div class="slider-next"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                    height="25" viewBox="0 0 25 25">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path fill="none" stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="20"
                                                                    d="M.673 12.248H23.95" />
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#fff" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="20"
                                                                    d="M12.311.61v0L23.95 12.247v0L12.311 23.887v0" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</header>

<main class="bg-picture lazy" title="<?= $layout_elements->alt ?>"
    data-bg="<?= file_url($layout_elements->photo) ?>.webp">