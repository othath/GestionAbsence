<!doctype html>
<html lang="fr">
    <?php  include('../common/main.php'); ?>

    <head>
       <?php writeHead('Panier rempli'); ?>
	</head>

	<body>
	    <?php writeMenu('Panier rempli'); ?>
	    <div class="container">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th class="text-center">Article</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Prix Unitaire</th>
                        <th class="text-center">Somme</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Poster Star Wars Episode I</td>
                        <td>2</td>
                        <td>41 &euro;</td>
                        <td>82 &euro;</td>
                    </tr>
                    <tr class="success">
                        <td class="text-left" colspan="3">Sous-total</td>
                        <td>200 &euro;</td>
                    </tr>
                    <tr class="info">
                        <td class="text-left" colspan="3">Frais de port</td>
                        <td>9.45 &euro;</td>
                    </tr>
                    <tr class="success">
                        <td class="text-left" colspan="3">Total</td>
                        <td><strong>209.45 &euro;</strong></td>
                    </tr>
                    <tr  class="warning">
                        <td class="text-left" colspan="3">dont TVA</td>
                        <td>41.89 &euro;</td>
                    </tr>
                </tbody>
		    </table>
        </div>
		<?php writeFooter(); ?>
	</body>

</html>