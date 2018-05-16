

<?php session_start();

if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     // treat the succes case ex:
     echo "Success";
}
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND !($_SESSION['admin']=="oui")){

  echo '<form class="contact" method="POST" action="BD/contact-ajout.php">
    <input type="text" placeholder="Pseudo"/>
    <textarea name="contact" placeholder="Votre message"></textarea><br /> <br/>
    <input type="hidden" name="page" value='.$page.' /> <br/>
    <input type="submit" value="Envoyer mon message" name="submit_contact" />
    </form>';

}else if ($_SESSION['admin']=="oui")
{
	echo '<h2>Messages des utilisateurs :</h2>';
	}

else
{
  echo 'Vous devez vous inscrire pour nous contacter';
}
?>



<?php
error_reporting(E_ALL ^ E_NOTICE);  

try
{
  /* creation de la BD */
  $db = new PDO("sqlite:./BD/contact.sqlite");
  /* errors -> exceptions */
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /* requete de selection */


  $requete = $db->prepare("SELECT * FROM contact WHERE page=:page ORDER BY id DESC");

  $requete->execute(array("page"=>$page,));
  unset($db);
  while($row = $requete->fetch())
  {
	  session_start();
      if ($_SESSION['admin']=="oui"){
		  echo '<div class="pseudo"> <p>'.$row['pseudo']. '</div> <div class="commentaire">' .$row['texte']. '</p> </div>';
		  }

  }
}
catch(Exception $e)
{
  echo $e->getMessage();
}
?>
