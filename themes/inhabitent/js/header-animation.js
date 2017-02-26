(function($) {

	var $siteBody = $('body');

	if ( $siteBody.hasClass('home') || $siteBody.hasClass('about') ) {
	/*	var $inhabitentLogo = $('.header-logo');*/



	}


	var $searchToggle = $('#search-toggle');
	var $searchField = $('.search-field');

	$searchToggle.click(function(event){
		event.preventDefault();
		$searchField.toggleClass('search-field-expand');
	});

})(jQuery);