<html lang="fr">
<?php   include('../common/main.php'); 
        include('data.php');
?>
    <head>
        <?php writeHead('Gestion des absences'); ?>
    </head>
<?php
     if (isset($_GET["nom"]) && isset($_GET["prenom"]) && $_GET["nom"] !="" && $_GET["prenom"]!="")
     {
      ?>
     <div class="alert alert-success text-center" role="alert">
         Absence enregistree:  nom: <strong><?php echo $_GET["nom"]; ?></strong>  prenom: <strong><?php echo $_GET["prenom"]; ?></strong></strong>
          </div>
<?php
         $file = fopen("absence.txt", "a");
         $data = $_GET["nom"] . "|" . $_GET["prenom"] . "|" . $_GET["module"] . "|" . $_GET["enseignant"] . "|" . $_GET["jour"] . "|" . $_GET["mois"] . "|" . $_GET["annee"] . "|" . $_GET["creneau"]."|"."\n";
         fwrite($file, $data);
         fclose($file);
     }
     elseif(isset($_GET["submit"])){
         ?>
         <div class="alert alert-danger text-center" role="alert">
             Absence non enregistree: nom ou prenom manquant
         </div>
    <?php }
     ?>

  <body>
      <?php writeMenu('Gestion des absences'); ?>
      <div class="container">
        <div class="alert alert-info text-center" role="alert">
            <strong>Saisir une nouvelle absence</strong>
        </div>
        <form class="form-horizontal" action="absence.php" method="get">
            <div class="form-group">
                <label for="nomEtu" class="col-sm-2 control-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomEtu" name="nom">
                </div>
            </div>
            
            <div class="form-group">
                <label for="prenomEtu" class="col-sm-2 control-label">Prénom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prenomEtu" name="prenom">
                </div>  
            </div>
            
            <div class="form-group">
                <label for="moduleID" class="col-sm-2 control-label">Module</label>
                <div class="col-sm-10">
                   <select name="module" id="moduleID" class="form-control">
                       <?php
                       if(isset($modules)) {
                           foreach ($modules as $module)
                               echo "<option value=" . $module . ">" . $module . "</option>";
                       } ?>
                    </select>
                </div>  
            </div>
              
            <div class="form-group">
                <label for="enseignantID" class="col-sm-2 control-label">Enseignant</label>
                <div class="col-sm-10">
                   <select name="enseignant" id="enseignantID" class="form-control">
                       <?php
                       if(isset($enseignants)){
                           foreach ($enseignants as $initial => $nomComplet)
                               echo "<option value=". $initial .">". $nomComplet ."</option>";

                       }
                       ?>
                    </select>
                </div>  
            </div>
            
            <div class="form-group">
                <label for="jourID" class="col-sm-2 control-label">Date</label>
                <div class="col-sm-2">
                   <select name="jour" id="jourID" class="form-control">
                       <?php
                       for ($i=1;$i<32;$i++){
                        echo "<option value=$i>$i </option>";
                      }?>
                    </select>
                </div>
                <div class="col-sm-4">
                   <select name="mois" id="moisID" class="form-control">
                       <?php
                       if(isset($mois)) {
                           for ($i = 1; $i < 13; $i++) {
                               echo "<option value=." .$i . ">" . $mois[$i] . " </option>";
                           }
                       }?>
                    </select>
                </div>
                <div class="col-sm-4">
                   <select name="annee" id="anneeID" class="form-control">
                      <?php for ($i = 2015; $i < 2021; $i++) {
                       echo "<option value=." . $i . ">" . $i . " </option>";
                       }
                       ?>
                    </select>
                </div>
                
            </div>
            <div class="form-group">
                <label for="creneauID" class="col-sm-2 control-label">Enseignant</label>
                <div class="col-sm-10">
                   <select name="creneau" id="creneauID" class="form-control">
                        <option value="M1">8h30-10h20</option>
                        <option value="M2">10h40-12h30</option>
                        <option value="AM1">14h00-15h50</option>
                        <option value="AM2">16h10-18h00</option>
                    </select>
                </div>  
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2">
                    <button type="submit" name="submit" class="btn btn-primary">Ajouter une absence</button>
                </div>
            </div>
        </form>


          
        <div class="alert alert-info text-center" role="alert">
            <strong>Consulter les absences d'un(e) étudiant(e)</strong>
        </div>

    <form class="form-horizontal" action="consultationAbsence.php" method="get">        
        <div class="form-group">
            <label for="nomEtuID" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nomEtuID" name="nom">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-2">
                <button type="submit" class="btn btn-primary">Consulter les absences</button>
            </div>
        </div>
    </form>
          
        <div class="alert alert-info text-center" role="alert">
            <strong>Consulter les absences dans un module</strong>
        </div>

    <form class="form-horizontal" action="consultationAbsence.php" method="get">        
        <div class="form-group">
                <label for="moduleID" class="col-sm-2 control-label">Module</label>
                <div class="col-sm-10">
                   <select name="module" id="moduleID" class="form-control">
                       <?php
                       if(isset($modules)) {
                           foreach ($modules as $module)
                               echo "<option value=" . $module . ">" . $module . "</option>";
                       } ?>
                    </select>
                </div>  
            </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-2">
                <button type="submit" class="btn btn-primary">Consulter les absences</button>
            </div>
        </div>
    </form>
          
    

        <div class="alert alert-info text-center" role="alert">
            <strong>Fichier source</strong>
        </div>  
          
        <div class="text-center">
            <a href="afficheFichierAbsence.php"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i> Affichez le fichier source</button></a>

        </div>
          
    </div>
    <?php writeFooter(); ?>
  </body>

</html>
