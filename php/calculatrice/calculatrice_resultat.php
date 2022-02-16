<!doctype html>
<html lang="fr">

    <?php  include('../common/main.php');
    ?>
    
    <?php
        function displayResult($operation,$resultat)
        {
            echo '<div class="alert alert-success text-center" role="alert">';
            switch ($operation){
                case 'addition':
                    $resultat= $_POST['operande1'] + $_POST['operande2'];
                    break;
                case 'soustraction' :
                    $resultat=$_POST['operande1'] - $_POST['operande2'];
                    break;
                case 'multiplication' :
                    $resultat=$_POST['operande1'] * $_POST['operande2'];
                    break;
                case 'division' :
                    if( $_POST['operande2'] ==0 ) {
                        displayErrorMsg("FATAL ERROR ,DIVISION PAR 0");
                        break;
                    }
                    $resultat=$_POST['operande1'] / $_POST['operande2'];
                    break;
                case 'puissance' :
                    if( $_POST['operande2'] <0  || is_string_float($_POST['operande2']) )
                        //is_float(floatval($_POST['operande2']))
                    {
                        displayErrorMsg("Entrez une valeur valide");
                        break;
                    }
                    $resultat=puissance($_POST['operande1'],$_POST['operande2']);
                    break;
                default:
                    displayErrorMsg("Operation doesnt exist");
            }
           echo "<strong> Resultat :" . $resultat ." </strong>";

            echo'</div>';
        }
    
        function displayErrorMsg($msg)
        {
            echo '<div class="alert alert-danger" role="alert">
                        <i class="fa fa-warning"></i> '.$msg .'!
                    </div>';
        }
    
        function puissance($a, $b)
        {//Le 4.4 c'est ici !

            $resultat=1;
            for ($i=0;$i<$b;$i++){
                $resultat*=$a;
            }
         return $resultat;
        }	

    function is_string_float($a){
        $string=$a;
        $test=number_format($a,1);// convert a to float with 1 decimal ;
        if (strcmp(strval($test),$string)==0) return true ; //convert test to string then compare it to the initial string if equal string if float
        else return false;

    }
    ?>


    <head>
        <?php writeHead('Calculatrice : Résultats'); ?>
	</head>
	<body>
	    <?php writeMenu('Calculatrice : Résultats'); ?>
	    <div class="container">
            <div>
                <?php
                    //Code PHP de l'exercice 3.1 c'est ici !
          $res=0;
                 if(isset($_POST['operation']) &&isset($_POST['operande1']) && isset($_POST['operande2'])) {
                     if ($_POST['operande1'] != "" && $_POST['operande2'] != "") {
                         if (is_numeric($_POST['operande1']) && is_numeric($_POST['operande2'])) {
                             echo " Operande1: " . $_POST['operande1'] . "\n";
                             echo " <br>";
                             echo "Operation: " . $_POST['operation'] . "\n";
                             echo " <br>";
                             echo "Operande2: " . $_POST['operande2'];
                             echo "<br>";
                            /* switch ($_POST['operation']){
                                 case 'addition':
                                     $resultat= $_POST['operande1'] + $_POST['operande2'];
                                     echo "Resultat:". $resultat;
                                     break;
                                 case 'soustraction' :
                                     $resultat=$_POST['operande1'] - $_POST['operande2'];
                                     echo "Resultat :".  $resultat;
                                     break;
                                 case 'multiplication' :
                                     $resultat=$_POST['operande1'] * $_POST['operande2'];
                                     echo "Resultat :".  $resultat;
                                     break;
                                 case 'division' :
                                     if( $_POST['operande2'] ==0 ) {
                                         displayErrorMsg("FATAL ERROR ,DIVISION PAR 0");
                                         break;
                                     }
                                     $resultat=$_POST['operande1'] / $_POST['operande2'];
                                     echo "Resultat :".  $resultat;
                                     break;
                                 case 'puissance' :

                                     if( $_POST['operande2'] <0  || is_string_float($_POST['operande2']) )
                                     //is_float(floatval($_POST['operande2']))
                                         {
                                         displayErrorMsg("Entrez une valeur valide");
                                         break;
                                         }
                                     $resultat=puissance($_POST['operande1'],$_POST['operande2']);
                                     echo "Resultat :".$resultat  ;
                                     break;
                                 default:
                                     displayErrorMsg("Operation doesnt exist");
                             }*/
                             displayResult($_POST['operation'],$res);
                         } else {
                             displayErrorMsg("Entrez une valeur numerique !");
                         }
                     }
                     else displayErrorMsg("Merci de remplir tous les champs");
                 }
                ?>
            </div>

                <div class="text-center"><a class="btn btn-primary" href="calculatrice.php">Un autre calcul ?</a></div>

            
        </div>		
		<?php writeFooter(); ?>
	</body>
</html>
