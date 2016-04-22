<!DOCTYPE html>
<html lang="fr">

<head>
<!-- title and meta -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="" />
<title>ENAC</title>

<!-- css -->
<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
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

<div id="wrapper">

<header>
    <?php
        include 'header.php';
    ?>
</header><!-- /header -->
<div class="fontfaq">
    <div class="margefaq"></div>
	<div class="azerty ">
        <div class="faq container jumbotron">
            <h1 class="faque"> FAQ </h1>
            <p class="question">Je n’ai pas bien compris le principe de l’inscription : je dois envoyer un Business Plan tout de suite ?<p>
            <p class="reponse">Non, cela intervient seulement dans un second temps. L’étape 1 consiste à remplir le formulaire d’inscription téléchargeable sur le site internet du concours, et à le renvoyer avant le 31 Octobre 2015 aux organisateurs du Challenge.
Il contient des informations synthétiques sur votre équipe et votre projet. Le comité de présélection vous répond sous 15 jours pour vous signifier l’acceptation, le rejet, ou une demande d’information supplémentaire au sujet de votre candidature.
Les équipes qui passent cette étape 1 sont éligibles à l’étape 2, qui consiste à remettre un Business Plan au Jury avant le 14 Décembre 2015.
L’étape 3 consiste en une épreuve de soutenances orales, le jour de la cérémonie de remise des prix - le 6 Février 2016 à Paris.</p>

            <p class="question">Si j’ai bien compris, je peux donc attendre le 31 Octobre 2015 pour m’inscrire ?</p>
            <p class="reponse">En pratique, oui ! Mais le plus tôt vous candidatez, et le plus tôt vous êtes fixés sur l’acceptation ou non de votre projet par le comité de présélection, et le plus de temps vous avez pour travailler sur votre Business Plan et pour maturer votre projet.
Par ailleurs, le nombre de tuteurs étant limité et l’attribution des tuteurs se faisant par ordre chronologique d’inscription, les premières équipes inscrites se verront attribuer les tuteurs en priorité!</p>

            <p class="question">Je n’ai pas fait l’ENAC, puis-je participer ?<p>
            <p class="reponse">Bien entendu ! Le concours est ouvert à tous ! Quel que soit l’horizon, le diplôme ou l’âge des candidats. La seule contrainte est qu’il faut que les candidats soient majeurs à la date de la cérémonie de remise des prix - le 6 Février 2016.</p>

            <p class="question">J’ai bien une idée mais je ne suis pas sûr(e) qu’elle soit du niveau du Challenge...</p>
            <p class="reponse">Comme dit l’adage, «100% de ceux qui réussissent ont essayé» ! Tout l’intérêt du Challenge est de travailler votre idée, de la challenger, de l’améliorer, de pousser votre concept plus loin...
Et vous pouvez demander l’attribution d’un tuteur pour vous aider dans cette démarche. Les plus grandes success stories partent souvent d’une idée simple, mais menée avec force et conviction jusqu’au bout !
Un seul mot d’ordre : osez !</p>

            <p class="question">J’ai une idée mais je ne suis pas sûr(e) qu’elle rentre vraiment dans le cadre de «l’aéronautique» aux yeux du Jury</p>
            <p class="reponse">Pour le savoir rien de plus simple ! Inscrivez-vous ! Le comité de présélection vous répond sur l’acceptation de votre candidature sous 15 jours.</p>

            <p class="question">Je voudrais participer, mais j’ai peur que l’on me vole mon idée</p>
            <p class="reponse">Au sein du formulaire d’inscription, et ainsi que cela est explicité dans le Règlement, certaines informations sont publiques, c’est à dire qu’elles peuvent être reprises par les organisateurs du concours dans leurs communications extérieures, et d’autres sont strictement confidentielles. Dans ce cas, elles ne seront diffusées qu’auprès du Jury qui a une stricte obligation de confidentialité. Ainsi, il n’y aucun risque : votre business plan est protégé et vous êtes complètement maître de ce qui est public et de ce qui ne l’est pas.
Ce qu’il faut savoir de manière générale, c’est que si vous ne souhaitez pas communiquer votre idée même en quelques lignes de synthèse, alors il est peut-être préférable de ne pas participer au concours!</p>

            <p class="question">J’ai une idée qui nécessiterait une équipe avec des compétences diversifiées que je n’ai pas, et je n’ai pas encore d’associé(s)...</p>
            <p class="reponse">Rien ne vous empêche de candidater, en le précisant et en parlant pourquoi pas à votre tuteur, et essayer de trouver du renfort jusqu’à la fin du concours. Bien que la composition de l’équipe intervienne dans l’évaluation globale du projet faite par le Jury, une bonne idée qui nécessiterait d’élargir l’équipe ne sera pas ignorée par le Jury. Qui sait, le Challenge sera peut-être l’occasion de donner de la visibilité à votre projet et de trouver votre associé ?</p>

            <p class="question">Je représente une société et nous avons un nouveau projet de développement : pouvons-nous participer au Challenge avec ce projet ?</p>
            <p class="reponse">Si l’objectif principal du Challenge soit de stimuler l’esprit entrepreneurial chez les Challengers, en tant qu’individus, il est aussi de faire émerger l’innovation. A ce titre, il a été décidé de ne pas fermer la compétition aux sociétés qui souhaiteraient développer un nouveau projet, à la condition que cela reste dans l’esprit entrepreneurial du Challenge. Cela signifie que le projet doit être innovant et/ou sorte du cadre habituel d’intervention de l’entreprise. C’est le comité de présélection qui déterminera si cela est le cas, au moment d’accepter ou non la candidature.</p>
        </div>
    </div>
        <div class="row popup">
            <div class="col-md-2 bordures"></div>
            <div class="col-md-8 contactpop">
                <a href="#1"><div class="boutonfermer">Fermer X</div></a>
                <div class="col-md-4 formulaire1">
                    <h2 class="txtcontact">contact</h2>
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
                        <input name="bouton" type="submit" id="btncontact" class="inputform" value="Envoyez votre message"></input>
                        <br/>
                    </form>
                </div>
            </div>
        <div class="col-md-2 bordures"></div>
        </div>
        <div id="ancrecontact"></div>
           <div class="modal fade ongletcontact" id="mycontact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel"> Formulaire de contact</h4>
                         </div>
                         <div class="modal-body row">
                         <!-- Do not change the code! -->
                         <a id="foxyform_embed_link_169327" href="http://fr.foxyform.com/">foxyform</a>
                         <!-- Do not change the code! -->
                         </div>
                         <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                         </div>
                    </div>
                </div>
            </div>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer><!-- /footer -->
</div>



</div><!-- /#wrapper -->


<script type="text/javascript" src="./js/script.js"></script>
<script type="text/javascript">
$(document).ready(function(d, t){
   var g = d.createElement(t),
       s = d.getElementsByTagName(t)[0];
   g.src = "http://fr.foxyform.com/js.php?id=169327&sec_hash=f806675ca2a&width=500px";
   s.parentNode.insertBefore(g, s);
}(document, "script"));
</script> <!-- Script du formulaire de contact -->
</body>
</html>