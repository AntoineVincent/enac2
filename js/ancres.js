//smooth scrolling
$(document).ready(function(){
$('a[href^="index.php#challenge"]').replaceWith('<a href="#challenge">Challenge</a>');
$('a[href^="index.php#jury"]').replaceWith('<a href="#jury">Jury/Tuteurs</a>');
$('a[href^="index.php#partenaires"]').replaceWith('<a href="#partenaires">Partenaires</a>');
$('a[href^="index.php#actus"]').replaceWith('<a href="#actus">Actus</a>');
$('a[href^="index.php#participer"]').replaceWith('<a href="#participer">Participer</a>');
$('a[href^="#"]').click(function(){  
    var id = $(this).attr("href");
    var offset = $(id).offset().top;
    $('html, body').animate({scrollTop: offset}, 'slow'); 
    return false;  
});
});