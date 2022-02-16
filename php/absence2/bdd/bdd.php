<?php

    // Connexion au serveur mysql
    $db = mysql_connect('localhost', 'XXXXXXX', 'YYYYYYYY');
    if (!$db) { die('Connexion impossible : ' . mysql_error());}

    // Sélection de la base de données
    $selectDB=mysql_select_db('XXXXX_2',$db); 
    if (!$selectDB) { die('Sélection de la base de données impossible : ' . mysql_error());}
    
    function getTableContent ($nomTable)
    {
        // Création de la requête
        $sql = 'SELECT * FROM '.$nomTable;
        
        // Éxécution de la requête
        $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
        
        // Parcours du résultat de la requête et mise de chaque ligne obtenue dans un tableau que l'on renvoie
        $tableContent = array();
        while($data = mysql_fetch_array($req))  
        {
               $tableContent[]=$data;
        }
        return $tableContent;
    }

    function ajouterAbsence($etudiant,$module,$enseignant,$jour,$mois,$annee,$creneau)
    {
        
    }

    function executerSelect($sql)
    {
        
        
        return $req;
    }

    function supprimerAbsence($id)
    {
        
    }



    function closeBDD ($db)
    {   
        // Clôture de la connexion à la base de données
        mysql_close($db);
    }

?>