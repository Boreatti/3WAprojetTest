<?php 
include('views/headerAdmin.php');
include('envoiImage.php');
include('creationModification.php');
?>

<main class="main">

<?php if($erreur) : ?>
 	<h2><?= $erreur ?> </h2>
 
<?php else : ?>
	<?php if(empty($chp)): ?>
	<h2>Creation</h2>
	
	<?php else : ?>
	<h2>Chapitre Acutel</h2>
	<div>
		<h3><?= $chp['titre'] ?></h3>
		<h4>Dans la partie <?= $chp['partie'] ?></h4>
		<br/>
		<img  src="../parties/img/<?= $chp['image'] ?>" />
		<p><?= $chp['html'] ?></p>
	</div>
	<br/>
	<h2>Modification</h2>
	<?php endif ?>


	<a class="retourListe" href="index.php">Retour liste</a>
	<?php if(empty($chp)): ?>  


	<form method="post" enctype="multipart/form-data" action=''>
		<label for="field_titre">Ajouter une image : </label>
	    <input type="file" name="image"/> 
	    <br/>



	<?php else : ?>
	<p>Image actuelle : <?= $chp['image'] ?></p>
	<br/>
	<img class="imageActuelle" src="../parties/img/<?= $chp['image'] ?>" />
	<br/>
	<form method="post" enctype="multipart/form-data" action=''>
		<label for="field_titre">Charger une nouvelle image </label>
	    <input type="file" name="image"/> 
	    <br/>

	<?php endif ?>

	<div class="formStyle">
		<form method="post">

			<label for="field_titre"><br/>Partie : </label>
			<select name='partie'><?php foreach($allParties as $key => $partie):?> 
				<option value="<?= $partie['numero'] ?>" <?php if (!empty($chp) && ($chp['partie'] == $partie['numero'])){echo "selected='selected'";} ?>><?= $partie['numero'] ?> - <?= $partie['titre'] ?></option>
				<?php endforeach ?>
			</select>
			<br/>

			<label for="field_titre"><br/>Titre : </label>
			<input id="field_titre" type='text' name='titre' size='30' maxlength="255" value="<?= (empty($chp)) ? '' : $chp['titre'] ?>"/>
			<br/>

			<label for="field_texte">HTML : </label>
			<textarea id="field_texte" type='text' name='html' size='225' maxlength="255" value=""/><?= (empty($chp['html'])) ? '' : $chp['html'] ?></textarea>
			<br/>

			<label for="field_texte">CSS : </label>
			<textarea id="field_texte" type='text' name='css' size='225' maxlength="255" value=""/><?= (empty($chp['css'])) ? '' : $chp['css'] ?></textarea>
			<br/>


			<input type="hidden" name='id' value="<?= (empty($chp)) ? ' ' : $chp['id']?>"/>
			

			<?php if(empty($chp)): ?>
			<input id="field_title" type="submit" value="Ajouter"/>
			<input type="button" name="annuler" value="Annuler" />
			<?php else: ?>
			<input id="field_title" type="submit" value="Modifier"/>
			<!-- <input type="button" name="annuler" value="Annuler" /> -->
			<input type="button" name="annuler" onclick="window.location.replace('partie.php?id=<?= $chp['partie'] ?>')" value="Annuler" />
			<?php endif ?>
		</form>
	</div>

	</form>
<?php endif ?>


<br/>
<a class="retourListe" href="index.php">Retour index</a>


</main>


<?php include('footerAdmin.php'); ?>
