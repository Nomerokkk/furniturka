<? $login = true;

include '../templates/header.php'; ?>
	
    <div class="page page-compare">
        <div class="container">
            <div class="page__wrapper">
                <div class="page__sidebar">
                    <div class="page__sidebar-inner">
                        <? include '../templates/sidebar-panel.php'; ?>
                    </div>
                </div>
                <div class="page__content">
                    <div class="select-page">
                        <button type="button" class="select-page__btn" data-target=".select-page__list">
                            <div class="select-page__btn-icon">
                                <img src="<?= $target; ?>/img/panel/sidebar-icon5.svg" alt="">
                            </div>
                            <div class="select-page__btn-title">
                                Порівняння
                            </div>
                            <div class="select-page__btn-arrow">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </div>
                        </button>
                        <ul class="select-page__list">
                            <? foreach($catalog as $item) {
                                $title = $item['title'];
                                $url = $item['url'];
                                $icon = $item['icon'];
                            ?>
                                <li class="select-page__list-li">
                                    <a href="<?= $url; ?>" class="select-page__list-a">
                                        <div class="select-page__list-icon">
                                            <img src="<?= $icon; ?>" alt="">
                                        </div>
                                        <div class="select-page__list-title">
                                            <?= $title; ?>
                                        </div>
                                    </a>
                                </li>
                            <? } ?>
                            <li class="select-page__list-li">
                                <a href="/" class="exit btn btn--border-grey">
                                    <div class="exit__icon">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#exit"/>
                                        </svg>
                                    </div>
                                    <div class="exit__title">Вийти з акаунту</div>
                                    <div class="exit__arrow">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="page__top">
                        <div class="breadcrumbs">
                            <a href="/panel/" class="breadcrumbs__back">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                                Головна
                            </a>
                            <ul class="breadcrumbs__list">
                                <li class="breadcrumbs__li">
                                    <a href="/panel/" class="breadcrumbs__a">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#home"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumbs__li">
                                    Порівняння
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Порівняння</h1>
                    </div>
                    <? $catalog = [
                        0 => [
                            'title' => 'Алюмінієві системи',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu1.svg',
                        ],
                        1 => [
                            'title' => 'Віконна фурнітура',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu2.svg',
                        ],
                        2 => [
                            'title' => 'Дверна фурнітура',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu3.svg',
                        ],
                        3 => [
                            'title' => 'Розсувні системи',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu4.png',
                        ],
                        4 => [
                            'title' => 'Фурнітура для віконниць',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu5.png',
                        ],
                        5 => [
                            'title' => 'Ущільнювачі',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu6.png',
                        ],
                        6 => [
                            'title' => 'Монтажні матеріали',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu7.svg',
                        ],
                        7 => [
                            'title' => 'Хімія для вікон та дверей',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu8.svg',
                        ],
                        8 => [
                            'title' => 'Водовідливні профілі',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu9.svg',
                        ],
                        9 => [
                            'title' => 'Зовнішні видливи',
                            'url' => '/products.php',
                            'icon' => $target . '/img/catalog-menu/catalog-menu10.svg',
                        ],
                    ]; ?>
                    <div class="page-compare__categories">
                        <ul class="page-compare__categories-list">
                            <? foreach($catalog as $item) {
                                $title = $item['title'];
                                $url = $item['url'];
                                $icon = $item['icon'];
                            ?>
                                <li class="page-compare__categories-li">
                                    <a href="#" class="page-compare__categories-link">
                                        <div class="page-compare__categories-icon">
                                            <img src="<?= $icon; ?>" alt="">
                                        </div>
                                        <div class="page-compare__categories-title">
                                            <?= $title; ?>
                                        </div>
                                    </a>
                                </li>
                            <? } ?>
                        </ul>
                    </div>
                    <div class="page-compare__nav">
                        <button type="button" class="page-compare__nav-item page-compare__nav-item--differents">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#only-compare"/>
                            </svg>
                            Тільки відмінності
                        </button>
                        <a href="/products.php" class="page-compare__nav-item">
                            + Додати ще модель
                        </a>
                    </div>
                    <div class="page-compare__products">
                        <? for($i = 0; $i < 2; $i++) { ?> 
                            <div class="item-compare">
                                <a href="/single-products.php" class="item-compare__img">
                                    <picture class="item-compare__picture">
                                        <img src="<?= $target; ?>/img/products/products1.jpg" alt="" loading="lazy">
                                    </picture>
                                </a>
                                <a href="/single-products.php" class="item-compare__title">
                                    Ущільнювач удаваний чорний (Саламандер)
                                </a>
                                <div class="item-compare__nav">
                                    <div class="item-products__price">
                                        <div class="item-products__price-old">1599</div>
                                        <div class="item-products__price-new">1245 грн</div>
                                    </div>
                                    <button type="button" class="item-products__btn item-products__btn--cart j-add-to-cart">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#cart"/>
                                        </svg>
                                        <span class="in-backet">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#checkbox"/>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="btn-nav">
                                    <button type="button" class="btn-nav__btn" data-target="#btn-nav-list-compare<?= $i; ?>">
                                        <div class="btn-nav__btn-inner">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </button>
                                    <ul class="btn-nav__list" id="btn-nav-list-compare<?= $i; ?>">
                                        <li class="btn-nav__list-li">
                                            <button type="button" class="btn-nav__list-item">
                                                <div class="btn-nav__list-icon btn-nav__list-icon--remove">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#remove"/>
                                                    </svg>
                                                </div>
                                                <div class="btn-nav__list-title">
                                                    Видалити
                                                </div>
                                            </button>
                                        </li>
                                        <li class="btn-nav__list-li">
                                            <button type="button" class="btn-nav__list-item">
                                                <div class="btn-nav__list-icon btn-nav__list-icon--like">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#heart"/>
                                                    </svg>
                                                </div>
                                                <div class="btn-nav__list-title">
                                                    У список бажань
                                                </div>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                    <div class="page-compare__compare">
                        <div class="item-accordion">
                            <div class="item-accordion__top active" data-toggle="#compare">
                                <div class="item-accordion__title">
                                    Характеристики
                                </div>
                                <div class="item-accordion__arrow">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="item-accordion__content" id="compare" style="display: block">
                                <? for($i = 0; $i < 6; $i++) { ?>
                                    <div class="page-compare__bl">
                                        <div class="page-compare__title">
                                            Товщина ступки
                                        </div>
                                        <div class="page-compare__list">
                                            <div class="page-compare__list-item">
                                                До 90 мм
                                            </div>
                                            <div class="page-compare__list-item">
                                                До 120 мм
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="compare-list">
		<div class="modal__top">
			<div class="modal__title">
                Редагувати назву
			</div>
		</div>
		<div class="modal__content">
            <form class="j-form" novalidate>
                <label class="label">
                    <span class="label__title">Назва списку</span>
                    <input type="text" class="input input--small" value="Мій список бажань" required>
                </label>
                <div class="modal__btns">
                    <div class="modal__btns-col">
                        <button type="submit" class="btn">Зберегти</button>
                    </div>
                    <div class="modal__btns-col">
                        <button type="button" class="btn btn--border-grey" data-close>Скасувати</button>
                    </div>
                </div>
            </form>
		</div>
	</div>

<? include '../templates/subscribe.php'; ?>

<? include '../templates/footer.php'; ?>