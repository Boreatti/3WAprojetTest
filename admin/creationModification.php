<?php



$messErreur = '';
//est ce que j'ai des données
if(!empty($_POST)){

	//récupérer les données
	// echo 'je traite le form ';
	// echo "print_r post : ";
	// print_r($_POST);

	//je valide le form

	//s'il est valide
	$erreur = validerForm($_POST);


	if(is_null($erreur)){


		if(isset($_POST['id']) && is_numeric($_POST['id'])){
			// echo "on est en mise à jour"; exit;
			//rectification du dossier source des img

			//test qui verifie si on a bien un nom d'image. pour qu'il marche, il faut aussi le mettre lors de l'écriture de l'image sur le serveur
			//si le nom de l'image est different d'une chaine vide alors il inserera li'mage uploadée
			if($_FILES['image']['name'] != ''){
				$imageOK = $_FILES['image']['name'];
				$query = 'UPDATE `chapitre` 
						  SET `partie` = '.$db->quote($_POST["partie"]).', 
						  	  `titre` = '.$db->quote($_POST["titre"]).', 
							  `html` = '.$db->quote($_POST["html"]). ', 
							  `css` = '.$db->quote($_POST["css"]).', 
							  `image` = '.$db->quote($imageOK).',  
							  `date` = NOW()';

				$query .= 'WHERE `chapitre`.`id` = '.$db->quote($_POST["id"]).';';
				// echo $query;
			}
			//sinon il fera la meme chose mais sans l'image
			else{
				$query = 'UPDATE `chapitre` 
						  SET `partie` = '.$db->quote($_POST["partie"]).', 
						      `titre` = '.$db->quote($_POST["titre"]).', 
							  `html` = '.$db->quote($_POST["html"]). ', 
							  `css` = '.$db->quote($_POST["css"]).',   
							  `date` = NOW()';

				$query .= 'WHERE `chapitre`.`id` = '.$db->quote($_POST["id"]).';';
				// echo $query;
			}

		}

		else{
			// echo "on est en création"; exit;
			//rectification du dossier source des img
			$imageOK = $_FILES['image']['name'];
			//j'insère en base			
			$query = 'INSERT INTO `chapitre` (`partie`, `titre`, `html`, `css`, `image`, `date`)';
			$query .= 'VALUES ('.$db->quote($_POST["partie"]).','.$db->quote($_POST["titre"]).','.$db->quote($_POST["html"]).','.$db->quote($_POST["css"]).','.$db->quote($imageOK).',NOW());';
		}

		var_dump($db);
		var_dump($query);
		$resultat_insert = $db->exec($query);
		// echo $resultat_insert . "<br/>Resultat : ";
		var_dump($resultat_insert);
		
		if($resultat_insert == 1){
			header("location: partie.php?id=".$db->quote($_POST["partie"]));
		}
		else{
			if(isset($_POST['id']) && is_numeric($_POST['id'])){
				$messErreur = "erreur de mise à jour<br/>";
			}
			else{
				$messErreur = "insertion erreur<br/>";	
			}
		}

	}
	else{
		$messErreur = 'Il y a une erreur: '.$messErreur;
	}




}


/*
* vérifie si le form est valide
* @param array $mesDonneesDeFormulaire 
* @return null si il n y  pas d erreur, sinon on retourne le message d'erreur
*/
function validerForm($mesDonneesDeFormulaire){
	if ($mesDonneesDeFormulaire['titre'] == '') {
		return "Erreur. Veuillez remplir les champs.";
	}
	else{
		return null;
	}
}
