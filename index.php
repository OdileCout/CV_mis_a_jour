<?php
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Voici mon CV en ligne qui reprend mes compétences, mon parcours, mon profil.">
	<meta name="keywords" content="Résumé, CV, Portfolio">
	<meta name="author" content="Odile COUTIEZ">
  <title>CV Numerique</title>
  <script src="https://kit.fontawesome.com/2ab4ff7d1a.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Pinyon+Script|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="screen.css">
</head>
<body>
  <div class="" style="height: 5px;"> 
  </div>
	<header class="header">
    <div class="reveal-1 navigation-list">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="index.php">CV Numerique</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a id="linkActive" class="active-nav nav-item nav-link mr-2 ml-2" href="#A-propos-de-moi">A propos de Moi</a>
                    </li>
                    <li class="nav-item">
                      <a id="linkActive" class="nav-item nav-link mr-2 ml-2" href="#formation">Formation</a>
                    </li> 
                    <li>
                     	<a id="linkActive" class="nav-item nav-link mr-2 ml-2" href="#competences">Competences</a>
                    </li>
                    <li class="nav-item">
                      <a id="linkActive" class="nav-item nav-link mr-2 ml-2" href="#Experiences">Experiences</a>
                    </li>
                    <li class="nav-item">
                      <a id="linkActive" class="nav-item nav-link mr-2 ml-2" href="#projets">Projets</a>
                    </li>
                    <li class="nav-item">
                      <a id="linkActive" class="menu-button nav-item nav-link mr-2 ml-2" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
  	<div class=" baseline reveal">
    	<strong class=" baseline-name reveal-2">ODILE COUTIEZ</strong>
    	<span class=" baseline-slogan reveal-3">Développeuse Web et Web Mobile Junior</span>
  	</div>
</header>	
<section class="home-section section" id="A-propos-de-moi">
  <div class="home-header">
    <div class=" mb-5 reveal" id="profile-contact">
      <div class="row container social-networks">                      
          <div class="col-md-4 bounceInLeft reveal-1">
            <div class="social-icons row">
              <div class="profile-item linkedin">
                <h5>Linkedin</h5>
                <a href="https://www.linkedin.com/in/odile-coutiez-b80bb9165/"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>                
          <div class="col-md-4 bounceInUp reveal-1">
            <div class="social-icons row">
              <div class="profile-item github">
                <h5>Github</h5>
                <a href="https://github.com/OdileCout"><i class="fa fa-github"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 bounceInRight reveal-1">
            <div class="social-icons row">
              <div class="profile-item viadeo">
                <h5>Viadeo</h5>
                <a href="https://viadeo.journaldunet.com/p/odile-coutiez-5307838"><i class="fa fa-viadeo"></i></a>
              </div>
            </div>
          </div>
      </div><!-- .row -->
    </div><!-- .container -->
  </div>
  <div class="container">
    <div class="row block block-left reveal" id="presentation">
    	<div class="col-md-6 presentation-image">
    		<div class="block-img reveal-1 myphoto">
        		<img src="img/moi.JPG" alt="">
      		</div>
    		<ul class="reveal-2">
    			<hr>
				<li class="reveal-1"><strong>Nom :</strong> COUTIEZ Odile</li>
				<hr>
				<li class="reveal-1"><strong>Date de naissance :</strong> 30 Janv 1985</li>
				<hr>
				<li class="reveal-1"><strong>Adresse :</strong> Compiègne, France</li>
				<hr>
				<li class="reveal-1"><strong>Téléphone :</strong> (+33) 6 34 28 57 55</li>
				<hr>
				<li class="reveal-1"><strong>Email :</strong> odiletot@gmail.com</li>
				<hr>
			</ul>
    	</div>     
      	<div class="col-md-6 block-body">
        <h2 class="title reveal-2"><span>Présentation</span></h2>
        <p class=" reveal-3 pt-3">
        <span>En pleine reconversion, je me suis lancée dans la programmation. J'ai eu mon diplôme du titre professionnel Développeur web et web mobile RNCP 31114  Bac+2, niveau 5 de la nomenclature européenne, le mois de juillet 2020.</span></p>
		<p class="reveal-3 pt-3">Encore soif d'apprendre, <strong class="présentation-text">je suis à la recherche d'un contrat de professionnalisation en alternance d'un an pour le diplôme de<i> << Concepteur Développeur d'Applications >></i></strong> au campus de La Manu de Noyon.
		Sérieuse, je m'adapte rapidement. 
		Je suis disponible immédiatement.
        </p>
        <div class="download-button reveal-3 pt-3">
			<a class="btn mr-2" id="menu-button" href="#contact"><i class="fa fa-paper-plane mr-2"></i>Envoyez-moi un message</a>
			<a class="btn" id="menu-button" href="pdf/Cv Coutiez Odile.pdf" download="CV Odile COUTIEZ"><i class="fa fa-download mr-2"></i>Télécharger mon CV</a>
		</div>
      	</div>    	
    </div>
