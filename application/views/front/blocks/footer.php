</main>

<footer>
    <div class="links lazy bg-picture" title="<?= $footer_desc->alt ?>"
        data-bg="<?= file_url($footer_desc->photo) ?>.webp">
        <div class="mask"></div>
        <?php foreach ($subpages as $i => $subpage) : ?>
        <?php if ($subpage->visible) : ?>
        <div class="header-li">
            <a style="text-transform: uppercase;"
                class="nav-link <?= $this->uri->segment(1) == $subpage->page ? 'active pl-0' : '' ?>"
                href="<?= base() . $subpage->page ?>">
                <div class="header-border"></div>
                <?= $subpage->title ?>
            </a>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>

    </div>

    <div class="footer d-flex">
        <div class="d-flex flex-wrap my-5 w-50 pl-3 pl-lg-0">

            <div class="col-12">
                <h3 class="footer-offer-section-title"><?= $footer_desc->title ?></h3>
            </div>
            <?php foreach ($footer_products as $footer_product) : ?>
            <div class="col-12 col-lg-3">
                <h4 class="footer-offer-title"><?= $footer_product->title ?></h4>
                <ul class="footer-ul footer-links">
                    <?php foreach ($footer_brands[$footer_product->id] as $brand) : ?>
                    <li><a href="<?= base() . "marki/$brand->id/" . slug($brand->title) ?>"
                            class="footer-link"><?= $brand->title ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>


        </div>
        <div class="first-bg w-5 h-100 skew-element-fill"></div>

        <div class="skew-column bg-picture lazy" title="<?= $footer_desc->alt2 ?>"
            data-bg="<?= file_url($footer_desc->photo2) ?>.webp">
            <div class="skew-column-content">
                <a href="<?= base() ?>">
                    <img class="lazy footer-logo" data-src="<?= file_url($settings->logo) ?>" alt="logo">
                </a>

                <ul class="footer-ul">
                    <li><a class="footer-contact-link"
                            href="https://www.google.com/maps/place/<?= $contact_settings->address ?>,+<?= $contact_settings->zip_code ?>+<?= $contact_settings->city ?>/@51.3766223,16.1855231,17z/data=!3m1!4b1!4m5!3m4!1s0x470f6f17166aa779:0xb1469b023c1e0c14!8m2!3d51.3766223!4d16.1877118"><?= $contact_settings->address ?>
                            <br><?= $contact_settings->city ?> <?= $contact_settings->zip_code ?></a></li>
                    <li><a class="footer-contact-link"
                            href="tel:<?= $contact_settings->phone1 ?>"><?= $contact_settings->phone1 ?></a></li>
                    <li><a class="footer-contact-link"
                            href="mailto:<?= $contact_settings->email1 ?>"><?= $contact_settings->email1 ?></a></li>
                </ul>
                <a href="<?= $footer_desc->link ?>">
                    <button class="button text hover-white">
                        <?= $footer_desc->button_name ?>
                        <div class="skew"></div>
                    </button>
                </a>
            </div>

            <div class="footer-socials-skew">
                <div class="footer-socials">
                    <p><?= $footer_desc->buttons_name ?></p>
                    <div class="d-flex footer-socials-container">
                        <?php foreach ($social_buttons as $i => $social_button) : ?>
                        <a href="<?= $social_button->link ?>">
                            <div class="<?php if ($i == count($social_buttons) - 1) echo 'mr-0' ?>"
                                style="background: <?= $social_button->color ?>">
                                <img class="lazy" style="height: <?= $social_button->footer_size ?>"
                                    data-src="<?= file_url($social_button->photo) ?>" alt="<?= $social_button->alt ?>">
                            </div>
                        </a>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ad-awards">
        <div class="bg-picture lazy" title="<?= $footer_desc->alt3 ?>"
            data-bg="<?= file_url($footer_desc->photo3) ?>.webp">
            <div class="mask">
                <div>Copyright © 2021 by MK Perfekt. Wszelkie prawa zastrzeżone</div>
                <div>Created by <a target="_blank" href="https://agencjamedialna.pro/">Ad Awards</a></div>
            </div>
        </div>
    </div>
</footer>

<div class="cookies-alert active">
    <div class="pr-5">
        Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom
        satysfakcjonujące
        wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie. <a
            href="<?= file_url($settings->privace) ?>">
            Czytaj
            więcej...
        </a>
    </div>
    <button onclick="hideCookies()">Rozumiem</button>
</div>

<div class="cookies-badge">
    <div onclick="showCookies()">Cookie Policy</div>
</div>

