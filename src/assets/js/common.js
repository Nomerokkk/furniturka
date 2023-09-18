const $document = $(document),
	$window = $(window),
	$body = $('.j-body'),
	$up = $('.j-up'),
	$header = $('.j-header'),
	$wrapper = $('.j-wrapper');

	
// support svg sprite-------------------------------
svg4everybody();


// header and up button-----------------------------
function headerFixed() {
	let scroll = window.scrollY;

	if(scroll > 0) {
		$header.addClass('fixed');
	} else {
		$header.removeClass('fixed');
	}

	if(scroll > 1700) {
		$up.addClass('active');
	} else {
		$up.removeClass('active');
	}
}

$up.on('click', function() {
	gsap.to(window, {
		duration: 2, 
		scrollTo: 0,
		ease: Circ.easeInOut,
	});
});

$window.on('scroll', function() {
	headerFixed();
});

headerFixed();

window.onscroll = function(e) {
	if(this.scrollY > 300) {
		if(this.oldScroll < this.scrollY) {
			$header.addClass('down');
		} else {
			$header.removeClass('down');
		}
		this.oldScroll = this.scrollY;
	}
}


// fancybox---------------------------------------------------
const opts_fancybox = {
	autoFocus: false,
	trapFocus: false,
	dragToClose: false,
	placeFocusBack: false,
	Thumbs: true,
	on: {
		reveal: function(fancybox, carousel) {
			let $slide = $(fancybox.$container),
				theme = carousel.theme;

			if($slide.find('.j-wow').length > 0) {
				animateFrom($slide.find('.j-wow')[0]);
			}

			// $slide.find('.j-theme').val(theme);
		},
		destroy: function(fancybox, carousel) {
			let $slide = $(fancybox.$container);

			if($slide.find('.j-wow-class').length > 0) {
				$slide.find('.j-wow-class').removeClass('animated');
			}
		},
	}
};
Fancybox.bind('[data-fancybox]', opts_fancybox);
$document.on('click', '[data-close]', function() {
	Fancybox.close();
});


// data-toggle-----------------------------------------
$(function() {
	const btn = '[data-toggle]';

	$(btn).on('click', function(e) {
		e.preventDefault();

		let $this = $(this),
			target = $this.data('toggle');
		
		$(target).slideToggle(300);

		$(`[data-toggle="${target}"]`).toggleClass('active');
	});
});


// data-target-----------------------------------------
$(function() {
	let btn = '[data-target]';

	$document.on('click', btn, function(e) {
		e.preventDefault();

		let $this = $(this),
			target = $this.attr('data-target'); 

			$(btn).each(function() {
				let $this_new = $(this),
					target_new = $this_new.attr('data-target'),
					$target_new = $(target_new); 

				if(target != target_new && !$(target).parents().is('.active-target')) {			
					$this_new.removeClass('active-target');
					$target_new.removeClass('active-target');

					if($body.is('.overflow')) {
						$body.removeClass('overflow');
					}
				}
			});

			if($this.is('.header__toggle') && !$this.is('.active-target')) {
				$body.addClass('overflow');
			}

			$(`[data-target="${target}"]`).toggleClass('active-target');
			$(target).toggleClass('active-target');
	});

	function hide_target() {
		$(btn).each(function() {
			let $this = $(this),
				target = $this.attr('data-target'); 

			$this.removeClass('active-target');
			$(target).removeClass('active-target');

			if($this.is('.header__toggle')) {
				$body.removeClass('overflow');
			}
		});
	}

	$document.on('click', function(e) {
		let $target = $(e.target);
		
		if( !$target.is(btn) && 
			!$target.parents().is(btn) && 
			!$target.is('.active-target') && 
			!$target.parents().is('.active-target') 
		) {
			hide_target();
		}
	});

	$('.j-overlay, .j-overlay-width-header, .j-overlay-width-header2').on('click', function() {
		hide_target();
	});
});