</div>

<div class="row paralax-page reveal container-fluid m-0">
	<div class="container paralax-page-box reveal">
		<div class="col-md-6 paralax-page-icon reveal-1">
			<h6 class="mb-3">Hobbies</h6>
			<i class="fas fa-code mb-3 "></i>
			<i class="fas fa-biking mb-3"></i>
		</div>
		<div class="col-md-6 paralax-page-icon reveal-1">
			<h6 class="mb-3 reveal">Langues</h6>
			<p><i class="fa fa-sign-language mb-3 mr-3"></i>Français <i class="fas fa-check-circle ml-3"></i></p>
      <p><i class="fa fa-sign-language mb-3 mr-3"></i>Malagache <i class="fas fa-check-circle ml-3"></i></p>
		</div>
	</div>
</div>
<div class="container-small" id="formation">
    <div class="block block-centered block-last reveal" id="Formation">
      <div class="block-body">
        <h2 class="title reveal-1 mt-5"><span>Formation</span></h2>
        <p class="reveal-2">
          J'ai commencé par appendre en autodidacte. Ensuite j'ai confirmé mon choix et mon envie d'avancé par une formation <strong><i>intensive</i></strong> avec des exercices et des mis en situation pendant six mois. Et puis actuellement encore soit d'apprendre, j'aimerai que cette formation se rajoute.
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="training-summary" id="training">
      <div class="training-summary-item reveal">
        <img src="img/index.PNG" alt="" class="training-summary-img reveal-1">
        <h3 class="training-summary-title reveal-2">Développeur web et web mobile</h3>
        <p class="reveal-3">23 Septembre 2019 au 15 Mars 2020</p>
        <p class="reveal-3">A la Manu du Noyon </p>
      </div>
      <div class="training-summary-item reveal">
        <img src="img/batim.JPG" alt="" class="training-summary-img reveal-1">
        	<h3 class="training-summary-title reveal-2"> Bac+2 en Études Des Bâtiment</h3>
        	<p class="reveal-3">Septembre 2005 au Août 2008 </p>
          <p class="reveal-3">École Polytechnique E-TEC, Tananarive, Madagascar</p>
      </div>
      <div class="training-summary-item reveal">
        <img src="img/projecCalcul.JPG" alt="" class="training-summary-img reveal-1">
        <h3 class="training-summary-title reveal-2">Bac - Projeteur Calculateur</h3>
        <p class="reveal-3">Septembre 2000 au Juillet 2004  </p>
        <p class="reveal-3">Lycée Techniquede Mahajanga, Madagascar </p>
      </div>  
    </div>
  </div>
