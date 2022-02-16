<!doctype html>
<html lang="fr">
    <?php  include('../common/main.php'); ?>

    <head>
       <?php writeHead('Calculatrice'); ?>
	</head>

	<body>
	    <?php writeMenu('Calculatrice'); ?>
	    <div class="container">
            <form class="form-inline" action="calculatrice_resultat.php" method="GET">
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label class="sr-only" for="op1">Opérande 1</label>
                        <input input type="text" name="operande1" id="op1" class="form-control" placeholder="Entrez un nombre">
                    </div>
                    <fieldset class="form-group col-xs-2">
                        <label class="sr-only" for="operationSelect">Opération</label>
                        <select class="form-control" name="operation" id="operationSelect">
                            <option value="addition">+</option>
                            <option value="soustraction">-</option>
                            <option value="multiplication">x</option>
                            <option value="division">/</option>
                            <option value="puissance">^</option>
                        </select>
                    </fieldset>                  
                    <div class="form-group col-xs-4">
                        <label class="sr-only" for="op2">Opérande 2</label>
                        <input input type="text" name="operande2" id="op2" class="form-control" placeholder="Entrez un nombre">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="submit" value="Calculer !" class="btn btn-success"/>
                    </div>
                </div>
            </form>
		</div>
		<?php writeFooter(); ?>
	</body>

</html>