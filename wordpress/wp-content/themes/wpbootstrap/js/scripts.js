var $ = jQuery.noConflict();


$(document).ready(function(){
	
	$('a.control, .sub-menu').mouseenter(function(){
 		
		var show = this.id;

		$('#hidden-divs > div.' + show).slideToggle();
		$('#hidden-divs > div:not(".' + show + '")').hide();

		if ($(this).hasClass('carros')) {

			$('#carros').css('background-color', '#242424');

		} else if ($(this).hasClass('testes')) {

			$('#testes').css('background-color', '#242424');
		}

	});

	$('.sub-menu').mouseenter(function(){

		$(this).show();

	});

	$(document).click(function(){
		$('.sub-menu').hide();
	});

	$('.control, .sub-menu').mouseleave(function(){
		$('.sub-menu').hide();

		$('#carros').css('background-color', '#ed1c24');
		$('#testes').css('background-color', '#ed1c24');
	});

	$('#menu-small-open').click(function(){

		$('.hidden-menu').slideToggle();
	
	});

});
