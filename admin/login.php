<?php
include('../script/init.php');

// var_dump($_POST);
if (isset($_POST['password'])) {
	if (password_verify($_POST['password'], $config['adminpassword'])) {
		$_SESSION['connected'] = true;
	}
	else{
		$erreur = 'Le mot de passe est FAUX !';
		echo $erreur;
	}
}
if (isset($_SESSION['connected']) && $_SESSION['connected']) {
	header('Location: index.php');
	die();
}
var_dump($_SESSION);
include('views/loginTemplate.php');