<? include 'templates/header.php'; ?>
	
    <div class="page page-single-news">
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
                            <a href="news.php" class="breadcrumbs__back">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                                Новини
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
                                    <a href="news.php" class="breadcrumbs__a">Новини</a>
                                </li>
                                <li class="breadcrumbs__li">
                                    Дверні замки MACO
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Дверні замки MACO</h1>
                    </div>
                    <div class="page-single-news__wrapper">
                        <div class="page-single-news__info">
                            <div class="page-single-news__date">12.04.2023</div>
                            <ul class="page-single-news__categories">
                                <li class="page-single-news__categories-li">
                                    <a href="news.php" class="page-single-news__categories-a">
                                        #акції
                                    </a>
                                </li>
                                <li class="page-single-news__categories-li">
                                    <a href="news.php" class="page-single-news__categories-a">
                                        #новинки
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <picture class="page__picture">
                            <img src="<?= $target; ?>/img/subscribe.jpg" alt="">
                        </picture>
                        <div class="page-single-news__desc text">
                            <h2>Як вибрати?</h2>
                            <p>При оформленні замовлення в інтернет-магазині ми пропонуємо кілька варіантів доставки:</p>
                            <p><b>Доставка «Новою поштою» по Україні</b></p>
                            <ul>
                                <li>Термін доставки: від 2 до 5 днів.</li>
                                <li>Доставка товарів оплачується покупцем згідно з тарифами "Нової Пошти".</li>
                            </ul>
                            <p><b>Самовивіз з магазину</b></p>
                            <p>Ви можете вибрати товар на сайті, оплатити його на картку, готівкою або по безготівковому перерахунку та самостійно забрати в магазині за адресами:</p>
                            <p>За ці роки Аркада-Пласт стала лідером на ринку України з продажу нестандартних, оригінальних та ексклюзивних комплектуючих високої якості.</p>
                            <p>Наразі ми виводимо на ринок України нові розробки відомих європейських брендів, які, ми впевнені, зацікавлять вітчизняних виробників віконних та дверних конструкцій, які прагнуть підвищити технологічність свого виробництва та оснастити свої конструкції механізмами та елементами, що відповідають сучасним вимогам комфорту та безпеки.</p>
                            <p>За ці роки Аркада-Пласт стала лідером на ринку України з продажу нестандартних, оригінальних та ексклюзивних комплектуючих високої якості.</p>
                            <p>Наразі ми виводимо на ринок України нові розробки відомих європейських брендів, які, ми впевнені, зацікавлять вітчизняних виробників віконних та дверних конструкцій, які прагнуть підвищити технологічність свого виробництва та оснастити свої конструкції механізмами та елементами, що відповідають сучасним вимогам комфорту та безпеки.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="section__top">
                <h2 class="title">Схожі новини</h2>
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

<? include 'templates/footer.php'; ?>