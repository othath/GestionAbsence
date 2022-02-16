<html lang="fr">
<?php   include('../common/main.php'); 
        include('data.php');
if(!isset($_GET['nom'])  && !isset($_GET['module']) )
{
    header("location:absence.php");
}
?>
    <head>
        <?php writeHead('Consultation des absences'); ?>
    </head>

<body>
      <div class="container">
          <?php

          if(isset($_GET['nom'])){
          $arg=$_GET['nom'];
          $colone=0;
          }
          if(isset($_GET['module'])){
              $arg=$_GET['module'];
              $colone=2;
          }
       switch ($colone) {
           case 0:
               writeMenu("Consultation des absences de l'etudiant" . $arg);
           case 2:
               writeMenu('Consultation des absences dans le module ' . $arg);
       }
          if(file_exists('absence.txt')) {?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th><th>Prénom</th><th>Module</th><th>Enseignant</th><th>Jour</th><th>Mois</th><th>Année</th><th>Créneau</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $lines = file("absence.txt");
        foreach ($lines as $line){
             echo "<tr>";
                 $line = explode("|",$line);
                 foreach ($line as $element) {
                 echo "<td>";
                 if(isset($enseignants)) {
                     foreach ($enseignants as $initial => $nomComplet) {
                         if ($element == $initial) $element = $nomComplet;
                     }
                 }
                     if(isset($mois)) {
                         foreach ($mois as $num => $nom) {
                             if ($element == $num) $element = $nom;
                         }
                     }
                     if(isset($creneau)) {
                         foreach ($creneau as $id => $horaire) {
                             if ($element == $id) $element = $horaire;
                         }
                     }
                     if ($arg==$line[$colone]){
                  echo $element;
                 echo "</td>";}
                 }
             echo "</tr>";
                  } ?>
        </tbody>
    </table>
          <?php }
          else {?>
          <div class="alert alert-danger text-center" role="alert">
              Aucune absence enregistree pour le moment
          </div>
<?php } ?>

        <div class="text-center">
            <a href="absence.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retour à la page précédente</button></a>
        </div>

    </div>
<?php writeFooter(); ?>
</body>

</html>
