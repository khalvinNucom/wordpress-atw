(function($, root, undefined) {

    $(function() {

        'use strict';

        $('nav.nav ul').slicknav({
			duration: 500,
			easingOpen: 'easeInOutQuint', //available with jQuery UI
		});

        $('ul.slider').bxSlider({
            'pager': false,
            'auto': true

        });
    });

})(jQuery, this);