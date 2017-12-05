<?php
include('../script/init.php');
include('views/headerAdmin.php'); 
$_SESSION['connected'] = false;
session_destroy();
// var_dump($_SESSION);
?>
<main class="main">
	<p>Vous avez été deconneté gnééééé</p>

	<a href="../index.php">Retour au site</a>
</main>

<?php include('views/footerAdmin.php'); ?>