<? include 'templates/header.php'; ?>
	
    <div class="page page-checkout">
        <div class="container">
            <div class="page__wrapper">
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
                                    Оформлення замовлення
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Оформлення замовлення</h1>
                    </div>
                    <form action="ok.php" class="page-checkout__wrapper j-form" novalidate>
                        <div class="page-checkout__row">
                            <main class="page-checkout__col page-checkout__col--one">
                                <div class="page-checkout__bl">
                                    <div class="page-checkout__title">
                                        <span>1</span> Контактні дані
                                    </div>
                                    <form class="page-checkout__bl-inner j-form" novalidate>
                                        <ul class="page-checkout__tabs">
                                            <li class="page-checkout__tabs-li">
                                                <button type="button" class="page-checkout__tabs-a btn btn--border-grey active">
                                                    я новий покупець
                                                </button>
                                            </li>
                                            <li class="page-checkout__tabs-li">
                                                <a href="#sign-in" class="page-checkout__tabs-a btn btn--border-grey" data-fancybox>
                                                    я постійний покупець
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="page-checkout__form-row">
                                            <div class="page-checkout__form-col">
                                                <label class="label">
                                                    <span class="label__title">Ім’я <span>*</span></span>
                                                    <input type="text" class="input" required>
                                                </label>
                                            </div>
                                            <div class="page-checkout__form-col">
                                                <label class="label">
                                                    <span class="label__title">Прізвище <span>*</span></span>
                                                    <input type="text" class="input" required>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="page-checkout__form-row">
                                            <div class="page-checkout__form-col">
                                                <label class="label">
                                                    <span class="label__title">Номер телефону <span>*</span></span>
                                                    <input type="tel" class="input j-phone" placeholder="+38 (___)-___-__-__" required>
                                                </label>
                                            </div>
                                            <div class="page-checkout__form-col">
                                                <label class="label">
                                                    <span class="label__title">Ел.пошта</span>
                                                    <input type="email" class="input">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="page-checkout__form-row">
                                            <div class="page-checkout__form-col">
                                                <div class="page-checkout__password j-password">
                                                    <div class="modal-user__password-input">
                                                        <label class="label">
                                                            <span class="label__title">Придумайте пароль</span>
                                                            <input type="password" class="input j-password-input" autocomplete="new-password" required>
                                                        </label>
                                                    </div>
                                                    <button type="button" class="modal-user__password-icon j-password-btn">
                                                        <svg>
                                                            <use xlink:href="<?= $target; ?>/img/icons.svg#view"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-checkout__save">
                                            <button type="submit" class="btn">зареєструватися</button>
                                        </div>
                                    </form>
                                    <button type="button" class="page-checkout__city" data-fancybox data-src="#city">
                                        <div class="page-checkout__city-icon">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#marker"/>
                                            </svg>
                                        </div>
                                        <div class="page-checkout__city-text">
                                            <div class="page-checkout__city-title">
                                                Ваше місто
                                            </div>
                                            <div class="page-checkout__city-city">
                                                Харків
                                            </div>
                                            <div class="page-checkout__city-region">
                                                Харківська обл.
                                            </div>
                                        </div>
                                        <div class="page-checkout__city-arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <div class="page-checkout__bl">
                                    <div class="page-checkout__products">
                                        <div class="page-checkout__products-top">
                                            <div class="page-checkout__products-title">
                                                Замовлення 
                                            </div>
                                            <div class="page-checkout__products-price">
                                                на суму: 45 776 грн
                                            </div>
                                        </div>
                                        <div class="page-checkout__products-inner">
                                            <? for($i = 0; $i < 3; $i++) { ?>
                                                <div class="item-checkout">
                                                    <div class="item-checkout__text">
                                                        <a href="/single-products.php" class="item-checkout__img">
                                                            <img src="<?= $target; ?>/img/products/products1.jpg" alt="">
                                                        </a>
                                                        <a href="/single-products.php" class="item-checkout__title">
                                                            Ущільнювач удаваний чорний (Саламандер)
                                                        </a>
                                                    </div>
                                                    <div class="item-checkout__info">
                                                        <div class="item-checkout__info-bl">
                                                            <div class="item-checkout__info-title">
                                                                Ціна
                                                            </div>
                                                            <div class="item-checkout__price">
                                                                <div class="item-checkout__price-new item-checkout__price-new--new">
                                                                    2490 грн
                                                                </div>
                                                                <div class="item-checkout__price-old">
                                                                    25 657 грн
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-checkout__info-bl">
                                                            <div class="item-checkout__info-title">
                                                                Кількість
                                                            </div>
                                                            <div class="item-checkout__count">
                                                                1
                                                            </div>
                                                        </div>
                                                        <div class="item-checkout__info-bl">
                                                            <div class="item-checkout__info-title">
                                                                Сума
                                                            </div>
                                                            <div class="item-checkout__price">
                                                                <div class="item-checkout__price-new">
                                                                    2490 грн
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <? } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-checkout__bl j-checkout-bl">
                                    <div class="page-checkout__title">
                                        <span>2</span>Доставка
                                    </div>
                                    <div class="page-checkout__bl-inner">
                                        <div class="page-checkout__radio j-checkout-radio-bl active">
                                            <label class="radio">
                                                <input type="radio" name="delivery" checked>
                                                <div class="radio__bl">
                                                    <div class="radio__check"></div>
                                                    <div class="radio__title">Самовивіз <span class="radio__free">Безкоштовно</span></div>
                                                </div>
                                            </label>
                                            <div class="page-checkout__radio-hidden">
                                                <select class="select j-select" data-search-placeholder="Введіть адресу магазину" data-placeholder="Оберіть адресу магазину">
                                                    <option value=""></option>
                                                    <option value="Киев, ул. Казацкая, 122 (метро Васильковская)">Киев, ул. Казацкая, 122 (метро Васильковская)</option>
                                                    <option value="Харків, ул. Казацкая, 122 (метро Васильковская)">Харків, ул. Казацкая, 122 (метро Васильковская)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="page-checkout__radio j-checkout-radio-bl">
                                            <label class="radio">
                                                <input type="radio" name="delivery">
                                                <div class="radio__bl">
                                                    <div class="radio__check"></div>
                                                    <div class="radio__title">Самовивіз з Нової Пошти <span class="radio__price">99 грн</span></div>
                                                </div>
                                            </label>
                                            <div class="page-checkout__radio-hidden">
                                                <div class="page-checkout__radio-select">
                                                    <select class="select j-select" data-search-placeholder="Введіть адресу або номер відділення" data-placeholder="Виберіть відповідне відділення">
                                                        <option value=""></option>
                                                        <option value="Віділення 1">Відділення 1</option>
                                                        <option value="Віділення 1">Відділення 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-checkout__radio j-checkout-radio-bl">
                                            <label class="radio">
                                                <input type="radio" name="delivery">
                                                <div class="radio__bl">
                                                    <div class="radio__check"></div>
                                                    <div class="radio__title">
                                                        <span>
                                                            Кур’єр Нова пошта 
                                                            <span class="radio__subtitle">Відправимо 30 травня</span>
                                                        </span>
                                                        <span class="radio__price">200 грн</span>
                                                    </div>
                                                </div>
                                            </label>
                                            <div class="page-checkout__radio-hidden">
                                                <div class="page-checkout__form-row">
                                                    <div class="page-checkout__form-col">
                                                        <label class="label">
                                                            <span class="label__title">Вулиця <span>*</span></span>
                                                            <select class="select j-select" data-search-placeholder="Введіть назву вулиці" data-placeholder="Виберіть вулицю">
                                                                <option value=""></option>
                                                                <option value="Вулиця 1">Вулиця 1</option>
                                                                <option value="Вулиця 1">Вулиця 2</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <div class="page-checkout__form-col">
                                                        <div class="page-checkout__form-row">
                                                            <div class="page-checkout__form-col">
                                                                <label class="label">
                                                                    <span class="label__title">Будинок<span>*</span></span>
                                                                    <input type="text" class="input" required>
                                                                </label>
                                                            </div>
                                                            <div class="page-checkout__form-col">
                                                                <label class="label">
                                                                    <span class="label__title">Квартира <span>*</span></span>
                                                                    <input type="text" class="input" required>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-checkout__form-row">
                                                    <div class="page-checkout__form-col">
                                                        <label class="label">
                                                            <span class="label__title">Поверх</span>
                                                            <input type="text" class="input">
                                                        </label>
                                                    </div>
                                                    <div class="page-checkout__form-col">
                                                        <label class="label">
                                                            <span class="label__title">Вулиця <span>*</span></span>
                                                            <select class="select j-select" data-search-placeholder="" data-placeholder="Наявність вантажного ліфта">
                                                                <option value=""></option>
                                                                <option value="Вулиця 1">Відсутній</option>
                                                                <option value="Вулиця 1">Присутній</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-checkout__bl j-checkout-bl">
                                    <div class="page-checkout__title">
                                        <span>3</span>Оплата
                                    </div>
                                    <div class="page-checkout__bl-inner">
                                        <div class="page-checkout__radio j-checkout-radio-bl active">
                                            <label class="radio">
                                                <input type="radio" name="payments" checked>
                                                <div class="radio__bl">
                                                    <div class="radio__check"></div>
                                                    <div class="radio__title">Оплата під час отримання товару</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="page-checkout__radio j-checkout-radio-bl">
                                            <label class="radio">
                                                <input type="radio" name="payments">
                                                <div class="radio__bl">
                                                    <div class="radio__check"></div>
                                                    <div class="radio__title">LiqPay</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="page-checkout__radio j-checkout-radio-bl">
                                            <label class="radio">
                                                <input type="radio" name="payments">
                                                <div class="radio__bl">
                                                    <div class="radio__check"></div>
                                                    <div class="radio__title">
                                                        <div>
                                                            Безготівковими для юридичних осіб
                                                            <span class="radio__subtitle">
                                                                Оплата для юридичних осіб через розрахунковий рахунок
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                            <div class="page-checkout__radio-hidden">
                                               <div class="page-checkout__form-row">
                                                    <div class="page-checkout__form-col">
                                                        <label class="label">
                                                            <span class="label__title">Код ЄДРПОУ</span>
                                                            <input type="email" class="input">
                                                        </label>
                                                    </div>
                                                    <div class="page-checkout__form-col">
                                                        <label class="label">
                                                            <span class="label__title">Повна назва юридичної особи</span>
                                                            <input type="email" class="input">
                                                        </label>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="page-checkout__radio j-checkout-radio-bl">
                                            <label class="radio">
                                                <input type="radio" name="payments">
                                                <div class="radio__bl">
                                                    <div class="radio__check"></div>
                                                    <div class="radio__title">
                                                        <div>
                                                            Безготівковий для фізичних осіб
                                                            <span class="radio__subtitle">
                                                                Оплата для фізічних осіб через розрахунковий рахунок
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-checkout__bl">
                                    <div class="page-checkout__title">
                                        <span>4</span> Контактні дані отримувача замовлення
                                    </div>
                                    <div class="page-checkout__bl-inner">
                                        <div class="page-checkout__form-row">
                                            <div class="page-checkout__form-col">
                                                <label class="label">
                                                    <span class="label__title">Ім’я <span>*</span></span>
                                                    <input type="text" class="input" required>
                                                </label>
                                            </div>
                                            <div class="page-checkout__form-col">
                                                <label class="label">
                                                    <span class="label__title">Прізвище <span>*</span></span>
                                                    <input type="text" class="input" required>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="page-checkout__form-row">
                                            <div class="page-checkout__form-col">
                                                <label class="label">
                                                    <span class="label__title">По батькові</span>
                                                    <input type="text" class="input">
                                                </label>
                                            </div>
                                            <div class="page-checkout__form-col">
                                                <label class="label">
                                                    <span class="label__title">Мобільний телефон <span>*</span></span>
                                                    <input type="tel" class="input j-phone" placeholder="+38 (___)-___-__-__" required>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                            <aside class="page-checkout__col page-checkout__col--two">
                                <div class="checkout-total">
                                    <h3 class="checkout-total__title">
                                        Разом
                                    </h3>
                                    <div class="checkout-total__table">
                                        <div class="checkout-total__table-tr">
                                            <div class="checkout-total__table-td">
                                                <div class="checkout-total__table-title">
                                                    1 товар на суму
                                                </div>
                                            </div>
                                            <div class="checkout-total__table-td">
                                                <div class="checkout-total__table-value">
                                                    2490 грн
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkout-total__table-tr">
                                            <div class="checkout-total__table-td">
                                                <div class="checkout-total__table-title">
                                                    Вартість доставки
                                                </div>
                                            </div>
                                            <div class="checkout-total__table-td">
                                                <div class="checkout-total__table-value">
                                                    за тарифами перевізника
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkout-total__table-tr checkout-total__table-tr--total">
                                            <div class="checkout-total__table-td">
                                                <div class="checkout-total__table-title">
                                                    До сплати
                                                </div>
                                            </div>
                                            <div class="checkout-total__table-td">
                                                <div class="checkout-total__table-value checkout-total__table-value--total">
                                                    2490 грн
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout-total__btn">
                                        <button type="submit" class="btn">
                                            оформити замовлення
                                        </button>
                                    </div>
                                    <div class="checkout-total__desc text">
                                        <p>Підтверджуючи замовлення, я приймаю умови:</p>
                                        <ul>
                                            <li>
                                                <a href="/privacy-policy.php" target="_blank">положення про обробку і захист персональних даних</a>
                                            </li>
                                            <li><a href="/conditions.php" target="_blank">угоди користувача</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-city" id="city">
        <div class="modal__top">
            <div class="modal__title">Виберіть своє місто</div>
        </div>
        <form class="modal__content j-form" novalidate>
            <ul class="modal-city__list">
                <li class="modal-city__list-li">
                    <div class="modal-city__list-item">Київ</div>
                </li>
                <li class="modal-city__list-li">
                    <div class="modal-city__list-item">Харків</div>
                </li>
                <li class="modal-city__list-li">
                    <div class="modal-city__list-item">Одеса</div>
                </li>
                <li class="modal-city__list-li">
                    <div class="modal-city__list-item">Дніпро</div>
                </li>
                <li class="modal-city__list-li">
                    <div class="modal-city__list-item">Запоріжжя</div>
                </li>
                <li class="modal-city__list-li">
                    <div class="modal-city__list-item">Львів</div>
                </li>
            </ul>
            <div class="modal__label">
                <label class="label">
                    <span class="label__title">Вкажіть населений пункт України <span>*</span></span>
                    <select class="select j-select" data-search-placeholder="Вкажіть населений пункт України" data-placeholder="Вкажіть населений пункт України">
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
            <div class="modal__or">
                <span>або</span>
            </div>
            <div class="modal__label">
                <label class="label">
                    <span class="label__title">Обрати з доданих адрес <span>*</span></span>
                    <select class="select j-select" data-search-placeholder="Оберіть адресу" data-placeholder="Оберіть адресу">
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
            <div class="modal__btns">
                <div class="modal__btns-col">
                    <button type="submit" class="btn">Застосувати</button>
                </div>
                <div class="modal__btns-col">
                    <button type="button" class="btn btn--border-grey" data-close>Скасувати</button>
                </div>
            </div>
        </form>
    </div>

<? include 'templates/subscribe.php'; ?>

<? include 'templates/footer.php'; ?>