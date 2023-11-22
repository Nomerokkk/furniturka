<? 
	$target = '/assets';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Furniturka</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This is an example of a meta description. This will often show up in search results.">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $target; ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $target; ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $target; ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= $target; ?>/img/favicon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	
	<style>
		* {
			color: inherit;
		}

		.preload * {
			transition: none !important;
		}
	</style>

	<link rel="stylesheet" href="<?= $target; ?>/css/style.css">
</head>
<body class="j-body preload">
	<div class="wrapper">
		<header class="header j-header">
			<div class="container">
				<div class="header__wrapper">
					<button type="button" class="header__toggle" data-target=".menu, .j-overlay" title="Меню">
						<div class="header__toggle-inner">
							<span></span><span></span><span></span>
						</div>
					</button>
					<a href="/" class="header__logo" title="Furniturka">
						<img src="<?= $target; ?>/img/logo.svg" alt="" width="1" height="1">
					</a>
					<button type="button" class="header__catalog" data-target=".header-catalog, .j-overlay-width-header">
						<div class="header__catalog-icon">
							<svg class="header__catalog-catalog">
								<use xlink:href="<?= $target; ?>/img/icons.svg#catalog"/>
							</svg>
							<svg class="header__catalog-close">
								<use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
							</svg>
						</div>
						<div class="header__catalog-title">
							Каталог
						</div>
					</button>
					<div class="header__search">
						<? include 'search.php'; ?>
					</div>
					<div class="header__phones">
						<? $phones = [
							0 => '+38 (050) 312-09-76',
							1 => '+38 (050) 489-01-85',
							2 => '+38 (050) 489-01-85',
						];
						if($phones) { ?>
							<ul class="header__phones-list">
								<? foreach($phones as $phone) { ?>
									<li class="header__phones-li">
										<a href="tel:<?= $phone; ?>" class="header__phones-a">
											<svg>
												<use xlink:href="<?= $target; ?>/img/icons.svg#phone"/>
											</svg>
											<?= $phone; ?>
										</a>
									</li>
								<? } ?>
							</ul>
						<? } ?>
						<div class="header__phones-arrow">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
							</svg>
						</div>
						<div class="header__phones-time">
							<div class="header__phones-time-icon">
								<svg>
									<use xlink:href="<?= $target; ?>/img/icons.svg#time"/>
								</svg>
							</div>
							<div class="header__phones-time-text">
								<div class="header__phones-time-title">
									Графік роботи:
								</div>
								<div class="header__phones-time-desc">
									Пн-Пт (9:00-17:00)<br>
									Сб-Нд (вихідний)<br>
									Перерва (12:00 - 13:00)
								</div>
							</div>
						</div>
					</div>
					<div class="header__lang">
						<div class="lang">
							<button type="button" class="lang__title" data-target="#lang">
								ua
								<svg>
									<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
								</svg>
							</button>
							<ul class="lang__list" id="lang">
								<li><a href="#">ru</a></li>
							</ul>
						</div>
					</div>
					<div class="header__info">
						<ul class="header__info-list">
							<li class="header__info-li header__info-li--phone">
								<button type="button" data-target=".header__phones" class="header__info-a header__info-a--phone" title="Телефони">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#phone2"/>
									</svg>
								</button>
							</li>
							<li class="header__info-li header__info-li--user">
								<a href="#sign-in" data-fancybox class="header__info-a header__info-a--user" title="Sign in">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
									</svg>
								</a>
							</li>
							<li class="header__info-li header__info-li--like">
								<a href="/panel/wishlist.php" class="header__info-a header__info-a--like">
									<span class="header__info-number">3</span>
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#heart"/>
									</svg>
								</a>
							</li>
							<li class="header__info-li header__info-li--compare">
								<a href="/panel/compare.php" class="header__info-a header__info-a--compare">
									<span class="header__info-number">3</span>
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#compare"/>
									</svg>
								</a>
							</li>
							<li class="header__info-li header__info-li--cart">
								<button type="button" class="header__info-a header__info-a--cart" data-fancybox data-src="#basket">
									<span class="header__info-number">1</span>
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#cart"/>
									</svg>
								</button>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<div class="menu" style="transform: translateX(-120%);">
			<div class="menu__top active-target" data-target=".menu, .j-overlay">
				<div class="menu__top-logo">
					<img src="<?= $target; ?>/img/logo.svg" alt="" width="1" height="1">
				</div>
				<button type="button" class="menu__top-close" title="Закрити">
					<svg>
						<use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
					</svg>
				</button>
			</div>
			<? if($login == true) { ?>
				<a href="/panel/" class="menu__user menu__user--link">
					<div class="menu__user-icon">
						H
					</div>
					<div class="menu__user-text">
						<div class="menu__user-top">
							Іван Мазепаааааааааааааааа
						</div>
						<div class="menu__user-desc menu__user-desc--info">
							 testaksdakdf@email.com
						</div>
					</div>
				</a>
			<? } else { ?>
				<div class="menu__user">
					<div class="menu__user-icon">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
						</svg>
					</div>
					<div class="menu__user-text">
						<div class="menu__user-top">
							<a href="#sign-in" data-fancybox>Вхід</a> | <a href="#sign-up" data-fancybox>Реєстрація</a>
						</div>
					</div>
				</div>
			<? } ?>
			<ul class="menu__menu">
				<li class="menu__menu-li">
					<button type="button" class="menu__menu-item" data-target=".header-catalog, .j-overlay-width-header">
						<div class="menu__menu-icon menu__menu-icon--catalog">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#catalog"/>
							</svg>
						</div>
						<div class="menu__menu-title">
							Каталог товарів
						</div>
					</button>
				</li>
				<li class="menu__menu-li">
					<div class="menu__menu-item menu__menu-item--phone">
						<div class="menu__menu-icon menu__menu-icon--phone">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#phone2"/>
							</svg>
						</div>
						<a href="tel:+38 (050) 312-09-76" class="menu__menu-title">
							+38 (050) 312-09-76
						</a>
						<div class="menu__menu-arrow" data-toggle=".menu__menu-phones">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
							</svg>
						</div>
					</div>
					<ul class="menu__menu-phones">
						<? for($i = 0; $i < 3; $i++) { ?>
							<li><a href="tel:+38 (050) 312-09-76">+38 (050) 312-09-76</a></li>
						<? } ?>
					</ul>
				</li>
				<li class="menu__menu-li">
					<button type="button" class="menu__menu-item" data-fancybox data-src="#basket">
						<div class="menu__menu-icon menu__menu-icon--cart">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#cart2"/>
							</svg>
						</div>
						<div class="menu__menu-title">
							Кошик
						</div>
						<div class="menu__menu-number">1</div>
					</button>
				</li>
				<li class="menu__menu-li">
					<a href="/panel/wishlist.php" class="menu__menu-item">
						<div class="menu__menu-icon menu__menu-icon--like">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#like"/>
							</svg>
						</div>
						<div class="menu__menu-title">
							Список бажань
						</div>
						<div class="menu__menu-number">3</div>
					</a>
				</li>
				<li class="menu__menu-li">
					<a href="/panel/compare.php" class="menu__menu-item">
						<div class="menu__menu-icon menu__menu-icon--compare">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#compare"/>
							</svg>
						</div>
						<div class="menu__menu-title">
							Порівняння
						</div>
						<div class="menu__menu-number">13</div>
					</a>
				</li>
			</ul>
			<div class="menu__bl menu__bl--info">
				<div class="menu__info">
					<div class="menu__info-item">
						<div class="menu__info-title">
							Мова
						</div>
						<div class="menu__info-values">
							<ul class="menu__info-list">
								<li class="menu__info-li">
									<a href="#" class="menu__info-a">
										ru
									</a>
								</li>
								<li class="menu__info-li">
									<div class="menu__info-a active">
										<img src="<?= $target; ?>/img/ua.svg" class="menu__info-img" alt="" width="1" height="1"> ua
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="menu__info-item">
						<div class="menu__info-title">
							Валюта
						</div>
						<div class="menu__info-values">
							<ul class="menu__info-list">
								<li class="menu__info-li">
									<div class="menu__info-a active">
										UAH
									</div>
								</li>
								<li class="menu__info-li">
									<a href="#" class="menu__info-a">
										EUR
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="menu__bl">
				<nav class="menu__nav">
					<ul class="menu__nav-list">
						<? $menu = [
							0 => [
								'title' => 'Головна',
								'url' => '/',
							],
							1 => [
								'title' => 'Про нас',
								'url' => '/about.php',
							],
							2 => [
								'title' => 'Бренди',
								'url' => '/brands.php',
							],
							3 => [
								'title' => 'Новини',
								'url' => '/news.php',
							],
							4 => [
								'title' => 'Доставка та оплата',
								'url' => '/delivery-payments.php',
							],
							5 => [
								'title' => 'Контакти',
								'url' => '/contacts.php',
							],
							6 => [
								'title' => 'Завантаження',
								'url' => '/downloads.php',
							],
							7 => [
								'title' => 'Політика конфіденційності',
								'url' => '/privacy-policy.php',
							],
							8 => [
								'title' => 'Умови використання сайтом',
								'url' => '/conditions.php',
							],
						];
						foreach($menu as $item) {
							$title = $item['title'];
							$url = $item['url'];
						?>
							<li class="menu__nav-li">
								<a href="<?= $url; ?>" class="menu__nav-a">
									<?= $title; ?>
								</a>
							</li>
						<? } ?>
					</ul>
				</nav>
			</div>
			<div class="menu__bl">
				<div class="menu__title">Завантажуйте наші додатки</div>
				<ul class="menu__app">
					<li class="menu__app-li">
						<a href="#" class="menu__app-a" target="_blank" title="Google Play">
							<img src="<?= $target; ?>/img/google-app.svg" alt="" width="1" height="1">
						</a>
					</li>
					<li class="menu__app-li">
						<a href="#" class="menu__app-a" target="_blank" title="App Store">
							<img src="<?= $target; ?>/img/apple-app.svg" alt="" width="1" height="1">
						</a>
					</li>
				</ul>
			</div>
			<div class="menu__bl">
				<div class="menu__title">Ми в соціальних мережах</div>
				<div class="menu__social">
					<? include 'social.php'; ?>
				</div>
			</div>
		</div>

		<div class="header-catalog j-header-catalog">
			<div class="container">
				<button type="button" class="btn-catalog btn" data-target=".header-catalog, .j-overlay-width-header">
					<svg>
						<use xlink:href="<?= $target; ?>/img/icons.svg#catalog"/>
					</svg>
					Каталог товарів
					<svg class="btn-catalog__close">
						<use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
					</svg>
				</button>
				<div class="header-catalog__wrapper">
					<? include 'catalog-menu.php'; ?>
				</div>
			</div>
		</div>

		<div class="search-tablet">
			<div class="container">
				<? include 'search.php'; ?>
			</div>
		</div>