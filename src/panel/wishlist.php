<? $login = true;

include '../templates/header.php'; ?>
	
    <div class="page page-wishlist bg-grey">
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
                                <img src="<?= $target; ?>/img/panel/sidebar-icon2.svg" alt="">
                            </div>
                            <div class="select-page__btn-title">
                                Список бажань
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
                                    Список бажань
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-wishlist__top">
                        <h1 class="title">Список бажань</h1>
                        <button type="button" class="page-wishlist__btn-add" data-fancybox data-src="#new-wishlist">+ Додати список</button>
                    </div>
                    <div class="page-wishlist__wrapper">
                        <? for($d = 0; $d < 1; $d++) { ?>
                            <div class="item-wishlist j-item-wishlist">
                                <div class="item-wishlist__top">
                                    <div class="item-wishlist__title">
                                        Мій список бажань <span>(За замовчуванням)</span>
                                    </div>
                                    <div class="btn-nav">
                                        <button type="button" class="btn-nav__btn" data-target="#btn-nav-list<?= $i; ?>">
                                            <div class="btn-nav__btn-inner">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </button>
                                        <ul class="btn-nav__list" id="btn-nav-list<?= $i; ?>">
                                            <li class="btn-nav__list-li">
                                                <button type="button" class="btn-nav__list-item" data-fancybox data-src="#remove-wishlist">
                                                    <div class="btn-nav__list-title">
                                                        Видалити список
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="btn-nav__list-li">
                                                <button type="button" class="btn-nav__list-item" data-fancybox data-src="#edit-wishlist">
                                                    <div class="btn-nav__list-title">
                                                        Редагувати назву
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="btn-nav__list-li">
                                                <button type="button" class="btn-nav__list-item">
                                                    <div class="btn-nav__list-title">
                                                        Зробити список основним
                                                    </div>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-wishlist__nav">
                                    <button type="button" class="item-wishlist__nav-btn active-btn j-all-checked" data-old-text="Вибрати всe" data-new-text="Скинути вибір">
                                        Вибрати всe
                                    </button>
                                    <button type="button" class="item-wishlist__nav-btn j-wishlist-buy j-add-to-cart">
                                        Купити
                                    </button>
                                    <button type="button" class="item-wishlist__nav-btn item-wishlist__nav-btn--remove j-wishlist-remove">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#remove"/>
                                        </svg>
                                        Видалити
                                    </button>
                                    <button type="button" class="item-wishlist__nav-btn j-copy-url active-btn" data-url="http://localhost:3000/panel/wishlist.php">
                                        Скопіювати посилання
                                    </button>
                                    <div class="item-wishlist__nav-select">
                                        <label class="select-standart">
                                            <select class="select-standart__select">
                                                <option>За датою додавання</option>
                                                <option>Від дешевих до дорогих</option>
                                                <option>Від дорогих до дешевих</option>
                                            </select>
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="item-wishlist__products">
                                    <div class="row row--4">
                                        <? for($i = 0; $i < 3; $i++) { ?>
                                            <div class="col">
                                                <? include '../templates/item-products-wishlist.php'; ?>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <div class="item-wishlist__total">
                                        <div class="item-wishlist__total-price">
                                            <div class="item-wishlist__total-title">1 товар на сумму</div>
                                            <div class="item-wishlist__total-value">1245 грн</div>
                                        </div>
                                        <div class="item-wishlist__total-btn">
                                            <button type="button" class="btn j-add-to-cart">купити все</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-remove" id="remove-wishlist">
		<div class="modal__top">
			<div class="modal__title">
                Видалити список
			</div>
		</div>
		<div class="modal__content">
			<div class="modal-remove__desc">
                Ви бажаєте видалити список бажань "Мій список бажань" ?
            </div>
            <div class="modal__btns">
                <div class="modal__btns-col">
                    <button type="button" class="btn">Видалити список</button>
                </div>
                <div class="modal__btns-col">
                    <button type="button" class="btn btn--border-grey" data-close>Скасувати</button>
                </div>
            </div>
		</div>
	</div>

    <div class="modal" id="edit-wishlist">
		<div class="modal__top">
			<div class="modal__title">
                Редагувати назву
			</div>
		</div>
		<div class="modal__content">
            <form class="j-form" novalidate>
                <div class="modal__label">
                    <label class="label">
                        <span class="label__title">Назва списку</span>
                        <input type="text" class="input input--small" value="Мій список бажань" required>
                    </label>
                </div>
                <div class="modal__btns">
                    <div class="modal__btns-col">
                        <button type="submit" class="btn">Зберегти</button>
                    </div>
                    <div class="modal__btns-col">
                        <button type="button" class="btn btn--border-grey" data-close>Скасувати</button>
                    </div>
                </div>
            </form>
		</div>
	</div>

    <div class="modal" id="new-wishlist">
		<div class="modal__top">
			<div class="modal__title">
                Новий список
			</div>
		</div>
		<div class="modal__content">
            <form class="j-form" novalidate>
                <div class="modal__label">
                    <label class="label">
                        <span class="label__title">Назва списку</span>
                        <input type="text" class="input input--small" required>
                    </label>
                </div>
                <div class="modal__btns">
                    <div class="modal__btns-col">
                        <button type="submit" class="btn">Зберегти</button>
                    </div>
                    <div class="modal__btns-col">
                        <button type="button" class="btn btn--border-grey" data-close>Скасувати</button>
                    </div>
                </div>
            </form>
		</div>
	</div>

<div class="bg-grey">
    <? include '../templates/subscribe.php'; ?>
</div>

<? include '../templates/footer.php'; ?>