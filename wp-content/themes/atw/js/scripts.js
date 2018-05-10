(function($, root, undefined) {

    $(function() {

        'use strict';

        $('nav.nav ul').slicknav({
			duration: 1000,
			easingOpen: "easeOutBounce", //available with jQuery UI
		});

        $('ul.slider').bxSlider({
            'pager': false,
            'auto': true

        });
    });

})(jQuery, this);