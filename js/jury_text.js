// Testimonials function
$(document).ready(function(){

	var holdHover = '';
	$('.arrow-left').hide();
	$('.arrow-right').hide();
	$('.tem1').hide();
	$('.tem2').hide();
	$('.tem3').hide();
	$('.tem4').hide();

	$('.photo1').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo1').find('.arrow-left').fadeIn('fast');
	    $('.tem1').fadeIn('fast');
	  }, 200);
	});
	  $('.photo1').mouseleave(function() {
	    $('.tem1').fadeOut('fast');
	    $( this ).find('.arrow-left').fadeOut('fast');
	    clearInterval(holdHover);
  	});

	$('.photo2').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo2').find('.arrow-right').fadeIn('fast');
	    $('.tem2').fadeIn('fast');
	  }, 200);
	});
	  $('.photo2').mouseleave(function() {
	    $('.tem2').fadeOut('fast');
	    $( this ).find('.arrow-right').fadeOut('fast');
	    clearInterval(holdHover);
  	});

	$('.photo3').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo3').find('.arrow-left').fadeIn('fast');
	    $('.tem3').fadeIn('fast');
	  }, 200);
	});
	  $('.photo3').mouseleave(function() {
	    $('.tem3').fadeOut('fast');
	    $( this ).find('.arrow-left').fadeOut('fast');
	    clearInterval(holdHover);
  	});

	$('.photo4').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo4').find('.arrow-right').fadeIn('fast');
	    $('.tem4').fadeIn('fast');
	  }, 200);
	});
	$('.photo4').mouseleave(function() {
		$('.tem4').fadeOut('fast');
		$( this ).find('.arrow-right').fadeOut('fast');
		clearInterval(holdHover);
	});
	$('.photo5').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo5').find('.arrow-left').fadeIn('fast');
	    $('.tem5').fadeIn('fast');
	  }, 200);
	});
	$('.photo5').mouseleave(function() {
		$('.tem5').fadeOut('fast');
		$( this ).find('.arrow-left').fadeOut('fast');
		clearInterval(holdHover);
	});

	$('.photo6').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo6').find('.arrow-right').fadeIn('fast');
	    $('.tem6').fadeIn('fast');
	  }, 200);
	});
	$('.photo6').mouseleave(function() {
		$('.tem6').fadeOut('fast');
		$( this ).find('.arrow-right').fadeOut('fast');
		clearInterval(holdHover);
	});

	$('.photo7').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo7').find('.arrow-left').fadeIn('fast');
	    $('.tem7').fadeIn('fast');
	  }, 200);
	});
	$('.photo7').mouseleave(function() {
		$('.tem7').fadeOut('fast');
		$( this ).find('.arrow-left').fadeOut('fast');
		clearInterval(holdHover);
	});

	$('.photo8').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo8').find('.arrow-right').fadeIn('fast');
	    $('.tem8').fadeIn('fast');
	  }, 200);
	});
	$('.photo8').mouseleave(function() {
		$('.tem8').fadeOut('fast');
		$( this ).find('.arrow-right').fadeOut('fast');
		clearInterval(holdHover);
	});

});