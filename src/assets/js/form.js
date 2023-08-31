let $form = $('.j-form');

let validator = $form.jbvalidator({
	errorMessage: true,
	successClass: true,
	html5BrowserDefault: false,
	validClass: 'valid',
    invalidClass: 'invalid',
	language: target + '/libs/form/' + lang + '.json',
});

$document.on('submit', '.j-form', function (event) {
	let $this = $(this),
		data = new FormData($this[0]);

	$this.prepend('<div class="loader"><img src="' + target +'/img/loader.svg" alt="" role="presentation"></div>');
	
	let $loader = $this.find('.loader');

	$.ajax({
		url: ajaxurl,
		type: 'POST',
		processData: false,
		cache: false,
		contentType: false,
		data: data,
		beforeSend: function() {
			gsap.to($loader[0], {
				display: 'flex',
				opacity: 1,
				duration: .4,
			});
		},
		success: function (response) {
			$this.find('[required]').val('');

			Fancybox.close();
			Fancybox.show(
				[{
					src: '#ok',
				}], opts_fancybox
			);

			gsap.to($loader[0], {
				display: 'none',
				opacity: 0,
				duration: .3,
				onComplete: function() {
					$loader.remove();
				},
			});
		}
	});

	return false;
});

$('.j-phone').inputmask('+38 (999)-999-99-99', {
	placeholder: '_',
	keepStatic: false,
	showMaskOnHover: true,
	validationEventTimeOut: 0,
});