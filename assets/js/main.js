(function($, window, document, undefined){
	'use strict';

	$(function(){
		$('.mainNav').on('click', '.mainNav__link--dropdown', function(e) {
			var $this = $(this);
			if(e.target && e.target.className === 'subNav__link') {
				e.stopPropagation();
				return;
			}
			e.preventDefault();

			if(!$this.closest('.mainNav__linkGroup').hasClass('selected')) {
				$('.mainNav__linkGroup').removeClass('selected');
				$this.closest('.mainNav__linkGroup').toggleClass('selected');
			} else {
				$('.mainNav__linkGroup').removeClass('selected');
			}
		});

		$('body').on('click', function() {
			// close the nav menu when clicking elsewhere
		});
	});
})(jQuery, window, document);
