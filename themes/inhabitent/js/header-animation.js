(function($) {

	//Grab site body (for class list), header and the height of the hero image banner using jQuery

	var $siteBody = $('body');
	var $header = $('#masthead');

	var $currentBannerHeight = {height: $('.hero-image-banner').height()};

	function getBannerHeight($banner) {
		$banner.height = $('.hero-image-banner').height();
	}

	//Check to make sure we are on the home or about page

	if ( $siteBody.hasClass('home') || $siteBody.hasClass('page-template-about') ) {
		var $headerLogoWrapper = $('.header-logo-wrapper');

		//Whenever the user scrolls, the code below is executed

		$(window).resize(function(){
			getBannerHeight($currentBannerHeight);
		})

		$(window).scroll(function(){

		//If the use has not scrolled past the banner image, set the header styles

			if ($(this).scrollTop() <= $currentBannerHeight.height) {
				$headerLogoWrapper.removeClass('header-logo-green');
				$header.stop().css({
					'position': 'absolute'}).removeClass('white-and-green-menu');
			}

			//If the user HAS scrolled past the banner image, reverse the header styles

			if($(this).scrollTop() > $currentBannerHeight.height) {
				$headerLogoWrapper.addClass('header-logo-green');
				$header.stop().css({
					'position': 'fixed',
				}).addClass('white-and-green-menu');
			}
		});
	}

	// Toggle the nag bar search field open and closed when the magnifying glass button is clicked

	var $searchToggle = $('.icon-search');
	var $searchField = $('.search-field');

	$searchToggle.click(function(event){
		event.preventDefault();
		$searchField.toggleClass('search-field-expand').focus();
		return true;
	});

	$searchField.focusout(function(event){
		$searchField.toggleClass('search-field-expand');
	});

})(jQuery);