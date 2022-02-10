<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Produkty - MK Perfekt</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mdb.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

	<div class="social-fixed">
		<div class="fb"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="31" viewBox="0 0 17 31"><g><g><path fill="#fff" d="M15.655 17.81l.84-5.473h-5.251V8.786c0-1.498.733-2.957 3.085-2.957h2.387v-4.66S14.55.8 12.48.8C8.154.8 5.328 3.422 5.328 8.167v4.17H.52v5.474h4.807v13.23h5.916V17.81z"/></g></g></svg></div>
		<div class="ig"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"><g><g><path fill="#fff" d="M27.984 15.673c0-2.177.18-6.851-.601-8.821a5.05 5.05 0 0 0-2.845-2.845c-1.963-.775-6.644-.601-8.821-.601-2.177 0-6.852-.18-8.822.601a5.05 5.05 0 0 0-2.844 2.845c-.775 1.963-.601 6.644-.601 8.821 0 2.177-.18 6.852.6 8.822a5.05 5.05 0 0 0 2.845 2.844c1.964.775 6.645.601 8.822.601 2.177 0 6.851.18 8.821-.6a5.05 5.05 0 0 0 2.845-2.845c.781-1.964.6-6.645.6-8.822zm2.59 6.17c-.12 2.398-.667 4.521-2.417 6.27-1.75 1.757-3.873 2.305-6.27 2.418-2.47.14-9.877.14-12.347 0-2.398-.12-4.515-.668-6.27-2.417-1.757-1.75-2.305-3.873-2.418-6.27-.14-2.471-.14-9.877 0-12.348.12-2.397.661-4.52 2.417-6.27C5.025 1.476 7.15.929 9.54.815c2.471-.14 9.877-.14 12.348 0 2.397.12 4.52.668 6.27 2.417 1.757 1.75 2.304 3.874 2.418 6.27.14 2.472.14 9.87 0 12.341zM25.494 7.686c0 .995-.801 1.79-1.79 1.79a1.79 1.79 0 1 1 1.79-1.79zm-4.788 7.987a4.993 4.993 0 0 0-4.988-4.988 4.993 4.993 0 0 0-4.989 4.988 4.997 4.997 0 0 0 4.989 4.988 4.997 4.997 0 0 0 4.988-4.988zm2.684 0a7.66 7.66 0 0 1-7.672 7.673 7.66 7.66 0 0 1-7.673-7.673A7.66 7.66 0 0 1 15.717 8a7.66 7.66 0 0 1 7.672 7.673z"/></g></g></svg></div>
	</div>

	<header>
		<div class="position-relative">
			<nav class="navbar navbar-expand-lg px-lg-5 px-3 navbar-light">
				<a class="navbar-brand" href="#"><img class="logo lazy" data-src="img/logo.svg" alt="logo"></a>
				<button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mt-4 mt-lg-0 mb-2 mr-auto mr-lg-0 mb-lg-0">
						<?php $subpages = ['O NAS', 'PRODUKTY', 'GALERIA', 'DO POBRANIA', 'KONTAKT']; ?>
						<?php foreach($subpages as $i => $subpage): ?>
							<li class="nav-item header-li">
								<a class="nav-link <?= $i==0 ? 'active' : '' ?>" href="#">
									<div class="header-border"></div>
									<?= $subpage ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>

					<ul class="navbar-nav ml-0 ml-lg-auto">
						<li class="nav-item">
							<button class="button-rounded first mr-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"><g><g><path fill="#fff" d="M18.46 14.883c-.727-.727-2.474-1.82-3.335-2.231-1-.48-1.366-.47-2.074.04-.589.425-.97.82-1.648.672-.677-.143-2.014-1.158-3.31-2.45-1.297-1.296-2.306-2.632-2.45-3.31-.143-.683.253-1.059.673-1.648.51-.707.525-1.074.04-2.073-.41-.866-1.5-2.608-2.232-3.335-.727-.728-.89-.57-1.291-.426 0 0-.594.238-1.183.628-.727.485-1.133.891-1.42 1.5-.282.609-.609 1.742 1.054 4.701 1.34 2.39 2.657 4.201 4.612 6.151l.005.005.005.005c1.954 1.955 3.76 3.27 6.15 4.612 2.96 1.663 4.093 1.336 4.702 1.054.608-.282 1.014-.688 1.5-1.42.39-.59.628-1.183.628-1.183.143-.4.306-.564-.426-1.292z"/></g></g></svg>
								<span>SZYBKI KONTAKT</span>
							</button>
						</li>
						<li class="nav-item">
							<button class="button-rounded first invert">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="15" viewBox="0 0 22 15"><g><g><g><path fill="var(--first)" d="M21.523 1.83L15.91 7.547a.1.1 0 0 0 0 .146l3.928 4.184a.677.677 0 0 1-.48 1.158.684.684 0 0 1-.48-.199l-3.912-4.168a.107.107 0 0 0-.151 0l-.955.97a4.2 4.2 0 0 1-2.994 1.263c-1.153.005-2.249-.48-3.057-1.299L6.89 8.67a.107.107 0 0 0-.151 0l-3.913 4.167a.684.684 0 0 1-.96 0 .677.677 0 0 1 0-.96l3.928-4.183a.111.111 0 0 0 0-.146L.177 1.83A.103.103 0 0 0 0 1.903v11.44c0 .917.751 1.669 1.67 1.669h18.36c.919 0 1.67-.752 1.67-1.67V1.902c0-.093-.115-.135-.177-.072z"/></g><g><path fill="var(--first)" d="M10.85 9.54c.772 0 1.497-.303 2.04-.856l8.184-8.33a1.64 1.64 0 0 0-1.033-.366H1.664c-.391 0-.751.136-1.033.366l8.185 8.33a2.836 2.836 0 0 0 2.034.856z"/></g></g></g></svg>
								<span>WYŚLIJ WIADOMOŚĆ</span>
							</button>
						</li>
					</ul>
				</div>
			</nav>
			<div class="banner lazy" data-bg="img/banner-products.png">
				<div class="mask"></div>
				<h3>Produkty</h3>
				<p>Sprawdź ofertę MK Perfekt</p>
			</div>

		</div>
	</header>

	<main class="bg-picture lazy" data-bg="img/main-bg.jpg">
		<section class="products">
			<div class="d-flex flex-wrap products-row">
				<div class="col-12 col-lg-3 pl-0 pr-0 pr-lg-3">
					<div class="header-li ">
						<div class="products-title">
							Kostka brukowa
							<div class="header-border"></div>
						</div>
					</div>

					<div class="bg-picture lazy products-photo" data-bg="img/products-1.png">
						<div class="mask">
							<img class="lazy" data-src="img/products-icon.svg" alt="">
						</div>
					</div>

					<div class="products-list">
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Davino</div>
							</div>
						</div>

						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Lunno</div>
							</div>
						</div>

						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Asti</div>
							</div>
						</div>

						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Senso</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Noblo</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Lintro</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Pasieza</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Stodnie</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Livio</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Umbriano</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Aveno</div>
							</div>
						</div>

					</div>
				</div>


				<div class="col-12 col-lg-3 p-0 p-lg-3">
					<div class="header-li ">
						<div class="products-title">
							Ogrodzenia
							<div class="header-border"></div>
						</div>
					</div>

					<div class="bg-picture lazy products-photo" data-bg="img/products-2.png">
						<div class="mask">
							<img class="lazy" data-src="img/products-icon.svg" alt="">
						</div>
					</div>

					<div class="products-list">
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Sonnbrich</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Rona</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Lorbid</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Worc</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Fini</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Worc Toa</div>
							</div>
						</div>
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Parreti</div>
							</div>
						</div>

						

					</div>
				</div>


				<div class="col-12 col-lg-3 p-0 p-lg-3">
					<div class="header-li ">
						<div class="products-title">
							Płyty ceramiczne
							<div class="header-border"></div>
						</div>
					</div>

					<div class="bg-picture lazy products-photo" data-bg="img/products-3.png">
						<div class="mask">
							<img class="lazy" data-src="img/products-icon.svg" alt="">
						</div>
					</div>

					<div class="products-list">
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Zoyd</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-12 col-lg-3 pr-0 pl-0 pl-lg-3">
					<div class="header-li ">
						<div class="products-title">
							Systemy domofonowe
							<div class="header-border"></div>
						</div>
					</div>

					<div class="bg-picture lazy products-photo" data-bg="img/products-4.png">
						<div class="mask">
							<img class="lazy" data-src="img/products-icon.svg" alt="">
						</div>
					</div>

					<div class="products-list">
						<div class="header-li">
							<div>
								<div class="header-border"></div>
								<div class="product-list-item">Vidos</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<script>
			let highestProductTitle = 0;
			setProductTitlesHeight();
			window.addEventListener('resize', () => setProductTitlesHeight());
			function setProductTitlesHeight() {
				[...document.getElementsByClassName('products-title')].forEach(title => {
					title.getBoundingClientRect().height > highestProductTitle ? highestProductTitle = title.getBoundingClientRect().height : true
					// console.log(title.innerText, title.getBoundingClientRect().height, highestProductTitle)
				});
				[...document.getElementsByClassName('products-title')].forEach(title => {
					title.style.height = highestProductTitle + 'px';
					console.log(title.style.height);
				});
			}
			
		</script>
	</main>

	<footer>
		<div class="links lazy bg-picture" data-bg="img/links-bg.png">
			<div class="mask"></div>
			<?php foreach($subpages as $i => $subpage): ?>
				<div class="header-li">
					<a class="nav-link <?= $i==0 ? 'active pl-0 ' : '' ?>" href="#">
						<div class="header-border"></div>
						<?= $subpage ?>
					</a>
				</div>
			<?php endforeach; ?>

		</div>

		<div class="footer d-flex">
			<div class="d-flex flex-wrap my-5 w-50 pl-3 pl-lg-0">

				<div class="col-12">
					<h3 class="footer-offer-section-title">Oferta MK Perfekt</h3>
				</div>
				<div class="col-12 col-lg-3">
					<h4 class="footer-offer-title">Kostka brukowa</h4>
					<ul class="footer-ul footer-links">
						<li><a href="#" class="footer-link">Davino</a></li>
						<li><a href="#" class="footer-link">Lunno</a></li>
						<li><a href="#" class="footer-link">Asti</a></li>
						<li><a href="#" class="footer-link">Senso</a></li>
						<li><a href="#" class="footer-link">Noblo</a></li>
						<li><a href="#" class="footer-link">Lintro</a></li>
						<li><a href="#" class="footer-link">Pasieza</a></li>
						<li><a href="#" class="footer-link">Stodnie</a></li>
						<li><a href="#" class="footer-link">Livio</a></li>
						<li><a href="#" class="footer-link">Umbriano</a></li>
						<li><a href="#" class="footer-link">Aveno</a></li>
					</ul>
				</div>

				<div class="col-12 col-lg-3">
					<h4 class="footer-offer-title">Ogrodzenia</h4>
					<ul class="footer-ul footer-links">
						<li><a href="#" class="footer-link">Sonnbrich</a></li>
						<li><a href="#" class="footer-link">Rona</a></li>
						<li><a href="#" class="footer-link">Lorbid</a></li>
						<li><a href="#" class="footer-link">Worc</a></li>
						<li><a href="#" class="footer-link">Fini</a></li>
						<li><a href="#" class="footer-link">Worc Toa</a></li>
						<li><a href="#" class="footer-link">Parreti</a></li>
					</ul>
				</div>

				<div class="col-12 col-lg-3">
					<h4 class="footer-offer-title">Płyty ceramiczne</h4>
					<ul class="footer-ul footer-links">
						<li><a href="#" class="footer-link">Zoyd</a></li>
					</ul>
				</div>

				<div class="col-12 col-lg-3">
					<h4 class="footer-offer-title">Systemy domofonowe i videodomofon</h4>
					<ul class="footer-ul footer-links">
						<li><a href="#" class="footer-link">Vidos</a></li>
					</ul>
				</div>
			</div>
			<div class="first-bg w-5 h-100 skew-element-fill"></div>

			<div class="skew-column bg-picture lazy" data-bg="img/offer-list-bg.png">
				<div class="skew-column-content">
					<img class="lazy footer-logo" data-src="img/logo.svg" alt="logo">

					<ul class="footer-ul">
						<li><a class="footer-contact-link" href="#">Przemysłowa 1S <br>Lubin 59-300</a></li>
						<li><a class="footer-contact-link" href="tel:+48 724 581 945">+48 724 581 945</a></li>
						<li><a class="footer-contact-link" href="mailto:mk.perfekt@o2.pl">mk.perfekt@o2.pl</a></li>
					</ul>

					<button class="button text hover-white">Wskazówki dojazdu
						<div class="skew"></div>
					</button>
				</div>

				<div class="footer-socials-skew">
					<div class="footer-socials">
						<p>Znajdź nas również na:</p>
						<div class="d-flex footer-socials-container">
							<div class="footer-fb">
								<svg xmlns="http://www.w3.org/2000/svg" width="17" height="31" viewBox="0 0 17 31"><g><g><path fill="#fff" d="M15.655 17.81l.84-5.473h-5.251V8.786c0-1.498.733-2.957 3.085-2.957h2.387v-4.66S14.55.8 12.48.8C8.154.8 5.328 3.422 5.328 8.167v4.17H.52v5.474h4.807v13.23h5.916V17.81z"/></g></g></svg>
							</div>
							<div class="footer-ig">
								<svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"><g><g><path fill="#fff" d="M27.984 15.673c0-2.177.18-6.851-.601-8.821a5.05 5.05 0 0 0-2.845-2.845c-1.963-.775-6.644-.601-8.821-.601-2.177 0-6.852-.18-8.822.601a5.05 5.05 0 0 0-2.844 2.845c-.775 1.963-.601 6.644-.601 8.821 0 2.177-.18 6.852.6 8.822a5.05 5.05 0 0 0 2.845 2.844c1.964.775 6.645.601 8.822.601 2.177 0 6.851.18 8.821-.6a5.05 5.05 0 0 0 2.845-2.845c.781-1.964.6-6.645.6-8.822zm2.59 6.17c-.12 2.398-.667 4.521-2.417 6.27-1.75 1.757-3.873 2.305-6.27 2.418-2.47.14-9.877.14-12.347 0-2.398-.12-4.515-.668-6.27-2.417-1.757-1.75-2.305-3.873-2.418-6.27-.14-2.471-.14-9.877 0-12.348.12-2.397.661-4.52 2.417-6.27C5.025 1.476 7.15.929 9.54.815c2.471-.14 9.877-.14 12.348 0 2.397.12 4.52.668 6.27 2.417 1.757 1.75 2.304 3.874 2.418 6.27.14 2.472.14 9.87 0 12.341zM25.494 7.686c0 .995-.801 1.79-1.79 1.79a1.79 1.79 0 1 1 1.79-1.79zm-4.788 7.987a4.993 4.993 0 0 0-4.988-4.988 4.993 4.993 0 0 0-4.989 4.988 4.997 4.997 0 0 0 4.989 4.988 4.997 4.997 0 0 0 4.988-4.988zm2.684 0a7.66 7.66 0 0 1-7.672 7.673 7.66 7.66 0 0 1-7.673-7.673A7.66 7.66 0 0 1 15.717 8a7.66 7.66 0 0 1 7.672 7.673z"/></g></g></svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="ad-awards">
			<div class="bg-picture lazy" data-bg="img/adawards-bg.png">
				<div class="mask">
					<div>Copyright © 2021 by MK Perfekt. Wszelkie prawa zastrzeżone</div>
					<div>Created by <a target="_blank" href="https://agencjamedialna.pro/">Ad Awards</a></div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script type="text/javascript">
		var lazyLoadInstance = new LazyLoad();
	</script>

	<script>
		[...document.getElementsByClassName('section-title')].forEach(title => {
			let text = title.innerText;
			let textWithoutDot = '';
			if(text.split('.').length != 0) textWithoutDot = text.split('.')[0];
			title.innerHTML = textWithoutDot + '<span class="first-color">.</span>';
		})
	</script>



</body>
</html>
