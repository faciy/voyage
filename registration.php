<?php

// appel du fichier de connexion
include "config/connexion.php";

// requete pour afficher les données de la table compagnie dans la selection compagnie du formulaire
$reqeteCompagnie = 'SELECT * FROM compagnies ORDER BY id ASC';
$mareq = mysqli_query($connect, $reqeteCompagnie) or die ('Erreur SQL !' .$reqeteCompagnie.'<br>' .mysql_error());

// requete pour afficher les données de la table ville dans la selection ville de depart du formulaire
$requeteVille = 'SELECT * FROM ville ORDER BY id ASC';
$mareqville = mysqli_query($connect, $requeteVille) or die ('Erreur SQL !' .$requeteVille.'<br>' .mysql_error());

//  requete pour afficher les données de la table ville dans la selection ville d'arrivée du formulaire
$requeteVillea = 'SELECT * FROM ville ORDER BY id ASC';
$mareqvillea = mysqli_query($connect, $requeteVillea) or die ('Erreur SQL !' .$requeteVillea.'<br>' .mysql_error());

// enregistrement des donées saisies dans le formulaire

if(isset($_POST['enregistrer'])){
    // recuperation des données saisies dans le formulaire
    $nom = $_POST['nom'];
    $compagnie = $_POST['compagnie'];
    $villed = $_POST['ville_depart'];
    $villea = $_POST['ville_arrivee'];
    $datev = $_POST['datevoyage'];
    $heurev = $_POST['heurevoyage'];

    if($_POST['ville_depart'] == $_POST['ville_arrivee']){
        $messageer = "La ville de depart étant pareille à celle d'arrivée, votre enregistrement ne peut pas être validé !";

    }
    else{
        // requete d'insertion des données
        $requeteInsert = "INSERT INTO client (nom_prenoms, compagnie, ville_depart, ville_arrivee, date_v, heure_v)
        VALUES ('$nom', '$compagnie', '$villed', '$villea', '$datev', '$heurev')";
        mysqli_query($connect, $requeteInsert) or die ('Erreur SQL !'.$requeteInsert.'<br/>'.mysql_error());
        
        // Message de confirmation
        echo '<div class="alert alert-success">';
        echo  '<strong> Enregistrement effectué avec succès !</strong> ';
        echo '</div> ';
   
        header('location: liste.php');
    }
}

include "views/registration_view.php";

?>