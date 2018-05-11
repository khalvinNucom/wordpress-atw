jQuery(function($){

	$('body.login div#login p#nav, body.login div#login p#backtoblog').wrapAll('<div class="bottom"></div>');

	$('body').vegas({

		slides:[
			{ src: login_images.theme_path + "1.jpg" },
			{ src: login_images.theme_path + "2.jpg" },
			{ src: login_images.theme_path + "3.jpg" }
		],
		overlay: login_images.theme_path + 'overlays/08.png',
		transition: ['blur','swirlLeft','zoomOut','blur2'],
		animation: 'random',
		transitionDuration: 3000,
		delay:7000,

	})

});