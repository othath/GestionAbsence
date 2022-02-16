<?php
	ini_set('display_errors', '1');
	error_reporting ( E_ALL ) ;
?>

<?php
function writeHead($title)
{
?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="M2202 : PHP et algorithmie">
        <meta name="keywords" content="Exercices, PHP" />
        <meta name="author" content="Jonathan Weber">
        <link rel="icon" href="../../media/favicon.png">

        <!-- Bootstrap core CSS -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Include Awesome Fonts -->
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        
        <!-- Customized CSS -->
        <link rel="stylesheet" href="../../css/standard.css">
        
        <title><?php echo $title ?></title>
<?php
}
?>

<?php
    function writeMenu($nom)
    {
?>
     <nav class="navbar navbar-dark navbar-fixed-top navbar-tuned" id="navbar">
           <div class="container">
                
                <div class="navbar-brand"><i class="fa fa-desktop"></i> M2202 : <?php echo $nom ?></div>

                <div class="navbar-text pull-right">
                    <a href="../../"><i class="fa fa-arrow-left"></i> <b>Retourner au menu</b></a>
                </div>
          </div>
    </nav>
    <?php } ?>
    
<?php
function writeFooter()
{
?>
    <nav class="navbar navbar-dark bg-inverse navbar-fixed-bottom navbar-tuned">
	   <div class="container">
           <div class="navbar-text pull-right">
                <a href="http://validator.w3.org/check?uri=referer"><i class="fa fa-code fa-2x"></i><i class="fa fa-check fa-2x"></i></a>
		  </div>
	   </div>
    </nav>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/jquery-2.2.3.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
<?php
}
?>

