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
	    $('.photo1').find('.arrow-left').show();
	    $('.tem1').show();
	  }, 200);
	});
	  $('.photo1').mouseleave(function() {
	    $('.tem1').hide();
	    $( this ).find('.arrow-left').hide();
	    clearInterval(holdHover);
  	});

	$('.photo2').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo2').find('.arrow-right').show();
	    $('.tem2').show();
	  }, 200);
	});
	  $('.photo2').mouseleave(function() {
	    $('.tem2').hide();
	    $( this ).find('.arrow-right').hide();
	    clearInterval(holdHover);
  	});

	$('.photo3').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo3').find('.arrow-left').show();
	    $('.tem3').show();
	  }, 200);
	});
	  $('.photo3').mouseleave(function() {
	    $('.tem3').hide();
	    $( this ).find('.arrow-left').hide();
	    clearInterval(holdHover);
  	});

	$('.photo4').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo4').find('.arrow-right').show();
	    $('.tem4').show();
	  }, 200);
	});
	$('.photo4').mouseleave(function() {
		$('.tem4').hide();
		$( this ).find('.arrow-right').hide();
		clearInterval(holdHover);
	});
	$('.photo5').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo5').find('.arrow-left').show();
	    $('.tem5').show();
	  }, 200);
	});
	$('.photo5').mouseleave(function() {
		$('.tem5').hide();
		$( this ).find('.arrow-left').hide();
		clearInterval(holdHover);
	});

	$('.photo6').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo6').find('.arrow-right').show();
	    $('.tem6').show();
	  }, 200);
	});
	$('.photo6').mouseleave(function() {
		$('.tem6').hide();
		$( this ).find('.arrow-right').hide();
		clearInterval(holdHover);
	});

	$('.photo7').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo7').find('.arrow-left').show();
	    $('.tem7').show();
	  }, 200);
	});
	$('.photo7').mouseleave(function() {
		$('.tem7').hide();
		$( this ).find('.arrow-left').hide();
		clearInterval(holdHover);
	});

	$('.photo8').mouseenter(function() {
		holdHover =  setInterval(function() {
	    $('.photo8').find('.arrow-right').show();
	    $('.tem8').show();
	  }, 200);
	});
	$('.photo8').mouseleave(function() {
		$('.tem8').hide();
		$( this ).find('.arrow-right').hide();
		clearInterval(holdHover);
	});

});