<?php 
//chargement du modele
include('../script/init.php');

$listeChp = getAllChp();  


if(isset($_GET['id']) && is_numeric($_GET['id'])){
	$chp = getChp('*');

}
else{
	echo "<br/> Pas de chapitre...";
}




include('chapitre.phtml');


