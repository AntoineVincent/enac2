// Testimonials function
$(document).ready(function(){
	$('.arrow-right').hide();
	$('.arrow-left').hide();
	$('#text1').hide();
	$('#text2').hide();
	$('#text3').hide();
	$('#text4').hide();
	$('#text5').hide();
	$('#text6').hide();
	$('#text7').hide();
	$('#text8').hide();

	$('#image1').mouseenter(function(){
		$('#text1').show();
		$('.arrow1').show();
	});
	$('#image1').mouseleave(function(){
		$('#text1').hide();
		$('.arrow1').hide();
	})

	$('#image2').mouseenter(function(){
		$('#text2').show();
		$('.arrow2').show();
	});
	$('#image2').mouseleave(function(){
		$('#text2').hide();
		$('.arrow2').hide();
	})

	$('#image3').mouseenter(function(){
		$('#text3').show();
		$('.arrow3').show();
	});
	$('#image3').mouseleave(function(){
		$('#text3').hide();
		$('.arrow3').hide();
	})

	$('#image4').mouseenter(function(){
		$('#text4').show();
		$('.arrow4').show();
	});
	$('#image4').mouseleave(function(){
		$('#text4').hide();
		$('.arrow4').hide();
	})

	$('#image5').mouseenter(function(){
		$('#text5').show();
		$('.arrow5').show();
	});
	$('#image5').mouseleave(function(){
		$('#text5').hide();
		$('.arrow5').hide();
	})

	$('#image6').mouseenter(function(){
		$('#text6').show();
		$('.arrow6').show();
	});
	$('#image6').mouseleave(function(){
		$('#text6').hide();
		$('.arrow6').hide();
	})

	$('#image7').mouseenter(function(){
		$('#text7').show();
		$('.arrow7').show();
	});
	$('#image7').mouseleave(function(){
		$('#text7').hide();
		$('.arrow7').hide();
	})

	$('#image8').mouseenter(function(){
		$('#text8').show();
		$('.arrow8').show();
	});
	$('#image8').mouseleave(function(){
		$('#text8').hide();
		$('.arrow8').hide();
	})
});