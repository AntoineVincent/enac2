$(document).ready(function(){
	$(".img-partenaires").scroll(function(){
		$('html, body').animate(
		{
			scrollTop:$('#jury').offset().top
      	});
  	});
});