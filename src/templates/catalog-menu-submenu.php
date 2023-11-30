<?
    $target = '/assets';
?>
<div class="catalog-menu__submenu-top">
    <div class="catalog-menu__submenu-category">
        <a href="/products.php">Внутрішні перегородки</a>
    </div>
</div>
<ul class="catalog-menu__submenu-list">
    <? for($i = 0; $i < 20; $i++) { ?>
        <li class="catalog-menu__submenu-li">
            <a href="/products.php" class="catalog-menu__submenu-a j-catalog-menu-a-sub">
                <div class="catalog-menu__submenu-img">
                    <img src="<?= $target; ?>/img-webp/products/products1.webp" alt="">
                </div>
                <div class="catalog-menu__submenu-title">
                    Внутрішні перегородки
                </div>
            </a>
            <div class="catalog-menu__submenu catalog-menu__submenu--children j-catalog-menu-submenu">
                <div class="catalog-menu__submenu-top">
                    <div class="catalog-menu__submenu-category">
                        <a href="/products.php">Внутрішні перегородки</a>
                    </div>
                </div>
                <ul class="catalog-menu__submenu-list">
                    <? $submenu2 = [
                        0 => 'Фрикційні ножниці',
                        1 => 'Противовзломная фурнитура МACO',
                        2 => 'Фурнитура МACO серия КOMFORT',
                        3 => 'Фурнитура МACO серия MAMMUT',
                        4 => 'Фурнитура МACO серия TWIN-FIT',
                        5 => 'Фурнитура МACO RUSTICO для ставней',
                        6 => 'Ограничитель поворота окна МАСО с тормозом',
                        7 => 'Петли МАСО для многостворчатых распашных окон',
                        8 => 'Cкрытые ручки МАСО TENTAZIONE',
                        9 => 'Cкрытая фурнитура МАСО серия INVISIBLE на 80 кг',
                        10 => 'Скрытая фурнитура MАСО серия Multi Power на 150 кг',
                        11 => 'Фурнитура HAUTAU - решение нестандартов',
                    ];
                    foreach($submenu2 as $item) { 
                        $title = $item;    
                    ?>
                        <li class="catalog-menu__submenu-li">
                            <a href="/products.php" class="catalog-menu__submenu-a">
                                <div class="catalog-menu__submenu-img">
                                    <img src="<?= $target; ?>/img-webp/products/products1.webp" alt="">
                                </div>
                                <div class="catalog-menu__submenu-title">
                                    <?= $title; ?>
                                </div>
                            </a>
                        </li>
                    <? } ?>
                </ul>
            </div>
        </li>
    <? } ?>
</ul>