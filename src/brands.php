<? include 'templates/header.php'; ?>
	
    <div class="page page-brands bg-grey">
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
                                    Бренди
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Бренди</h1>
                    </div>
                    <div class="page-brands__desc text">
                        <p>За ці роки Аркада-Пласт стала лідером на ринку України з продажу нестандартних, оригінальних та ексклюзивних комплектуючих високої якості.</p>
                        <p>Наразі ми виводимо на ринок України нові розробки відомих європейських брендів, які, ми впевнені, зацікавлять вітчизняних виробників віконних та дверних конструкцій, які прагнуть підвищити технологічність свого виробництва та оснастити свої конструкції механізмами та елементами, що відповідають сучасним вимогам комфорту та безпеки.</p>
                    </div>
                    <div class="page-brands__wrapper">
                        <div class="row row--5">
                            <? for($i = 1; $i < 20; $i++) { ?>
                                <div class="col">
                                    <div class="item-brands">
                                        <img src="<?= $target; ?>/img/brands/brands<?= $i; ?>.png" alt="">
                                    </div>
                                </div>
                            <? } ?>
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