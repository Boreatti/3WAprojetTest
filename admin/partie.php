<?php
include('initAdmin.php'); 


//Verification de l'id de la partie chargée 
$erreur='';
 // on vérifie si on a bien une clef 'id' en GET
		if(isset($_GET['id']) && is_numeric($_GET['id'])){
		    // on vérifie s'assure que l'id ne va pas au dela de 6
		    if(($_GET['id']) < 6){
		        // on tente de charger les elements de partie
				$part = getPartie('*');
				$listeChpPartie = getChpPartie($_GET['id']); 
		        
		    }
		    else{
		        $erreur = "Oups ! Cette partie n'existe pas : partie " . $_GET['id'];
		    }
		}else{
		    $erreur = 'Aucune partie séléctionnée :(';
		}



include('views/partieTemplate.php'); 