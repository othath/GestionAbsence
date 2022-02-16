<!doctype html>
<html lang="fr">
    <?php  include('../common/main.php'); ?>
    <?php 
		function numeric_options($start,$stop)
		{
			// Code PHP du 1.1 à mettre ici !
		}
        // Le 1.2 modifie les 7 lignes ci-dessous sinon tout est gratuit ...
		$prixEpI = 0;
		$prixEpII = 0;
		$prixEpIII = 0;
		$prixEpIV = 0;
		$prixEpV = 0;
		$prixEpVI = 0;
        $prixEpVII = 0;
	?>
    <head>
       <?php writeHead('Panier'); ?>
	</head>

	<body>
	    <?php writeMenu('Panier'); ?>
	        <div class="container">
	           <div class="jumbotron jumbotron-fluid">
                    <h1 class="display-3">King of Posters</h1>
                    <p class="lead">Le roi du poster, sa majesté des prix bas.</p>
              </div>
            </div>	
	    
	    <div class="container">		
            <form action="panier_rempli.php" method="post">

                <table class="table table-striped vertical-align">
                    <tr>
                        <td><img src="images/Episode_I.jpg" alt="Poster Star Wars Episode I"/></td>
                        <td><strong>Prix unitaire : <?php echo $prixEpI ?> &euro;</strong></td>
                        <td>
                            <fieldset class="form-group">
                                <label for="epI">Quantité :</label>
                                <select class="form-control" name="nb_episode_I" id="epI">
                                    <?php numeric_options(0,5); ?>
                                </select>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/Episode_II.jpg" alt="Poster Star Wars Episode II"/></td>
                        <td><strong>Prix unitaire : <?php echo $prixEpII ?> &euro;</strong></td>
                        <td>
                            <fieldset class="form-group">
                                <label for="epII">Quantité :</label>
                                <select class="form-control" name="nb_episode_II" id="epII">
                                    <?php numeric_options(0,5); ?>
                                </select>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/Episode_III.jpg" alt="Poster Star Wars Episode III"/></td>
                        <td><strong>Prix unitaire : <?php echo $prixEpIII ?> &euro;</strong></td>
                        <td>
                            <fieldset class="form-group">
                                <label for="epIII">Quantité :</label>
                                <select class="form-control" name="nb_episode_III" id="epIII">
                                    <?php numeric_options(0,5); ?>
                                </select>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/Episode_IV.jpg" alt="Poster Star Wars Episode IV"/></td>
                         <td><strong>Prix unitaire : <?php echo $prixEpIV ?> &euro;</strong></td>
                        <td>
                            <fieldset class="form-group">
                                <label for="epIV">Quantité :</label>
                                <select class="form-control" name="nb_episode_IV" id="epIV">
                                    <?php numeric_options(0,5); ?>
                                </select>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/Episode_V.jpg" alt="Poster Star Wars Episode V"/></td>
                         <td><strong>Prix unitaire : <?php echo $prixEpV ?> &euro;</strong></td>
                        <td>
                            <fieldset class="form-group">
                                <label for="epV">Quantité :</label>
                                <select class="form-control" name="nb_episode_V" id="epV">
                                    <?php numeric_options(0,5); ?>
                                </select>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/Episode_VI.jpg" alt="Poster Star Wars Episode VI"/></td>
                         <td><strong>Prix unitaire : <?php echo $prixEpVI ?> &euro;</strong></td>
                        <td>
                            <fieldset class="form-group">
                                <label for="epVI">Quantité :</label>
                                <select class="form-control" name="nb_episode_VI" id="epVI">
                                    <?php numeric_options(0,5); ?>
                                </select>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/Episode_VII.jpg" alt="Poster Star Wars Episode VII"/></td>
                         <td><strong>Prix unitaire : <?php echo $prixEpVII ?> &euro;</strong></td>
                        <td>
                            <fieldset class="form-group">
                                <label for="epVII">Quantité :</label>
                                <select class="form-control" name="nb_episode_VII" id="epVII">
                                    <?php numeric_options(0,5); ?>
                                </select>
                            </fieldset>
                        </td>
                    </tr>
                </table>
                <div class="m-b-3 pull-right">
                   <button type="submit" class="btn btn-primary">Passer commande</button>
                </div>
            </form>
        </div>
		<?php writeFooter(); ?>
	</body>

</html>