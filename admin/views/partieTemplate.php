<?php include('headerAdmin.php'); ?>
<main>	
	<h2>Partie <?= $part['numero'] ?> - <?= $part['titre'] ?> </h2>

	<h3><a href="formulaire.php">Nouveau chapitre</a> </h3>

	<table class="tableauAdmin">
		<thead>
			<th><!-- <?php echo sort_link('Titre', 'titre') ?> -->Titre</th>
			<th>Image</th>
			<th><!-- <?php echo sort_link('Date de publication', 'date') ?> -->Date de publication</th>
			<th>Action</th>
		</thead>

		<?php foreach($listeChpPartie as $key => $chapitre):?> 
		<tbody>

			<td><a href="../chapitres/chapitre.php?id=<?= $chapitre['id'] ?>"><?= $chapitre['titre'] ?></td>
			<td><img src="../parties/img/<?= $chapitre['image'] ?>"></td>
			<td><?= $chapitre['date'] ?></a></td>

			<td>
				<a href="formulaire.php?id=<?= $chapitre['id'] ?>">Modifier</a>
				<a href="delete.php?id=<?= $chapitre['id'] ?>">Supprimer</a>
			</td>
		</tbody>
		<?php endforeach ?> 
	</table>


<br/><a class="retourListe" href="index.php">Retour index</a>
</main>
<?php include('footerAdmin.php'); ?>