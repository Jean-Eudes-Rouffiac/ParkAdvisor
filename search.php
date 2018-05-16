<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8">


   		 <title>Park Advisor</title>

    <!-- width:device-width permet de mettre la page aux dimensions de l'appareil l'ouvrant
    intial-scale:1.0 donne le zoom a l'ouverture de la page-->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--Autheurs -->
   		<meta name="author" content="Becuwe-Raison-Rouffiac-Vasanthan">

    <!--Fichier css associé -->
        <link href="css/style.css" rel="stylesheet">

    <!--Font-->
    <style>
    body {font-family: "Playfair Display", Georgia, Serif; text-align: justify}
    h1,h2,h3,h4,h5,h6 {font-family: "Playfair Display"; letter-spacing: 5px; text-align: center}
    </style>
    </head>


  	<body>


		<!--HEADER-->
		<?php include("header.php"); ?>
		<!-- /HEADER ROW -->




		<!-- la page ==============================================-->


    <div class="page">
          <div class="titre">
            <h1>Bienvenue sur le site Park Advisor</h1>
            <h5>Partez à la découverte des plus grands parcs d'attractions du monde...</h5>
              <div class="page">
                <form id="recherche" action="search.php" method="GET">
									<div>
										<input name="query" type="text" placeholder="Effectuer une recherche ..." required >
										<input class="loupe" type="submit" value="">
							 		</div>

							  </form>
              </div>
          </div>

<h4>Résultats de votre recherche</h4>
<?php
$query = $_GET['query'];

error_reporting(E_ALL);

			try
			{
				/* creation de la BD */
				$db = new PDO("sqlite:./BD/database_techno_web.db");
				/* errors -> exceptions */
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			$request1 = "SELECT * FROM  City
                    WHERE (((`City_Name` LIKE '%".$query."%') OR (`City_Description` LIKE '%".$query."%')))";
				$result = $db->query($request1);
?>

<?php
				foreach($result as $row)
				{
					$link=$row['City_Link'];
					echo '<a href="'.$link .'">'.$row['City_Name'].'</a>' ;
					echo "<br>";
					echo $row['City_Description']."<br>";
					echo "<br>";
					echo "<br>";
				}

			$request2 = "SELECT * FROM  Park
                    WHERE (((`Park_Name` LIKE '%".$query."%') OR (`Park_Description` LIKE '%".$query."%')))";
				$result = $db->query($request2);
?>

<?php
				foreach($result as $row)
				{
					$link=$row['Park_Link'];
					echo '<a href="'.$link .'">'.$row['Park_Name'].'</a>';
					echo "<br>";
					echo $row['Park_Description']."<br>";
					echo "<br>";
					echo "<br>";
				}

			$request3 = "SELECT * FROM  Hotel
                    WHERE (((`Hotel_Name` LIKE '%".$query."%') OR (`Hotel_Description` LIKE '%".$query."%')))";
				$result = $db->query($request3);
				unset($db);
?>

<?php
				foreach($result as $row)
				{
					$link=$row['Hotel_Link'];
					echo '<a href="'.$link .'">'.$row['Hotel_Name'].'</a>';
					echo "<br>";
					echo $row['Hotel_Description']."<br>";
					echo "<br>";
					echo "<br>";
				}
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}

?>

<div class="hr-divider"></div>

<div class="page">
  <div class="titre">
  </div>
</div>


      		 <!--dernières nouveautés-->

      <h2>Les nouveautés</h2>
      <ul class="onglets">
        <li class="cadre3">
          <div class="onglet">
            <a href="disneyland.php "> <img class="imageOnglet" src="img/disneyland.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>Disneyland Paris</strong>
              <p>
                description rapide du parc
              </p>
            </div>
          </div>
        </li>
        <li class="cadre3">
          <div class="onglet">
            <a href="disneyland.php "> <img class="imageOnglet" src="img/parcasterix.png" alt="onglet"/> </a>
            <div class="legende">
              <strong>Parc Astérix</strong>
              <p>
                description rapide du parc
              </p>
            </div>
          </div>
        </li>

        <li class="cadre3">
          <div class="onglet">
            <a href="disneyland.php "> <img class="imageOnglet" src="img/merdesable.jpg" alt="onglet"/> </a>
            <div class="legende">
              <strong>La mer de Sable</strong>
              <p>
                description rapide du parc
              </p>
            </div>
          </div>
        </li>
      </ul>

    <div class="hr-divider"></div>

  </div>



		<!--Footer ==========================-->

		<?php include("footer.php"); ?>

		<!--/.Footer-->

  	</body>
</html>
