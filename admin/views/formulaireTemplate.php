<?php 
include('views/headerAdmin.php');
include('envoiImage.php');
include('creationModification.php');
?>

<main class="main">

<?php if(!empty($messErreur)): ?>
<h2><?= $messErreur ?></h2>
<?php else : ?>

<?php if(empty($chp)): ?>
<h2>Creation</h2>
<?php else : ?>





<h2>Chapitre Acutel</h2>
<div>
	<h3><?= $chpTitre['titre'] ?></h3>
	<h4>Dans la partie <?= $chpPartie['partie'] ?></h4>
	<br/>
	<img  src="../parties/img/<?= $chpImage['image'] ?>" />
	<p><?= $chpHtml['html'] ?></p>
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
<p>Image actuelle : <?= $chpImage['image'] ?></p>
<br/>
<img class="imageActuelle" src="../parties/img/<?= $chpImage['image'] ?>" />
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
			<option value="<?= $partie['numero'] ?>" <?php if (!empty($chp) && ($chpPartie['partie'] == $partie['numero'])){echo "selected='selected'";} ?>><?= $partie['numero'] ?> - <?= $partie['titre'] ?></option>
			<?php endforeach ?>
		</select>
		<br/>

		<label for="field_titre"><br/>Titre : </label>
		<input id="field_titre" type='text' name='titre' size='30' maxlength="255" value="<?= (empty($chp)) ? '' : $chpTitre['titre'] ?>"/>
		<br/>

		<label for="field_texte">HTML : </label>
		<textarea id="field_texte" type='text' name='html' size='225' maxlength="255" value=""/><?= (empty($chpHtml['html'])) ? '' : $chpHtml['html'] ?></textarea>
		<br/>

		<label for="field_texte">CSS : </label>
		<textarea id="field_texte" type='text' name='css' size='225' maxlength="255" value=""/><?= (empty($chpCss['css'])) ? '' : $chpCss['css'] ?></textarea>
		<br/>


		<input type="hidden" name='id' value="<?= (empty($chp)) ? ' ' : $chpId['id']?>"/>
		

		<?php if(empty($chp)): ?>
		<input id="field_title" type="submit" value="Ajouter"/>
		<input type="button" name="annuler" onclick="window.location.replace('index.php')" value="Annuler" />
		<?php else: ?>
		<input id="field_title" type="submit" value="Modifier"/>
		<input type="button" name="annuler" onclick="window.location.replace('partie.php?id=<?= $chpPartie["partie"] ?>')" value="Annuler" />
		<?php endif ?>
	</form>
</div>

</form>
<?php endif ?>


<br/>
<a class="retourListe" href="index.php">Retour index</a>


</main>


<?php include('footerAdmin.php'); ?>
