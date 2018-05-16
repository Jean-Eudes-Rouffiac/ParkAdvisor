<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8">

		
   		 <title>Park Advisor</title>
    
    <!-- width:device-width permet de mettre la page aux dimensions de l'appareil l'ouvrant
    intial-scale:1.0 donne le zoom a l'ouverture de la page-->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<!--Auteurs -->
   		<meta name="author" content="Becuwe-Raison-Rouffiac-Vasanthan">
    
		<!--Fichier css associé -->
    		<link href="css/style.css" rel="stylesheet"> 
    
    <!--Font-->
    <style>
    body {font-family: "Playfair Display", Georgia, Serif;text-align: justify;}
    h1,h2,h3,h4,h5,h6 {font-family: "Playfair Display"; letter-spacing: 5px; text-align: center;}
    </style>
      
      
  </head>


  	<body>


		<!--HEADER-->
		<?php include("header.php"); ?>
		<!-- /HEADER ROW -->



    <!-- la page ==============================================-->

        <div class="page">

          <div class="titre">
            <h1>Hudson New York</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/NYhudson.jpg "> <img class="illustration" alt="" src="img/NYhudson.jpg" /></a>
      <p>Situé à 322 mètres de Central Park et de la station de métro Columbus Circle, l'hôtel de caractère Hudson New York, Central Park dispose d'un jardin
      intérieur avec des arbres et des murs de lierre. Lors de votre séjour, vous pourrez profiter de restaurants, de services de conciergerie et d'une salle
      de sport.</br>
	  Vous pourrez vous détendre en faisant une partie de billard, lire à la bibliothèque ou rester en contact avec votre famille et vos amis grâce aux
	  ordinateurs du centre d'affaires. Vous pourrez également bénéficier de soins de spa dans votre chambre.</br>
	  Sur place, les restaurants et les bars comprennent l'Umami Burger, le Private Park, le Sky Terrace, le Library Bar et l'Hudson Bar. Le Sky Terrace offre
	  une vue sur la ville et la rivière Hudson.</br>
	  Vous séjournerez à 1,2 km de Times Square et à 1,3 km du musée d'Art moderne. Si vous souhaitez profiter d'un concert lors de votre visite à New York,
	  vous trouverez le Lincoln Center et le Carnegie Hall à 644 mètres.</br>
	  Ce quartier (Hell's Kitchen) est un choix idéal pour les voyageurs qui s'intéressent à ces thèmes : les visites, le théâtre et les divertissements.</br>
	  C'est le quartier préféré des voyageurs visitant New York, selon les commentaires clients indépendants. Ce quartier est aussi idéal pour le shopping,
	  avec des magasins célèbres.
      </p>

      <p> <strong>Horaires</strong></br>
      Départ avant 12:00.</br>
      Arrivée à partir de 15:00.</br>
      </p>      
    
<div class="hr-divider"></div>

<h2>Galerie de photos</h2>
 

          <div class='caroussel_diapo1'>
<input checked id="carou_un" name="rotation" type="radio">
<label for="carou_un"></label>
<input id="carou_deux" name="rotation" type="radio">
<label for="carou_deux"></label>
<input id="carou_trois" name="rotation" type="radio">
<label for="carou_trois"></label>
<input id="carou_quatre" name="rotation" type="radio">
<label for="carou_quatre"></label>
<input id="carou_cinq" name="rotation" type="radio">
<label for="carou_cinq"></label>
<input id="carou_six" name="rotation" type="radio">
<label for="carou_six"></label>
<input id="carou_sept" name="rotation" type="radio">
<label for="carou_sept"></label>
<input id="carou_huit" name="rotation" type="radio">
<label for="carou_huit"></label>
<div class="contenu_carou1">
<div class="caroussel1">
<img src="img/NYhudson1.jpg" alt>
<img src="img/NYhudson2.jpg" alt>
<img src="img/NYhudson3.jpg" alt>
<img src="img/NYhudson4.jpg" alt>
<img src="img/NYhudson5.jpg" alt>
<img src="img/NYhudson6.jpg" alt>
<img src="img/NYhudson7.jpg" alt>
<img src="img/NYhudson8.jpg" alt>
</div>
</div>
</div>  
    

  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'Hudson';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
