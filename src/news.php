<? include 'templates/header.php'; ?>
	
    <div class="page page-news">
        <div class="container">
            <div class="page__wrapper">
                <div class="page__sidebar">
                    <div class="page__sidebar-inner">
                        <? include 'templates/catalog-menu.php'; ?>
                    </div>
                </div>
                <div class="page__content">
                    <div class="page__top">
                        <div class="breadcrumbs">
                            <a href="/" class="breadcrumbs__back">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                                Головна
                            </a>
                            <ul class="breadcrumbs__list">
                                <li class="breadcrumbs__li">
                                    <a href="/" class="breadcrumbs__a">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#home"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumbs__li">
                                    Новини
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Новини</h1>
                    </div>
                    <div class="tabs tabs--big">
                        <div class="tabs__scroll">
                            <ul class="tabs__list">
                                <li class="tabs__li">
                                    <a href="news.php" class="tabs__a active">Всі</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="news.php" class="tabs__a">Акції</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="news.php" class="tabs__a">Блог</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="news.php" class="tabs__a">Новинки</a>
                                </li>
                                <li class="tabs__li">
                                    <a href="news.php" class="tabs__a">Події</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-news__wrapper">
                        <div class="row row--3">
                            <? for($i = 0; $i < 8; $i++) { ?>
                                <div class="col">
                                    <? include 'templates/item-news.php'; ?>
                                </div>
                            <? } ?>
                        </div>
                        <div class="pagination">
                            <a href="#" class="pagination__item pagination__item--arrow pagination__item--prev">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </a>
                            <ul class="pagination__list">
                                <li class="pagination__li">
                                    <div class="pagination__item pagination__item--number active">
                                        1
                                    </div>
                                </li>
                                <li class="pagination__li">
                                    <a href="#" class="pagination__item pagination__item--number">
                                        2
                                    </a>
                                </li>
                                <li class="pagination__li">
                                    <a href="#" class="pagination__item pagination__item--number">
                                        3
                                    </a>
                                </li>
                                <li class="pagination__li">
                                    <a href="#" class="pagination__item pagination__item--number">
                                        4
                                    </a>
                                </li>
                                <li class="pagination__li">
                                    <a href="#" class="pagination__item pagination__item--number">
                                        ...
                                    </a>
                                </li>
                                <li class="pagination__li">
                                    <a href="#" class="pagination__item pagination__item--number">
                                        64
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="pagination__item pagination__item--arrow pagination__item--next">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? include 'templates/subscribe.php'; ?>

<? include 'templates/footer.php'; ?>