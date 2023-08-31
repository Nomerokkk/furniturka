<? $preims = [
    0 => [
        'title' => 'Широкий асортимент',
        'desc' => 'Понад 10 000 товарів',
        'icon' => $target . '/img/preims/preims1.svg',
    ],
    1 => [
        'title' => 'Furniturka - европейська якість',
        'desc' => 'Тільки европейські виробники',
        'icon' => $target . '/img/preims/preims2.svg',
    ],
    2 => [
        'title' => 'Гнучка система знижок',
        'desc' => 'Для постійних кліентів',
        'icon' => $target . '/img/preims/preims3.svg',
    ],
    3 => [
        'title' => 'Онлайн консультація',
        'desc' => 'Індивідуальний підбір',
        'icon' => $target . '/img/preims/preims4.svg',
    ],
]; ?>
<div class="preims">
    <div class="preims__wrapper">
        <? foreach($preims as $item) { 
            $title = $item['title'];
            $desc = $item['desc'];
            $icon = $item['icon'];    
        ?>
            <div class="preims__col">
                <div class="preims__item">
                    <div class="preims__icon">
                        <img src="<?= $icon; ?>" alt="">
                    </div>
                    <div class="preims__text">
                        <div class="preims__title">
                            <?= $title; ?>
                        </div>
                        <div class="preims__desc">
                            <?= $desc; ?>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>