</section>
<section class="reservation" id="competences">
  <div class="container">
    <div class="block block-centered block-last reveal">
      <div class="block-body">
        <h2 class="title reveal-1"><span>Compétences</span></h2>
        <p class="reveal-2">
          Mes compétences téchniques. Et les outils de travail que j'ai déjà utilisé.Mes compétences téchniques. Et les outils de travail que j'ai déjà utilisé.
        </p>
      </div>
      <div class="divNetworks">
          <ul class="tabs">
            <li class="title-Languages active ">
              <a href="#languages-bocks">PROGRAMATION</a>
            </li>
            <li class="title-Languages">
              <a href="#networks">ENVIRONNEMENTS DE TRAVAIL</a>
            </li>
          </ul> 
      <div class="row skills lang reveal-3">
        <div class=" col-md-12 languages active reveal-loaded reveal-4" id="languages-bocks">
          <ul class="list">
            <li>
              <i class="fab fa-html5 fa-3x"></i>HTML5
              <i class="fas fa-star one fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
            </li>
            <li class="mb-3">
              <i class="fab fa-css3 fa-3x"></i>CSS3 
              <i class="fas fa-star one fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
            </li>
            <hr>
            <li>
              <i class="fab fa-bootstrap fa-3x"></i> BOOTSTRAP
              <i class="fas fa-star one fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
            </li>
            <li class="mb-3">
              <i class="fab fa-jquery fa-3x"></i>JQUERY
              <i class="fas fa-star one fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
            </li>
            <hr>
            <li>
              <i class="fab fa-js fa-3x"></i>JAVASCRIPT
              <i class="fas fa-star one fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
            </li>
            <li>
              <i class="fab fa-php fa-3x"></i>PHP/MYSQL
              <i class="fas fa-star one fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
            </li>
            <li>
              <i class="fab fa-wordpress fa-3x"></i>WORDPRESS
              <i class="fas fa-star one fa-2x"></i>
              <i class="fas fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
              <i class="far fa-star fa-2x"></i>
            </li>
          </ul>
        </div>
      </div>
      <div class="row skills reveal-3">
        <div class="col-md-12 Workenvironment languages reveal-4" id="networks">
          <ul class="list net">
            <li><i class="fab fa-github fa-3x"></i>GITHUB</li>
            <hr>
            <li><i class="fab fa-linux fa-3x"></i>LINUX</li>
            <li><i class="fab fa-windows fa-3x"></i>WINDOWS</li>
            <hr>
            <li><i class="fas fa-netbeans fa-3x"></i>NETBEANS</li>
            <li><i class="fas fa-atom fa-3x"></i>ATOM</li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </div> 
</section>
<section class="recipes" id="Experiences">
  <div class="container reveal">
    <h2 class="title reveal-1">
      <span>Experiences Professionnels</span>      
    </h2>
    <p class="reveal-2">
      Sur le fait que je suis en réconversion, je n'ai pas encore des experiences en Développement web dans une entreprise. Mais cela ne m'a pas empêche de faire des petits projets personnels en cours de développement. <strong><a href="#projets">En savoir plus</a></strong> 
    </p>
    <div class="recipes-list">
      <div class="recipes-list-item reveal-3">
        <div class="recipes-date">
          <strong>Avril</strong>2017
        </div>
        <div class="ml-5">
          <p>
            <strong>Agente D'Accueil</strong> - Orpheo France , Paris, Sainte Chapelle
          </p>
         <i class="fas fa-plus visible-block button"></i>
          <ul class="works">
            <li>Accueil chaleureux des clients, réponses aux questionsd'ordre général, demande de la nature de la visite etindication du chemin vers le lieu d'exposition.</li>
            <li>Encaissement des paiements des clients pour l'audioguide.</li>
          </ul>
        </div> 
      </div>
      <div class="recipes-list-item reveal-3">
        <div class="recipes-date">
          <strong>Oct.</strong>  2016
            <strong>Janv.</strong> 2017
        </div>
        <div class="ml-5">
          <p>
          <strong> Agente D'Accueil</strong> - Espro AcoustiGuide , Paris, Grand Palais
          </p>
          <i class="fas fa-plus visible-block button"></i>
          <ul class="works">
            <li>Accueil chaleureux des clients, réponses aux questionsd'ordre général, demande de la nature de la visite etindication du chemin vers le lieu d'exposition</li>
            <li>Encaissement des paiements des clients pour l'audioguide</li>
            <li>Entretient du matériels, nettoyage et remise à niveau.</li>
          </ul>
        </div>
      </div>
      <div class="recipes-list-item reveal-3">
        <div class="recipes-date">
          <p><strong>Sept.</strong> 2013 </p>
          <p><strong> Déc.</strong> 2015</p>
        </div>
        <div class="ml-5">
          <p>
          <strong> Responsable immobiliers</strong> - Ministère des mines et depétrole, de Madagascar
        </p>
        <i class="fas fa-plus visible-block button"></i>
        <ul class="works">
          <li>A travaillé en collaboration directe avec le chef de serviceLogistique.</li>
          <li>Gestion d'une équipe de 10 employés.</li>
          <li>Supervision du travail.</li>
          <li>Élaboration des planning.</li>
          <li>Gestion des matériels de travail</li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