// scroll to element-----------------------------------------
$(function() {
	let $link = $('.j-scroll');

	$link.on('click', function(e) {
		e.preventDefault();

		let $this = $(this),
			href = $this.attr('href') || $this.data('scroll'),
			offset = $header.outerHeight() + 63,
			ww = $window.width();
		
		gsap.to(window, {
			duration: 1, 
			scrollTo: {
				y: href,
				offsetY: offset,
			},
			ease: Circ.easeInOut,
		});

		if(ww <= 992) {
			$('.header__toggle').trigger('click');
		}
	});

	function onScroll(){
		let scroll_top = $window.scrollTop(),
			header_height = $header.outerHeight() + 20 + 63;
		
		$link.each(function () {
			let $this = $(this),
				href,
				bl;

			if($this.is('[href]')) {
				href = $this.attr('href');
			} else {
				href = $this.data('scroll');
			}

			bl = $(href);

			if($this.is(':visible')) {
				if (bl.offset().top <= scroll_top + header_height  && bl.offset().top + bl.outerHeight() - header_height > scroll_top) {
					$link.removeClass('active');
					if($this.is('[href]')) {
						$('.j-scroll[href="' + href + '"]').addClass('active');
					} else {
						$('.j-scroll[data-scroll="' + href + '"]').addClass('active');
					}
				}
				else{
					$this.removeClass('active');
				}
			}
		});
	}

	$document.on('scroll', onScroll);
});


// lazy-----------------------------------------
$('.j-lazy').lazy({
	visibleOnly: true,
	afterLoad: function(item) {
		$(item).addClass('loaded');
	},
});


// slider with resize-----------------------------------------
$(function() {
	function slider_results() {
		var $slider = $('.j-news-slider');
	
		if($window.width() <= 767) {
			if(!$slider.is('.swiper-initialized')) {
				new Swiper($slider.find('.news-slider__slider')[0], {
					speed: 300,
					slidesPerView: 'auto',
					spaceBetween: 10,
					slideClass: 'news-slider__slide',
					wrapperClass: 'news-slider__wrapper',
					freeMode: true,
					scrollbar: {
						el: $slider.find('.j-scrollbar')[0],
						draggable: true,
					},
				});
			}
		} else {
			if($slider.is('.swiper-initialized')) {
				$slider[0].swiper.destroy(true, true);
			}
		}
	}
	
	slider_results();
	
	$window.on('resize', slider_results);
});

$(function() {
	function slider_results() {
		var $slider = $('.j-brands-slider');
	
		if($window.width() <= 767) {
			if(!$slider.is('.swiper-initialized')) {
				new Swiper($slider[0], {
					speed: 300,
					slidesPerView: 'auto',
					spaceBetween: 10,
					slideClass: 'col',
					wrapperClass: 'row',
					freeMode: true,
					scrollbar: {
						el: $slider.find('.j-scrollbar')[0],
						draggable: true,
					},
				});
			}
		} else {
			if($slider.is('.swiper-initialized')) {
				$slider[0].swiper.destroy(true, true);
			}
		}
	}
	
	slider_results();
	
	$window.on('resize', slider_results);
});


$('.j-catalog-menu-li').on('mouseover', function() {
	let $this = $(this),
		$submenu = $this.find('> .j-catalog-menu-submenu');

	if($window.width() > 1200) {
		if($this.closest('.j-header-catalog').length == 0) {
			$('.j-overlay-width-header2').addClass('active-target');
		}

		$('.j-catalog-menu-nav').addClass('active');
		$this.find('.catalog-menu__list-a').addClass('active');
		$submenu.addClass('active');
	}
});

$('.j-catalog-menu-li').on('mouseleave', function() {
	let $this = $(this),
		$submenu = $this.find('> .j-catalog-menu-submenu');

	if($window.width() > 1200) {
		if($this.closest('.j-header-catalog').length == 0) {
			$('.j-overlay-width-header2').removeClass('active-target');
		}
		$('.j-catalog-menu-nav').removeClass('active');
		$this.find('.catalog-menu__list-a').removeClass('active');
		$submenu.removeClass('active');
	}
});

$('.j-catalog-menu-a').on('click', function(e) {
	let $this = $(this),
		$submenu = $this.siblings('.j-catalog-menu-submenu');
	
	if($window.width() <= 1200) {
		if($this.closest('.j-header-catalog').length == 0) {
			$('.j-overlay-width-header2').addClass('active-target');
		}

		if($this.is('.active')) {
			$('.j-overlay-width-header2').removeClass('active-target');
			$('.j-catalog-menu-a').removeClass('active');
			$('.j-catalog-menu-nav').removeClass('active');
			$('.j-catalog-menu-submenu').removeClass('active');
			$this.removeClass('active');
		} else {
			$('.j-catalog-menu-a').removeClass('active');
			$('.j-catalog-menu-submenu').removeClass('active');
			$('.j-catalog-menu-nav').addClass('active');
			$this.addClass('active');
			$submenu.addClass('active');
		}

		return false;
	}
});

