<?php //var_dump($news); ?>

<main class="main">

	<h2>Voulez-vous supprimer le <?= $chpTitre['titre'] ?> ? </h2>


		<div>
			<h3><?= $chpTitre['titre'] ?></h3>
			<h4>Dans la partie <?= $chpPartie['partie'] ?></h4>
			<br/>
			<img src="../parties/img/<?= $chpImage['image'] ?>" style="float:left; " />
			<div style="float:right; width:60%;"><?= $chpHtml['html'] ?></div>
		</div>
<div class="clear"></div>
<br/>
	<div class="formStyle">
		<form method="post">
			<input type="submit" name="suppr" value="Oui" />
			<input type="button" name="annuler" onclick="window.location.replace('partie.php?id=<?= $chpPartie["partie"] ?>')" value="Annuler" />
		</form>
	</div>

</main>
