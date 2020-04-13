<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHALLENGE</title>
    <link rel="stylesheet" href="dist/css/mystyle.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body>
<img src="VAKA MARCEL.png" alt="VAKA" class="img-responsive monlogo" width="130" height="100">
    <div class="container fond">
			<div class="main">
				<h5 class="titre">ENREGISTREMENT D'UN NOUVEAU CLIENT</h5>
				<div class="main-center">
				
					<form class="" method="post" action="">
						<div class="form-group">
							<label for="name">NOM ET PRENOMS</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user " aria-hidden="true"></span></span>
									<input type="text" class="form-control" name="nom" id="name"  placeholder="Entrer nom et prénoms" required/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">COMPAGNIE</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-home " aria-hidden="true"></span></span>
                                    <select name="compagnie" id="" class="form-control" required>
                                        <option selected disabled>Choisir compagnie de transport</option>
                                        <?php while ($doncomphnie=mysqli_fetch_array($mareq)) {?>
                                            <option value="<?php echo ($doncomphnie['id']); ?>"><?php echo ($doncomphnie['nom']); ?></option>
                                        <?php } ?>
                                    </select>
							</div>
						</div>

						<div class="form-group">
							<label for="username">VILLE DE DEPART</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-road " aria-hidden="true"></span></span>
									<select name="ville_depart" id="" class="form-control" required>
                                        <option selected disabled>Choisir la ville de départ</option>
                                        <?php while ($donville=mysqli_fetch_array($mareqville)) {?>
                                            <option value="<?php echo ($donville['id_ville']); ?>"><?php echo ($donville['ville']); ?></option>
                                        <?php } ?>
                                    </select>
								</div>
						</div>

						<div class="form-group">
							<label for="password">VILLE D'ARRIVEE</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-road " aria-hidden="true"></span></span>
                                    <select name="ville_arrivee" id="" class="form-control" required>
                                        <option selected disabled>Choisir la ville d'arrivée</option>
                                        <?php while ($donvillea=mysqli_fetch_array($mareqvillea)) {?>
                                            <option value="<?php echo ($donvillea['id_ville']); ?>"><?php echo ($donvillea['ville']); ?></option>
                                        <?php } ?>
                                    </select>
								</div>
						</div>
                            <?php if (! empty($messageer)) { ?>
                            <div class="alert alert-danger">
                                <strong><?php echo $messageer; ?></strong> 
                            </div> 
                            <?php } ?>
						<div class="form-group">
							<label for="confirm">DATE DE VOYAGE</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar " aria-hidden="true"></span></span>
									<input type="date" class="form-control" name="datevoyage"  required/>
								</div>
						</div>

                        <div class="form-group">
							<label for="confirm">HEURE DE VOYAGE</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-time " aria-hidden="true"></span></span>
									<input type="time" class="form-control" name="heurevoyage" required/>
								</div>
						</div>
                        <input type="submit" value="VALIDER L'ENREGISTREMENT" class="btn btn-success btn-large" name="enregistrer">
						
                    </form>
                   
    
				</div><!--main-center"-->
				<CEnter>
				<a href="index.php">ACCUEIL</a> - 
				<a href="liste.php">LISTE DES CLIENTS</a>
        	</CEnter>
			</div><!--main-->
			
        </div><!--container-->
</body>
</html>