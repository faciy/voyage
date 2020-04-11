<?php

// On met en variable les informations de connexion
$hote = 'localhost'; // Adresse au serveur
$log = 'root'; // Login
$pass = ''; // Mot de passe
$base = 'challenge2_db'; // Base de donées à utiliser

// On se connecte à la base de données
$connect = mysqli_connect($hote, $log, $pass);

// On selectionne la ase de données souhaitée
mysqli_select_db($connect, $base);
if(mysqli_connect_errno())
{
echo "Failed to connect to MySQL : " .mysqli_connect_error();
}

?>
