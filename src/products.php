<? include 'templates/header.php'; ?>
	
    <div class="page page--overflow page-products">
        <div class="container">
            <div class="page__wrapper">
                <div class="page__sidebar">
                    <div class="page__sidebar-inner page__sidebar-inner--none-sticky">
                        <? include 'templates/catalog-menu.php'; ?>
                        <form class="filter" id="filter">
                            <div class="filter__title">
                                Фільтр
                            </div>
                            <div class="filter__price">
                                <div class="filter__price-title">
                                    Ціна (грн)
                                </div>
                                <div class="filter__price-inputs">
                                    <div class="filter__price-input">
                                        <input type="text" value="500" class="input j-range-first">
                                    </div>
                                    <div class="filter__price-line">-</div>
                                    <div class="filter__price-input">
                                        <input type="text" value="3000" class="input j-range-last">
                                    </div>
                                </div>
                                <div class="range-slider j-range-slider">
                                    <input type="range">
                                    <input type="range">
                                    <div class="range-slider__thumb" data-lower></div>
                                    <div class="range-slider__thumb" data-upper></div>
                                    <div class="range-slider__range"></div>
                                </div>
                            </div>
                            <div class="filter__bls">
                                <? $filter = [
                                    0 => [
                                        'title' => 'Вага стулки',
                                        'items' => [
                                            0 => [
                                                'title' => '120 г',
                                                'number' => '1',
                                            ]
                                        ]
                                    ],
                                    1 => [
                                        'title' => 'Колір',
                                        'items' => [
                                            0 => [
                                                'title' => ' Біла',
                                                'number' => '2',
                                            ]
                                        ]
                                    ],
                                    2 => [
                                        'title' => 'Розмір',
                                        'items' => [
                                            0 => [
                                                'title' => '12см',
                                                'number' => '5',
                                            ]
                                        ]
                                    ],
                                    3 => [
                                        'title' => 'Фіксація',
                                        'items' => [
                                            0 => [
                                                'title' => '12см',
                                                'number' => '1',
                                            ]
                                        ]
                                    ],
                                    4 => [
                                        'title' => 'Виробник',
                                        'items' => [
                                            0 => [
                                                'title' => 'Hoppe',
                                                'number' => '14',
                                            ],
                                            1 => [
                                                'title' => 'Maco',
                                                'number' => '46',
                                            ],
                                            2 => [
                                                'title' => 'Medos',
                                                'number' => '17',
                                            ],
                                        ]
                                    ],
                                ];
                                foreach($filter as $item) { 
                                    $title = $item['title'];
                                    $items = $item['items'];    
                                ?>
                                    <div class="filter__item">
                                        <div class="filter__item-title">
                                            <?= $title; ?>
                                        </div>
                                        <? if($items) { ?>
                                            <ul class="filter__item-list">
                                                <? foreach($items as $item_sub) {
                                                    $title = $item_sub['title'];
                                                    $number = $item_sub['number'];
                                                ?>
                                                    <li class="filter__item-list-li">
                                                        <label class="checkbox">
                                                            <input type="checkbox">
                                                            <div class="checkbox__bl">
                                                                <div class="checkbox__check">
                                                                    <svg>
                                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#checkbox"/>
                                                                    </svg>
                                                                </div>
                                                                <div class="checkbox__title"><?= $title; ?></div>
                                                                <div class="checkbox__number"><?= $number; ?></div>
                                                            </div>
                                                        </label>
                                                    </li>
                                                <? } ?>
                                            </ul>
                                        <? } ?>
                                    </div>
                                <? } ?>
                            </div>
                            <div class="filter__btns">
                                <button type="submit" class="btn">застосувати</button>
                                <button type="reset" class="btn btn--transparent">Скасувати</button>
                            </div>
                        </form>
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
                                    Алюмінієві системи
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-products__info">
                        <h1 class="page__title title">Алюмінієві системи</h1>
                        <button type="button" class="filter-btn" data-fancybox data-src="#filter">
                            Фільтр
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#filter"/>
                            </svg>
                        </button>
                        <div class="sort">
                            <select class="select j-select" data-minimum-results-for-search="Infinity">
                                <option value="За рейтингом">За рейтингом</option>
                                <option value="Від дешевих до дорогих">Від дешевих до дорогих</option>
                                <option value="Від дорогих до дешевих">Від дорогих до дешевих</option>
                                <option value="Популярні">Популярні</option>
                                <option value="Акційні">Акційні</option>
                                <option value="Новинки">Новинки</option>
                            </select>
                        </div>
                    </div>
                    <div class="subcategory">
                        <div class="subcategory__row">
                            <? $submenu2 = [
                                0 => 'Фрикційні ножниці',
                                1 => 'Противовзломная фурнитура МACO',
                                2 => 'Фурнитура МACO серия КOMFORT',
                                3 => 'Фурнитура МACO серия MAMMUT',
                                4 => 'Фурнитура МACO серия TWIN-FIT',
                                5 => 'Фурнитура МACO RUSTICO для ставней',
                                6 => 'Ограничитель поворота окна МАСО с тормозом',
                                7 => 'Петли МАСО для многостворчатых распашных окон',
                                8 => 'Cкрытые ручки МАСО TENTAZIONE',
                                9 => 'Cкрытая фурнитура МАСО серия INVISIBLE на 80 кг',
                                10 => 'Скрытая фурнитура MАСО серия Multi Power на 150 кг',
                                11 => 'Фурнитура HAUTAU - решение нестандартов',
                            ];
                            foreach($submenu2 as $item) { 
                                $title = $item;    
                            ?>
                                <div class="subcategory__col">
                                    <a href="/products.php" class="subcategory__item">
                                        <div class="subcategory__img">
                                            <img src="<?= $target; ?>/img-webp/products/products1.webp" alt="">
                                        </div>
                                        <div class="subcategory__title">
                                            <?= $title; ?>
                                        </div>
                                    </a>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                    <div class="page-products__wrapper">
                        <div class="row row--5">
                            <? for($i = 0; $i < 20; $i++) { ?>
                                <div class="col">
                                    <? include 'templates/item-products.php'; ?>
                                </div>
                            <? } ?>
                        </div>
                        <div class="show-more">
                            <button type="button" class="show-more__btn">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow-circle"/>
                                </svg>
                                <span>Показати ще</span>
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

    <? include 'templates/subscribe.php'; ?>

<? include 'templates/footer.php'; ?>