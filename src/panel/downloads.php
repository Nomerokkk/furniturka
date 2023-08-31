<? $login = true;

include '../templates/header.php'; ?>
	
    <div class="page page-downloads">
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
                                <img src="<?= $target; ?>/img/panel/sidebar-icon4.svg" alt="">
                            </div>
                            <div class="select-page__btn-title">
                                Файли для завантаження
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
                                    Файли для завантаження
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Файли для завантаження</h1>
                    </div>
                    <div class="tabs tabs--big">
                        <div class="tabs__scroll">
                            <ul class="tabs__list">
                                <li class="tabs__li">
                                    <a href="downloads.php" class="tabs__a active">Проспекти</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="downloads.php" class="tabs__a">Каталоги</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="downloads.php" class="tabs__a">Інструкція по монтажу</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="downloads.php" class="tabs__a">Монтажні схеми</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="downloads.php" class="tabs__a">Посібники з експлуатації</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="downloads.php" class="tabs__a">Брошюра</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-downloads__wrapper">
                        <div class="row row--3">
                            <? for($i = 0; $i < 9; $i++) { ?>
                                <div class="col">
                                    <a href="#" class="item-pdf">
                                        <div class="item-pdf__icon">
                                            <img src="<?= $target; ?>/img/pdf.svg" alt="">
                                        </div>
                                        <div class="item-pdf__title">
                                            Віконні ручки Maco дуже довга назвва тут
                                        </div>
                                    </a>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? include '../templates/subscribe.php'; ?>

<? include '../templates/footer.php'; ?>