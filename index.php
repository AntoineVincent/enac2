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
<link href='https://fonts.googleapis.com/css?family=Roboto:100|Roboto:700' rel='stylesheet' type='text/css'>
<link href="./BebasNeue_Regular.ttf" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/csshake.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />


<!-- js -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/jquery-1.12.2.js"></script>
<script src="js/bootstrap.min.js"></script>
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
<div class="container-fluid">
<div id="wrapper">

<header>
    <?php
        include 'header.php';
    ?>
</header><!-- /header -->




    <div id="content">
      <div class="img-partenaires">
        <div class="row">
            <div class="col-md-6 col-xs-12 titre_slogan">
                <p class="ptitre">CHALLENGE ENAC ALLUMNI AVICO</p>
                <p class="pslogan"> Faites décoller vos idées novatrices</p>
            </div>
        </div>
            <div class="fondgris">
                <video autoplay loop id="bgvid">
                                    <source src="video/airplanewingcloudysky2.mp4" type="video/mp4">
                    <source src ="video/airplanewingcloudysky.avi" type="video/avi">
                </video>

            </div>
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
     

        <!--==============section actus et participer========-->
        <div id="actus"></div>
        <section class="bg-avion">
        <div class="jumbotron ctnActuPart">
        	<div class="row">
	        	<div class="container2 actus col-md-6">
	        		<br/>
	        		<h1>Actualités</h1>
	        		<ul>
	        			<li> actu 1 vvufzufyzvfuyvzfuy...<a> lire la suite</a></li>
	        			<li> actu 2 fvzyvfyevfeuyv...<a> lire la suite</a></li>
	        			<li> actu 3 dvdyudvzayvdzdzdd...<a> lire la suite</a></li>
	        			<li> actu 4 zdzdavuvzydvauydv...<a> lire la suite</a></li>
	        		</ul>
	        		<br/>
	        	</div>
	        	<div class="container2 dates col-md-6">
	        		<br/>
	        			<h1>Dates</h1>
	        		<br/>
	        	</div>
	        	<div class="row">
	        		<div class="col-md-12 participer">
	        		<h1>Participer</h1>
	        		<p>ICI ON A PLEIN DE CONTENU DE OUF A METTRE</p>
	        		</div>	
	        	</div>
	        </div>
        </div>
        </section>

    <div id="jury"></div>
        <section class="bg-avion"> <!--============== Section Jury ================-->
        	<div class="row">
	            <div class="container2 contain-gauche jumbotron col-md-6">
	                <br/>
	                <h1>Le Jury</h1>
	                <br/>
	                <p align="justify">Le Jury du Challenge ENAC Alumni - Avico est composé de professionnels de l'aéronautique et de la finance et des organisateurs, des personnalités sensibles à l'innovation, à la créativité et surtout au courage et à la ténacité dont il faut faire preuve pour monter son projet entrepreneurial.</p>
	                <p align="justify">Tout au long du Challenge, ils auront à coeur de séléctionner les idées et les business plans pour faire émerger le meilleur d'entre eux. Sur la base de critères objectifs, le Jury désignera le projet qui l'aura séduit tant par son audace que sa faisabilité.</p>

	                <br />
	            </div>
	             <div class="container2 contain-droite jumbotron col-md-6">
	                <br/>
	                <h1>Les Tuteurs</h1>
	                <br/>
	                <p>Les Challengers pourront s’appuyer sur les conseils des tuteurs du Challenge pour préparer leur Business Plan et nouer de nouveaux contacts professionnels.</p>
	                <p>Une cinquantaine de tuteurs, issus d’entreprises de transport aérien, de l’industrie aéronautique, du monde financier, des services officiels, membres de l’Enac Alumni Executive Club, du Club Entrepreneur, apporteront leur appui aux Challengers pendant la durée du concours.</p>
	                <p>Les tuteurs ne sont pas membres du jury et l’accompagnement des Challengers n’est pas obligatoire. </p>
	                <br/>
            	</div>
        	</div>
        </section>
        <section class="bg-avion">
        	<div class="row ctnImg">
        		<div class="col-md-3 col-xs-6 imgjury" id="image1"><img src="img/patrickbaudis.jpg" alt="jury1" class="shadow img-responsive">
        			<div class="text-jury" id="text2"><p>le mec a gauche dit la vérité</p></div>
                    <div class="arrow-left arrow1"></div>
				</div>
        		<div class="col-md-3 col-xs-6 imgjury" id="image2"><img src="img/patrickbaudis.jpg" alt="jury1" class="shadow img-responsive">
        			<div class="text-jury" id="text1">le mec à droite est un génie</div>
                    <div class="arrow-right arrow2"></div>
        		</div>
        		<div class="col-md-3 col-xs-6 imgjury" id="image3"><img src="img/patrickbaudis.jpg" alt="jury1" class="shadow img-responsive">
        			<div class="text-jury" id="text4">je crois pas franchement</div>
                    <div class="arrow-left arrow3"></div>
        		</div>
        		<div class="col-md-3 col-xs-6 imgjury" id="image4"><img src="img/patrickbaudis.jpg" alt="jury1" class="shadow img-responsive">
        			<div class="text-jury" id="text3"><p>on peut pas etre serieux ici?</p></div>
                    <div class="arrow-right arrow4"></div>
        		</div>
        	</div>
        	<div class="row ctnImg">
        		<div class="col-md-3 col-xs-6 imgjury" id="image5"><img src="img/patrickbaudis.jpg" alt="jury1" class="shadow img-responsive">
                    <div class="text-jury" id="text6">c'est beau le rouge</div>
                    <div class="arrow-left arrow5"></div>
                </div>
        		<div class="col-md-3 col-xs-6 imgjury" id="image6"><img src="img/patrickbaudis.jpg" alt="jury1" class="shadow img-responsive">
                    <div class="text-jury" id="text5">le vert c'est mieux</div>
                    <div class="arrow-right arrow6"></div>
                </div>
        		<div class="col-md-3 col-xs-6 imgjury" id="image7"><img src="img/patrickbaudis.jpg" alt="jury1" class="shadow img-responsive">
                    <div class="text-jury" id="text8">BLUE FOREVER !!</div>
                    <div class="arrow-left arrow7"></div>
                </div>
        		<div  class="col-md-3 col-xs-6 imgjury" id="image8"><img src="img/patrickbaudis.jpg" alt="jury1" class="shadow img-responsive">
                    <div class="text-jury" id="text7">jaune c'est moche par contre</div>
                    <div class="arrow-right arrow8"></div>
                </div>
        	</div>
        </section>

        <div id="partenaires"></div>
        <section class="bg-avion2"> <!--============== Section Partenaires ================-->
            <div class="fond-couleur"> 
                <h1 class="titre-centre">Nos partenaires</h1>
                <div class="partenaires">
                    <div class="partenaire1"><img src="img/partenaires/aerobuzz.png" alt="logo partenaire" class="img-responsive"></div>
                    <div class="partenaires2"><img src="img/partenaires/aerostar.png" alt="logo partenaire" class="img-responsive"></div>
                    <div class="partenaires3"><img src="img/partenaires/aigleazur.png" alt="logo partenaire" class="img-responsive"></div>
                    <div class="partenaires4"><img src="img/partenaires/aircosmos.png" alt="logo partenaire" class="img-responsive"></div>
                    <div class="partenaires5"><img src="img/partenaires/avico.png" alt="logo partenaire" class="img-responsive"></div>
                </div>
                <div class="partenaires">
                    <div class="partenaire1"><img src="img/partenaires/easa.png" alt="logo partenaire" class="img-responsive"></div>
                    <div class="partenaires2"><img src="img/partenaires/fnam.png" alt="logo partenaire" class="img-responsive"></div>
                    <div class="partenaires3"><img src="img/partenaires/gofast.png" alt="logo partenaire" class="img-responsive"></div>
                    <div class="partenaires4"><img src="img/partenaires/kisskissbankbank.png" alt="logo partenaire" class="img-responsive"></div>
                    <div class="partenaires5"><img src="img/partenaires/vueling.png" alt="logo partenaire" class="img-responsive"></div>
                </div>
            </div>
        </section>
    </div>

<!-- #main -->
<!--pop up contact -->
  
<!-- Modal -->
    <div class="modal fade" id="mycontact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"> Formulaire de contact</h4>
          </div>
          <div class="modal-body row">
             <div class="col-md-4 formulaire1">
                    <br/>
                    <p class="txtcontact">ici le texte du contact</p>
                    <p class="txtcontact">adresse</p>
                    <p class="txtcontact">autres coordonnées</p>
                </div>

                <div class="col-md-8 formulaire2">
                    <form method="post" action="./contact.php">
                        <input name="name" type="text" id="name" class="inputform" value="votre nom"></input>
                        <br/>
                        <input name="email" type="text" id="email" class="inputform" value="Email"></input>
                        <br/>
                        <textarea name="commentaire" id="commentaire">Message</textarea>
                        <br/>
                    </form>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-primary btnfermer">Envoyer Message</button>
          </div>
        </div>
      </div>
  </div>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer><!-- /footer -->



</div><!-- /#wrapper -->
</div>

<script type="text/javascript" src="js/ancres.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
<script type="text/javascript" src="./js/jury_text.js"></script>
<script type="text/javascript" src="./js/test.js"></script>
</body>
</html>
