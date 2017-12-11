<?php //var_dump($news); ?>

<main class="main">

<?php if(!empty($messErreur)): ?>
<h2><?= $messErreur ?></h2>
<?php else : ?>

	<?php if(empty($chp)): ?>
	<h2>Numéro de chapitre incorrect</h2>
	
	<?php else : ?>
		<h2>Voulez-vous supprimer le <?= $chp['titre'] ?> ? </h2>
			<div>
				<h3><?= $chp['titre'] ?></h3>
				<h4>Dans la partie <?= $chp['partie'] ?></h4>
				<br/>
				<img src="../parties/img/<?= $chp['image'] ?>" style="float:left; " />
				<div style="float:right; width:60%;"><?= $chp['html'] ?></div>
			</div>
	<div class="clear"></div>
	<br/>
		<div class="formStyle">
			<form method="post">
				<input type="submit" name="suppr" value="Oui" />
				<input type="button" name="annuler" onclick="window.location.replace('partie.php?id=<?= $chp["partie"] ?>')" value="Annuler" />
			</form>
		</div>
	<?php endif ?>
<?php endif ?>
</main>
