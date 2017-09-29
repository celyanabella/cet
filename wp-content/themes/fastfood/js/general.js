jQuery(document).ready(function() {
	jQuery('#slider-home').carousel({
	  interval: 6000,
	  pause: "hover"
	});

	minWrapHeight();
});

jQuery(window).on('resize', minWrapHeight);

function minWrapHeight() {
	var content = jQuery('.page-content');
	content.removeAttr('style');

	var bodyHeight = jQuery(document).outerHeight();
	var headerAndFooterHeight = jQuery('header').outerHeight() + jQuery('footer').outerHeight();

	content.height( (bodyHeight - headerAndFooterHeight) + 'px');
}