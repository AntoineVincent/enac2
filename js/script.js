$(document).ready(function(){
	$('.contactpop').hide()
			$('#contact').click(function()
			{
				$('.contactpop').fadeIn('slow',0)
			});
	
			$('.boutonfermer').click(function()
			{
				$('.contactpop').fadeOut('slow', 0);
			});
	$('#name').click(function(){
		$(this).select();
	});
	$('#email').click(function(){
		$(this).select();
	});
	$('#commentaire').click(function(){
		$(this).select();
	})
});