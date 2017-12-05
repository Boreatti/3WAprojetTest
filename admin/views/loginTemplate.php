<?php include('views/headerAdmin.php'); ?>
<main class="main">
	<h2>Autentification</h2>


	<form method="post">
		<div class="form-group">
			<label for="idPassword">Mot de passe : </label>
			<input type="password" id="idPassword" name="password"/>
		</div>
		<div class="form-group">
			<input type="submit" value="Connexion" class="password"/>
		</div>
	</form>

	<div>
	<?php if(isset($erreur)) : ?>
		<p><?php $erreur ?></p>
	<?php endif; ?>
	</div>

</main>


<?php include('footerAdmin.php'); ?> 