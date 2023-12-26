<? $social = [
    0 => [
        'url' => '#',
        'img' => $target . '/img/social/viber.svg',
    ],
    1 => [
        'url' => '#',
        'img' => $target . '/img/social/telegram.svg',
    ],
    2 => [
        'url' => '#',
        'img' => $target . '/img/social/whatsapp.svg',
    ],
    3 => [
        'url' => '#',
        'img' => $target . '/img/social/facebook.svg',
    ],
];
if($social) { ?>
    <div class="social">
        <ul class="social__list">
            <? foreach($social as $i => $item) { 
                $url = $item['url'];
                $img = $item['img'];
            ?>
                <li class="social__li">
                    <a href="<?= $url; ?>" class="social__a" target="_blank" title="Viber">
                        <img src="<?= $img; ?>" alt="social" role="presentation">
                    </a>
                </li>
            <? } ?>
        </ul>
    </div>
<? } ?>