<div id="projets" class="map row" id="map">
  <div class="col-md-12 text-center mb-3">
    <h3 class="title reveal-1"><span>Mes projets</span></h3>
  </div>
  <div class="container row picturesProject">
    <div class="col-md-5">
      <div class="row imgProject">
        <div class="col-md-12">
          <a href="">
            <div>
              <p>Mon CV Numerique</p>
            </div>
            <div>
              <img src="img/cvCapture.PNG" alt="">
            </div>
          </a>
        </div>
      </div>
    </div> 
    <div class="col-md-5">
      <div class="row imgProject">
        <div class="col-md-12">
          <a href="">
            <div>
              <p>Site de l'association La JANNO France</p>
            </div>
            <div>
              <img src="img/projetCapture.PNG" alt="">
            </div>
          </a>
        </div>
    </div>   
  </div>
  <div class="mapVide" id="mapVide"></div>
</div>
</section>
<section>
 
  <div id="contact" class=" container contactPage mt-3">
<!--
      <div class="row formContact reveal">
          <div class="col-md-12 text-center mb-3">
              <h3 class="title reveal-1"><span>Me contacter</span></h3>
          </div>
          <div class="col-md-12 formulaireContact">
              <form action="" method="POST">
                  <div class="form-group reveal-3">
                      <label for="">Adresse email <span>*</span></label> 
                      <input type="email" class="form-control <?= (isset($_POST['email']) ? (!isset($formError['email']) ? 'is-valid' : 'is-invalid') : '') ?>" name="email" id="inputEmail1" aria-describedby="emailHelp" placeholder="mail@test.com">
                      <?php
                      // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                      if (isset($formError['email'])) {
                          ?>
                          <div class="alert-danger">
                              <p><?= $formError['email'] ?></p>
                          </div>
                      <?php } ?>
                  </div>
                  <div class="form-group reveal-3">
                      <label for="nameSocity">Nom de société <span>*</span></label>
                      <input type="text" class="form-control <?= (isset($_POST['nameSocity']) ? (!isset($formError['nameSocity']) ? 'is-valid' : 'is-invalid') : '') ?>" id="nameSocity" name="nameSocity" aria-describedby="nameSocity" placeholder="Ex : AGORA France">
                      <?php
                      // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                      if (isset($formError['nameSocity'])) {
                          ?>
                          <div class="alert-danger">
                              <p><?= $formError['nameSocity'] ?></p>
                          </div>
                      <?php } ?>
                  </div>
                  <div class="form-group reveal-3">
                      <label for="objectOfMess">Objet de message <span>*</span></label>
                      <input type="text" class="form-control <?= (isset($_POST['objectOfMess']) ? (!isset($formError['objectOfMess']) ? 'is-valid' : 'is-invalid') : '') ?>" id="objectOfMess" name="objectOfMess" aria-describedby="objectOfMess" placeholder="Réponse ">
                      <?php
                      // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                      if (isset($formError['objectOfMess'])) {
                          ?>
                          <div class="alert-danger">
                              <p><?= $formError['objectOfMess'] ?></p>
                          </div>
                      <?php } ?>
                  </div>
                  <div class="form-group reveal-3">
                      <label for="message">Votre message <span>*</span></label>
                      <textarea  class="form-control <?= (isset($_POST['message']) ? (!isset($formError['message']) ? 'is-valid' : 'is-invalid') : '') ?>" id="message" name="message" rows="3"></textarea>
                      <?php
                      // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                      if (isset($formError['message'])) {
                          ?>
                          <div class="alert-danger">
                              <p><?= $formError['message'] ?></p>
                          </div>
                      <?php } ?>
                  </div>
                  <div class="reveal-3">
                      <input type="submit" name="send" id="send"  class="button" value="Envoyer" />  
                  </div>
              </form>
          </div> 
           formulaire traiter avec Ajax 
          <div class="col-md-12 formulaireContact">
              <form action="" method="POST" id="sendMail">
                  <div class="form-group reveal-3">
                      <label for="emailAdress">Adresse email <span>*</span></label> 
                      <input type="email" class="form-control" name="emailAdress" id="emailAdress" aria-describedby="emailHelp" placeholder="mail@test.com">
                    </div>
                  <div class="form-group reveal-3">
                      <label for="socityName">Nom de société <span>*</span></label>
                      <input type="text" class="form-control" id="socityName" name="socityName" aria-describedby="socityName" placeholder="Ex : AGORA France">
                  </div>
                  <div class="form-group reveal-3">
                      <label for="objectMess">Objet de message <span>*</span></label>
                      <input type="text" class="form-control" id="objectMess" name="objectMess" aria-describedby="objectMess" placeholder="Votre texte ici ....">
                  </div>
                  <div class="form-group reveal-3">
                      <label for="bodyMessage">Votre message <span>*</span></label>
                      <textarea  class="form-control" id="bodyMessage" name="bodyMessage" rows="3"></textarea>
                  </div>
                  <div class="reveal-3">
                      <input type="submit" name="envoyer" id="envoyer"  class="button" value="Envoyer" /> 
                  </div>
              </form>
          </div>
      </div>  -->
    
      <div col-md-12>
        <div class="carte mt-5" > 
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d83086.08841395799!2d2.78481787823762!3d49.40057934753395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1608756780193!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      
      </div>
  </div>
