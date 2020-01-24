$(document).ready(function(){

	// Effets du menu mobile en cliquant sur le menu hamburger
	$('.hamburger').click(function(){

		if( $(this).hasClass('open') == false ){

			$(this).addClass('open');
			$('.menu-mobile').slideToggle();

		} else {

			$(this).removeClass('open');
			$('.menu-mobile').slideToggle();
		}

	});

	// main en mouvement pour aller au top 
	$(window).scroll(function() {
	    var height = $(window).scrollTop();

		if( height >= 100 ){
			$('.scroll-top').addClass('active');
		} else if( height < 100 ){
			$('.scroll-top').removeClass('active');
		}
	});
	$('.scroll-top').click(function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
  		return false;
	});


	// Pour fermer le menu lorsque redimension de la fenêtre
	$(window).resize(function(){

		$('.hamburger').removeClass('open');
		$('.menu-mobile').slideUp();

	});


	// menu accordeon
	$('.competence h2').click(function(){

		var content = $(this).next();

		if( content.parent().find('h2').hasClass('open') ){

			content.slideUp();
			content.parent().find('h2').removeClass('open').addClass('close');

		} else {

			content.slideDown();
			content.parent().find('h2').addClass('open').removeClass('close');

			$('.accordion').not(content).slideUp();
			$('.accordion').not(content).parent().find('h2').addClass('close').removeClass('open');
		}

	});

});