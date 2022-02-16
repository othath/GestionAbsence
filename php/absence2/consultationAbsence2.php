<?php
    include('../common/main.php');
    include('bdd/bdd.php');
    
    

?>


<html lang="fr">
    <head>
        <?php writeHead('Consultation des absences (MySQL Version)'); ?>
    </head>

<body>
<?php writeMenu('Consultation des absences'); ?>
      <div class="container">

    <form action="consultationAbsence2.php" method="post">
        <input type="hidden" name="suppression" value="true"/>
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th><th>#</th><th>Étudiant</th><th>Module</th><th>Enseignant</th><th>Jour</th><th>Mois</th><th>Année</th><th>Créneau</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="9"><button type="submit" class="btn btn-primary">Supprimer les absences sélectionnées</button></td>
            </tr>
        </tfoot>
        <tbody>

    <tr>
        <td><input type="checkbox" name="del_1"></td>
        <td>1</td>
        <td>Joe l'embrouille</td>
        <td>M</td>
        <td>Albert Einstein</td>
        <td>31</td>
        <td>Février</td>
        <td>1924</td>
        <td>8h30-10h20</td>
    </tr>

        </tbody>
    </table> 

        </form>
        <div class="text-center">
            <a href="absence2.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retour à la page précédente</button></a>
        </div>

    </div>
<?php writeFooter(); closeBDD($db); ?>
</body>

</html>
