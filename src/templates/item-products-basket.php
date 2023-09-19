<div class="item-products-basket">
    <div class="item-products-basket__inner">
        <a href="/single-products.php" class="item-products-basket__img">
            <img src="<?= $target; ?>/img/products/products1.jpg" alt="" loading="lazy">
        </a>
        <a href="/single-products.php" class="item-products-basket__text">
            <div class="item-products-basket__title">
                Ущільнювач удаваний чорний (Саламандер)
            </div>
            <ul class="item-products-basket__list">
                <li>Ущільнювач удаваний чорний (Саламандер)</li>
                <li>Артикул: 23124</li>
            </ul>
        </a>
        <div class="item-products-basket__nav">
            <div class="count j-count">
                <button type="button" class="count__minus j-minus">-</button>
                <div class="count__input">
                    <input class="input j-count-input" type="number" min="0" value="1">
                </div>
                <button type="button" class="count__plus j-plus">+</button>
            </div>
            <div class="item-products-basket__price">
                <!-- <div class="item-products-basket__price-old">1200 грн</div> -->
                <div class="item-products-basket__price-new">800 грн</div>
            </div>
        </div>
        <div class="btn-nav">
            <button type="button" class="btn-nav__btn" data-target="#btn-nav-list<?= $i; ?>">
                <div class="btn-nav__btn-inner">
                    <span></span><span></span><span></span>
                </div>
            </button>
            <ul class="btn-nav__list" id="btn-nav-list<?= $i; ?>">
                <li class="btn-nav__list-li">
                    <button type="button" class="btn-nav__list-item">
                        <div class="btn-nav__list-icon btn-nav__list-icon--remove">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#remove"/>
                            </svg>
                        </div>
                        <div class="btn-nav__list-title">
                            Видалити
                        </div>
                    </button>
                </li>
                <li class="btn-nav__list-li">
                    <button type="button" class="btn-nav__list-item">
                        <div class="btn-nav__list-icon btn-nav__list-icon--like">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#heart"/>
                            </svg>
                        </div>
                        <div class="btn-nav__list-title">
                            У список бажань
                        </div>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>