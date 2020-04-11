<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="file:///C:/wamp64/www/voyage/Boostrap/font/css/all.css">

    <title>LISTE</title>
  </head>
  <body>
    <div class="panel panel-default">
    <div class="panel-heading"style="background-color: #0f2f5b; color:#fff">
        <h3 class="panel-title">LISTE DES CLIENTS</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
            <tr>
                <th>N° D'ORDRE</th>
                <th>NOM ET PRENOMS</th>
                <th>COMPAGNIE DE TRANS</th>
                <th>VILLE DEPART</th>
                <th>VILLE ARRIVEE</th>
                <th>DATE / HEURE DEPART</th>
            </tr>
        <?php while ($vclient=mysqli_fetch_array($reqclient)) { ?>
            <tr>
                <td><?php echo($vclient['id_client']); ?></td>
                <td><?php echo($vclient['nom_prenoms']); ?></td>
                <td><?php echo($vclient['compagnie']); ?></td>
                <td><?php echo($vclient['ville_depart']); ?></td>
                <td><?php echo($vclient['ville_arrivee']); ?></td>
                <td><?php echo($vclient['date_v']." / ". $vclient['heure_v']); ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </div>
    <Center>
    <a href="index.php">ACCUEIL</a> - 
    <a href="registration.php">NOUVEL ENREGISTREMENT</a>
    </Center>
</body>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/script.js"></script>
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js""></script>
  </body>
</html>
