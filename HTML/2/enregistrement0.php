<?php
 /* r�cup�ration des informations  pass�es dans l'URL dans les variables $nom,$pre,$com,$sex */
 $nom=$_GET['nom'];
 $pre=$_GET['pre'];
 $com=$_GET['com'];
 $an=$_GET['annee'];
 $mois=$_GET['mois'];
 $jour=$_GET['jour'];
 if ( !isset($_GET['sex']))   $sex='M';  ELSE  $sex= $_GET['sex'];/* on force cette variable si elle n'a pas �t� renseign�e */
 
/* connexion � la base de donn�es*/	
  $host = "localhost";
  $user = "root";
  $pass = "";
  $bdd = "sti2d";
  $link= mysqli_connect($host,$user,$pass) or die("Impossible de se connecter "); 
  mysqli_select_db($link,"$bdd") or die("Base de donnee inacessible ");

/* envoi d'une requ�te pour mettre � jour la bdd*/
 $query = "INSERT INTO user(nom,prenom,sexe,commentaire,an,mois,jour) VALUES('$nom','$pre','$sex','$com','$an','$mois','$jour')"; 
 mysqli_query($link, "$query");
?>

 <HTML>
	<HEAD>
		<TITLE>enregistrement</TITLE>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	</HEAD>
	<BODY> 
		 <a href= "index.html">Retour Index</a><br> <!--lien pour retourner � la page formulaire-->
	</BODY>
</HTML>

