<? include 'templates/header.php'; ?>
	
    <div class="banner">
        <div class="container">
            <div class="banner__wrapper">
                <div class="banner__sidebar">
                    <? include 'templates/catalog-menu.php'; ?>
                </div>
                <div class="banner__content">
                    <div class="banner__slider j-banner-slider">
                        <div class="banner__slider-slider">
                            <div class="banner__slider-wrapper">
                                <? for($i = 0; $i < 5; $i++) { ?>
                                    <div class="banner__slider-slide">
                                        <div class="banner__slider-item" data-swiper-parallax="300">
                                            <img src="<?= $target; ?>/img-webp/home/banner1.webp" alt="">
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                            <button type="button" class="arrow arrow--prev j-prev">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </button>
                            <button type="button" class="arrow arrow--next j-next">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button type="button" class="btn-catalog btn" data-target=".header-catalog, .j-overlay-width-header">
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#catalog"/>
                        </svg>
                        Каталог товарів
                    </button>
                    <div class="banner__preims">
                        <? include 'templates/preims.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey">
        <section class="section section-products">
            <div class="container">
                <div class="section__top">
                    <h2 class="title">Нові надходження</h2>
                    <a href="products.php" class="section__more">
                        <div class="section__more-title">
                            <div class="section__more-long">Дивитися все</div>
                            <div class="section__more-short">Все</div>
                        </div>
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow-long"/>
                        </svg>
                    </a>
                </div>
                <div class="row row--5">
                    <? for($i = 0; $i < 5; $i++) { ?>
                        <div class="col">
                            <? include 'templates/item-products.php'; ?>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row row--2">
                    <? $action = [
                        0 => [
                            'title' => 'Топ продажів',
                            'title2' => 'Розсувні системи HS',
                            'btn' => 'Перейти до каталогу',
                            'img' => $target . '/img-webp/action/action1.webp',
                            'url' => 'products.php',
                            'desc' => '',
                        ],
                        1 => [
                            'title' => 'Рекомендуємо',
                            'title2' => 'Розсувні системи SKB-Z',
                            'btn' => 'Перейти до каталогу',
                            'img' => $target . '/img-webp/action/action2.webp',
                            'url' => 'products.php',
                            'desc' => '',
                        ],
                    ];
                    foreach($action as $item) {
                        $title = $item['title'];
                        $title2 = $item['title2'];
                        $desc = $item['desc'];
                        $btn = $item['btn'];
                        $img = $item['img'];
                        $url = $item['url'];
                    ?>
                        <div class="col">
                            <div class="item-action item-action--top">
                                <picture class="item-action__picture">
                                    <img src="<?= $img; ?>" alt="" loading="lazy">
                                </picture>
                                <div class="item-action__content">
                                    <div class="item-action__top"><?= $title; ?></div>
                                    <div class="item-action__text">
                                        <div class="item-action__title title"><?= $title2; ?></div>
                                        <div class="item-action__desc">
                                            <?= $desc; ?>
                                        </div>
                                        <div class="item-action__btn">
                                            <a href="<?= $url; ?>" class="btn">
                                                <?= $btn; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section class="section section-products">
            <div class="container">
                <div class="section__top">
                    <h2 class="title">Акційні пропозиції</h2>
                    <a href="products.php" class="section__more">
                        <div class="section__more-title">
                            <div class="section__more-long">Дивитися все</div>
                            <div class="section__more-short">Все</div>
                        </div>
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow-long"/>
                        </svg>
                    </a>
                </div>
                <div class="row row--5">
                    <? for($i = 0; $i < 5; $i++) { ?>
                        <div class="col">
                            <? include 'templates/item-products.php'; ?>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section class="section section-products">
            <div class="container">
                <div class="section__top">
                    <h2 class="title">Рекомендації</h2>
                    <a href="products.php" class="section__more">
                        <div class="section__more-title">
                            <div class="section__more-long">Дивитися все</div>
                            <div class="section__more-short">Все</div>
                        </div>
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow-long"/>
                        </svg>
                    </a>
                </div>
                <div class="row row--5">
                    <? for($i = 0; $i < 5; $i++) { ?>
                        <div class="col">
                            <? include 'templates/item-products.php'; ?>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section class="section section-products">
            <div class="container">
                <div class="section__top">
                    <h2 class="title">Популярне</h2>
                    <a href="products.php" class="section__more">
                        <div class="section__more-title">
                            <div class="section__more-long">Дивитися все</div>
                            <div class="section__more-short">Все</div>
                        </div>
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow-long"/>
                        </svg>
                    </a>
                </div>
                <div class="row row--5">
                    <? for($i = 0; $i < 5; $i++) { ?>
                        <div class="col">
                            <? include 'templates/item-products.php'; ?>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row row--2">
                    <? $action = [
                        0 => [
                            'title2' => 'Доставка та оплата',
                            'desc' => 'Ми доставляємо товари за допомогою перевізників “Нова Пошта” та “Делівері”',
                            'btn' => 'Дізнатися більше',
                            'img' => $target . '/img-webp/action/action3.webp',
                            'url' => 'delivery-payments.php',
                        ],
                        1 => [
                            'title2' => 'Мінімальна сума замовлення 500 грн',
                            'desc' => 'Ви можете оплатити замовлення при самовивозі з наших складів, також оплату приймаємо на карти ПриватБанку',
                            'btn' => 'Дізнатися більше',
                            'img' => $target . '/img-webp/action/action4.webp',
                            'url' => '#',
                        ],
                    ];
                    foreach($action as $item) {
                        $title2 = $item['title2'];
                        $desc = $item['desc'];
                        $btn = $item['btn'];
                        $img = $item['img'];
                        $url = $item['url'];
                    ?>
                        <div class="col">
                            <div class="item-action">
                                <picture class="item-action__picture">
                                    <img src="<?= $img; ?>" alt="" loading="lazy">
                                </picture>
                                <div class="item-action__content">
                                    <div class="item-action__text">
                                        <div class="item-action__title title"><?= $title2; ?></div>
                                        <div class="item-action__desc">
                                            <?= $desc; ?>
                                        </div>
                                        <div class="item-action__btn">
                                            <a href="<?= $url; ?>" class="btn">
                                                <?= $btn; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section class="section brands">
            <div class="container">
                <div class="section__top">
                    <h2 class="title">Наші бренди та партнери</h2>
                    <a href="brands.php" class="section__more">
                        <div class="section__more-title">
                            <div class="section__more-long">Дивитися все</div>
                            <div class="section__more-short">Все</div>
                        </div>
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow-long"/>
                        </svg>
                    </a>
                </div>
                <div class="brands__slider j-brands-slider">
                    <div class="row row--5">
                        <? for($i = 1; $i < 11; $i++) { ?>
                            <div class="col">
                                <div class="item-brands">
                                    <img src="<?= $target; ?>/img-webp/brands/brands<?= $i; ?>.webp" alt="" width="1" height="1">
                                </div>
                            </div>
                        <? } ?>
                    </div>
                    <div class="scrollbar j-scrollbar"></div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section__top">
                    <h2 class="title">Новини</h2>
                    <a href="news.php" class="section__more">
                        <div class="section__more-title">
                            <div class="section__more-long">Дивитися все</div>
                            <div class="section__more-short">Все</div>
                        </div>
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow-long"/>
                        </svg>
                    </a>
                </div>
                <div class="news-slider j-news-slider">
                    <div class="news-slider__slider">
                        <div class="news-slider__wrapper row row--2">
                            <? for($i = 0; $i < 5; $i++) { ?>
                                <div class="news-slider__slide col">
                                    <? include 'templates/item-news.php'; ?>
                                </div>
                            <? } ?>
                        </div>
                        <div class="scrollbar j-scrollbar"></div>
                    </div>
                </div>
            </div>
        </section>

        <? include 'templates/subscribe.php'; ?>
    </div>

<? include 'templates/footer.php'; ?>