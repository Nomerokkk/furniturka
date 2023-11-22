		<footer class="footer">
			<div class="container">
				<div class="footer__wrapper">
					<div class="footer__row">
						<div class="footer__col footer__col--one">
							<a href="/" class="footer__logo" title="Furniturka">
								<img src="<?= $target; ?>/img/logo.svg" alt="" width="1" height="1">
							</a>
							<div class="footer__social">
								<? include 'social.php'; ?>
							</div>
							<div class="footer__info">
								<ul class="footer__info-list">
									<li class="footer__info-li">
										<a href="tel:+38 (050) 312-09-76" class="footer__info-item footer__info-item--phone">
											<div class="footer__info-icon">
												<svg>
													<use xlink:href="<?= $target; ?>/img/icons.svg#phone"/>
												</svg>
											</div>
											<div class="footer__info-title">
												+38 (050) 312-09-76
											</div>
										</a>
									</li>
									<li class="footer__info-li">
										<a href="tel:+38 (050) 489-01-85" class="footer__info-item footer__info-item--phone">
											<div class="footer__info-icon">
												<svg>
													<use xlink:href="<?= $target; ?>/img/icons.svg#phone"/>
												</svg>
											</div>
											<div class="footer__info-title">
												+38 (050) 489-01-85
											</div>
										</a>
									</li>
									<li class="footer__info-li">
										<a href="mailto:zakaz@furniturka.com.ua" class="footer__info-item footer__info-item--email">
											<div class="footer__info-icon">
												<svg>
													<use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
												</svg>
											</div>
											<div class="footer__info-title">
												zakaz@furniturka.com.ua
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="footer__col">
							<div class="footer__top" data-target="#footer__list1">
								<div class="footer__title">Фурнітурка</div>
								<div class="footer__arrow">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
									</svg>
								</div>
							</div>
							<ul class="footer__list" id="footer__list1">
								<? $menu = [
									0 => [
										'title' => 'Головна',
										'url' => '/',
									],
									1 => [
										'title' => 'Про нас',
										'url' => 'about.php',
									],
									2 => [
										'title' => 'Бренди',
										'url' => 'brands.php',
									],
									3 => [
										'title' => 'Новини',
										'url' => 'news.php',
									],
									4 => [
										'title' => 'Доставка та оплата',
										'url' => 'delivery-payments.php',
									],
									5 => [
										'title' => 'Контакти',
										'url' => 'contacts.php',
									],
									6 => [
										'title' => 'Завантаження',
										'url' => 'downloads.php',
									],
									7 => [
										'title' => 'Політика конфіденційності',
										'url' => 'privacy-policy.php',
									],
									8 => [
										'title' => 'Умови використання сайтом',
										'url' => 'conditions.php',
									],
								];
								foreach($menu as $item) {
									$title = $item['title'];
									$url = $item['url'];
								?>
									<li class="footer__list-li">
										<a href="<?= $url; ?>" class="footer__list-a">
											<?= $title; ?>
										</a>
									</li>
								<? } ?>
							</ul>
						</div>
						<div class="footer__col">
							<div class="footer__top" data-target="#footer__list2">
								<div class="footer__title">Каталог</div>
								<div class="footer__arrow">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
									</svg>
								</div>
							</div>
							<ul class="footer__list" id="footer__list2">
								<? $menu = [
									0 => [
										'title' => 'Алюмінієві системи',
										'url' => 'products.php',
									],
									1 => [
										'title' => 'Віконна фурнітура',
										'url' => 'products.php',
									],
									2 => [
										'title' => 'Дверна фурнітура',
										'url' => 'products.php',
									],
									3 => [
										'title' => 'Розсувні системи',
										'url' => 'products.php',
									],
									4 => [
										'title' => 'Фурнітура для віконниць',
										'url' => 'products.php',
									],
									5 => [
										'title' => 'Ущільнювачі',
										'url' => 'products.php',
									],
									6 => [
										'title' => 'Монтажні матеріали',
										'url' => 'products.php',
									],
									7 => [
										'title' => 'Хімія для вікон та дверей',
										'url' => 'products.php',
									],
									8 => [
										'title' => 'Водовідливні профілі',
										'url' => 'products.php',
									],
									9 => [
										'title' => 'Зовнішні видливи',
										'url' => 'products.php',
									],
								];
								foreach($menu as $item) {
									$title = $item['title'];
									$url = $item['url'];
								?>
									<li class="footer__list-li">
										<a href="<?= $url; ?>" class="footer__list-a">
											<?= $title; ?>
										</a>
									</li>
								<? } ?>
							</ul>
						</div>
						<div class="footer__col">
							<div class="footer__top" data-target="#footer__list3">
								<div class="footer__title">Завантаження</div>
								<div class="footer__arrow">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
									</svg>
								</div>
							</div>
							<ul class="footer__list" id="footer__list3">
								<? $menu = [
									0 => [
										'title' => 'Каталоги',
										'url' => 'downloads.php',
									],
									1 => [
										'title' => 'Інструкції по монтажу',
										'url' => 'downloads.php',
									],
									2 => [
										'title' => 'Монтажні схеми',
										'url' => 'downloads.php',
									],
									3 => [
										'title' => 'Посібники з експлуатації',
										'url' => 'downloads.php',
									],
									4 => [
										'title' => 'Брошури',
										'url' => 'downloads.php',
									],
								];
								foreach($menu as $item) {
									$title = $item['title'];
									$url = $item['url'];
								?>
									<li class="footer__list-li">
										<a href="<?= $url; ?>" class="footer__list-a">
											<?= $title; ?>
										</a>
									</li>
								<? } ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="copyright__payments">
						<ul class="payments">
							<li class="payments__li">
								<div class="payments__item">
									<img src="<?= $target; ?>/img/payments/visa.svg" alt="" width="1" height="1">
								</div>
							</li>
							<li class="payments__li">
								<div class="payments__item">
									<img src="<?= $target; ?>/img/payments/privat.svg" alt="" width="1" height="1">
								</div>
							</li>
							<li class="payments__li">
								<div class="payments__item">
									<img src="<?= $target; ?>/img/payments/mastercard.svg" alt="" width="1" height="1">
								</div>
							</li>
							<li class="payments__li">
								<div class="payments__item">
									<img src="<?= $target; ?>/img/payments/novaposhta.svg" alt="" width="1" height="1">
								</div>
							</li>
							<li class="payments__li">
								<div class="payments__item">
									<img src="<?= $target; ?>/img/payments/ukrposhta.svg" alt="" width="1" height="1">
								</div>
							</li>
						</ul>
					</div>
					<div class="copyright__title">
						2023 Всі права захищено
					</div>
					<a href="https://shafem.com/" class="copyright__create" target="_blank">
						<div class="copyright__create-title">
							Розробка сайту
						</div>
						<div class="copyright__create-img">
							<img src="<?= $target; ?>/img/shafem.svg" alt="" width="1" height="1">
						</div>
					</a>
				</div>
			</div>
		</footer>
	
	</div> <!-- end .wrapper -->
	
	<div class="overlay j-overlay"></div>
	<div class="overlay overlay--width-header j-overlay-width-header"></div>
	<div class="overlay overlay--width-header2 j-overlay-width-header2"></div>
	
	<div class="up j-up btn">
		<svg>
			<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
		</svg>
	</div>


	<div class="modal modal-basket" id="basket">
		<div class="modal__top">
			<div class="modal__title">Кошик</div>
		</div>
		<div class="modal__content">
			<div class="modal-basket__products">
				<? for($i = 0; $i < 2; $i++) { ?>
					<? include 'item-products-basket.php'; ?>
				<? } ?>
			</div>
			<div class="modal-basket__price">
				<span class="modal-basket__price-title">Разом:</span>
				<span class="modal-basket__price-value">2 490 грн</span>
			</div>
			<div class="modal-basket__btns">
				<button type="button" class="btn btn--border-grey" data-close>продовжити покупки</button>
				<a href="/checkout.php" class="btn">оформити замовлення</a>
			</div>
			<div class="modal-basket__desc" style="color: #DF3021;">
				<p>* Мінімальна сума замовлення на сайті 500 грн</p>
				<p>* Перед оплатою замовлення уточніть наявність та терміни доставки в менеджера!</p>
				<p>* Колір та відтінок виробу на фотографії може відрізнятися від реального. Характеристики та комплектація товару можуть змінюватися виробником без повідомлення. Магазин не несе відповідальності за зміни внесені виробником.</p>
			</div>
		</div>
	</div>

	<div class="modal modal-user" id="sign-in">
		<div class="modal__top">
			<div class="modal__title">
				Вхід
			</div>
		</div>
		<div class="modal__content">
			<div class="modal-user__wrapper">
				<form class="modal-user__form j-form" novalidate>
					<div class="modal__label">
						<label class="label">
							<span class="label__title">Ел.пошта або телефон <span>*</span></span>
							<input type="text" class="input input--small" required>
						</label>
					</div>
					<div class="modal__label modal-user__password j-password">
						<div class="modal-user__password-input">
							<label class="label">
								<span class="label__title">Пароль <span>*</span></span>
								<input type="password" class="input input--small j-password-input" required>
							</label>
						</div>
						<button type="button" class="modal-user__password-icon j-password-btn">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#view"/>
							</svg>
						</button>
					</div>
					<div class="modal-user__remember">
						<div class="modal-user__remember-checkbox">
							<label class="checkbox">
								<input type="checkbox" checked>
								<div class="checkbox__bl">
									<div class="checkbox__check">
										<svg>
											<use xlink:href="<?= $target; ?>/img/icons.svg#checkbox"/>
										</svg>
									</div>
									<div class="checkbox__title">Запам’ятати мене</div>
								</div>
							</label>
						</div>
						<div class="modal-user__remember-lost">
							<a href="#remember-password" data-fancybox>Нагадати пароль</a>
						</div>
					</div>
					<div class="modal-user__btns">
						<button type="submit" class="btn">
							Увійти
						</button>
						<div class="modal-user__btns-link">
							<a href="#sign-up" data-fancybox>Зареєструватися</a>
						</div>
					</div>
				</form>
				<div class="modal-user__or">
					<span>або</span>
				</div>
				<div class="modal-user__social">
					<div class="modal-user__social-title">
						Увійти як користувач
					</div>
					<ul class="modal-user__social-list">
						<li class="modal-user__social-li">
							<button type="button" class="modal-user__social-item">
								<div class="modal-user__social-icon">
									<img src="<?= $target; ?>/img/facebook.svg" alt="" width="1" height="1">
								</div>
								<div class="modal-user__social-name">
									Facebook
								</div>
							</button>
						</li>
						<li class="modal-user__social-li">
							<button type="button" class="modal-user__social-item">
								<div class="modal-user__social-icon">
									<img src="<?= $target; ?>/img/google.svg" alt="" width="1" height="1">
								</div>
								<div class="modal-user__social-name">
									Google
								</div>
							</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="modal modal-user" id="remember-password">
		<div class="modal__top">
			<div class="modal__title">
				Вхід
			</div>
		</div>
		<div class="modal__content">
			<div class="modal-user__wrapper">
				<form class="modal-user__form j-form" novalidate>
					<div class="modal__label">
						<label class="label">
							<span class="label__title">Ел.пошта або телефон <span>*</span></span>
							<input type="text" class="input input--small" required>
						</label>
					</div>
					<div class="modal-user__btns">
						<button type="submit" class="btn" data-fancybox data-src="#new-password">
							отримати тимчасовий пароль
						</button>
						<div class="modal-user__btns-link">
							<a href="#sign-in" data-fancybox>Я згадав свій пароль</a>
						</div>
					</div>
				</form>
				<div class="modal-user__or">
					<span>або</span>
				</div>
				<div class="modal-user__social">
					<div class="modal-user__social-title">
						Увійти як користувач
					</div>
					<ul class="modal-user__social-list">
						<li class="modal-user__social-li">
							<button type="button" class="modal-user__social-item">
								<div class="modal-user__social-icon">
									<img src="<?= $target; ?>/img/facebook.svg" alt="" width="1" height="1">
								</div>
								<div class="modal-user__social-name">
									Facebook
								</div>
							</button>
						</li>
						<li class="modal-user__social-li">
							<button type="button" class="modal-user__social-item">
								<div class="modal-user__social-icon">
									<img src="<?= $target; ?>/img/google.svg" alt="" width="1" height="1">
								</div>
								<div class="modal-user__social-name">
									Google
								</div>
							</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="modal modal-user" id="sign-up">
		<div class="modal__top">
			<div class="modal__title">
				Реєстрація
			</div>
		</div>
		<div class="modal__content">
			<div class="modal-user__wrapper">
				<form class="modal-user__form j-form" novalidate>
					<div class="modal__label">
						<label class="label">
							<span class="label__title">Ім’я <span>*</span></span>
							<input type="text" class="input input--small" required>
						</label>
					</div>
					<div class="modal__label">
						<label class="label">
							<span class="label__title">Прізвище <span>*</span></span>
							<input type="text" class="input input--small" required>
						</label>
					</div>
					<div class="modal__label">
						<label class="label">
							<span class="label__title">Номер телефону <span>*</span></span>
							<input type="tel" class="input input--small j-phone" placeholder="+38 (___)-___-__-__" required>
						</label>
					</div>
					<div class="modal__label">
						<label class="label">
							<span class="label__title">Ел.пошта</span>
							<input type="email" class="input input--small" required>
						</label>
					</div>
					<div class="modal__label modal-user__password j-password">
						<div class="modal-user__password-input">
							<label class="label">
								<span class="label__title">Придумайте пароль</span>
								<input type="password" class="input input--small j-password-input" autocomplete="new-password" required>
							</label>
						</div>
						<button type="button" class="modal-user__password-icon j-password-btn">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#view"/>
							</svg>
						</button>
					</div>
					<div class="modal-user__accept">
						Реєструючись, ви погоджуєтеся з умовами <a href="#">положення про обробку і захист персональних даних</a> та <a href="#">угодою користувача</a>
					</div>
					<div class="modal-user__btns">
						<button type="submit" class="btn" data-fancybox data-src="#code">
							зареєструватися
						</button>
						<div class="modal-user__btns-link">
							<a href="#sign-in" data-fancybox>Я вже зареєстрований</a>
						</div>
					</div>
				</form>
				<div class="modal-user__or">
					<span>або</span>
				</div>
				<div class="modal-user__social">
					<div class="modal-user__social-title">
						Увійти як користувач
					</div>
					<ul class="modal-user__social-list">
						<li class="modal-user__social-li">
							<button type="button" class="modal-user__social-item">
								<div class="modal-user__social-icon">
									<img src="<?= $target; ?>/img/facebook.svg" alt="" width="1" height="1">
								</div>
								<div class="modal-user__social-name">
									Facebook
								</div>
							</button>
						</li>
						<li class="modal-user__social-li">
							<button type="button" class="modal-user__social-item">
								<div class="modal-user__social-icon">
									<img src="<?= $target; ?>/img/google.svg" alt="" width="1" height="1">
								</div>
								<div class="modal-user__social-name">
									Google
								</div>
							</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="modal modal-code" id="code">
		<div class="modal__top">
			<div class="modal__title">
				Ведіть код з телефону
			</div>
		</div>
		<div class="modal__content">
			<form class="modal-form__code j-form" novalidate>
				<div class="modal__label">
					<label class="label">
						<span class="label__title">Код</span>
						<input type="text" class="input input--small" required>
					</label>
				</div>
				<div class="modal-code__get">
					<div class="modal-code__get-link">
						Запросити повторно
					</div>
				</div>
				<div class="modal__btn">
					<button type="submit" class="btn">
						підтвердити
					</button>
				</div>
			</form>
		</div>
	</div>

	<div class="modal modal-code" id="new-password">
		<div class="modal__top">
			<div class="modal__title">
				Відправили пароль
			</div>
		</div>
		<div class="modal__content">
			<div class="modal-code__desc">
				Ми відправили вам за номером телефону 38050*****21 або в Viber тимчасовий пароль.
			</div>
			<div class="modal__btn">
				<button type="button" class="btn" data-fancybox data-src="#sign-in">
					Вхід
				</button>
			</div>
		</div>
	</div>
	
	<div class="messages j-messages">
		<div class="messages__item messages__item--success j-messages-item">
			<div class="messages__inner">
				Товар добавлен в сравнение
			</div>
		</div>
		<div class="messages__item messages__item--error j-messages-item">
			<div class="messages__inner">
				Нажаль, виникла помилка під час збереження.
			</div>
		</div>
	</div>
	
	<script>
		const target = '<?= $target; ?>',
			lang = 'ua';
	</script>
	
	<script src="<?= $target; ?>/libs/jquery.min.js"></script>
	<script src="<?= $target; ?>/libs/swiper/swiper.min.js"></script>
	<script src="<?= $target; ?>/libs/lazy/jquery.lazy.min.js"></script>
	<script src="<?= $target; ?>/libs/lazy/plugins/jquery.lazy.picture.min.js"></script>
	<script src="<?= $target; ?>/libs/jquery.maskedinput.min.js"></script>
	<script src="<?= $target; ?>/libs/fancybox/jquery.fancybox.min.js"></script>
	<script src="<?= $target; ?>/libs/svg4everybody.min.js"></script>
	<script src="<?= $target; ?>/libs/jquery.star-rating-svg.min.js"></script>
	<script src="<?= $target; ?>/libs/range.min.js"></script>
	<script src="<?= $target; ?>/libs/select2.min.js"></script>
	<script src="<?= $target; ?>/js/common.js"></script>
	<script src="<?= $target; ?>/js/catalog-menu.js"></script>
	<script src="<?= $target; ?>/libs/form/jbvalidate.min.js"></script>
	<script src="<?= $target; ?>/js/form.js"></script>
</body>
</html>