$('.j-catalog-menu-a-sub').on('click', function(e) {
	e.preventDefault();

	let $this = $(this),
		$submenu = $this.siblings('.j-catalog-menu-submenu');

	$submenu.addClass('active');
});

$('.j-catalog-menu-back').on('click', function() {
	let $this = $(this),
		$submenu = $this.closest('.j-catalog-menu-submenu');

	$submenu.removeClass('active');
})


// banner-slider-----------------------------------------
$(function() {
	let $slider = $('.j-banner-slider');

	new Swiper($slider.find('.banner__slider-slider')[0], {
		speed: 800,
		slidesPerView: 1,
		parallax: true,
		wrapperClass: 'banner__slider-wrapper',
		slideClass: 'banner__slider-slide',
		autoplay: {
			delay: 5000,
			pauseOnMouseEnter: false,
		},
		navigation: {
			nextEl: $slider.find('.j-next')[0],
			prevEl: $slider.find('.j-prev')[0],
		},
	});
});

//stars
$('.j-stars').starRating({
	initialRating: 4,
	strokeColor: '#894A00',
	strokeWidth: 0,
	starSize: 24,
	// activeColor: 'cornflowerblue',
	emptyColor: '#BDBCBC',
	useGradient: false,
	disableAfterRate: false,
});
$('.j-stars-readonly').starRating({
	initialRating: 4,
	strokeColor: '#894A00',
	strokeWidth: 0,
	starSize: 24,
	emptyColor: '#BDBCBC',
	useGradient: false,
	readOnly: true,
});



/**************RANGE SLIDER***********/
$(function() {
	const $slider = $('.j-range-slider'),
		$firstPrice = $('.j-range-first'),
		$lastPrice = $('.j-range-last'),
		firstPriceVal = $firstPrice.val(),
		lastPriceVal = $lastPrice.val();
	
	if($slider.length > 0) {
		const range = rangeSlider($slider[0], {
			value: [firstPriceVal, lastPriceVal],
			min: firstPriceVal,
			max: lastPriceVal,
			rangeSlideDisabled: true,
			onInput: function(value, userInteraction) {
				$firstPrice.val(value[0]);
				$lastPrice.val(value[1]);
			}
		});

		$('.j-range-first, .j-range-last').on('input', function() {
			let firstPriceVal = $firstPrice.val(),
				lastPriceVal = $lastPrice.val();

			setTimeout(function() {
				range.value([firstPriceVal, lastPriceVal]);
			}, 1000);
		});
	}
});


//item products nav
$('.j-add-to-like, .j-add-to-cart, .j-add-to-compare').on('click', function() {
	$(this).toggleClass('active');
});

$('.j-add-to-cart').on('click', function() {
	Fancybox.show(
		[{
			src: '#basket',
		}], opts_fancybox
	);
});

// product-gallery
$(function() {
	let $slider = $('.j-product-gallery-slider');

	const thumbsSwiper = new Swiper('.j-product-gallery-thumbnails', {
		speed: 400,
		slidesPerView: 'auto',
		// simulateTouch: false,
		slideToClickedSlide: true,
		wrapperClass: 'product-gallery__thumbnails-wrapper',
		slideClass: 'product-gallery__thumbnails-slide',
	});

	new Swiper($slider[0], {
		speed: 400,
		slidesPerView: 1,
		wrapperClass: 'product-gallery__slider-wrapper',
		slideClass: 'product-gallery__slider-slide',
		navigation: {
			nextEl: $slider.find('.j-next')[0],
			prevEl: $slider.find('.j-prev')[0],
		},
		thumbs: {
			swiper: thumbsSwiper
		}
	});
});

