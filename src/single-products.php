<? include 'templates/header.php'; ?>
	
    <div class="page page-single-products">
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
                            <a href="products.php" class="breadcrumbs__back">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                                Алюмінієві системи
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
                                    <a href="products.php" class="breadcrumbs__a">Алюмінієві системи</a>
                                </li>
                                <li class="breadcrumbs__li">
                                    Ручка для розсувної системи Масо (Біла)
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Ручка для розсувної системи Масо (Біла)</h1>
                    </div>
                    <div class="tabs-single-products">
                        <ul class="tabs-single-products__list">
                            <? $list = [
                                0 => [
                                    'title' => 'Опис',
                                    'id' => 'tab-description',
                                ],
                                1 => [
                                    'title' => 'Характеристики',
                                    'id' => 'tab-characteristics',
                                ],
                                2 => [
                                    'title' => 'Відгуки',
                                    'id' => 'tab-reviews',
                                    'count' => 2,
                                ],
                                3 => [
                                    'title' => 'Файли до товару',
                                    'id' => 'tab-files',
                                    'count' => 5,
                                ],
                                5 => [
                                    'title' => 'Відео',
                                    'id' => 'tab-videos',
                                    'count' => 7,
                                ],
                            ];
                            foreach($list as $i => $item) {
                                $title = $item['title'];
                                $id = $item['id'];
                                $count = $item['count'];
                            ?>
                                <li class="tabs-single-products__li">
                                    <button type="button" data-scroll="#<?= $id; ?>" class="tabs-single-products__a j-scroll">
                                        <?= $title; ?>
                                        <? if($count) {
                                            echo '<span>' . $count . '</span>';
                                        } ?>
                                    </button>
                                </li>
                            <? } ?>
                        </ul>
                    </div>
                    <div class="page-single-products__wrapper">
                        <div class="page-single-products__row">
                            <div class="page-single-products__one">
                                <div class="page-single-products__one-sticky">
                                    <div class="product-gallery">
                                        <div class="product-gallery__slider j-product-gallery-slider">
                                            <div class="product-gallery__zoom">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#search"/>
                                                </svg>
                                            </div>
                                            <div class="product-gallery__slider-wrapper">
                                                <? for($i = 0; $i < 3; $i++) { ?>
                                                    <div class="product-gallery__slider-slide">
                                                        <picture class="product-gallery__slider-item j-zoom-img" data-fancybox="gallery" data-src="<?= $target; ?>/img/products/products2.jpeg">
                                                            <img src="<?= $target; ?>/img/products/products2.jpeg" alt="">
                                                        </picture>
                                                    </div>
                                                <? } ?>
                                                <? for($i = 0; $i < 3; $i++) { ?>
                                                    <div class="product-gallery__slider-slide">
                                                        <picture class="product-gallery__slider-item j-zoom-img" data-fancybox="gallery" data-src="<?= $target; ?>/img/products/single-products.jpg">
                                                            <img src="<?= $target; ?>/img/products/single-products.jpg" alt="">
                                                        </picture>
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
                                        <div class="product-gallery__thumbnails j-product-gallery-thumbnails">
                                            <div class="product-gallery__thumbnails-wrapper">
                                                <? for($i = 0; $i < 3; $i++) { ?>
                                                    <div class="product-gallery__thumbnails-slide">
                                                        <div class="product-gallery__thumbnails-item">
                                                            <img src="<?= $target; ?>/img/products/products2.jpeg" alt="">
                                                        </div>
                                                    </div>
                                                <? } ?>
                                                <? for($i = 0; $i < 3; $i++) { ?>
                                                    <div class="product-gallery__thumbnails-slide">
                                                        <div class="product-gallery__thumbnails-item">
                                                            <img src="<?= $target; ?>/img/products/products1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                <? } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-single-products__two">
                                <div class="single-products-info">
                                    <div class="single-products-info__top">
                                        <div class="single-products-info__code">
                                            Артикул - 24532
                                        </div>
                                        <div class="single-products-info__stock single-products-info__stock--in">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#checkbox"/>
                                            </svg>
                                            Є в наявності
                                        </div>
                                        <div class="single-products-info__stock single-products-info__stock--out">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                            </svg>
                                            Немає в наявності
                                        </div>
                                    </div>
                                    <div class="single-products-info__price">
                                        <!-- <div class="single-products-info__price-old">500 грн</div> -->
                                        <div class="single-products-info__price-new">1245 грн</div>
                                    </div>
                                    <div class="single-products-info__btns">
                                        <div class="single-products-info__btns-col">
                                            <button type="button" class="btn btn--cart j-add-to-cart">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#cart"/>
                                                </svg>
                                                Купити
                                                <span class="in-backet in-backet--white">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#checkbox"/>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="single-products-info__btns-col">
                                            <button type="button" class="btn btn--border-grey" data-fancybox data-src="#buy-one-click">
                                                купити в 1 клік
                                            </button>
                                        </div>
                                        <div class="single-products-info__btns-col">
                                            <button type="button" class="single-products-info__btn single-products-info__btn--like j-add-to-like">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#heart"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="single-products-info__btn single-products-info__btn--compare j-add-to-compare">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#compare"/>
                                                </svg>
                                                <span class="in-backet">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#checkbox"/>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="variable">
                                        <div class="variable__row">
                                            <? for($i = 0; $i < 8; $i++) { ?>
                                                <div class="variable__col">
                                                    <label class="variable__radio">
                                                        <input type="radio" name="variable" checked>
                                                        <div class="variable__radio-item">
                                                            <img src="<?= $target; ?>/img/products/products1.jpg" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="single-products-info__accordion">
                                        <div class="item-accordion">
                                            <div class="item-accordion__top" data-toggle="#ac-delivery">
                                                <div class="item-accordion__title">
                                                    Доставка
                                                </div>
                                                <div class="item-accordion__arrow">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="item-accordion__content text text--small" id="ac-delivery">
                                                <p>Ми використовуємо спосіб доставки склад-склад перевізником "Нова Пошта" та "Делівері".</p>
                                                <p>Доставляємо у найкоротші терміни у всі області України, такі як: Київська, Дніпропетровська, Волинська, Рівненська, Житомирська, Чернігівська, Сумська, Харківська, Луганська, Донецька, Запорізька, Херсонська, Одеська, Миколаївська, Кіровоградська, Полтавська, Черкаська, Вінницька, Хмельницька, Чернівецька, Тернопільська, Івано-Франківська, Ужгородська, Львівська.</p>
                                            </div>
                                        </div>
                                        <div class="item-accordion">
                                            <div class="item-accordion__top" data-toggle="#ac-payment">
                                                <div class="item-accordion__title">
                                                    Оплата
                                                </div>
                                                <div class="item-accordion__arrow">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="item-accordion__content text text--small" id="ac-payment">
                                                <p>Ви можете сплатити замовлення безпосередньо при самовивезенні з наших складів, так само оплату приймаємо на карти Приватбанку.</p>
                                                <p>УВАГА!!! ПРИ ОПЛАТІ З БЕЗГОТІВНОГО РОЗРАХУНКУ ВАРТІСТЬ УТОЧНЮЙТЕ У МЕНЕДЖЕРА!!!</p>
                                                <p>Відправка товару здійснюється у понеділок, середу та п'ятницю після попередньої 100% оплати до 10-30. Якщо оплата виконана після 10-30 - відправлення замовлення переноситься наступного дня відправок.</p>
                                            </div>
                                        </div>
                                        <div class="item-accordion">
                                            <div class="item-accordion__top" data-toggle="#ac-garanty">
                                                <div class="item-accordion__title">
                                                    Сервіс та гарантія
                                                </div>
                                                <div class="item-accordion__arrow">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="item-accordion__content text text--small" id="ac-garanty">
                                                <p>У разі виявлення дефектів, виробник бере на себе зобов'язання відремонтувати несправний виріб безкоштовно або замінити його несправні частини тільки за наявності фірмового бланка компанії.</p>
                                                <p>Термін гарантії на всі вироби, виготовлені за індивідуальними розмірами замовника, становить 12 місяців від дати виготовлення замовлення. Для гарантійного обслуговування поверніть Ваш виріб до головного офісу компанії.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-single-products__full">
                                <div class="item-accordion" id="tab-description">
                                    <div class="item-accordion__top active" data-toggle="#description">
                                        <div class="item-accordion__title">
                                            Опис товару
                                        </div>
                                        <div class="item-accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item-accordion__content" id="description" style="display: block;">
                                        <div class="page-single-products__desc text text--small">
                                            <p>Фірмові натискні ручки Hoppe Лондон виготовляються з високоякісного, корозійностійкого первинного алюмінію. Оздоблення поверхні прекрасно зарекомендувала себе фурнітури з легких металів фірми Hoppe здійснюється методом анодування або методом порошкового покриття. </p>
                                            <p>При анодуванні завдяки цілеспрямовано керованому процесу окислення (з'єднанню матеріалу з киснем), штучно викликається за допомогою струму і сірчаної кислоти, з самого виробу утворюється захисний поверхневий шар (окисний шар). Цей шар захищає вироби від впливу навколишнього середовища, наприклад, від поту рук, від вологи, що міститься в повітрі, і від незначних механічних впливів. Пошкодження поверхні, наприклад, кільцями або ключами, не призводять до корозії. При порошковому покритті на алюмінієву поверхню за допомогою електростатичної технології наноситься лаковий порошок. Потім проводиться випал при температурі 150-200 °C, завдяки чому лакові частинки в ході реакції „зшивання“ сплавляються в лакову плівку. Шкідливий вплив фурнітури з алюмінію на здоров'я людей не встановлено. Алюміній не вимагає спеціального догляду, так як отриманий окисний шар захищає матеріал. Забруднення можуть бути видалені за допомогою м'якої ганчірки, змоченою у воді.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-accordion" id="tab-characteristics">
                                    <div class="item-accordion__top" data-toggle="#characteristics">
                                        <div class="item-accordion__title">
                                            Характеристики
                                        </div>
                                        <div class="item-accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item-accordion__content" id="characteristics">
                                        <? $characteristics = [
                                            0 => [
                                                'title' => 'Колір',
                                                'value' => 'бронза',
                                            ],
                                            1 => [
                                                'title' => 'Виробник',
                                                'value' => 'Hoppe (Німеччина)',
                                            ],
                                            2 => [
                                                'title' => 'Відстань від ручки до циліндра',
                                                'value' => '92 мм',
                                            ],
                                            3 => [
                                                'title' => 'Ширина планки',
                                                'value' => '54 мм',
                                            ],
                                            4 => [
                                                'title' => 'Висота планки',
                                                'value' => '250 мм',
                                            ],
                                            5 => [
                                                'title' => 'Товщина планки',
                                                'value' => '15 мм',
                                            ],
                                            6 => [
                                                'title' => 'Квадрат штифта',
                                                'value' => '8 мм',
                                            ],
                                        ]; ?>
                                        <div class="characteristics">
                                            <? foreach($characteristics as $item) {
                                                $title = $item['title'];
                                                $value = $item['value'];
                                            ?>
                                                <div class="characteristics__item">
                                                    <div class="characteristics__col">
                                                        <div class="characteristics__title">
                                                            <span><?= $title; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="characteristics__col">
                                                        <div class="characteristics__value"><?= $value; ?></div>
                                                    </div>
                                                </div>
                                            <? } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-accordion" id="tab-reviews">
                                    <div class="item-accordion__top" data-toggle="#reviews">
                                        <div class="item-accordion__title">
                                            Відгуки <span class="item-accordion__number">2</span>
                                        </div>
                                        <div class="item-accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item-accordion__content" id="reviews">
                                        <div class="reviews">
                                            <div class="reviews__top">
                                                <div class="reviews__title">
                                                    Залиште свій відгук про цей товар
                                                </div>
                                                <button type="button" class="btn" data-fancybox data-src="#add-reviews">
                                                    Написати відгук
                                                </button>
                                            </div>
                                            <div class="row row--3">
                                                <? for($i = 0; $i < 3; $i++) { ?>
                                                    <div class="col">
                                                        <div class="item-reviews">
                                                            <div class="item-reviews__top">
                                                                <div class="item-reviews__name">
                                                                    Богдан Хмельницький
                                                                </div>
                                                                <div class="item-reviews__date">
                                                                    22.05.2023
                                                                </div>
                                                            </div>
                                                            <div class="item-reviews__content">
                                                                <div class="item-reviews__stars">
                                                                    <div class="stars">
                                                                        <div class="stars__stars j-stars-readonly" data-rating="4"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-reviews__desc">
                                                                    <p>Купував на подарунок. Дуже задоволені, чудовий ноутбук один з кращих на ринку. Легкий, компактний з чудовою автономністю все легко і зрозуміло навіть після відвовс. Дякую розетці за чудовий сервіс</p>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="item-accordion" id="tab-files">
                                    <div class="item-accordion__top" data-toggle="#files">
                                        <div class="item-accordion__title">
                                            Файли до товару <span class="item-accordion__number">5</span>
                                        </div>
                                        <div class="item-accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item-accordion__content" id="files">
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
                                <div class="item-accordion" id="tab-videos">
                                    <div class="item-accordion__top" data-toggle="#videos">
                                        <div class="item-accordion__title">
                                            Відео <span class="item-accordion__number">7</span>
                                        </div>
                                        <div class="item-accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item-accordion__content" id="videos">
                                        <div class="videos">
                                            <div class="row row--3">
                                                <? for($i = 0; $i < 6; $i++) { ?>
                                                    <div class="col">
                                                        <div class="videos__item" data-fancybox="videos" data-src="https://www.youtube.com/watch?v=mmgn0SCOMvw">
                                                            <img src="<?= $target; ?>/img/news/news1.jpg" alt="">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#play"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                <? } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-products-info__accordion single-products-info__accordion--tablet">
                                <div class="item-accordion">
                                    <div class="item-accordion__top" data-toggle="#ac-delivery-tablet">
                                        <div class="item-accordion__title">
                                            Доставка
                                        </div>
                                        <div class="item-accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item-accordion__content text text--small" id="ac-delivery-tablet">
                                        <p>Ми використовуємо спосіб доставки склад-склад перевізником "Нова Пошта" та "Делівері".</p>
                                        <p>Доставляємо у найкоротші терміни у всі області України, такі як: Київська, Дніпропетровська, Волинська, Рівненська, Житомирська, Чернігівська, Сумська, Харківська, Луганська, Донецька, Запорізька, Херсонська, Одеська, Миколаївська, Кіровоградська, Полтавська, Черкаська, Вінницька, Хмельницька, Чернівецька, Тернопільська, Івано-Франківська, Ужгородська, Львівська.</p>
                                    </div>
                                </div>
                                <div class="item-accordion">
                                    <div class="item-accordion__top" data-toggle="#ac-payment-tablet">
                                        <div class="item-accordion__title">
                                            Оплата
                                        </div>
                                        <div class="item-accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item-accordion__content text text--small" id="ac-payment-tablet">
                                        <p>Ви можете сплатити замовлення безпосередньо при самовивезенні з наших складів, так само оплату приймаємо на карти Приватбанку.</p>
                                        <p>УВАГА!!! ПРИ ОПЛАТІ З БЕЗГОТІВНОГО РОЗРАХУНКУ ВАРТІСТЬ УТОЧНЮЙТЕ У МЕНЕДЖЕРА!!!</p>
                                        <p>Відправка товару здійснюється у понеділок, середу та п'ятницю після попередньої 100% оплати до 10-30. Якщо оплата виконана після 10-30 - відправлення замовлення переноситься наступного дня відправок.</p>
                                    </div>
                                </div>
                                <div class="item-accordion">
                                    <div class="item-accordion__top" data-toggle="#ac-garanty-tablet">
                                        <div class="item-accordion__title">
                                            Сервіс та гарантія
                                        </div>
                                        <div class="item-accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item-accordion__content text text--small" id="ac-garanty-tablet">
                                        <p>У разі виявлення дефектів, виробник бере на себе зобов'язання відремонтувати несправний виріб безкоштовно або замінити його несправні частини тільки за наявності фірмового бланка компанії.</p>
                                        <p>Термін гарантії на всі вироби, виготовлені за індивідуальними розмірами замовника, становить 12 місяців від дати виготовлення замовлення. Для гарантійного обслуговування поверніть Ваш виріб до головного офісу компанії.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-single-products__tab j-tab-area tab-description active">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="bg-grey">
    <section class="section section-products">
        <div class="container">
            <div class="section__top">
                <h2 class="title">Рекомендуємо</h2>
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
                <h2 class="title">Вас також могуть зацікавити</h2>
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

    <? include 'templates/subscribe.php'; ?>
</div>

<div class="modal" id="buy-one-click">
    <div class="modal__top">
        <div class="modal__title">
            Купити в 1 клік
        </div>
    </div>
    <div class="modal__content">
        <form class="j-form" novalidate>
            <div class="modal__label">
                <label class="label">
                    <span class="label__title">Ваше ім’я</span>
                    <input type="text" class="input input--small" required>
                </label>
            </div>
            <div class="modal__label">
                <label class="label">
                    <span class="label__title">Ваш номер телефону</span>
                    <input type="text" class="input input--small" required>
                </label>
            </div>
            <div class="modal__desc" style="color: #DF3021;">
				<p>* Мінімальна сума замовлення на сайті 500 грн.!</p>
			</div>
            <div class="modal__btns">
                <div class="modal__btns-col">
                    <button type="submit" class="btn">Оформити замовлення</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal modal-add-reviews" id="add-reviews">
    <div class="modal__top">
        <div class="modal__title">
            Написати відгук
        </div>
    </div>
    <div class="modal__content">
        <form class="modal-add-reviews__dorm j-form" novalidate>
            <div class="modal-add-reviews__stars">
                <div class="label__title">Оцініть товар по шкалі від 1 до 5</div>
                <div class="stars stars--big">
                    <div class="stars__stars j-stars" data-rating="1"></div>
                </div>
            </div>
            <div class="modal__label">
                <label class="label">
                    <span class="label__title">Коментар</span>
                    <textarea rows="5" class="input input--small" required></textarea>
                </label>
            </div>
            <div class="modal__label">
                <label class="label">
                    <span class="label__title">Ваше ім'я та прізвище</span>
                    <input type="text" class="input input--small" required>
                </label>
            </div>
            <div class="modal__label">
                <label class="label">
                    <span class="label__title">Електронна пошта</span>
                    <input type="email" class="input input--small" required>
                </label>
            </div>
            <div class="modal-add-reviews__btn">
                <button type="submit" class="btn">Залишити відгук</button>
            </div>
        </form>
    </div>
</div>

<? include 'templates/footer.php'; ?>