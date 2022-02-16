<?php  session_start();
?>
<html lang="fr">
<?php  include('../common/main.php'); ?>
<head>
    <?php writeHead('Mystery'); ?>
</head>
<body>
<?php
if(isset($_SESSION["Nbmystery"])){
    $_SESSION["Nbmystery"]=$_SESSION["Nbmystery"];

}
else{
    $_SESSION["Nbmystery"]=rand(1,100);
}
if(!isset($_SESSION["Nbtest"])){
    $_SESSION["Nbtest"]=1;
    $GLOBALS["BOOL"]=1;// pour afficher input de proposition si user reussit on affiche pas input proposition
}
else{
    $_SESSION["Nbtest"]++;
}
?>


<?php writeMenu('Panier rempli'); ?>
<div class="container">

    <div class="alert alert-warning text-center" role="alert">
        <?php
        if(isset($_POST["proposition"]) ) {
            if ($_POST["proposition"] != "" && is_numeric($_POST["proposition"])) {
                //echo " Ceci est votre essai numéro <strong>$Nbtest</strong> pour deviner le nombre mystère compris entre 1 et 100.";
                if (isset($_SESSION["Nbmystery"])) {
                    if (intval($_SESSION["Nbmystery"]) < intval($_POST["proposition"])) {
                        echo "Le nombre mystere est plus petit que " . $_POST["proposition"] . " ! Ceci est votre essai numéro <strong>".  $_SESSION["Nbtest"] ."</strong> pour deviner le nombre mystère compris entre 1 et 100.";
                        $GLOBALS["BOOL"]=1; }
                    else if (intval($_SESSION["Nbmystery"]) > intval($_POST["proposition"])){
                        echo "Le nombre mystere est plus grand que " . $_POST["proposition"] . " ! Ceci est votre essai numéro <strong> ". $_SESSION["Nbtest"] ."</strong> pour deviner le nombre mystère compris entre 1 et 100.";
                        $GLOBALS["BOOL"]=1;
                    }
                    else{ $GLOBALS["BOOL"]=0;
                        ?>
                        <div class="row">
                            <div class=" col−md−6 col−md−offset−3">
                                <div class="panel panel−success ">
                                    <div class="panel−heading text−center ">
                                        <h3 class="panel−title">VICTOIRE ! </h3>
                                    </div>
                                    <div class="panel−body text−center ">
                                        <p class="text−justify">Le nombre mystère est bien <strong><?php echo $_SESSION["Nbmystery"];?></strong> !
                                            Vous avez mis <strong><?php echo $_SESSION["Nbtest"]; ?></strong> essais pour le trouver !
                                            Vous avez gagné le droit de faire la danse de la victoire ! </p>
                                        <img src="images/carltonDance.gif" alt ="Danse de la victoire" class="img−thumbnail">
                                    </div>
                                    <div class="panel−footer text−center ">
                                        <a href="mystery.php"><button type="button" class="btn btn−default">
                                                <i class="fa fa−cog fa−spin fa−fw margin−bottom"></i> Rejouez ! </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        session_destroy();
                    }
                    //$Nbtest++;
                     }
            }
            else echo "Entrez une valeur numerique";
        }

        ?>
    </div>
    <?php if(isset($GLOBALS["BOOL"]) && $GLOBALS["BOOL"]==1){?>
    <form class="form-inline text-center" method="post" action="mystery.php">
        <div class="form-group">
            <label for="propositionId">Votre proposition</label>
            <input type="text" value="" id="propositionId" name="proposition">
            <input type="hidden" name="Nbtest" value="<?php echo $_SESSION["Nbtest"];?>">
            <input type="hidden" name="Nbmystery" value="<?php  echo $_SESSION["Nbmystery"];?>">
        </div>
        <button type="submit" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Vérifier</button>
    </form>
    <?php }?>
</div>
<?php writeFooter(); ?>
</body>
</html>