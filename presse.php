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
<script src="js/jquery-1.12.2.js"></script>
<script src="js/classie.js"></script>
<!-- Script pour rétrécir le header -->
</head>
<body>

<div id="wrapper">

<header>
    <?php
        include 'header2.php';
    ?>
</header><!-- /header -->
	<div class="azerty"></div>
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
<footer>
    <?php
        include 'footer.php';
    ?>
</footer><!-- /footer -->



</div><!-- /#wrapper -->

<script type="text/javascript" src="js/ancres.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>