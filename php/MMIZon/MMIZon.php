<!doctype html>
<html lang="fr">
    <?php  include('../common/main.php'); ?>
    <?php  include('data.php'); ?>
    
    <?php
    function displayArticle($article)
	{
        echo "\t\t\t".'<tr>'."\n";
		echo "\t\t\t\t".'<td class="" rowspan="3" style="width:250px">'."\n";
		echo "\t\t\t\t\t".'<img src="images/mindeye.png" alt="MindEye" class="img-thumbnail"/>'."\n";
		echo "\t\t\t\t".'</td>'."\n";
		echo "\t\t\t\t".'<td class="text-center">'."\n";
		echo "\t\t\t\t\t".'<h2>MindEye</h2>'."\n";
		echo "\t\t\t\t".'</td>'."\n";
		echo "\t\t\t\t".'<td class="text-center" style="width:250px">'."\n";
		echo "\t\t\t\t\t"."<div class=\"alert alert-success top-marged\" role=\"alert\"><strong>999&euro;</strong></div>\n";
		echo "\t\t\t\t".'</td>'."\n";	
		echo "\t\t\t".'</tr>'."\n";
		echo "\t\t\t".'<tr>'."\n";
		echo "\t\t\t\t".'<td class="" rowspan="2">'."\n";
		echo "\t\t\t\t\t"."<p class=\"text-justify\">Le mind eye un implant cérébral, visible ou non, qui permet de télécharger de nouveaux savoirs de manière temporaire ou définitive. L'implant se pose en toute sécurité et en moins de 20 minutes dans des \"boutiques\" spécialisées Mind Store. Les savoirs sont disponibles en ligne sur le mind store ou en boutique physique.</p>\n";
		echo "\t\t\t\t".'</td>'."\n";
		echo "\t\t\t\t".'<td class="text-center">'."\n";
		echo "\t\t\t\t\t".'<p>Stock : 3</p>'."\n";
		echo "\t\t\t\t".'</td>'."\n";	
		echo "\t\t\t".'</tr>'."\n";
		echo "\t\t\t".'<tr>'.'<p>Note : 5/5</p>'."\n";
		echo "\t\t\t\t".'<td class="text-center">'."\n";
		echo "\t\t\t\t\t\n";
		echo "\t\t\t\t".'</td>'."\n";	
		echo "\t\t\t".'</tr>'."\n";
	}    
    ?>

    <head>
        <?php writeHead('MMIZon'); ?>
        <link href="MMIZon.css" rel="stylesheet">
	</head>

	<body>
	    <?php writeMenu('MMIZon'); ?>
	    <div class="container">
                <form class="form-inline text-center" method="post">
                    <div class="form-group">
                        <label for="categorieId">Catégorie</label>					
                        <select name="categorie" id="categorieId" class="form-control">
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="triId">Tri</label>	
                        <select name="tri" id="triId" class="form-control">
                            
                        </select>
                    </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Afficher</button>
                </form>
        </div>
        <div class="container top-marged">
                <table class="table">
                    <?php
                        //Exercice 1.1 ici
                        displayArticle(-1);
                    ?>
                </table>

		</div>
		<?php writeFooter(); ?>
	</body>

</html>