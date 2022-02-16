<html lang="fr">
<?php   include('../common/main.php');
        include('bdd/bdd.php');
?>
    <head>
        <?php writeHead('Gestion des absences (MySQL Version)'); ?>
    </head>

  <body>
      <?php writeMenu('Gestion des absences (MySQL Version)'); ?>
      <div class="container">

<?php

    function moduleOptions()
    {
        
    }
          
    function enseignantOptions()
    {
        
    }
          
    function creneauOptions()
    {
        
    }
          
    function moisOptions()
    {
        
    }
          
    function etudiantOptions()
    {
        
    }

   

?>


        <div class="alert alert-info text-center" role="alert">
            <strong>Saisir une nouvelle absence</strong>
        </div>
        <form class="form-horizontal" action="absence2.php" method="post">
            <div class="form-group">
                <label for="etudiantId" class="col-sm-2 control-label">Étudiant</label>
                <div class="col-sm-10">
                    <select name="etudiant" id="etudiantID" class="form-control">

<?php etudiantOptions(); ?>
                    </select>
                </div>  
            </div>
            
            <div class="form-group">
                <label for="moduleID" class="col-sm-2 control-label">Module</label>
                <div class="col-sm-10">
                   <select name="module" id="moduleID" class="form-control">

<?php moduleOptions(); ?>
                    </select>
                </div>  
            </div>
              
            <div class="form-group">
                <label for="enseignantID" class="col-sm-2 control-label">Enseignant</label>
                <div class="col-sm-10">
                   <select name="enseignant" id="enseignantID" class="form-control">

<?php enseignantOptions(); ?>
                    </select>
                </div>  
            </div>
            
            <div class="form-group">
                <label for="jourID" class="col-sm-2 control-label">Date</label>
                <div class="col-sm-2">
                   <select name="jour" id="jourID" class="form-control">

                <?php
                   for($i=1; $i<=31; $i++){
                      echo '<option value="'.$i.'">'.$i.'</option>';
                   }
               ?>
                    </select>
                </div>
                <div class="col-sm-4">
                   <select name="mois" id="moisID" class="form-control">

                <?php moisoptions(); ?>
                    </select>
                </div>
                <div class="col-sm-4">
                   <select name="annee" id="anneeID" class="form-control">

                <?php

                  for($i=2015; $i<=2016; $i++){
                      echo '<option value="'.$i.'">'.$i.'</option>';
                  }
                ?>
                    </select>
                </div>
                
            </div>
            <div class="form-group">
                <label for="creneauID" class="col-sm-2 control-label">Créneau</label>
                <div class="col-sm-10">
                   <select name="creneau" id="creneauID" class="form-control">
                        <?php creneauOptions(); ?>
                    </select>
                </div>  
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2">
                    <button type="submit" class="btn btn-primary">Ajouter une absence</button>
                </div>
            </div>
        </form>


          
        <div class="alert alert-info text-center" role="alert">
            <strong>Consulter les absences</strong>
        </div>
        
        <div class="row">
            <div class="col-sm-offset-5 col-sm-2">
                <a href="consultationAbsence2.php"><button type="button" class="btn btn-primary">Consulter toutes les absences</button></a>
            </div>
        </div>

   <hr/>
   
    <form class="form-horizontal" action="consultationAbsence2.php" method="post">        
        <div class="form-group">
                <label for="etudiantId" class="col-sm-2 control-label">Étudiant</label>
                <div class="col-sm-10">
                    <select name="etudiant" id="etudiantID" class="form-control">

<?php etudiantOptions(); ?>
                    </select>
                </div>  
            </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-2">
                <button type="submit" class="btn btn-primary">Consulter les absences de cet étudiant</button>
            </div>
        </div>
    </form>
          
  <hr/>

    <form class="form-horizontal" action="consultationAbsence2.php" method="post">        
                    <div class="form-group">
                <label for="moduleID" class="col-sm-2 control-label">Module</label>
                <div class="col-sm-10">
                   <select name="module" id="moduleID" class="form-control">

<?php moduleOptions(); ?>
                    </select>
                </div>  
            </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-2">
                <button type="submit" class="btn btn-primary">Consulter les absences dans ce module</button>
            </div>
        </div>
    </form>

    <hr/>

    <form class="form-horizontal" action="consultationAbsence2.php" method="post">        
      <div class="form-group">
                <label for="enseignantID" class="col-sm-2 control-label">Enseignant</label>
                <div class="col-sm-10">
                   <select name="enseignant" id="enseignantID" class="form-control">

<?php enseignantOptions(); ?>
                    </select>
                </div>  
            </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-2">
                <button type="submit" class="btn btn-primary">Consulter les absences chez cet enseignant</button>
            </div>
        </div>
    </form>
          
      
    </div>
    <?php writeFooter(); closeBDD($db); ?>
  </body>

</html>
