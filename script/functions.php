<?php 
/*******  PARTIES  ********/
    //recupere la liste des parties
    function getAllParties(){
        global $db;

        $allParties = array();
        
        $query = 'SELECT * FROM partie ORDER BY `id` ASC';
        $resultat = $db->query($query);
        $allParties = $resultat->fetchAll(); 

        return $allParties;
        
    }
        //recupere les différents elements qui composent une partie : numero, titre, description, image et musique
        //par ID de partie 
    function getPartie($select){
        global $db;

        $partie = array();
        
        $query = 'SELECT '.$select.' FROM partie WHERE id='.$db->quote($_GET['id']);
        $resultat = $db->query($query);
        $partie = $resultat->fetch(); 

        return $partie;
    }




/*******  CHAPITRES ********/

    //recupere la liste des chapitres
    function getAllChp(){
    	global $db;

    	$allChp = array();
    	
        $query = 'SELECT * FROM chapitre ORDER BY `id` DESC';
        $resultat = $db->query($query);
        $allChp = $resultat->fetchAll(); 

        return $allChp;
    	
    }

        //recupere la liste des chapitres par partie 
    function getChpPartie($partie){
        global $db;

        $chpPartie = array();
        
        $query = 'SELECT * FROM chapitre WHERE partie='.$partie.' ORDER BY `id` ASC';
        $resultat = $db->query($query);
        $chpPartie = $resultat->fetchAll(); 

        return $chpPartie;

    }


        //recupere les différents elements qui composent un chapitre : titre, image, html et css
        //par ID de chapitre 
    function getChp($select){
        global $db;

        $chp = array();
        
        $query = 'SELECT '.$select.' FROM chapitre WHERE id='.$db->quote($_GET['id']);
        $resultat = $db->query($query);
        $chp = $resultat->fetch(); 

        return $chp;
    }

