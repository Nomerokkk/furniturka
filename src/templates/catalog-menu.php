<div class="catalog-menu">
	<div class="catalog-menu__nav j-catalog-menu-nav">
        <? $catalog = [
            0 => [
                'title' => 'Алюмінієві системи',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu1.svg',
            ],
            1 => [
                'title' => 'Віконна фурнітура',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu2.svg',
            ],
            2 => [
                'title' => 'Дверна фурнітура',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu3.svg',
            ],
            3 => [
                'title' => 'Розсувні системи',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu4.png',
            ],
            4 => [
                'title' => 'Фурнітура для віконниць',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu5.png',
            ],
            5 => [
                'title' => 'Ущільнювачі',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu6.png',
            ],
            6 => [
                'title' => 'Монтажні матеріали',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu7.svg',
            ],
            7 => [
                'title' => 'Хімія для вікон та дверей',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu8.svg',
            ],
            8 => [
                'title' => 'Водовідливні профілі',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu9.svg',
            ],
            9 => [
                'title' => 'Зовнішні видливи',
                'url' => '/products.php',
                'icon' => $target . '/img/catalog-menu/catalog-menu10.svg',
            ],
        ]; ?>
        <ul class="catalog-menu__list">
            <? foreach($catalog as $item) {
                $title = $item['title'];
                $url = $item['url'];
                $icon = $item['icon'];
            ?>
                <li class="catalog-menu__list-li j-catalog-menu-li">
                    <a href="<?= $url; ?>" class="catalog-menu__list-a j-catalog-menu-a">
                        <div class="catalog-menu__list-icon">
                            <img src="<?= $icon; ?>" alt="">
                        </div>
                        <div class="catalog-menu__list-title">
                            <?= $title; ?>
                        </div>
                        <div class="catalog-menu__list-arrow">
                            <svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
							</svg>
                        </div>
                    </a>
                    <div class="catalog-menu__submenu j-catalog-menu-submenu">
                        <ul class="catalog-menu__submenu-list">
                            <? for($i = 0; $i < 6; $i++) { ?>
                                <li class="catalog-menu__submenu-li">
                                    <a href="/products.php" class="catalog-menu__submenu-a">
                                        <div class="catalog-menu__submenu-img">
                                            <img src="<?= $target; ?>/img/products/products1.jpg" alt="">
                                        </div>
                                        <div class="catalog-menu__submenu-title">
                                            Внутрішні перегородки
                                        </div>
                                    </a>
                                </li>
                                <li class="catalog-menu__submenu-li">
                                    <a href="/products.php" class="catalog-menu__submenu-a">
                                        <div class="catalog-menu__submenu-img">
                                            <img src="<?= $target; ?>/img/products/products1.jpg" alt="">
                                        </div>
                                        <div class="catalog-menu__submenu-title">
                                            Ручки віконні
                                        </div>
                                    </a>
                                </li>
                            <? } ?>
                        </ul>
                    </div>
                </li>
            <? } ?>
        </ul>
    </div>
</div>