//tabs
$(function() {
	let $tab_link = $('[data-tab]'),
		$tab_area = $('.j-tab-area'),
		$tab_list = $('.j-tabs-list'),
		hash = document.location.hash;

	if(hash) {
		showTab(hash.split('#')[1]);

		$tab_list.scrollLeft($tab_list.find('[data-tab].active').position().left);
	}

	$tab_link.on('click', function(e) {
		e.preventDefault();

		let $this = $(this),
			id = $this.attr('data-tab');

		if($this.is('.active')) {
			return false;
		}

		showTab(id);

		gsap.to(window, {
			duration: .3, 
			scrollTo: {
				y: 0,
				// offsetY: offset,
			},
			ease: Circ.easeInOut,
		});

		document.location.hash = id;
	});

	function showTab(id) {
		$tab_link.removeClass('active');
		$tab_area.removeClass('active');

		$(`[data-tab="${id}"]`).addClass('active');
		$(`.tab-${id}`).addClass('active');
	}
});

//password
$document.on('click', '.j-password-btn', function() {
	let $this = $(this),
		$input = $this.closest('.j-password').find('.j-password-input');

	if($this.is('.active')) {
		$input.attr('type', 'password');
	} else {
		$input.attr('type', 'text');
	}
	
	$this.toggleClass('active');
});

//select
$(function() {
	const select = $('.j-select').select2({
		width: 'style',
	});

	select.on('select2:open', function(e) {
		setTimeout(() => {
			let placeholder = $('.select2-container--open').siblings('.j-select').attr('data-search-placeholder');

			$('.select2-search__field').attr('placeholder', placeholder);
			$('.select2-search__field')[0].focus();
		}, 10);
	})

	$('.select2-selection__arrow').append(`<svg><use xlink:href="${target}/img/icons.svg#arrow"/></svg>`);
});

//wishlist page
$(function() {
	$('.j-all-checked').on('click', function() {
		let $this = $(this),
			$wrapper = $this.closest('.j-item-wishlist'),
			$inputs = $wrapper.find('.j-wishlist-checkbox');
			text_old = $this.attr('data-old-text'),
			text_new = $this.attr('data-new-text'),
			$btns = $wrapper.find('.j-wishlist-buy, .j-wishlist-remove');
	
		if(!$this.is('.checked')) {
			$inputs.prop('checked', true);
			$this.text(text_new);
			$btns.addClass('active-btn');
		} else {
			$inputs.prop('checked', false);
			$this.text(text_old);
			$btns.removeClass('active-btn');
		}
	
		$this.toggleClass('checked');
	});

	$('.j-wishlist-checkbox').on('change', function() {
		let $this = $(this),
			$wrapper = $this.closest('.j-item-wishlist'),
			length_all_checkbox = $wrapper.find('.j-wishlist-checkbox').length,
			length_active_checkbox = $wrapper.find('.j-wishlist-checkbox:checked').length,
			$all_checked_btn = $wrapper.find('.j-all-checked'),
			text_old = $all_checked_btn.attr('data-old-text'),
			text_new = $all_checked_btn.attr('data-new-text'),
			$btns = $wrapper.find('.j-wishlist-buy, .j-wishlist-remove');

		if(length_active_checkbox == length_all_checkbox) {
			$all_checked_btn.text(text_new);
			$all_checked_btn.addClass('checked');
		} else {
			$all_checked_btn.text(text_old);
			$all_checked_btn.removeClass('checked');
		}

		if(length_active_checkbox > 0) {
			$btns.addClass('active-btn');
		} else {
			$btns.removeClass('active-btn');
		}
	});
});

// copy url 
$('.j-copy-url').on('click', function() {
	let $this = $(this),
		url = $this.attr('data-url');

	const storage = document.createElement('textarea');

	storage.value = url;
	$body.append(storage);
	
	storage.select();
	storage.setSelectionRange(0, 99999);
	document.execCommand('copy');
	storage.remove();
});

// checkout
$('.j-checkout-radio-bl input').on('change', function() {
	let $this = $(this),
		$bl = $this.closest('.j-checkout-bl'),
		$wrapper = $this.closest('.j-checkout-radio-bl');

	$bl.find('.j-checkout-radio-bl').removeClass('active')
	$wrapper.addClass('active');
});


//show messages
function show_message(item) {
	$(item).show(function() {
		$(item).addClass('active');
	})
}
function hide_message(item) {
	$(item)
		.removeClass('active');

	setTimeout(() => {
		$(item).remove();
	}, 500);
}
$('.j-messages-item').each(function() {
	show_message(this);
});
$('.j-messages-item').on('click', function() {
	hide_message(this);
});

//show after load page
$('.header-catalog, .header__phones-time, .lang__list, .btn-nav__list').show();

$body.removeClass('preload');