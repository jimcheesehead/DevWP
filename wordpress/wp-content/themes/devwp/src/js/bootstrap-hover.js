//https://youtu.be/pEJ2IzYOx5c?t=2081

jQuery(document).ready(function($) {
	// hover dropdown menu
	$(function (argument) {
		$(".dropdown").hover(
			function (argument) {
				$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
				$(this).toggleClass('open');
				$('b', this).toggleClass('caret caret-up');
			},
			function (argument) {
				$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
				$(this).toggleClass('open');
				$('b', this).toggleClass('caret caret-up');
			}
		);
	});
});