<?php
include "config/connexion.php";

//requete d'affichage des données de la table clients
$requeteClient = 'SELECT * FROM client ORDER BY id_client ASC';
$reqclient = mysqli_query($connect, $requeteClient) or die ('Erreur SQL !'.$requeteClient.'<br/>'.mysql_error());

include "views/liste_view.php";
?>