</section>
<footer class="footer reveal" id="footer">
  <div class="container">
    <div class="footer-columns">
      <div class="footer-column reveal-1">
        <div class="footer-title">Odile Coutiez</div>
        <p><i class="fas fa-map-marker-alt mr-2"></i>
           Compiègne, France<br>
          <i class="fas fa-phone-alt mr-2"></i> +33 63 42 85 755<br>
          <i class="far fa-envelope mr-2"></i><a href="mailto:odiletot@gmail.com">odiletot@gmail.com</a>
        </p>
      </div>
      <div class="footer-column reveal-2">
        <div class="footer-title">Disponibilité</div>
        <p>Disponible immediatement</p>
      </div>
      <div class="footer-column reveal-3 networks">
        <a href="https://github.com/OdileCout"><div class="networks-icon"><i class="fab fa-github"></i></div></a>
        <a href="https://www.linkedin.com/in/odile-coutiez-b80bb9165/"><div class="networks-icon"><i class="fab fa-linkedin-in"></i></div></a>
        <a href="https://viadeo.journaldunet.com/p/odile-coutiez-5307838"><div class="networks-icon"><i class="fab fa-viadeo"></i></div></a>
      </div>
    </div>
    <div class="footer-credits reveal-4">
      <div><p>Copyright 2020</p></div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="ajax.js"></script>
<!--<script type="text/javascript" src="main.js"></script>-->
</body>
</html>
