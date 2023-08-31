<? $login = true;

include '../templates/header.php'; ?>
	
    <div class="page page-history bg-grey">
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
                                <img src="<?= $target; ?>/img/panel/sidebar-icon3.svg" alt="">
                            </div>
                            <div class="select-page__btn-title">
                                Історія замовлень
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
                                    Історія замовлень
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Історія замовлень</h1>
                    </div>
                    <div class="page-history__wrapper">
                        <div class="history">
                            <div class="history__head">
                                <div class="history__head-td">Номер</div>
                                <div class="history__head-td">Дата</div>
                                <div class="history__head-td">Статус</div>
                                <div class="history__head-td">Оплата</div>
                                <div class="history__head-td">Доставка</div>
                                <div class="history__head-td">Ціна</div>
                            </div>
                            <div class="history__items">
                                <? for($i = 0; $i < 5; $i++) { ?>
                                    <div class="item-history">
                                        <div class="item-history__top" data-toggle="#history<?= $i; ?>">
                                            <div class="item-history__top-td">
                                                <div class="item-history__top-hidden">Номер</div>
                                                <div class="item-history__top-title">№1</div>
                                            </div>
                                            <div class="item-history__top-td">
                                                <div class="item-history__top-hidden">Дата</div>
                                                <div class="item-history__top-title">12.12.2023</div>
                                            </div>
                                            <div class="item-history__top-td">
                                                <div class="item-history__top-hidden">Статус</div>
                                                <div class="item-history__top-title">Виконано</div>
                                            </div>
                                            <div class="item-history__top-td">
                                                <div class="item-history__top-hidden">Оплата</div>
                                                <? if($i == 3) { ?>
                                                    <div class="item-history__top-title item-history__top-title--none">Не сплачено</div>
                                                <? } else { ?>
                                                    <div class="item-history__top-title">Сплачено</div>
                                                <? } ?>
                                            </div>
                                            <div class="item-history__top-td">
                                                <div class="item-history__top-hidden">Доставка</div>
                                                <div class="item-history__top-title">Нова Почта</div>
                                            </div>
                                            <div class="item-history__top-td">
                                                <div class="item-history__top-hidden">Ціна</div>
                                                <div class="item-history__price">
                                                    <div class="item-history__price-old">1500 грн</div>
                                                    <div class="item-history__price-new">1245 грн</div>
                                                </div>
                                            </div>
                                            <div class="item-history__top-arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="item-history__content" id="history<?= $i; ?>">
                                            <div class="item-history__content-inner">
                                                <div class="item-history__content-text">
                                                    <div class="item-history__content-title">
                                                        Інформація про замовлення
                                                    </div>
                                                    <div class="item-history__content-desc">
                                                        <ul>
                                                            <li>ТТН 20450429152209</li>
                                                            <li>Самовивіз з Нової Пошти</li>
                                                            <li>Дніпропетровська обл., Кам'янський р-н</li>
                                                            <li>Відділення №2, вул. Соборна (ран. Кірова), б.12</li>
                                                            <li>Іван Іванов Альбертович</li>
                                                            <li>0672925406</li>
                                                            <li>hellenarакпк4@gmail.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="item-history__content-products">
                                                    <div class="item-history__content-title">
                                                        Товари
                                                    </div>
                                                    <div class="item-history__content-list">
                                                        <? for($c = 0; $c < 2; $c++) { ?>
                                                            <? include '../templates/item-products-basket.php'; ?>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="show-more">
                            <button type="button" class="show-more__btn">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow-circle"/>
                                </svg>
                                Показати ще
                            </button>
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

<div class="bg-grey">
    <? include '../templates/subscribe.php'; ?>
</div>

<? include '../templates/footer.php'; ?>