<?php include('headerAdmin.php'); ?>
<main>	
<?php if(isset($_SESSION['connected']) && $_SESSION['connected']!= ''): ?>


	 <nav class="navChapitres">
		<ul>
		<?php foreach($allParties as $key => $partie):?> 
			<li><h2>◈ Partie <?= $partie['numero']; ?> : <?= $partie['titre']; ?></h2> <h3><?php echo sizeof(getChpPartie($partie['numero'])); ?> chapitres en ligne</h3></li>
			<br/><h3><a href="partie.php?id=<?= $partie['numero']; ?>">Gérer</a></h3><br/>
		<?php endforeach ?>
		</ul>
	</nav>

<?php else: ?>
Veuillez vous connecter :)
<?php endif ?>
	</main>
<?php include('footerAdmin.php'); ?>