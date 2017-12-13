<?php 
include('initAdmin.php'); 

//Verification de l'id de la partie chargée 
$erreur='';
 // on vérifie si on a bien une clef 'id' en GET
		if(isset($_GET['id']) && is_numeric($_GET['id'])){
			$arrayChp = getAllIdChp();
			$id = $_GET['id'];
			$chpId = getChp($_GET['id']);

			foreach ($arrayChp as $key => $values) {
				// var_dump($values);
			    // on verifie si le GET correspond à une clé dans le tableau des chapitres
			    if($values['id'] == $id){
			        // on tente de charger les elements du chapitre
					$chp = getChp('*');   
					break; 
			    }
			}

			if(empty($chpId)){
			        $erreur = "Oups ! Ce chapitre n'existe pas : chapitre " . $_GET['id'];
			    }
		}
		else{
		    $erreur = 'Aucun chapitre séléctionné :(';
		}

$allParties = getAllParties();


// if(isset($_GET['id']) && is_numeric($_GET['id'])){
// 	$chp = getChp('*');

// }


include('views/formulaireTemplate.php'); 

