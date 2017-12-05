<?php 
include('initAdmin.php');
include('views/headerAdmin.php'); 
?>

<?php
// var_dump($_GET);

if(isset($_GET['id']) && is_numeric($_GET['id'])){
	$chp = getChp($_GET['id']);
	// var_dump($chp);
	$chpId = getChp('id');
	$chpPartie = getChp('partie');
	$chpTitre = getChp('titre');
	$chpImage = getChp('image');
	$chpHtml = getChp('html');
	$chpCss = getChp('css');  
}
else{
	echo "<br/> Oups ! Pas de chapitre.";
}


if(isset($_POST['suppr'])){
		
		$query_delete = 'DELETE FROM chapitre WHERE id="'.$_GET['id'].'";';
		echo "==> query_delete = " . $query_delete . "<br/>";
		$resultat_delete = $db->exec($query_delete);
		
		if ($resultat_delete > 0) {
				echo "Nombre de lignes suppirmées : " . $resultat_delete . "<br/>";
				header("location: partie.php?id=". $chpPartie['partie']);
			}	
		
} 
?>

<?php include('views/deleteAdminTemplate.php'); ?> 