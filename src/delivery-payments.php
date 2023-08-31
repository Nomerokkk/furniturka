<? include 'templates/header.php'; ?>
	
    <div class="page page-delivery bg-grey">
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
                                    Доставка та оплата
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Доставка та оплата</h1>
                    </div>
                    <div class="page-delivery__wrapper">
                        <picture class="page__picture">
                            <img src="<?= $target; ?>/img/delivery-payments/delivery-payments.jpg" alt="">
                        </picture>
                        <div class="page-delivery__desc">
                            <div class="page-delivery__row">
                                <div class="page-delivery__col">
                                    <div class="page-delivery__desc text">
                                        <h2>Доставка</h2>
                                        <p>При оформленні замовлення в інтернет-магазині ми пропонуємо кілька варіантів доставки:</p>
                                        <div class="page-delivery__item">
                                            <div class="page-delivery__item-text">
                                                <b>Доставка «Новою поштою» по Україні</b>
                                                <ul>
                                                    <li>Термін доставки: від 2 до 5 днів.</li>
                                                    <li>Доставка товарів оплачується покупцем згідно з тарифами "Нової Пошти".</li>
                                                </ul>
                                            </div>
                                            <div class="page-delivery__item-img">
                                                <img src="<?= $target; ?>/img/delivery-payments/nova-poshta.png" alt="">
                                            </div>
                                        </div>
                                        <div class="page-delivery__item">
                                            <div class="page-delivery__item-text">
                                                <p>
                                                    <b>Самовивіз з магазину</b><br>
                                                    Ви можете вибрати товар на сайті, оплатити його на картку, готівкою або по безготівковому перерахунку та самостійно забрати в магазині за адресами:
                                                </p>
                                            </div>
                                            <div class="page-delivery__item-img">
                                                <img src="<?= $target; ?>/img/delivery-payments/samovuviz.svg" alt="">
                                            </div>
                                        </div>
                                        <? $city = [
                                            0 => [
                                                'title' => 'Київ',
                                                'img' => $target . '/img/delivery-payments/kyiv.jpg',
                                                'address' => 'вул. Козацька, 122',
                                                'phones' => [
                                                    0 => '044-501-67-72',
                                                    1 => '050-331-60-05',
                                                ],
                                                'e-mail' => 'furniturag@arkadaplast.com.ua',
                                                'time' => 'Пн-Пт (9:00-17:00)<br>Перерва (12:00 - 13:00)',
                                            ],
                                            1 => [
                                                'title' => 'Львів',
                                                'img' => $target . '/img/delivery-payments/lviv.jpg',
                                                'address' => 'вул. Шевченка, 31 офіс 213',
                                                'phones' => [
                                                    0 => '032-232-52-54',
                                                    1 => '066-792-80-91'
                                                ],
                                                'e-mail' => 'arkadalviv@gmail.com',
                                                'time' => 'Пн-Пт (9:00-17:00)<br>Перерва (12:00 - 13:00)',
                                            ],
                                            2 => [
                                                'title' => 'Рівне',
                                                'img' => $target . '/img/delivery-payments/rivne.jpg',
                                                'address' => 'вул. Володимира Стельмаха 18ж',
                                                'phones' => [
                                                    0 => '(068) 289-81-89',
                                                    1 => '(095) 271-01-13',
                                                ],
                                                'e-mail' => 'rivnearkada@gmail.com',
                                                'time' => 'Пн-Пт (9:00-17:00)<br>Перерва (12:00 - 13:00)',
                                            ],
                                        ];
                                        foreach($city as $item) { 
                                            $title = $item['title'];
                                            $img = $item['img'];
                                            $address = $item['address'];
                                            $phones = $item['phones'];
                                            $email = $item['e-mail'];
                                            $time = $item['time'];
                                        ?>
                                            <div class="page-delivery__bl">
                                                <a href="https://www.google.com.ua/maps/@50.4593148,30.5211027,14.38z?hl=ru&entry=ttu" class="page-delivery__bl-img" target="_blank">
                                                    <picture class="page-delivery__bl-picture">
                                                        <img src="<?= $img; ?>" alt="">
                                                    </picture>
                                                    <div class="page-delivery__bl-title">
                                                        <?= $title; ?>
                                                    </div>
                                                </a>
                                                <div class="page-delivery__bl-text">
                                                    <ul class="info">
                                                        <li class="info__li">
                                                            <a href="https://www.google.com.ua/maps/@50.4593148,30.5211027,14.38z?hl=ru&entry=ttu" class="info__item info__item--address" target="_blank">
                                                                <div class="info__icon">
                                                                    <svg>
                                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#marker"/>
                                                                    </svg>
                                                                </div>
                                                                <div class="info__title">
                                                                    <?= $address; ?>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <? foreach($phones as $phone) { ?>
                                                            <li class="info__li">
                                                                <a href="tel:<?= $phone; ?>" class="info__item info__item--phone">
                                                                    <div class="info__icon">
                                                                        <svg>
                                                                            <use xlink:href="<?= $target; ?>/img/icons.svg#phone"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="info__title">
                                                                        <?= $phone; ?>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        <? } ?>
                                                        <li class="info__li">
                                                            <a href="mailto:<?= $email; ?>" class="info__item info__item--email">
                                                                <div class="info__icon">
                                                                    <svg>
                                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
                                                                    </svg>
                                                                </div>
                                                                <div class="info__title">
                                                                    <?= $email; ?>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="info__li">
                                                            <div class="info__item info__item--time">
                                                                <div class="info__icon">
                                                                    <svg>
                                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#time"/>
                                                                    </svg>
                                                                </div>
                                                                <div class="info__title">
                                                                    <b>Графік работи:</b> <br>
                                                                    <?= $time; ?>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                                <div class="page-delivery__col">
                                    <div class="page-delivery__desc text">
                                        <h2>Оплата</h2>
                                        <div class="page-delivery__item">
                                            <div class="page-delivery__item-text">
                                                <b>Оплата готівкою при отриманні товару.</b>
                                                <ul>
                                                    <li>Оплата готівкою кур’єру</li>
                                                    <li>Післяплатою при отриманні замовлення в відділенні Нової пошти</li>
                                                </ul>
                                            </div>
                                            <div class="page-delivery__item-img">
                                                <img src="<?= $target; ?>/img/delivery-payments/gotivka.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="page-delivery__item">
                                            <div class="page-delivery__item-text">
                                                <b>Оплата на розрахунковий рахунок</b>
                                                <ul>
                                                    <li>Оплата безготівкового рахунку, рахунок скидає менеджер після підтвердження замовлення</li>
                                                </ul>
                                            </div>
                                            <div class="page-delivery__item-img">
                                                <img src="<?= $target; ?>/img/delivery-payments/rozrah.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="page-delivery__item">
                                            <div class="page-delivery__item-text">
                                                <b>Оплата на карту по реквізитах</b>
                                                <ul>
                                                    <li>Оплата на картку ФОП, реквізити скидає менеджер після підтвердження замовлення</li>
                                                </ul>
                                            </div>
                                            <div class="page-delivery__item-img">
                                                <img src="<?= $target; ?>/img/delivery-payments/rekviz.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="page-delivery__item">
                                            <div class="page-delivery__item-text">
                                                <b>Оплата карткою Visa/MasterCard</b>
                                                <ul>
                                                    <li>Виберіть спосіб оплати «Банківською картою» під час оформлення замовлення, та ви будете перенаправленні на сторінку платіжної системи</li>
                                                </ul>
                                            </div>
                                            <div class="page-delivery__item-img">
                                                <img src="<?= $target; ?>/img/delivery-payments/visa-mastercard.svg" alt="">
                                            </div>
                                        </div>
                                        <p>
                                            Ви можете оплатити замовлення в момент його отримання виключно у випадках наявності такого Товару на нашому складі. Товари під замовлення відвантажуються лише за умови їхньої 100 % попередньої оплати.
                                        </p>
                                        <div class="page-delivery__bl">
                                            <p>
                                                <span style="color: #DF3021">Увага!</span><br>
                                                Товар нарізаний або розкроєний під розмір, визначений покупцем (замовником) обміну і поверненню не підлягає згідно Постанови КМУ №172 від 19.03.1994 року. <br>
                                                Замовлення вважається погодженим з моменту його оплати. <br>
                                                <span style="color: #DF3021">Мінімальна сума замовлення складає – 500 грн.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
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