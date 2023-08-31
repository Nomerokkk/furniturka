<? include 'templates/header.php'; ?>
	
    <div class="page page-about">
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
                                    Про нас
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Про нас</h1>
                    </div>
                    <div class="about-top">
                        <div class="about-top__wrapper">
                            <div class="about-top__text">
                                <div class="about-top__desc text">
                                    <h2>Наша компанія була заснована <span style="color: #DF3021;">у 1997 році</span></h2>
                                    <p>За ці роки Аркада-Пласт стала лідером на ринку України з продажу нестандартних, оригінальних та ексклюзивних комплектуючих високої якості.</p>
                                    <p>Наразі ми виводимо на ринок України нові розробки відомих європейських брендів, які, ми впевнені, зацікавлять вітчизняних виробників віконних та дверних конструкцій, які прагнуть підвищити технологічність свого виробництва та оснастити свої конструкції механізмами та елементами, що відповідають сучасним вимогам комфорту та безпеки.</p>
                                </div>
                            </div>
                            <div class="about-top__img">
                                <picture class="about-top__picture">
                                    <img src="<?= $target; ?>/img/about/about-top.jpg" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="about-top__preims">
                            <? include 'templates/preims.php'; ?>
                        </div>
                    </div>
                    <div class="page-about__bg">
                        <div class="about-preims">
                            <div class="about-preims__title">
                                Наші сильні сторони
                            </div>
                            <picture class="page__picture">
                                <img src="<?= $target; ?>/img/about/about2.jpg" alt="">
                            </picture>
                            <div class="about-preims__wrapper">
                                <div class="about-preims__row">
                                    <? for($i = 0; $i < 2; $i++) { ?>
                                        <div class="about-preims__col">
                                            <div class="about-preims__item">
                                                <div class="about-preims__item-top">
                                                    <div class="about-preims__item-icon">
                                                        <img src="<?= $target; ?>/img/preims/preims2.svg" alt="">
                                                    </div>
                                                    <div class="about-preims__item-title">
                                                        Наша компанія була заснована <span style="color: #DF3021;">у 1997 році</span>
                                                    </div>
                                                </div>
                                                <div class="about-preims__item-desc text">
                                                    <p>Наразі ми виводимо на ринок України нові розробки відомих європейських брендів, які, ми впевнені, зацікавлять вітчизняних виробників віконних та дверних конструкцій, які прагнуть підвищити технологічність свого виробництва та оснастити свої конструкції механізмами та елементами, що відповідають сучасним вимогам комфорту та безпеки.</p>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        </div>
                        <div class="about-desc text">
                            <div class="about-desc__desc">
                                <blockquote>Задоволення від хорошої якості триває довше ніж радість від низької ціни</blockquote>
                            </div>
                            <div class="about-desc__map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325516.5693171311!2d30.203050022670055!3d50.40200750491539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1686090120350!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="about-desc__desc">
                                <h2>Як нас знайти?</h2>
                                <p>За ці роки Аркада-Пласт стала лідером на ринку України з продажу нестандартних, оригінальних та ексклюзивних комплектуючих високої якості.</p>
                                <p>Наразі ми виводимо на ринок України нові розробки відомих європейських брендів, які, ми впевнені, зацікавлять вітчизняних виробників віконних та дверних конструкцій, які прагнуть підвищити технологічність свого виробництва та оснастити свої конструкції механізмами та елементами, що відповідають сучасним вимогам комфорту та безпеки.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="bg-grey">
    <? include 'templates/subscribe.php'; ?>
</div>

<? include 'templates/footer.php'; ?>