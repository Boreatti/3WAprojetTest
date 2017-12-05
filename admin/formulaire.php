<?php 
include('initAdmin.php'); 

//Verification de l'id de la partie chargée 
$erreur='';
 // on vérifie si on a bien une clef 'id' en GET
		if(isset($_GET['id'])){
		    // on vérifie s'assure que l'id ne va pas au dela de 6
		    if(is_numeric($_GET['id'])){
		        // on tente de charger les elements du chapitre
				$chp = getChp($_GET['id']);
				$chpId = getChp('id');
				$chpPartie = getChp('partie');
				$chpTitre = getChp('titre');
				$chpImage = getChp('image');
				$chpHtml = getChp('html');
				$chpCss = getChp('css');        
		    }
		    else{
		        $erreur = 'Oups ! Ce chapitre n existe pas : chapitre ' . $_GET['id'];
		    }
		}else{
		    $erreur = 'Aucun chapitre séléctionné :(';
		}

$allParties = getAllParties();

include('views/formulaireTemplate.php'); 
