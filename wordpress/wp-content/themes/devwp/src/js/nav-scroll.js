//https://youtu.be/pEJ2IzYOx5c?t=2015
jQuery(document).ready(function($){
	//dynamic scroll to top link
	$link ='<a href="#top" class="top">&uarr;</a>';
	$('body').append($link);
	$('.top').hide();
	$(window).scroll(function (argument) {
		if ($(this).scrollTop() > 100) {
			$('.top').fadeIn();
		} else {
			$('top').fadeOut();
		}
	});
	$('.top').click(function (e) {
		e.preventDefault();
		$('html, body').animate({scrollTop: 0}, 400);
	});
});