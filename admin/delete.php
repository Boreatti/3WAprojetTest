<?php 
include('initAdmin.php');
include('views/headerAdmin.php'); 
?>

<?php
// var_dump($_GET);
$messErreur = "";

if(isset($_GET['id']) && is_numeric($_GET['id'])){
	$chp = getChp('*');

	if(isset($_POST['suppr'])){
		
			$query_delete = 'DELETE FROM `chapitre`
							 WHERE `id` ='.$db->quote($_GET["id"]).';';
			$resultat_delete = $db->exec($query_delete);
			
			if ($resultat_delete > 0) {
					echo "Nombre de lignes suppirmées : " . $resultat_delete . "<br/>";
					header("location: partie.php?id=". $chp['partie']);
				}		
	} 
}

else{
	$messErreur = "<br/> Oups ! Pas de chapitre.";
}



?>

<?php include('views/deleteAdminTemplate.php'); ?> 