<script type="text/javascript" src="<?= assets() ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/mdb.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>dist/js/lightbox-plus-jquery.min.js"></script>
<script src="<?= assets() ?>/dist/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
<script src="<?= assets() ?>js/products_list.js"></script>
<script>
$(document).ready(function() {
    let owl1 = $('.owl-carousel1').owlCarousel({
        items: 1,
        dots: false,
        nav: false,
        rewind: false,
        lazyLoad: true,
        autoplayHoverPause: true
    });
})
$(document).ready(function() {
    let owl2 = $('.owl-carousel2').owlCarousel({
        responsive: {
            0: {
                items: 1
            },
            567: {
                items: 2
            },
            992: {
                items: 4
            },
        },
        dots: false,
        nav: false,
        rewind: false,
        autoplay: true,
        loop: true,
        lazyLoad: true,
        autoplayHoverPause: true,
        autoplayTimeout: 2000
    });
})
</script>
<script type="text/javascript">
var lazyLoadInstance = new LazyLoad();
if (localStorage.getItem('hideCookies')) hideCookies();
else showCookies();

function hideCookies() {
    localStorage.setItem('hideCookies', true);
    document.getElementsByClassName('cookies-alert')[0].classList
        .remove('active');
    document.getElementsByClassName('cookies-badge')[0].classList
        .add('active');
}

function showCookies() {
    localStorage.removeItem('hideCookies');
    document.getElementsByClassName('cookies-alert')[0].classList
        .add('active');
    document.getElementsByClassName('cookies-badge')[0].classList
        .remove('active');
}
</script>

<script>
links = document.querySelectorAll("link");
for (var i = links.length - 1; i >= 0; i--) {
    if (links[i].getAttribute('rel') == 'preload') {
        links[i].setAttribute("rel", "stylesheet");
    }
}
// [...document.getElementsByClassName('section-title')].forEach(title => {
//   let text = title.innerText;
//   let textWithoutDot = '';
//   if(text.split('.').length != 0) textWithoutDot = text.split('.')[0];
//   title.innerHTML = textWithoutDot + '<span class="first-color">.</span>';
// });


[...document.getElementsByTagName('p')].forEach(p => {
    if (p.innerText == '') p.style.height = '1.5rem';
});
</script>
<?php if ($this->uri->segment(1) == 'galeria') : ?>
<script>
$(document).ready(function() {
    var owl = $('.owl-carousel3').owlCarousel({
        items: 1,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 3
            },

        },
        dots: false,
        nav: false,
        lazyLoad: true,
        center: true,
        loop: true,
    });


    $('.right').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.left').click(function() {
        owl.trigger('prev.owl.carousel');
    });






});

function setOwlPosition(id) {
    $('.owl-carousel3').trigger("to.owl.carousel", [id, 1])
}
</script>
<script>
let index = 0;
let adLightbox = false;
let transformValue = ($(document).width() - document.getElementsByClassName('ad-lightbox-img')[0]
    .getBoundingClientRect().width) / 2;

function setGalleryPosition() {
    let transform = document.getElementsByClassName('ad-lightbox-img')[0].getBoundingClientRect().width + 48 -
        transformValue;
    document.getElementsByClassName('ad-lightbox-gallery')[0].style.transform =
        `translateX(calc(-${transform * index}px - ${transformValue}px * ${index} + ${transformValue}px))`;
    let photos = document.getElementsByClassName('ad-lightbox-img');
    photos.forEach(photo => photo.classList.remove('active'));
    photos[index].classList.add('active');
}

function openAdLigthbox(i) {
    index = i;
    // setGalleryPosition()
    document.getElementsByClassName('ad-lightbox-modal')[0].classList.add('active');;
    document.getElementsByTagName('body')[0].style.overflowY = 'hidden';
}

function prev() {
    if (index == 0) return;
    index--;
    // setGalleryPosition();
}

function next() {
    if (index == document.getElementsByClassName('ad-lightbox-img').length - 1) return;
    index++;
    // setGalleryPosition();
}
[...document.getElementsByClassName('ad-lightbox')].forEach((activator, i) => {
    activator.addEventListener('click', e => {
        e.preventDefault();
        openAdLigthbox(i)
    })
})
document.getElementsByClassName('ad-lightbox-modal')[0].addEventListener('click', e => {
    if (e.toElement.classList.contains('ad-lightbox-modal') || e.toElement.classList.contains(
            'ad-lightbox-gallery')) {
        document.getElementsByClassName('ad-lightbox-modal')[0].classList.remove('active');
        document.getElementsByTagName('body')[0].style.overflowY = 'unset';
    }
})
// setGalleryPosition();
</script>
<?php endif; ?>

<?php if ($this->uri->segment(1) == 'kontakt') : ?>
<script async defer src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>">
</script>
<script async>
$('#contact-form').submit(function(event) {
    event.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('<?= $settings->captcha ?>', {
            action: 'mailer/send'
        }).then(function(token) {
            $('#contact-form').prepend(`<input type="hidden" name="token" value="${token}">`);
            $('#contact-form').unbind('submit').submit();
        });;
    });
});
</script>
<?php endif; ?>

</body>

</html>