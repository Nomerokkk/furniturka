<div class="catalog-menu">
	<div class="catalog-menu__nav">
        <? $catalog = [
            0 => [
                'title' => 'Моя інформація',
                'url' => '/panel/',
                'icon' => $target . '/img/panel/sidebar-icon1.svg',
            ],
            1 => [
                'title' => 'Обране',
                'url' => 'wishlist.php',
                'icon' => $target . '/img/panel/sidebar-icon2.svg',
            ],
            2 => [
                'title' => 'Історія замовлень',
                'url' => 'history.php',
                'icon' => $target . '/img/panel/sidebar-icon3.svg',
            ],
            3 => [
                'title' => 'Файли для завантаження',
                'url' => 'downloads.php',
                'icon' => $target . '/img/panel/sidebar-icon4.svg',
            ],
            4 => [
                'title' => 'Порівняння',
                'url' => 'compare.php',
                'icon' => $target . '/img/panel/sidebar-icon5.svg',
            ],
        ]; ?>
        <ul class="catalog-menu__list">
            <? foreach($catalog as $item) {
                $title = $item['title'];
                $url = $item['url'];
                $icon = $item['icon'];
            ?>
                <li class="catalog-menu__list-li">
                    <a href="<?= $url; ?>" class="catalog-menu__list-a">
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
                </li>
            <? } ?>
        </ul>
    </div>
</div>

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
