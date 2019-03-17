 <HTML>
	<HEAD>
		<TITLE>lecture</TITLE>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		
	</HEAD>
	<BODY> 		
		<?php
		/* connexion à la base de données*/
		/* connexion à la base de données*/	
		$host = "localhost";
		$user = "root";
		$pass = "";
		$bdd = "sti2d";
		$link= mysqli_connect($host,$user,$pass) or die("Impossible de se connecter "); 
		mysqli_select_db($link,"$bdd") or die("Base de donnee inacessible ");	
		
		/* envoi d'une requête pour lire la bdd*/
		$query = "SELECT * FROM `user` ORDER BY `time` ASC "; 	//requête
		$reponse = mysqli_query($link, "$query");				//résultat de la requête dans la variable $reponse
		$nb = mysqli_num_rows($reponse);
		echo " Nombre de personnes : $nb<br>";		//nombre de lignes du résultat
		if ($reponse)
		{
			if($nb != 0)
			{
				echo "<pre>";	
				echo "<b>Time \t\t\t Nom \t\t Prenom \t Sexe \t Date Naissance Id </b>\n";
				while($enreg=mysqli_fetch_row($reponse))
				{
					echo "$enreg[8] \t $enreg[1] \t $enreg[2] \t $enreg[3] \t $enreg[7] - $enreg[6] - $enreg[5]\t $enreg[0]<br>";
				}
				echo "</pre>";
			}
			else
			{
				echo " Il n'y a pas de donnee.";
			}
		}
		else
		{
			echo "Nous sommes desoles, les donnees ne peuvent pas etre affichees.";
		}
		mysqli_close($link);
		?> 
		<a href= "index.html">Retour Index</a><br> <!--lien pour retourner à la page formulaire-->
	</BODY>
</HTML>