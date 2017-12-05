<?php 
//chargement du modele
include('../script/init.php');

$listeChp = getAllChp();  


if(isset($_GET['id']) && is_numeric($_GET['id'])){
	$chpId = getChp('*');
	$chpTitre = getChp('titre');
	$chpImage = getChp('image');
	$chpHtml = getChp('html');
	$chpCss = getChp('css');

}
else{
	echo "<br/> Pas de chapitre...";
}




include('chapitre.phtml');


