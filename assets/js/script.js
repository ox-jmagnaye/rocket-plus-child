$j = jQuery.noConflict();

$j(function(){
	mobileMenuTrigger();
	menuClick();
	console.log('Loading Resources............100%');

	$j(window).scroll(function() {
		if ($j(this).scrollTop()) {
			$j('#scroll-to-top').fadeIn();
		} else {
			$j('#scroll-to-top').fadeOut();
		}
	});

	$j("#scroll-to-top").on('click', function () {
		$j("html, body").animate({scrollTop: 0}, 1000);
	});
});
function mobileMenuTrigger(){
	$j(".rocket-mobile-button button").on('click', function () {
		$j(this).toggleClass('is-active');
	} );
}
function menuClick(){
	$j('li.dropdown').on('click', function (e) {
		console.log(e);
		$j(this).removeClass('open');
	});
}
$j(window).on('load', function () {
	$j('.loading').fadeOut();
});