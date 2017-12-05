<?php include('script/init.php'); 
//Recuperer la liste des chapitres
$listeChp = getAllChp(); 
//Recuperer la liste des partie
$allParties = getAllParties();
?>
<!DOCTYPE HTML />  
<html>
<head>
	<meta charset="utf-8" />
	<title>Plan du site</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="scritp/jquery-2.1.4.min.js"></script>

</head>

<body>

	<h1>Plan du site</h1>
	<h2>♥ Visuel à venir ♥</h2>

 <nav class="navChapitres">
 		<li><a href="index.php">Revoir la scène d'introduction</a></li>
		<li><a href="menuPrincipal.php">Vue principale : menu de séléction des différentes parties</a></li>
		<ul>
		<?php foreach($allParties as $key => $partie):?> 
			<li>
				<a href="parties/partie.php?id=<?= $partie['numero']; ?>">Partie <?= $partie['numero']; ?> : <?= $partie['titre']; ?></h2>
				<ul>
					<?php foreach(getChpPartie($partie['numero']) as $key => $chapitre):?> 
					<li><a href="chapitres/chapitre.php?id=<?= $chapitre['id'] ?>"><?= $chapitre['titre'] ?></li>
					<?php endforeach ?>
				</ul>

			</li>
		<?php endforeach ?>
		</ul>
	</nav>

	<a href="menuPrincipal.php">Retour au menu principal</a>
</body>

</html>