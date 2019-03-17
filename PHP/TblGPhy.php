<!---------------------------------------------------- 
Fichier:  TblGPhy.php 
Description : Transmission de données (simulation)
Les valeurs contenues dans le fichier /data/data.txt
sont placées dans les variables $Temp, $Lum et $Hum 
puis affichées dans les cases d'un tableau.
------------------------------------------------------>

<!doctype html>
<html lang="fr">
<head>
  	<meta charset="utf-8">
	<title> Affichage de grandeurs physiques </title>
	<link rel="stylesheet" href="styles/style.css">
  </head>

<body>
<?php // Ouverture du fichier contenant les données
	$FValeur = fopen("data/data.txt","r"); 
?>
  <div>
	<p> Grandeurs physiques </p>
	<table border='1'>
		<tr>
			<td>Température =  </td>
			<td>
			<?php
				   $Temp = fgets($FValeur,10); // Lecture première valeur
				   echo "$Temp"; 
			?>	   
			</td>
			<td>°C</td>
			<td rowspan='2'>
			<?php
				   $Lum = fgets($FValeur,10); //Lecture deuxième valeur
				   if ($Lum == 1) echo "<img src=\"img/SoleilWeb.gif\"/>";
							 else echo "<img src=\"img/LuneWeb.gif\"/>"; 
			?>							 
			</td>
		</tr>
		<tr>
			<td>Humidité =</td>
			<td> <?php 
					$Hum = fgets($FValeur,10); // Lecture troisième valeur
					echo "$Hum"; 
				?>
			</td>
			<td> % </td>
		</tr>
	</table>
 </div> 
 <?php // Fermeture du fichier contenant les donnèes
	fclose($FValeur); 
?> 

</body>

</html>