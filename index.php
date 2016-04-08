<!DOCTYPE html>
<html lang="fr">

<head>
<!-- title and test meta -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="" />
<title>ENAC</title>

<!-- css -->
<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/csshake.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />


<!-- js -->
<script src="js/jquery-1.12.2.js"></script>
<script src="js/classie.js"></script>
<!-- Script pour rétrécir le header -->
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
</head>



<body>

<div id="wrapper">

<header>
    <?php
        include 'header.php';
    ?>
</header><!-- /header -->



<div class="container-fluid">
    <div id="content">
      <div class="img-partenaires">
      	<div class="row flotteur">
            <div class="col-md-12 centrer">
            	<a href="#challenge" class="none"><i class="fa fa-angle-down fa-5x shake-vertical shake-constant shake-constant--hover"></i></a>
            </div>
        </div>     		
      </div>
      <div id="challenge"></div>
        <!--<div class="col-xs-12 transition">
            <div class="triangle"></div>
        </div>-->
        <section class="bg-nuages test"> <!--============== Section Challenge ================-->
            <div class="container jumbotron">
                <br />
                <h1>Le Challenge</h1>
                <br />
                <p align="justify">Le Challenge ENAC Alumni – Avico est un concours de création d’entreprise dans le domaine aéronautique. Il est porté par ENAC Alumni avec le soutien d’Avico, son partenaire fondateur.</p>

                <p align="justify">La 1ère édition du Challenge fut lancée en 2014, et devant le succès du Challenge et la qualité des projets reçus, les organisateurs ont décidé de lancer une 2nde édition du Challenge ENAC Alumni Avico en 2015. L’objectif commun d’ENAC Alumni et d’Avico est de récompenser les meilleurs projets innovants chaque année, de devenir un véritable laboratoire d’idées connu et reconnu.</p>

                <p align="justify">Nous souhaitons faire émerger des idées novatrices dans le domaine de l’aéronautique et stimuler la fibre entrepreneuriale chez les jeunes, moins jeunes, expérimentés ou néophytes qui se lanceraient dans l’aventure du Challenge.</p>

                <p align="justify">Le Challenge ENAC Alumni Avico est ouvert à tous à partir de 18 ans, sans distinction de formation, de parcours, ou de nationalité. Les Challengers peuvent se présenter seuls ou par équipe. Le jury aura à cœur de sélectionner et promouvoir le meilleur projet, les dossiers présentés par des anciens élèves de l’ENAC ne feront l’objet d’aucune préférence.</p>

                <p>Les Challengers seront également invités à participer au « coup de cœur du web », un concours dans le concours qui permet d’exposer son projet au grand public et de bénéficier du support d’une plateforme de crowdfunding.</p>
                <div class="button">
                    <a href="#" class="btn-medium">Je participe</a>
                </div>
                <br />
            </div>

        </section>
         <div id="jury"></div>
        <section class="bg-avion"> <!--============== Section Jury ================-->
            <div class="container jumbotron">
                <br/>
                <h1>Le Jury</h1>
                <br/>
                <p>Le Jury du Challenge ENAC Alumni - Avico est composé de professionnels de l'aéronautique et de la finance et des organisateurs, des personnalités sensibles à l'innovation, à la créativité et surtout au courage et à la ténacité dont il faut faire preuve pour monter son projet entrepreneurial.</p>
                <p>Tout au long du Challenge, ils auront à coeur de séléctionner les idées et les business plans pour faire émerger le meilleur d'entre eux. Sur la base de critères objectifs, le Jury désignera le projet qui l'aura séduit tant par son audace que sa faisabilité.</p>
                <div class="row">
                  	<div class="col-xs-10 col-md-2"></div>
                  	<div class="col-xs-10 col-md-2 photo1">
                  		<img src="img/patrickbaudis.jpg" alt="jury1" class="shadow ">
                  		<div class="tem2">
                  			<p>cet homme est content</p>
                  		</div>
                  		<div class="arrow-left"></div>
                  	</div>
                    <div class="col-xs-10 col-md-2 photo2">
                    	<img src="img/patrickbaudis.jpg" alt="jury1" class="shadow ">
                    	<div class="tem1">
                    		<p>cet homme est heureux</p>
                    	</div>
                    	<div class="arrow-right"></div>
                    </div>
                    <div class="col-xs-10 col-md-2 photo3">
                    	<img src="img/patrickbaudis.jpg" alt="jury1" class="shadow ">
                    	<div class="tem4"></div>
                    	<div class="arrow-left"></div>
                    </div>
                  	<div class="col-xs-10 col-md-2 photo4">
                  		<img src="img/patrickbaudis.jpg" alt="jury1" class="shadow">
                  		<div class="tem3"></div>
                  		<div class="arrow-right"></div>
                  	</div>
                </div>
                <br />
            </div>
        </section>
        <section class="videobg">
        	<video autoplay loop id="bgvid">
            	<source src="video/airplanewingcloudysky2.mp4" type="video/mp4">
            	<source src ="video/airplanewingcloudysky.avi" type="video/avi">
            </video>
        </section>
        <div id="tuteur"></div>
        <section class="bg-avion"> <!--============== Section Tuteur ================-->
            <div class="container jumbotron">
                <br/>
                <h1>Les Tuteurs</h1>
                <br/>
                <p>Les Challengers pourront s’appuyer sur les conseils des tuteurs du Challenge pour préparer leur Business Plan et nouer de nouveaux contacts professionnels.</p>
                <p>Une cinquantaine de tuteurs, issus d’entreprises de transport aérien, de l’industrie aéronautique, du monde financier, des services officiels, membres de l’Enac Alumni Executive Club, du Club Entrepreneur, apporteront leur appui aux Challengers pendant la durée du concours.</p>
                <p>Les tuteurs ne sont pas membres du jury et l’accompagnement des Challengers n’est pas obligatoire. </p>
                <br/>
            </div>
        </section>
    </div>
</div>
<!-- #main -->
<!--pop up contact -->
        <div class="row popup">
            <div class="col-md-2 bordures"></div>
            <div class="col-md-8 contactpop">
               	<div class="row">
                    <div class="col-md-4 formulaire1">
                        <h2 class="txtcontact">contact</h2>
                        <br/>
                        <p class="txtcontact">ici le texte du contact</p>
                        <p class="txtcontact">adresse</p>
                        <p class="txtcontact">autres coordonnées</p>
                    </div>
                    
                    <div class="col-md-8 formulaire2">
                        <button class="btn boutonfermer"><i class="fa fa-times"></i></button>
                        <form method="post" action="./contact.php">
                            <input name="name" type="text" id="name" class="inputform" value="votre nom"></input>
                            <br/>
                            <input name="email" type="text" id="email" class="inputform" value="Email"></input>
                            <br/>
                            <textarea name="commentaire" id="commentaire">Message</textarea>
                            <br/>
                            <input name="bouton" type="submit" id="btncontact" class="inputform btn" value="Envoyez votre message"></input>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 bordures"></div>
        </div>
    <div id="ancrecontact"></div>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer><!-- /footer -->



</div><!-- /#wrapper -->

<script type="text/javascript" src="js/ancres.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
<script type="text/javascript" src="./js/jury_text.js"></script>
</body>
</html>
