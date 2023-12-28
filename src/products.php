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
                        <div class="page-products__sort">
                            <div class="page-products__sort-row">
                                <div class="page-products__sort-col">
                                    <div class="sort sort--numbers">
                                        <select class="select j-select" data-minimum-results-for-search="Infinity" data-placeholder="Показати">
                                            <option value="" disabled selected></option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>
                                            <option value="120">120</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="page-products__sort-col">
                                    <div class="sort sort--order">
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
                            </div>
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
                    <div class="page__seo text text--small">
                        <p style="text-align: justify;">
                            <span style="font-size:14px;">Компания Hautau — передовой производитель, который осуществляет производство оконной фурнитуры. Недавно она отметила свой 100-летний юбилей (</span>Семейное предприятие HAUTAU было основано в 1910 году в г. Хагенбург)<span style="font-size:14px;">. За время своего существования компания Hautau проделала огромный путь, превратившись из небольшой мастерской в мощное предприятие. На нем производится оконная фурнитура, с помощью которой можно воплотить в жизнь даже нестандартные замыслы дизайнеров.&nbsp;</span></p>
                            <span style="font-size:14px;">Немецкая оконная фурнитура Hautau получила почти 200 патентов. Причем на этом предприятии изготавливают не только сами механизмы и комплектующие. На заводе Hautau имеется специальный инструментальный цех, где разрабатываются и производятся специализированные станки. Борясь за качество выпускаемой продукции, производители оконной фурнитуры Hautau постоянно организуют обучающие семинары и курсы повышения квалификации для сотрудников. Специально для этого был организован информационно-тренинговый центр. Прошедшие обучение специалисты могут не только работать на самом предприятии, но и оказывать грамотные консультационные услуги тем, кого заинтересовали какие-либо виды оконной фурнитуры этой марки.&nbsp;</span></p>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">Производство оконной фурнитуры Hautau осуществляется с применением новейших технологий. Компания постоянно вкладывает средства в обновление оборудования и использование различных технических новшеств.</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">Под маркой Hautau выпускается оконная фурнитура купить которую наверняка захотят люди, ценящие знаменитое немецкое качество. Эта компания за годы существования создала довольно разветвленную сеть торговых представительств не только в самой Германии, но и во многих других странах. В чем же причины популярности этой марки? </span></div>
                        <div style="text-align: justify;">
                            &nbsp;</div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">Hautau — оконная фурнитура купить которую люди хотят по следующим причинам:</span></div>
                        <div style="text-align: justify;">
                            &nbsp;</div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">- она прочно держится на своем месте, так как сверху и снизу закрепляется специальными упорными частями;</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">- направляющие рычагов ходят мягко и бесшумно, при этом даже сильный ветер не повредит их, когда они находятся в положениях опрокидывания и сдвига;</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">- оконная фурнитура Hautau оснащена запорными пластинами и симметричными фиксируемыми деталями замка, поэтому запирается очень легко;</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">- створки окон ходят мягко благодаря тому, что перед роликами располагаются каретки, защищенные очищающими щеточками;</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">- профиль разгружен, так как оси и ходовой механизм расположены на минимальном расстоянии;</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">- оконная фурнитура марки Hautau идеально подходит в том числе и для неподвижных оконных конструкций, а также отлично дополнит нижнеподвесные окна;</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">- оконная фурнитура пластиковых окон Hautau отличается уникальным красивым дизайном — все винты закрываются профилем, защитные кожухи окрашиваются в тот же цвет, что и сама рама, а ходовой механизм скрывается за плоским кожухом, что смотрится более эстетично.</span></div>
                        <div style="text-align: justify;">
                            &nbsp;</div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">Оконная и дверная фурнитура Hautau сделает любой дом не только уютным, но и современным. Эта марка славится не только возможностью создания индивидуального дизайна помещений, но и надежностью, функциональностью. Оконная фурнитура Hautau — это современные технические системы, которые сделают использование профилей легким и удобным.</span></div>
                        <div style="text-align: justify;">
                            &nbsp;</div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">На сегодняшний день компания Hautau предлагает следующую продукцию:</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">1) Параллельно-раздвижная универсальная оконная фурнитура Atrium HS и наклонно-раздвижная фурнитура Atrium HKS, которые имеют функцию откидывания.</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">2) Оконная фурнитура Tornado, идеально подходящая для среднеподвесных систем.</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">3) Устройства RWA, предназначенные для проветривания.</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">4) Механизмы, предназначенные для открывания фрамуг, расположенных на значительной высоте. Эта оконная фурнитура позволяет открывать окна и фиксировать их в выбранном положении не только вручную, но и с помощью электрического привода.&nbsp;</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">5) Поворотно-откидная оконная фурнитура Hautau, которая позволяет открывать створки под углом до 95° и фиксировать их в любом выбранном положении.</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">6) Подъемно-раздвижная оконная фурнитура Hautau, которая используется для оформления фасадов и изготовления застекленных дверей, изготовленных из пластика, дерева или какого-либо легкого металла (алюминий, сталь).</span></div>
                        <div style="text-align: justify;">
                            <span style="font-size:14px;">Компания Hautau осуществляет производство оконной фурнитуры, которая обеспечит именно тот вариант открывания окон и дверей, который будет оптимальным в каждом конкретном случае. С ее помощью окошко можно при желании откидывать, сдвигать, приподнимать, приоткрывать для проветривания, поворачивать по горизонтальной и вертикальной оси. Кроме того, оконная фурнитура Hautau позволяет останавливать или блокировать систему в нужном положении. При использовании оригинальных комплектующих компания гарантирует долговечность и надежность конструкции. Благодаря этим факторам, характеризующим качество продукции марки Hautau, данная оконная фурнитура отзывы получает самые положительные.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <? include 'templates/subscribe.php'; ?>

<? include 'templates/footer.php'; ?>