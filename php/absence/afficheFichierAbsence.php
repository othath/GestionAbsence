<html lang="fr">
<?php  include('../common/main.php');

 ?>
    <head>
        <?php writeHead('Fichier brut des absences'); ?>
    </head>

<body>
<?php writeMenu('Fichier brut des absences'); ?>
      <div class="container">
          <?php
          $file=fopen("absence.txt","r") or die("erreur");
          while ( !feof($file) ){
             //if (fgets($file)!="\n") {
                 echo "<pre>" . fgets($file) . "<br>" . "</pre>";
             //}
          }
          fclose($file);
          ?>


        <div class="text-center">
            <a href="absence.php"><button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retour à la page précédente</button></a>
        </div>


    </div>
<?php writeFooter(); ?>
</body>

</html>
