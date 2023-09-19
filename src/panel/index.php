<? $login = true;

include '../templates/header.php'; ?>
	
    <div class="page page-panel-info">
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
                                <img src="<?= $target; ?>/img/panel/sidebar-icon1.svg" alt="">
                            </div>
                            <div class="select-page__btn-title">
                                Моя інформація
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
                                    Моя інформація
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Моя інформація</h1>
                    </div>
                    <form class="page-panel-info__wrapper j-form" novalidate>
                        <div class="page-panel-info__bl">
                            <div class="row">
                                <div class="col">
                                    <label class="label">
                                        <span class="label__title">Ім`я</span>
                                        <input type="text" class="input input--small" value="Іван" required>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="label">
                                        <span class="label__title">Прізвище</span>
                                        <input type="text" class="input input--small" value="Мазепа" required>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="label">
                                        <span class="label__title">Телефон</span>
                                        <input type="phone" class="input input--small j-phone" value="+38 (097) 939-23-23" placeholder="+38 (___)-___-__-__" required>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="label">
                                        <span class="label__title">Ел. пошта</span>
                                        <input type="email" class="input input--small" value="test@gmail.com" required>
                                    </label>
                                </div>
                            </div>
                            <div class="page-panel-info__checkbox">
                                <label class="checkbox">
                                    <input type="checkbox" checked>
                                    <div class="checkbox__bl">
                                        <div class="checkbox__check">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#checkbox"/>
                                            </svg>
                                        </div>
                                        <div class="checkbox__title">Згоден(на) отримувати email россилку</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="page-panel-info__bl">
                            <h2 class="page__title title">Дані для доставки</h2>
                            <div class="page-panel-info__address">
                                <div class="page-panel-info__subtitle">
                                    Адреса 1
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="label">
                                            <span class="label__title">Місто</span>
                                            <select class="select j-select" data-search-placeholder="Вкажіть населений пункт України">
                                                <option value="Одеса">Одеса</option>
                                                <option value="Київ">Київ</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Київ">Київ</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="label">
                                            <span class="label__title">Відділення НП </span>
                                            <select class="select j-select" data-search-placeholder="Введіть адресу або назву відділення Нової Пошти">
                                                <option value="Віділення 1">Відділення 1</option>
                                                <option value="Віділення 1">Відділення 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col col--street">
                                        <label class="label">
                                            <span class="label__title">Вулиця</span>
                                            <select class="select j-select" data-search-placeholder="Введіть назву вулиці" data-placeholder="Виберіть вулицю">
                                                <option value=""></option>
                                                <option value="Вулиця 1">Вулиця 1</option>
                                                <option value="Вулиця 1">Вулиця 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col col--house">
                                        <label class="label">
                                            <span class="label__title">Будинок</span>
                                            <input type="text" class="input" required>
                                        </label>
                                    </div>
                                    <div class="col col--apartment">
                                        <label class="label">
                                            <span class="label__title">Квартира</span>
                                            <input type="text" class="input" required>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="page-panel-info__address">
                                <div class="page-panel-info__subtitle">
                                    Адреса 2
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="label">
                                            <span class="label__title">Місто</span>
                                            <select class="select j-select" data-search-placeholder="Вкажіть населений пункт України">
                                                <option value="Одеса">Одеса</option>
                                                <option value="Київ">Київ</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Київ">Київ</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                                <option value="Одеса">Одеса</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="label">
                                            <span class="label__title">Відділення НП </span>
                                            <select class="select j-select" data-search-placeholder="Введіть адресу або назву відділення Нової Пошти">
                                                <option value="Віділення 1">Відділення 1</option>
                                                <option value="Віділення 1">Відділення 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col col--street">
                                        <label class="label">
                                            <span class="label__title">Вулиця</span>
                                            <select class="select j-select" data-search-placeholder="Введіть назву вулиці" data-placeholder="Виберіть вулицю">
                                                <option value=""></option>
                                                <option value="Вулиця 1">Вулиця 1</option>
                                                <option value="Вулиця 1">Вулиця 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col col--house">
                                        <label class="label">
                                            <span class="label__title">Будинок</span>
                                            <input type="text" class="input" required>
                                        </label>
                                    </div>
                                    <div class="col col--apartment">
                                        <label class="label">
                                            <span class="label__title">Квартира</span>
                                            <input type="text" class="input" required>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="page-panel-info__add">
                                <button type="button" class="btn btn--border-grey">
                                    <span>+</span>
                                    додати адресу
                                </button>
                            </div>
                            <div class="page-panel-info__btn">
                                <button type="submit" class="btn">
                                    Зберегти
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<? include '../templates/subscribe.php'; ?>

<? include '../templates/footer.php'; ?>