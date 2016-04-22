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
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras luctus urna quis enim dictum varius. Curabitur nec volutpat magna. Cras ultricies dui ut condimentum accumsan. Proin et mi sit amet massa bibendum blandit vitae at augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris sodales orci tellus, vel luctus dolor consequat commodo. Fusce blandit accumsan nulla, vel consectetur eros condimentum sit amet. Sed nec euismod dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus consequat sodales augue ac pellentesque. Mauris luctus velit id mi facilisis, sed auctor enim vehicula. Donec mollis mi at augue vulputate feugiat. Cras faucibus turpis ante, a ornare velit scelerisque eget. Donec eget nibh eu purus finibus rutrum eget a tellus. Sed ultrices mi ac est elementum, at pretium purus hendrerit. Integer et maximus magna.
Suspendisse ornare, diam et commodo rhoncus, elit massa commodo ipsum, ac aliquam justo tortor a est. Suspendisse at nisi pulvinar, gravida arcu non, egestas mi. Maecenas nec dui et ante feugiat porttitor et et risus. Proin eu mattis arcu. Donec viverra, dui ac auctor posuere, dui tellus bibendum purus, sit amet bibendum massa massa ac nunc. Morbi vehicula urna sit amet consectetur vestibulum. Nulla vestibulum nec velit sed placerat. Mauris blandit ante sollicitudin, pulvinar justo ac, vulputate tortor. Nullam semper nunc non nunc aliquam, quis interdum lacus dignissim. Donec ullamcorper mauris leo, eu condimentum nunc blandit sed. Duis sodales, nulla eu dignissim luctus, odio tellus faucibus nulla, eu aliquet odio erat quis velit. Aliquam sed ante at tellus suscipit malesuada. Duis rutrum dui a porttitor aliquam. Mauris tempus ligula leo, eget vulputate dolor pharetra nec. Nulla hendrerit, erat consequat lacinia molestie, ante enim fringilla elit, non lacinia ipsum risus eget metus. Proin posuere blandit lectus vel interdum.
Donec dolor lacus, imperdiet nec mauris ac, vestibulum congue arcu. Fusce hendrerit eros massa, vel blandit est hendrerit in. Maecenas malesuada tellus facilisis convallis tempus. Morbi et congue tellus. Nulla facilisi. Proin felis libero, aliquam quis imperdiet non, semper nec erat. Nulla auctor, orci quis tempor suscipit, arcu nibh ultricies tortor, at ultricies sapien nunc nec ex. Ut aliquet vehicula massa a lobortis. Aenean fringilla tempus nibh, ut venenatis velit facilisis et. Donec iaculis nunc sed massa fringilla, in pellentesque mauris tristique.
Nam mollis blandit lacus, quis porttitor nibh efficitur sit amet. Duis in leo vel ante aliquet fringilla eget vitae turpis. Ut malesuada placerat egestas. Proin tincidunt scelerisque urna sit amet tristique. Nunc vitae vehicula dolor, non faucibus nibh. Praesent nec iaculis elit, et porta libero. Duis porttitor sem et urna tempus, eget vulputate dui sollicitudin. Mauris fringilla nisl turpis, eget suscipit leo tristique at. Maecenas magna magna, dapibus quis interdum et, commodo tempus felis. Phasellus eros tellus, fermentum in tempus sit amet, consectetur in tellus. Donec pulvinar tortor a leo lacinia fringilla.
Morbi ut justo at nisl pellentesque tincidunt. Aenean vel sem interdum, elementum mi in, placerat ex. Nullam consectetur magna turpis, a iaculis quam sollicitudin quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur accumsan augue vel vulputate pharetra. Praesent et arcu id lectus cursus ornare. Morbi id dolor vitae sem euismod accumsan rutrum ac nisl. Proin dignissim vehicula lorem, vitae malesuada elit ultrices a.
Donec pharetra quam efficitur pulvinar feugiat. Integer at pellentesque tortor, nec pulvinar massa. Aenean tristique luctus velit, et dignissim sem ornare non. Nunc pharetra et tortor at semper. Donec ac purus in nibh elementum ullamcorper. Aliquam sollicitudin rutrum odio, eu sollicitudin lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vitae justo cursus lectus viverra interdum ut sit amet diam. Aenean et dui ullamcorper, varius leo at, ultricies tellus. Sed a lorem ut mauris venenatis placerat id at leo. Nam aliquet diam enim, vitae aliquet eros malesuada sit amet. Pellentesque placerat, est ut molestie aliquet, nulla nunc volutpat ex, vel aliquet turpis neque a arcu.
Donec porttitor erat in dui varius lacinia. Vivamus non volutpat nulla. Phasellus efficitur ultricies metus. Nullam pulvinar dictum leo non consectetur. Maecenas eu finibus leo. Phasellus et mattis erat. Morbi nec neque sit amet sem semper finibus. Integer ut tellus vel ante placerat fermentum id et elit. Etiam lobortis diam a dolor scelerisque, eu posuere purus tempor. Nam posuere facilisis rutrum. Morbi at dignissim sem, a iaculis tortor. Nullam ac pulvinar urna. Integer consequat tempus tellus eget rhoncus. Proin sed faucibus lectus, nec iaculis dui. Vivamus id lacinia mi, euismod pharetra nisl. Vivamus eget venenatis libero, ut feugiat ipsum.
Cras et turpis iaculis, viverra massa eget, eleifend libero. Curabitur accumsan maximus orci, ut porttitor neque convallis sit amet. Cras a dignissim elit. Sed a dignissim erat. Sed id nulla ex. Vivamus ut placerat libero. Nam fermentum leo et felis faucibus aliquet. Nulla feugiat volutpat orci, sed rhoncus purus mollis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
        </div>
    </div>
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