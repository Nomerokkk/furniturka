<div class="search">
    <form action="/" class="search__form">
        <input type="text" class="search__input j-search-input" placeholder="Я шукаю">
        <div class="search__nav">
            <button type="submit" class="search__voice" title="Голосовий ввод">
                <svg>
                    <use xlink:href="<?= $target; ?>/img/icons.svg#voice"/>
                </svg>
            </button>
            <button type="submit" class="search__btn" title="Пошук">
                <svg>
                    <use xlink:href="<?= $target; ?>/img/icons.svg#search"/>
                </svg>
            </button>
        </div>
    </form>
</div>